<div class="row">
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
  
    <form action="{{ route('devlogs.update', $devlog->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="">
            <div class="">
                <div class="">
                    <strong>Title:</strong>
                    <input type="text" name="title" value="{{ $devlog->title }}" class="" placeholder="Title">
                </div>
            </div>
            <div class="">
                <div class="">
                    <strong>Slug:</strong>
                    <input type="text" name="slug" value="{{ $devlog->slug }}" class="" placeholder="Slug">
                </div>
            </div>
            <div class="">
                <div class="">
                    <strong>Version:</strong>
                    <input type="text" name="version" value="{{ $devlog->version }}" class="" placeholder="Version">
                </div>
            </div>
            <div class="">
                <div class="">
                    <strong>Summary:</strong>

                    <textarea class="" style="height:150px" name="summary" placeholder="Summary">{{ $devlog->summary }}</textarea>
                </div>
            </div>
            <div class="">
              <button type="submit" class="">Submit</button>
            </div>
        </div>
   
    </form>