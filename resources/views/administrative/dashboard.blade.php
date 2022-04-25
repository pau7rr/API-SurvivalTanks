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
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    
    
</head>
<body class="bg-dark-black text-light-color">
    @livewire('navbar')
    <!-- Title -->
    <div class="container">
        <div class="text-center">
            <p class="title border-bottom">Survival Tanks</p>
            <p class="h3 text-muted mb-5">Dashboard</p>
            @foreach($stats as $stat)
            <div class="row">
                <div class="col-md-3 bg-dark-4 mr-3 p-0 rounded rounded-5 shadow-light-1">
                    <h5 class="h1 p-4 m-0 rounded-top rounded-5" style="font-size: 3rem">{{ $stat->games }}</h5>
                    <p class="m-0 p-0 rounded-bottom rounded-5 bg-dark-9" style="font-size: 2rem;">Games</p>
                </div>
                <div class="col-md-3 bg-dark-4 mr-3 p-0 rounded rounded-5 shadow-light-1">
                    <h5 class="h1 p-4 m-0 rounded-top rounded-5" style="font-size: 3rem">{{ $stat->users }}</h5>
                    <p class="m-0 p-0 rounded-bottom rounded-5 bg-dark-9" style="font-size: 2rem;">Users</p>
                </div>
            </div>
            @endforeach
        </div>
        
    </div>



</body>
</html>
@livewireScripts
@livewire('script-imports')