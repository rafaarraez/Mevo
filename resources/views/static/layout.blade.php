<!DOCTYPE html>
<html lang="es">
<head>
    <title>Mevo</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="keywords" content="Mevo">
    <meta name="description" content="Mevo">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico')}}" type="image/x-icon">

	<!-- Components Vendor Styles -->
	<link rel="stylesheet" href="{{ asset('font-awesome/css/all.min.css')}}">

	<!-- App Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">

</head>
<body>

    <!-- new navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('img/logo/LogoMEVOblanco2.png')}}" title="MEVO" alt="Logo MEVO" style="max-height: 3rem">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/static/products">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#!">Empresa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#!">Nuestro equipo</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" id="profile-dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="avatar mr-1">
                                <!-- use ".avatar-text" with name initials when user don't have profile picture -->
                                <!-- leave empty to hide -->
                                <span class="avatar-text">ad</span>
                                <img src="{{ asset('img/avatars/img5.jpg') }}" class="avatar-img rounded-circle" alt="Foto de perfil">
                            </span>
                            <span class="d-none d-sm-inline-block">
                                {{ Auth::user()->name }}<small class="fa fa-angle-down ml-2"></small>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="profile-dropdown">
                            <a class="dropdown-item" href="/static/profile">
                                <i class="far fa-user-circle text-muted mr-2"></i>Perfil
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <i class="fas fa-history text-muted mr-2"></i>Salir
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End navbar -->

    <main class="py-5" role="main">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-white text-center text-lg-right py-4 text-muted">
        <div class="container">
            <small>
                <a class="text-muted text-decoration-none" href="https://github.com/rafaarraez/" target="_blank">Copyright &copy; Mevo 2020
            </small>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Global Vendor -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    @yield('scripts')

</body>
</html>
