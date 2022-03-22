<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevLogs</title>
    <!-- Styles -->
    @livewireStyles
    @livewire('style-imports')
</head>

<body class="p-5 bg-dark-black text-light-color">
<div class="mb-4" >
        <div class="">
            <div class="">
                <h2>Edit Devlog</h2>
            </div>
            <div class="">
                <a class="" href="{{ route('devlogs.index') }}"> Back</a>
            </div>
        </div>
</div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form class="" action="{{ route('devlogs.update', $devlog->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="">
            <div class="mb-2">
                <div class="">
                    <strong>Title:</strong>
                    <input type="text" name="title" value="{{ $devlog->title }}" class="form-control bg-dark input-text-white" placeholder="Title">
                </div>
            </div>
            <div class="mb-2">
                <div class="">
                    <strong>Slug:</strong>
                    <input type="text" name="slug" value="{{ $devlog->slug }}" class="form-control bg-dark input-text-white" placeholder="Slug">
                </div>
            </div>
            <div class="mb-2">
                <div class="">
                    <strong>Version:</strong>
                    <input class="form-control bg-dark input-text-white" type="text" name="version" value="{{ $devlog->version }}"  placeholder="Version">
                </div>
            </div>
            <div class="mb-2">
                <div class="">
                    <strong>Summary:</strong>

                    <textarea class="form-control bg-dark input-text-white" name="summary" placeholder="Summary">{{ $devlog->summary }}</textarea>
                </div>
            </div>
            <div class="mb-2">
                <div class="">
                    <strong>Content:</strong>

                    <textarea class="form-control bg-dark input-text-white" name="content" placeholder="Content">{{ $devlog->content }}</textarea>
                </div>
            </div>
            <div class="mb-2">
                <div class="">
                    <strong>Publication Date:</strong>

                    <input class="form-control bg-dark input-text-white" name="publication_date" value="{{ $devlog->publication_date }}">
                </div>
            </div>
            <div class="mb-2">
                <div class="">
                    <strong>Thumbnail:</strong>

                    <input class="form-control bg-dark input-text-white" name="thumbnail_url" value="{{ $devlog->thumbnail_url }}">
                </div>
            </div>
            <div class="mb-2">
                <div class="">
                    <strong>Image:</strong>

                    <input class="form-control bg-dark input-text-white" name="image_url" value="{{ $devlog->image_url }}">
                </div>
            </div>  
            <div class="mt-4">
              <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
   
    </form>
</body>
</html>
@livewireScripts