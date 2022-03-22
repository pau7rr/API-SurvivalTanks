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
    
    <!-- Tanks List -->
    <div class="container my-5">
        <!-- Errors Return -->
        <div class="results mt-3">
            @if(Session::get('fail'))
                <div class="alert alert-danger">
                    {{ Session::get('fail') }}
                </div>
            @endif
        </div>
        
        <div class="d-flex flex-row my-3">
            <a id="createButton" class="btn btn-success" href="{{ url('/tanks/create') }}"> New Tank</a>
        </div>
        <div class="row bg-dark-6 p-3 rounded rounded-5 shadow-light-1">
            <table id="datatable" class="table text-light-color table-sm text-center">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Strengh</th>
                        <th scope="col">Health</th>
                        <th scope="col">Speed</th>
                        <th scope="col">Tower</th>
                        <th scope="col">Body</th>
                        <th scope="col">Track</th>
                        <th scope="col">Bullet</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Loop for each Tank -->
                    @foreach($tanks as $tank)
                        <tr>
                            <td class="">{{ $tank->id }}</td>
                            <td class="">{{ $tank->strengh }}</td>
                            <td class="">{{ $tank->health }}</td>
                            <td class="">{{ $tank->speed }}</td>
                            <td class=""><img src="{{ $tank->tower }}" style="max-width: 4rem;"></td>
                            <td class=""><img src="{{ $tank->body }}" style="max-width: 4rem;"></td>
                            <td class=""><img src="{{ $tank->track }}" style="max-width: 4rem;"></td>
                            <td class=""><img src="{{ $tank->bullet }}" style="max-width: 4rem;"></td>
                            <td class="flex flex-column justify-content-sm-around py-2 px-0 m-0">
                                <a id="updateBtn" href="{{ url('/tanks/' . $tank->id . '/edit') }}" class="mb-2 py-0 px-1 btn btn-default btn-block"><img src="https://img.icons8.com/windows/32/ffffff/edit--v1.png" alt="Edit Button" style="max-width: 20px;"></a>
                                <form action="{{ url('/tanks/' . $tank->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button id="deleteBtn" type="submit" class="py-0 px-1 h-25 btn btn-default btn-block"><img src="https://img.icons8.com/external-icongeek26-linear-colour-icongeek26/64/000000/external-trash-essentials-icongeek26-linear-colour-icongeek26.png" alt="Delete Button" style="max-width: 20px;"></button> 
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

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>