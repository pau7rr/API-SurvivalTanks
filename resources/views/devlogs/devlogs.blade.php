<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevLogs</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <table class="table table-striped">
        <thead class="table-dark">


            <th>Id</th>
            <th>Title</th>
            <th>Version</th>
            <th>Summary</th>
            <th>Content</th>
            <th>Thumbnail</th>
            <th>Actions</th>

        </thead>
        @foreach ($devlogs as $devlog)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $devlog->title }}</td>
            <td>{{ $devlog->version }}</td>
            <td>{{ $devlog->summary }}</td>
            <td>{{ $devlog->content }}</td>
            <td><img width="50px" class="thumbnail rounded-circle" src="{{ $devlog->thumbnail_url }}"></td>
            <td>
                <form class="" action="" method="POST">

                    <a class="btn btn-info" href="">Show</a>

                    <a class="btn btn-warning ml-2" href="{{ route('devlogs.edit', $devlog->id) }}">Edit</a>

                    <button type="submit" class="btn btn-danger ml-2">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>

</html>