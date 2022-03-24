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
                <h2>Edit User</h2>
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
  
    <form class="" action="{{ url('/users/' . $user->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="">
            <div class="mb-2">
                <div class="">
                    <strong>Username:</strong>
                    <input type="text" name="name" value="{{ $user->name }}" class="form-control bg-dark input-text-white" placeholder="Username">
                </div>
            </div>
            <div class="mb-2">
                <div class="">
                    <strong>Email:</strong>
                    <input type="text" name="email" value="{{ $user->email }}" class="form-control bg-dark input-text-white" placeholder="Email">
                </div>
            </div>
            <div class="mb-2">
                <div class="">
                    <strong>User-Tank Id:</strong>
                    <input class="form-control bg-dark input-text-white" type="text" name="user_tank_id" value="{{ $user->user_tank_id }}"  placeholder="User-Tank Id">
                </div>
            </div>
            <div class="mb-2">
                <div class="">
                    <strong>Coins:</strong>

                    <input class="form-control bg-dark input-text-white" name="coins" placeholder="Coins" value="{{ $user->coins }}"/>
                </div>
            </div>
            <div class="mb-2">
                <div class="">
                    <strong>Banned:</strong>
                    @if ($user->banned == true) <input class="form-control bg-dark input-text-white" type="checkbox" name="banned" checked>
                    @else <input class="form-control bg-dark input-text-white" type="checkbox" name="banned">
                    @endif
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