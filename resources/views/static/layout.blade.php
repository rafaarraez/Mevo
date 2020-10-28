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
    <link rel="apple-touch-icon" sizes="57x57" href="./img/icon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="./img/icon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="./img/icon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="./img/icon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="./img/icon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="./img/icon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="./img/icon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="./img/icon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="./img/icon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="./img/icon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./img/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="./img/icon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./img/icon/favicon-16x16.png">
    <link rel="manifest" href="./img/icon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('font-awesome/css/all.min.css')}}">
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
                    <a href="#" class="nav-link text-uppercase fs-md" id="mobile-profile-dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php $first_name = explode(" ", Auth::user()->name); ?>
                        {{ $first_name[0] }}<small class="fa fa-angle-down ml-2"></small>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right position-absolute" aria-labelledby="mobile-profile-dropdown" style="min-width: 200px">
                        <div><h6 class="dropdown-header">{{ Auth::user()->name }}</h6></div>
                        <a class="dropdown-item py-2" href="{{ route('perfil') }}">
                            <i class="fas fa-history text-muted mr-2"></i>Mis pedidos
                        </a>
                        <a class="dropdown-item py-2" href="{{ route('edit') }}">
                            <i class="far fa-user-circle text-muted mr-2"></i>Editar perfil
                        </a>
                        <a class="dropdown-item py-2" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form-mobile').submit();">
                            <i class="far fa-share-square text-muted mr-2"></i>Salir
                        </a>
                        <form id="logout-form-mobile" action="{{ route('logout') }}" method="POST" style="display: none;">
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

                    <li class="nav-item mr-3 d-none d-lg-inline-block">
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
