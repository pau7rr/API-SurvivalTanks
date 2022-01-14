<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevLogs</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <!-- Styles -->
    @livewireStyles
    @livewire('style-imports')
    
</head>

<body>

    @livewire('navbar')

    <table id="datatable" class="table table-striped">
        <div class="d-flex flex-row-reverse">
        <a class="btn btn-success" href="{{ route('devlogs.create') }}"> Create New Devlog</a>
        </div>
        <thead class="table-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Title</th>
                <th scope="col">Version</th>
                <th scope="col">Thumbnail</th></th>
                <th scope="col">Summary</th>
                <th scope="col">Content</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($devlogs as $devlog)
            <tr>
                <td>{{ $devlog->id }}</td>
                <td>{{ $devlog->title }}</td>
                <td>{{ $devlog->version }}</td>
                <td ><img id="thumbnail" width="50px" height="50px" class="thumbnail rounded-circle" src="{{ $devlog->thumbnail_url }}"></td>
                <td>{{ $devlog->summary }}</td>
                <td>{{ $devlog->content }}</td>
                <td>
                <form action="{{ route('devlogs.destroy',$devlog->id) }}" method="POST">
    
                    <a class="btn btn-primary" href="{{ route('devlogs.edit',$devlog->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>
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