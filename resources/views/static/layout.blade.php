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

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico')}}" type="image/x-icon">

    <!-- Web Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

	<!-- Components Vendor Styles -->
	<link rel="stylesheet" href="{{ asset('font-awesome/css/all.min.css')}}">
	<link rel="stylesheet" href="{{ asset('css/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css')}}">

	<!-- Datatables css -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/datatables/datatables.min.css')}}"/>

	<!-- Theme Styles -->
	<link rel="stylesheet" href="{{ asset('css/theme.css')}}">


	<!-- Select 2 css-->
	<link href="{{ asset('css/select2/select2.min.css')}}" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/select2/select2-bootstrap.css')}}">

</head>
<body>

    <!-- new navbar -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img class="img-fluid" src="{{ asset('img/logo/LogoMEVOblanco2.png')}}" style="height: 38px" alt="MEVO Logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-main-collapse" aria-controls="navbar-main-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbar-main-collapse">

                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Empresa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Nuestro equipo</a>
                    </li>
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('perfil') }}">
                                <span class="h3 mb-0"><i class="far fa-user-circle text-muted mr-2"></i></span>Ver perfil
                            </a>
                            <a class="dropdown-item" href="{{ route('reserves') }}">
                                <span class="h3 mb-0"><i class="fas fa-history text-muted mr-2"></i></span>Historial de Reservas
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <span class="h3 mb-0"><i class="fas fa-history text-muted mr-2"></i></span>Salir
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li> -->
                </ul>

                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a href="#!" class="nav-link" id="profile-dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="u-avatar--xs img-fluid rounded-circle mr-2" src="{{ asset('img/avatars/img3.jpg')}}" alt="User Profile Picture">
                            <span class="d-none d-sm-inline-block">
                                {{ Auth::user()->name }} <small class="fa fa-angle-down text-muted ml-1"></small>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="profile-dropdown">
                            <a class="dropdown-item" href="{{ route('perfil') }}">
                                <span class="h3 mb-0"><i class="far fa-user-circle text-muted mr-2"></i></span>Ver perfil
                            </a>
                            <a class="dropdown-item" href="{{ route('reserves') }}">
                                <span class="h3 mb-0"><i class="fas fa-history text-muted mr-2"></i></span>Historial de Reservas
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <span class="h3 mb-0"><i class="fas fa-history text-muted mr-2"></i></span>Salir
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
    <footer class="u-footer d-md-flex align-items-md-center text-center text-md-left text-muted">
        <small class="text-muted ml-auto">&copy; 2019
            <a class="text-muted" href="https://github.com/rafaarraez/" target="_blank">Mevo 2020
        </small>
    </footer>
    <!-- End Footer -->

    <!-- Global Vendor -->
	<script src="{{ asset('js/jquery/dist/jquery.min.js')}}"></script>
	<script src="{{ asset('js/jquery-migrate/jquery-migrate.min.js')}}"></script>
	<script src="{{ asset('js/popper.js/dist/umd/popper.min.js')}}"></script>
	<script src="{{ asset('js/bootstrap/bootstrap.min.js')}}"></script>

	<!-- Plugins -->
	<script src="{{ asset('js/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')}}"></script>
	<script src="{{ asset('js/chart.js/dist/Chart.min.js')}}"></script>

	<!-- Initialization  -->
	<script src="{{ asset('js/sidebar-nav.js')}}"></script>
	<script src="{{ asset('js/main.js')}}"></script>
	<script src="{{ asset('js/dashboard-page-scripts.js')}}"></script>

	<!-- Datatables -->
	<script type="text/javascript" src="{{ asset('js/datatables/datatables.min.js')}}"></script>

  	<script>
  	$(document).ready( function () {
		$('#data-table').DataTable( {
			 "language": {
				  "url": "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
			 }
		});
  	} );
  	</script>

	<!-- Select2 js-->
	<script src="{{ asset('js/select2/select2.min.js')}}"></script>
    @include('sweetalert::cdn')
    @include('sweetalert::view')
    @yield('scripts')

</body>
</html>
