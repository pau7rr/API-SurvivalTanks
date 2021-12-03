<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevLogs</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</head>

<body>
    <table id="datatable" class="table table-striped">
        <div class="d-flex flex-row-reverse">
            <button id="createButton" class="btn btn-success" data-toggle="modal" data-target="#createModal">Create new DevLog</button>
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
                <td><img width="50px" height="50px" class="thumbnail rounded-circle" src="{{ $devlog->thumbnail_url }}"></td>
                <td>{{ $devlog->summary }}</td>
                <td>{{ $devlog->content }}</td>
                <td>
                    <a id="updateButton" href="" class="btn btn-primary" data-toggle="modal" data-target="#updateModal">Edit</a>
                    <a id="deleteButton" href="" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

       <!-- Update Modal -->
       <div id="updateModal" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Update DevLog</h4>
                    </div>

                    <!-- Modal Form -->
                    <form id="updateForm" action="" method="POST">

                        {{ csrf_field() }}
                        {{ method_field('POST') }}

                        <div class="modal-body">
                            <!-- Input Id READONLY -->
                            <div class="form-group">
                                <input readonly="readonly" name="update_id" id="update_id" class="form-control" placeholder="Insereix les dades a modificar">
                            </div>
                            <!-- Input Gols Equip Local -->
                            <div class="form-group">
                                <label>Gols Equip Local</label>
                                <input type="text" name="update_glocal" id="update_glocal" class="form-control" placeholder="Gols de l'Equip Local">
                            </div>
                            <!-- Input Gols Equip Visitant -->
                            <div class="form-group">
                                <label>Gols Equip Visitant</label>
                                <input type="text" name="update_gvisitant" id="update_gvisitant" class="form-control" placeholder="Gols de l'Equip Visitant">
                            </div>
                            <!-- Input Date -->
                            <div class="form-group">
                                <label>Data</label>
                                <input type="date" name="update_data" id="update_data" class="form-control" placeholder="Data del partit">
                            </div>
                        </div>

                        <!-- Modal Footer -->
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Acceptar</button>
                            <a type="button" class="btn btn-secondary" href="" data-dismiss="modal">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

</body>

</html>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#datatable').DataTable();
    });
</script>