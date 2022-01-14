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
    
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
</head>
<body>

    @livewire('navbar')
    

    <!-- Tanks List -->
    <div class="container mb-5">
        <!-- Errors Return -->
        <div class="results mt-3">
            @if(Session::get('fail'))
                <div class="alert alert-danger">
                    {{ Session::get('fail') }}
                </div>
            @endif
        </div> 
        <div class="row bg-dark-1 shadow p-4 rounded rounded-5">
            <table id="datatable" class="table table-sm text-center bg-dark-2">
                <div class="d-flex flex-row-reverse">
                    <a id="createButton" href="{{ url('/tanks/create') }}" class="btn p-1"><img src="https://img.icons8.com/material-outlined/24/ffffff/plus--v1.png" alt="plus" style="max-width: 25px;"></a>
                </div>
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
                            <td class="bg-dark-2">{{ $tank->id }}</td>
                            <td class="bg-dark-3">{{ $tank->strengh }}</td>
                            <td class="bg-dark-4">{{ $tank->health }}</td>
                            <td class="bg-dark-5">{{ $tank->speed }}</td>
                            <td class="bg-dark-6"><img src="{{ $tank->tower }}" style="max-width: 4rem;"></td>
                            <td class="bg-dark-7"><img src="{{ $tank->body }}" style="max-width: 4rem;"></td>
                            <td class="bg-dark-8"><img src="{{ $tank->track }}" style="max-width: 4rem;"></td>
                            <td class="bg-dark-9"><img src="{{ $tank->bullet }}" style="max-width: 4rem;"></td>
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
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>

<script>
    $(document).ready(function () {
        var table = $('#datatable').DataTable();
    });
</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>