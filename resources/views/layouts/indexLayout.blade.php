<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tienda Medieval</title>
        <!-- Icon -->
        <link rel="shortcut icon" href=" {{ asset('images/helmet.png') }}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,400,800,500,600" rel="stylesheet" type="text/css">
        <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/set1.css') }}" rel="stylesheet">

        <style>
             html, body {
                background-color: #fff;
                font-family: 'Raleway', sans-serif;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .margin-bot {
                margin-bottom: 20px;
            }

            .no-margin {
                margin: 0;
            }

            .no-padding {
                padding: 0;
            }

        </style>
    </head>
    <body>
        <div class="container">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Acceso</a>
                        <a href="{{ route('register') }}">Registro</a>
                    @endauth
                </div>
            @endif
            <header id="header">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#">
                      <img src="{{ asset('images/helmet.png') }}" width="30" height="30" class="d-inline-block align-top" alt="">Navbar
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                      <div class="navbar-nav">
                        <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link" href="#">Features</a>
                        <a class="nav-item nav-link" href="#">Pricing</a>
                        <a class="nav-item nav-link disabled" href="#">Disabled</a>
                      </div>
                    </div>
                </nav>
            </header>

            <div class="content">
                <img class="margin-bot" src="{{URL::asset('/images/medieval-banner.jpg')}}" alt="foto perfil" style="width: 100%;">
                @yield('content')
            </div>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>

</html>
