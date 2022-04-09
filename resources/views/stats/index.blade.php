<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>    
    
    <!-- Styles -->
    @livewireStyles
    @livewire('style-imports')
</head>
<body class="bg-dark-black text-light-color">
    @livewire('navbar')
    <!-- Errors Return -->
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{$message}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <!-- Tanks List -->
    <div class="container my-5">
        
        <!-- Create Btn 
        <div class="d-flex flex-row my-3">
            <a id="createButton" class="btn btn-success" href="{{ url('/stats/create') }}"> New Tank</a>
        </div>-->
        <!-- Table -->
        <div class="row bg-dark-6 pt-3 px-3 pb-0 rounded rounded-5 shadow-light-1">
            <table id="datatable" class="table text-light-color table-sm text-center">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Games</th>
                        <th scope="col">Users</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Loop for each Tank -->
                    @foreach($stats as $stat)
                        <tr>
                            <td class="">{{ $stat->_id }}</td>
                            <td class="">{{ $stat->games }}</td>
                            <td class="">{{ $stat->users }}</td>
                            <td class="text-center">
                                <a id="updateBtn" href="{{ url('/stats/' . $stat->id . '/edit') }}" class="btn btn-primary w-100 mb-1 py-0">Edit</a>
                                <form action="{{ url('/stats/' . $stat->id) }}" method="POST">
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
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>