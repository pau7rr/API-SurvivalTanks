<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usertank Edit</title>
    <!-- Styles -->
    @livewireStyles
    @livewire('style-imports')
</head>

<body class="p-5 bg-dark-black text-light-color">
    <div class="mb-4" >
            <div class="">
                <div class="">
                    <h2>Edit Usertank</h2>
                </div>
                <div class="">
                    <a class="" href="{{ route('users.index') }}"> Back</a>
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
  
    <form class="" action="{{ url('/usertanks/' . $usertank->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="">
            <div class="mb-2">
                <div class="">
                    <strong>Id:</strong>
                    <input type="number" name="id" value="{{ $usertank->id }}" class="form-control bg-dark input-text-white" placeholder="Id">
                </div>
            </div>
            <div class="mb-2">
                <div class="">
                    <strong>Health:</strong>
                    <input type="number" name="health" value="{{ $usertank->health }}" class="form-control bg-dark input-text-white" placeholder="Health">
                </div>
            </div>
            <div class="mb-2">
                <div class="">
                    <strong>Strengh:</strong>
                    <input type="number" name="strengh" value="{{ $usertank->strengh }}" class="form-control bg-dark input-text-white" placeholder="Strengh">
                </div>
            </div>
            <div class="mb-2">
                <div class="">
                    <strong>Speed:</strong>
                    <input class="form-control bg-dark input-text-white" type="number" name="speed" value="{{ $usertank->speed }}"  placeholder="Speed">
                </div>
            </div>
            <div class="mb-2">
                <div class="">
                    <strong>Bombs:</strong>
                    <input class="form-control bg-dark input-text-white" type="number" name="bombs" value="{{ $usertank->bombs }}"  placeholder="Bombs">
                </div>
            </div>
            <div class="mb-2">
                <div class="">
                    <strong>Regeneration:</strong>
                    <input class="form-control bg-dark input-text-white" type="number" name="regeneration" value="{{ $usertank->regeneration }}"  placeholder="Regeneration">
                </div>
            </div>
            <div class="mb-2">
                <div class="">
                    <strong>Tower:</strong>
                    <input class="form-control bg-dark input-text-white" name="tower" placeholder="Tower" value="{{ $usertank->tower }}"/>
                </div>
            </div>
            </div>
            <div class="mb-2">
                <div class="">
                    <strong>Body:</strong>
                    <input class="form-control bg-dark input-text-white" name="body" placeholder="Body" value="{{ $usertank->body }}"/>
                </div>
            </div>
            </div>
            <div class="mb-2">
                <div class="">
                    <strong>Track:</strong>
                    <input class="form-control bg-dark input-text-white" name="track" placeholder="Track" value="{{ $usertank->track }}"/>
                </div>
            </div>
            </div>
            <div class="mb-2">
                <div class="">
                    <strong>Bullet:</strong>
                    <input class="form-control bg-dark input-text-white" name="bullet" placeholder="Bullet" value="{{ $usertank->bullet }}"/>
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