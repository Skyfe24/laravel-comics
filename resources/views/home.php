<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')
    <link rel="logo" href="{{asset('images/dc-logo.png')}}" type="image/png">

</head>

<body>
<header>
        <nav>
            <div class="container flex justify-between" id="navbar">
                <div class="logo"><img src="logo" href="{{asset('images/dc-logo.png')}}" type="image/png"> </div>

                <div class="links flex justify-between row ">
                    <ul>
                        <li> <a href="{{ url('/')}}">  </a></li>
                        <li> <a href="{{ route('/characters')}}"> CHARACTERS</a></li>
                        <li> <a href="{{ route('/collectibles')}}">  COLLECTIBLES</a></li>
                        <li> <a href="{{ url('/comics')}}"> COMICS</a></li>
                        <li> <a href="{{ url('/fans')}}"> FANS</a></li>
                        <li> <a href="{{ url('/games')}}"> GAMES</a></li>
                        <li> <a href="{{ url('/movies')}}"> MOVIES</a></li>
                        <li> <a href="{{ url('/news')}}"> NEWS</a></li>
                        <li> <a href="{{ url('/tv)}}"> TV</a></li>
                        <li> <a href="{{ url('/videos')}}"> VIDEOS</a></li>
                        <li> <a href=""> SHOP</a></li>




                    </ul>
                    <div class="topnav">
                    <a class="active" href="#home">Search</a>
                    
                    <input type="text" placeholder="Search..">
                    </div>

                </div>


            </div>


        </nav>
    </header>

    <main class="bg-light">
        <div class="container">
            
            <div class="row">
                <div class="col-12">
                    <div class="min-vh-100 py-5 d-flex flex-column justify-content-center">
                        <div class="logo_laravel">
                            <img src="./images/jumbotron.jpg" alt="dc heroes jumbotron" class="jumbo">
                        </div>
                        <h1 class="display-5 fw-bold">
                            Welcome to Laravel+Bootstrap 5
                        </h1>

                        <p class="col-md-8 fs-4">This a preset package with Bootstrap 5 views for laravel projects including laravel breeze/blade. It works from laravel 9.x to the latest release 10.x</p>
                        <a href="https://packagist.org/packages/pacificdev/laravel_9_preset" class="btn btn-primary btn-lg" type="button">Documentation</a>
                    </div>
                </div>
            </div>

        </div>
    </main>

</body>

</html>