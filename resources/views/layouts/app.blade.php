<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> -->

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="/css/master.css">
    <link rel="stylesheet" href="/css/fontawesome.css">
    <link rel="stylesheet" href="/css/all.css">
    <link rel="stylesheet" href="/css/solid.css">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm">
            <div class="container">
            <a href="index.php"> <img class="img-fluid m-1 p-2" src="images/logo.png" alt="" style="border-radius:30px; width:150px;"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    <!-- <div class="col-sm-12 col-md-12 col-lg-9 p-2 mt-4 text-center"> -->

                    <button type="button" name="button" class="btnRegistro btn-lg btn-warning p-1 m-1"><a href="registro.php" class="btn-lg btn-warning p-1 m-2">Registrarse</a></button>

                    <button type="button" name="button" class="btnOferta btn-lg btn-light p-1 m-1"><a href="" class=" btn-lg btn-light p-1 m-2">Ofertas</a></button>

                    <button class="btnProducto btn-lg btn-success p-1 m-2"type="button" name="button"><a href="" class="btn-lg btn-success p-1 m-2" >Productos</a></button>

                    <button class="btnServicio btn-lg btn-dark p-1 m-2"type="button" name="button"><a href="" class="btn-lg btn-dark p-1 m-2">Servicios</a></button>

                    <button type="button" name="button" class="btnCarrito btn-lg btn-warning p-1 m-1"><a href="" class="btn-lg btn-warning p-1 m-2">Carrito</a></button>

                    {{-- <button type="button" name="button" class="btnLogin btn-lg btn-danger p-1 m-1"><a href="login.php" class=" btn-lg btn-danger p-1 m-2">Login</a></button> --}}

                    <button type="button" name="button" class="btnSalir btn-lg btn-danger p-1 m-1"><a href="salir.php" class=" btn-lg btn-danger p-1 m-2">Salir</a></button>
<!-- <div class="in-line">

</div>
</div> -->
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
