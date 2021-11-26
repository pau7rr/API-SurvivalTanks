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
    <link href="{{ asset('css/tankEditor.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
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
            <p class="h2 text-muted">Tank Editor</p>
        </div>
    </div>
    <!-- Tank Editor -->
    <div class="container mb-5">
        <div class="row">
            <!-- Tank Parts -->
            <div class="col col-md-4 text-center px-2">
                <div class="bg-dark-1 p-2 rounded rounded-5">
                    <div class="row mx-2 p-2">
                        <div class="col-md-12 text-center h4 mx-0 mb-3 border-bottom">
                            Tank Parts
                        </div>
                        <!-- Tower Swiper -->
                        <div class="w-100 tex-center bg-dark-1">
                        Tower Parts
                        </div>
                        <div id="towerSwiper" class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide text-center flex flex-column">
                                    <img src="../img/assets/tankConstructor/Towers/SmallTowerA.png" alt="towerSelector" class="tower-selector-image">
                                </div>
                                <div class="swiper-slide text-center flex flex-column">
                                    <img src="../img/assets/tankConstructor/Towers/SmallTowerB.png" alt="towerSelector" class="tower-selector-image">
                                </div>
                                <div class="swiper-slide text-center flex flex-column">
                                    <img src="../img/assets/tankConstructor/Towers/SmallTowerC.png" alt="towerSelector" class="tower-selector-image">
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                        <!-- Hull Swiper -->
                        <div class="w-100 tex-center bg-dark-1">
                        Body Parts
                        </div>
                        <div id="hullSwiper" class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide text-center flex flex-column">
                                    <img src="../img/assets/tankConstructor/Hulls/SmallHullA.png" alt="towerSelector" class="tower-selector-image">
                                </div>
                                <div class="swiper-slide text-center flex flex-column">
                                    <img src="../img/assets/tankConstructor/Hulls/SmallHullB.png" alt="towerSelector" class="tower-selector-image">
                                </div>
                                <div class="swiper-slide text-center flex flex-column">
                                    <img src="../img/assets/tankConstructor/Hulls/SmallHullC.png" alt="towerSelector" class="tower-selector-image">
                                </div>
                            </div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                        <!-- Tracks Swiper -->
                        <div class="w-100 tex-center bg-dark-1">
                        Track Parts
                        </div>
                        <div id="tracksSwiper" class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide text-center flex flex-column">
                                    <img src="../img/assets/tankConstructor/Tracks/TrackAFrame1.png" alt="towerSelector" class="tower-selector-image">
                                </div>
                                <div class="swiper-slide text-center flex flex-column">
                                    <img src="../img/assets/tankConstructor/Tracks/TrackBFrame1.png" alt="towerSelector" class="tower-selector-image">
                                </div>
                                <div class="swiper-slide text-center flex flex-column">
                                    <img src="../img/assets/tankConstructor/Tracks/TrackСFrame1.png" alt="towerSelector" class="tower-selector-image">
                                </div>
                                <div class="swiper-slide text-center flex flex-column">
                                    <img src="../img/assets/tankConstructor/Tracks/TrackDFrame1.png" alt="towerSelector" class="tower-selector-image">
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Stats -->
            <div class="col col-md-4 text-center px-2">
                <div class="bg-dark-1 p-2 rounded rounded-5">
                    <div class="row mx-2 pt-2">
                        <div class="col-md-12 text-center h4 mx-0 mb-3 border-bottom">Stats</div>
                    </div>
                    <div>
                        <!-- Input Strengh -->
                        <div class="input-group mx-2 mt-5">
                            <img src="https://img.icons8.com/ios/50/ffffff/clenched-fist.png" alt="" class="mx-2">
                            <!--<label class="form-label mx-3" for="typeNumber">Strengh</label>-->
                            <input type="number" class="form-control ml-3 mr-4 mt-2 bg-dark rounded rounded-5" style="color: white;"/>
                        </div>
                        <!-- Input Health -->
                        <div class="input-group mx-2 mt-5">
                            <img src="https://img.icons8.com/metro/52/ffffff/like.png" alt="" class="mx-2 mt-2"/>
                            <input type="number" class="form-control ml-3 mr-4 mt-3 bg-dark rounded rounded-5" style="color: white;"/>
                        </div>
                        <!-- Input Velocity -->
                        <div class="input-group mx-2 mt-5">
                            <img src="https://img.icons8.com/ios/50/ffffff/running-rabbit.png" alt="" class="mx-2 mt-3 mb-3"/>
                            <input type="number" class="form-control ml-3 mr-4 mt-3 bg-dark rounded rounded-5" style="color: white;"/>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Preview -->
            <div class="col col-md-4 text-center px-2">
                <div class="bg-dark-1 p-2 rounded rounded-5">
                    <div class="row mx-2 p-2">
                        <div class="col-md-12 text-center h4 mx-0 mb-3 border-bottom">Preview</div>
                        <div class="imagesContainer w-100 bg-dark-4 border border-primary rounded rounded-3">
                            <img src="../img/assets/tankConstructor/light.png" alt="light" class="bg-image">
                            <img src="../img/assets/tankConstructor/Guns/SmallGunB.png" alt="gun" class="gun-image">
                            <img src="../img/assets/tankConstructor/Towers/SmallTowerB.png" alt="tower" class="tower-image">
                            <img src="../img/assets/tankConstructor/Hulls/SmallHullC.png" alt="hull" class="hull-image">
                            <img src="../img/assets/tankConstructor/Tracks/TrackAFrame1.png" alt="trackLeft" class="track-left-image">
                            <img src="../img/assets/tankConstructor/Tracks/TrackAFrame1.png" alt="trackRight" class="track-right-image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Editing Buttons -->
        <div class="row bg-dark-1 flex flex-row-reverse rounded rounded-5 my-3 mx-1 p-2 justify-content-sm-around">
            <button class="btn btn-success w-25">Crear</button>
            <button class="btn btn-danger w-25">Reset</button>
        </div>
    </div>



</body>
</html>
<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="../js/tankPartsSwiper.js"></script>