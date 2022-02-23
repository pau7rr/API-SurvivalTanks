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
<body class="bg-dark-black">
    @livewire('navbar')
    <!-- Title -->
    <div class="container">
        <div class="text-center">
            <p class="title border-bottom">Survival Tanks</p>
            <p class="h3 text-muted">Dashboard</p>
        </div>
    </div>



</body>
</html>
@livewireScripts
@livewire('script-imports')