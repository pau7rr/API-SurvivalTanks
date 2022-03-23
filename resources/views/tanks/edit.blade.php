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
    <link href="{{ asset('css/tankEditor.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
</head>
<body class="bg-dark-black text-light-color">
    <div class="container my-5">
        
        <!-- Navbar -->
        <div>
            <a href="/tanks" class="btn btn-light"><img src="https://img.icons8.com/ios/50/000000/circled-left.png" style="max-width: 20px;"/> Go Back</a>
        </div>

        <!-- Errors Return -->
        <div class="results mt-3">
            @if(Session::get('fail'))
                <div class="alert alert-danger">
                    {{ Session::get('fail') }}
                </div>
            @endif
        </div>

        <form action="{{ url('/tanks/' . $tank->id) }}" method="POST">
            @csrf
            @method('PUT')
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
                                    <img src="../../assets/tankConstructor/TowerEdits/Light1.png"  class="swiper-slide text-center flex flex-column tower-selector-image">
                                    <img src="../../assets/tankConstructor/TowerEdits/Light2.png"  class="swiper-slide text-center flex flex-column tower-selector-image">
                                    <img src="../../assets/tankConstructor/TowerEdits/Light3.png"  class="swiper-slide text-center flex flex-column tower-selector-image">
                                    <img src="../../assets/tankConstructor/TowerEdits/Medium1.png"  class="swiper-slide text-center flex flex-column tower-selector-image">
                                    <img src="../../assets/tankConstructor/TowerEdits/Medium2.png"  class="swiper-slide text-center flex flex-column tower-selector-image">
                                    <img src="../../assets/tankConstructor/TowerEdits/Medium3.png"  class="swiper-slide text-center flex flex-column tower-selector-image">
                                    <img src="../../assets/tankConstructor/TowerEdits/Heavy1.png"  class="swiper-slide text-center flex flex-column tower-selector-image">
                                    <img src="../../assets/tankConstructor/TowerEdits/Heavy2.png"  class="swiper-slide text-center flex flex-column tower-selector-image">
                                    <img src="../../assets/tankConstructor/TowerEdits/Heavy3.png"  class="swiper-slide text-center flex flex-column tower-selector-image">
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
                                    <img src="../../assets/tankConstructor/Hulls/SmallHullA.png"  class="swiper-slide text-center flex flex-column hull-selector-image">
                                    <img src="../../assets/tankConstructor/Hulls/SmallHullB.png"  class="swiper-slide text-center flex flex-column hull-selector-image">
                                    <img src="../../assets/tankConstructor/Hulls/SmallHullC.png"  class="swiper-slide text-center flex flex-column hull-selector-image">
                                    <img src="../../assets/tankConstructor/Hulls/MediumHullA.png"  class="swiper-slide text-center flex flex-column hull-selector-image">
                                    <img src="../../assets/tankConstructor/Hulls/MediumHullB.png"  class="swiper-slide text-center flex flex-column hull-selector-image">
                                    <img src="../../assets/tankConstructor/Hulls/MediumHullC.png"  class="swiper-slide text-center flex flex-column hull-selector-image">
                                    <img src="../../assets/tankConstructor/Hulls/HeavyHullA.png"  class="swiper-slide text-center flex flex-column hull-selector-image">
                                    <img src="../../assets/tankConstructor/Hulls/HeavyHullB.png"  class="swiper-slide text-center flex flex-column hull-selector-image">
                                    <img src="../../assets/tankConstructor/Hulls/HeavyHullC.png"  class="swiper-slide text-center flex flex-column hull-selector-image">
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
                                    <img src="../../assets/tankConstructor/Tracks/TrackAFrame1.png"  class="swiper-slide text-center flex flex-column tracks-selector-image">
                                    <img src="../../assets/tankConstructor/Tracks/TrackBFrame1.png"  class="swiper-slide text-center flex flex-column tracks-selector-image">
                                    <img src="../../assets/tankConstructor/Tracks/TrackСFrame1.png"  class="swiper-slide text-center flex flex-column tracks-selector-image">
                                    <img src="../../assets/tankConstructor/Tracks/TrackDFrame1.png"  class="swiper-slide text-center flex flex-column tracks-selector-image">
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                            <!-- Bullet Selector -->
                            <div class="w-100 tex-center bg-dark-1 mb-2">
                            Bullet Selector
                            </div>
                            <div id="bulletSwiper" class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <img src="../../assets/tankConstructor/Bullets/01.png" class="swiper-slide text-center flex flex-column bullet-selector-image">
                                    <img src="../../assets/tankConstructor/Bullets/12.png"  class="swiper-slide text-center flex flex-column bullet-selector-image">
                                    <img src="../../assets/tankConstructor/Bullets/25.png"  class="swiper-slide text-center flex flex-column bullet-selector-image">
                                    <img src="../../assets/tankConstructor/Bullets/33.png"  class="swiper-slide text-center flex flex-column bullet-selector-image">
                                    <img src="../../assets/tankConstructor/Bullets/45.png"  class="swiper-slide text-center flex flex-column bullet-selector-image">
                                    <img src="../../assets/tankConstructor/Bullets/51.png"  class="swiper-slide text-center flex flex-column bullet-selector-image">
                                    <img src="../../assets/tankConstructor/Bullets/56.png"  class="swiper-slide text-center flex flex-column bullet-selector-image">
                                    <img src="../../assets/tankConstructor/Bullets/66.png"  class="swiper-slide text-center flex flex-column bullet-selector-image">
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
                                <input type="number" name="strengh" value="{{ $tank->strengh }}" class="form-control ml-3 mr-4 mt-2 bg-dark rounded rounded-5" style="color: white;"/>
                            </div>
                            <!-- Input Health -->
                            <div class="input-group mx-2 mt-5">
                                <img src="https://img.icons8.com/metro/52/ffffff/like.png" alt="" class="mx-2 mt-2"/>
                                <input type="number" name="health" value="{{ $tank->health }}" class="form-control ml-3 mr-4 mt-3 bg-dark rounded rounded-5" style="color: white;"/>
                            </div>
                            <!-- Input Velocity -->
                            <div class="input-group mx-2 mt-5">
                                <img src="https://img.icons8.com/ios/50/ffffff/running-rabbit.png" alt="" class="mx-2 mt-3 mb-3"/>
                                <input type="number" name="speed" value="{{ $tank->speed }}" class="form-control ml-3 mr-4 mt-3 bg-dark rounded rounded-5" style="color: white;"/>
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
                                <img id="bgImg" src="../../assets/tankConstructor/Light.png" alt="light" class="bg-image">
                                <img id="towerImg" src="../../assets/tankConstructor/TowerEdits/Light1.png" alt="tower" class="tower-image">
                                <img id="hullImg" src="../../assets/tankConstructor/Hulls/SmallHullA.png" alt="hull" class="hull-image">
                                <img id="trackLeftImg" src="../../assets/tankConstructor/Tracks/TrackAFrame1.png" alt="trackLeft" class="track-left-image">
                                <img id="trackRightImg" src="../../assets/tankConstructor/Tracks/TrackAFrame1.png" alt="trackRight" class="track-right-image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Editing Buttons -->
            <div class="row bg-dark-1 flex flex-row rounded rounded-5 my-3 mx-1 p-2 justify-content-md-around">
                <div class="w-25">
                    <a href="{{ url('/tanks') }}" class="btn btn-danger w-100">Cancel</a>
                </div>
                <div class="w-25">
                    <button type="submit" class="btn btn-success w-100">Update</button>
                </div>
            </div>
            <!-- Inputs -->
            <div style="display: none;">
                <input type="text" name="tower" id="towerInput" value="{{ $tank->tower }}">
                <input type="text" name="body" id="bodyInput" value="{{ $tank->body }}">
                <input type="text" name="track" id="trackInput" value="{{ $tank->track }}">
                <input type="text" name="bullet" id="bulletInput" value="{{ $tank->bullet }}">
            </div>
        </form>
    </div>



</body>
</html>
@livewireScripts
<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="/js/tankUpdate.js"></script>