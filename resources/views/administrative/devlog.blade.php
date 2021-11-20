<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="icon" href="../img/logo/logo_icon_100x100_black.png">

    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/general.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <div class="container.fluid sticky-top mb-5">
        <nav class="navbar navbar-expand-md bg-dark-blue navbar-dark border-bottom mt-3 mb-3" role="navigation">
                <!--Navbar Logo -->
                <a class="navbar-brand" href="/">
                    <img src="../img/logo/logo_500x200_white.png" width="100" height="50"/>
                </a>
                <!--Navbar Button Toggler-->
                <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent">
                <span class="navbar-toggler-icon"></span>
                </button>
                <!--Navbar Links-->
                <div class="collapse navbar-collapse" id="navbarContent">
                    <div class="container-fluid">
                        <ul class="nav navbar-nav">
                            <li class="nav-item">   
                                <a class="nav-link" href="dashboard">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="tankEditor">Tank Editor</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="devlog">Devlog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="botiga">Botiga</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="noticies">Notícies</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="resultats">Resultats</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="/contacte">Contacte</a>
                                <div class="dropdown-menu">
                                    <a href="/contactar" class="dropdown-item">Contactar Staff</a>
                                    <a href="/quisom" class="dropdown-item">Qui som</a>
                                </div>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav">
                            <li class="nav-item">
                                <a href="logout" class="nav-link px-3 bg-dark-green rounded rounded-pill">
                                    <!--<img src="" width="15" height="15"/>--> Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                    
                </div>
        </nav>
    </div>
    <!-- Title -->
    <div class="container mb-5">
        <div class="text-center">
            <p class="title border-bottom">Survival Tanks</p>
            <p class="h3 text-muted">Devlog</p>
        </div>
    </div>
    <!-- Devlog -->
    <div class="container ">
        
    </div>




</body>
</html>