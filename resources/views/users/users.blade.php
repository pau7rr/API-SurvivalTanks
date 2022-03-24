<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link href="{{ asset('css/users.css') }}" rel="stylesheet">

    @livewireStyles
    @livewire('style-imports')
</head>

<body class="bg-dark-black text-light-color">

    @livewire('navbar')

    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{$message}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

            

    <div class="container my-5">
        <!--<div class="d-flex flex-row-reverse my-3">
            <a class="btn btn-success" href="{{ route('users.create') }}"> New User</a>
        </div>-->
        <div class=" bg-dark-6 shadow-light-1 p-3 ">
            <table id="datatable" class="table table-striped text-light-color">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">User-Tank Id</th>
                        </th>
                        <th scope="col">Coins</th>
                        <th scope="col">Banned</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td class="text-center">{{ $user->id }}</td>
                        <td class="text-center">{{ $user->name }}</td>
                        <td class="text-center">{{ $user->email }}</td>
                        <td class="text-center">{{ $user->user_tank_id }}</td>
                        <td class="text-center">{{ $user->coins }}</td>
                        <td class="text-center">
                            @if ($user->banned == true) <img src="https://img.icons8.com/emoji/48/000000/red-circle-emoji.png" class="banned-icon">
                            @else <img src="https://img.icons8.com/emoji/48/000000/green-circle-emoji.png" class="banned-icon"/>
                            @endif
                        </td>
                        <td class="flex flex-column justify-content-sm-around py-2 px-0 m-0">
                            <a id="updateBtn" href="{{ url('/users/' . $user->id . '/edit') }}" class="btn btn-primary w-100 py-0 mb-1">Edit</a>
                            
                            <form action="{{ url('/users/' . $user->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button id="deleteBtn" type="submit" class="btn btn-danger w-100 py-0">Delete</button> 
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>

@livewireScripts

<script src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#datatable').DataTable();
    });
</script>
@livewireScripts