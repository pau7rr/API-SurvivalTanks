<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="../img/logo/logo_icon_100x100_black.png">
        <title>CMS Login</title>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        <!-- Styles -->
        @livewireStyles
        @livewire('style-imports')
        <link href="{{ asset('css/cube.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container mt-5">
            <div class="row mb-5">
                <div class="col-md-1"></div>
                <div class="col-12 cube-col col-sm-12 col-md-4">
                    <div class="cube">
                        <div class="top"></div>
                        <div>
                            <span style="--i:0;"></span>
                            <span style="--i:1;"></span>
                            <span style="--i:2;"></span>
                            <span style="--i:3;"></span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6">
                    <!-- Login -->
                    <h4>Admin Login</h4>
                    <form action="{{ route('auth.check') }}" method="post">
                    @csrf
                        <div class="results">
                            @if(Session::get('fail'))
                                <div class="alert alert-danger">
                                    {{ Session::get('fail') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="email">Username</label>
                            <input type="text" class="form-control bg-dark" name="username" placeholder="Enter username" value="{{ old('username') }}">
                            <span class="text-danger">@error('username') {{ $message }} @enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control bg-dark" name="password" placeholder="Enter password">
                            <span class="text-danger">@error('password') {{ $message }} @enderror</span>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-login">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>

@livewireScripts