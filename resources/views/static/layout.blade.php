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

	<!-- App Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">

</head>
<body class="user-body">

    <!-- new navbar -->
    <nav class="navbar navbar-expand-md navbar-dark bg-secondary">
        <div class="container">

            <div class="logo-wrapper">
                <a class="navbar-brand mr-0 mr-md-3" href="/">
                    <img src="{{ asset('img/logo/LogoMEVOblanco2.png')}}" title="MEVO" alt="Logo MEVO" style="max-height: 3rem">
                </a>
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <ul class="navbar-nav align-items-center flex-row d-md-none ml-auto">

                <!-- login button -->
                    <!-- <li class="nav-item">
                        <a href="/static/login" class="btn btn-primary btn-sm">Ingresar</a>
                    </li> -->
                <!-- end login button -->

                <li class="nav-item d-md-none dropdown">
                    <a href="#" class="nav-link" id="mobile-profile-dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="avatar mr-1">
                            <!-- use ".avatar-text" with name initials when user don't have profile picture -->
                            <!-- leave empty to hide -->
                            <span class="avatar-text">ad</span>
                            <img src="{{ asset('img/avatars/img5.jpg') }}" class="avatar-img rounded-circle" alt="Foto de perfil">
                        </span>
                        <small class="fa fa-angle-down"></small>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right position-absolute" aria-labelledby="mobile-profile-dropdown" style="min-width: 200px">
                        <a class="dropdown-item py-2" href="/static/profile">
                            <i class="far fa-user-circle text-muted mr-2"></i>Perfil
                        </a>
                        <a class="dropdown-item py-2" href="/static/profile">
                            <i class="fas fa-history text-muted mr-2"></i>Mis pedidos
                        </a>
                        <a class="dropdown-item py-2" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <i class="far fa-share-square text-muted mr-2"></i>Salir
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav py-3 py-lg-0">
                    <li class="nav-item">
                        @if(Auth::user()->hasRole('admin'))
                            <a class="nav-link text-center text-lg-left text-uppercase fs-md" href="/home">Home</a>
                        @else
                            <a class="nav-link text-center text-lg-left text-uppercase fs-md" href="/inicio">Home</a>
                        @endif
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link text-center text-lg-left text-uppercase fs-md" href="/static/products">Productos</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link text-center text-lg-left text-uppercase fs-md" href="#!">Empresa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-center text-lg-left text-uppercase fs-md" href="#!">Nuestro equipo</a>
                    </li>
                </ul>
                <ul class="navbar-nav align-items-center d-none d-md-flex ml-auto">

                    <!-- login button -->
                    <!-- <li class="nav-item">
                        <a href="/static/login" class="btn btn-primary btn-sm">Ingresar</a>
                    </li> -->
                    <!-- end login button -->

                    <li class="nav-item mx-2 d-none d-lg-inline-block">
                        <a href="{{ route('perfil') }}" class="nav-link text-uppercase fs-md">Mis pedidos</a>
                    </li>
                    <li class="nav-item  dropdown">
                        <a href="#" class="nav-link text-uppercase fs-md" id="profile-dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <!-- <span class="avatar mr-1">
                                <span class="avatar-text">ad</span>
                                <img src="{{ asset('img/avatars/img5.jpg') }}" class="avatar-img rounded-circle" alt="Foto de perfil">
                            </span> -->
                            <span class="d-none d-sm-inline-block">
                                {{ Auth::user()->name }}<small class="fa fa-angle-down ml-2"></small>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right position-absolute" aria-labelledby="profile-dropdown" style="min-width: 200px">
                            <a class="dropdown-item py-2" href="{{ route('perfil') }}">
                                <i class="fas fa-history text-muted mr-2"></i>Mis pedidos
                            </a>
                            <a class="dropdown-item py-2" href="{{ route('edit') }}">
                                <i class="far fa-user-circle text-muted mr-2"></i>Editar perfil
                            </a>
                            <a class="dropdown-item py-2" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <i class="far fa-share-square text-muted mr-2"></i>Salir
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
    <footer class="user-footer bg-white text-center text-lg-right py-4 text-muted">
        <div class="container">
            <small>
                <a class="text-muted text-decoration-none" href="https://github.com/rafaarraez/" target="_blank">Copyright &copy; Mevo 2020
            </small>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Global Vendor -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    @include('sweetalert::cdn')
    @include('sweetalert::view')
    @yield('scripts')

</body>
</html>
