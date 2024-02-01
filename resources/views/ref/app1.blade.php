<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Login to IndiaFasteners</title>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    
    <!-- Vendor CSS Files -->
    <link href="FlexStart/vendor/aos/aos.css" rel="stylesheet">
    <link href="FlexStart/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="FlexStart/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="FlexStart/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="FlexStart/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="FlexStart/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    
    <!-- Template Main CSS File -->
    <link href="FlexStart/css/style.css" rel="stylesheet">

</head>
<body>
    <header id="app" class="header fixed-top">

        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="/" class="logo d-flex align-items-center">
              <img src="img/logo-black.png" alt="">
              <span></span>
            </a>
            <nav class="navbar navbar-expand-md navbar-light bg-white">
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item"><a class="getstarted scrollto" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                        <li class="nav-item"><a class="getstarted scrollto" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </nav>
        </div>

        <main class="py-4">
            @yield('content')
        </main>
    </header>
</body>
</html>
