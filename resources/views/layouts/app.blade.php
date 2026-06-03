
<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- Head -->
<head>
	<title>Mevo</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="keywords" content="Mevo">
	<meta name="description" content="Mevo">
	<link rel="apple-touch-icon" sizes="57x57" href="{{ asset('img/icon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('img/icon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/icon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/icon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/icon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('img/icon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('img/icon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('img/icon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/icon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('img/icon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/icon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('img/icon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/icon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('img/icon/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
	<!-- Favicon -->
	<link rel="shortcut icon" href="{{ asset('favicon.ico')}}" type="image/x-icon">

	<!-- Web Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

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
<!-- End Head -->

<body>
	<!-- Header (Topbar) -->
	<header class="u-header">
		<div class="u-header-left">
			<a class="u-header-logo" href="{{ route('home')}}">
				<img class="u-logo-desktop" src="{{ asset('img/logo/LogoMEVO.png')}}" width="160" alt="Dashboard">
				<img class="img-fluid u-logo-mobile" src="{{ asset('img/logo/LogoMEVO.png')}}" width="50" alt="Dashboard">
			</a>
		</div>

		<div class="u-header-middle">
			<a class="js-sidebar-invoker u-sidebar-invoker" href="#!"
			data-is-close-all-except-this="true"
			data-target="#sidebar">
			<i class="fa fa-bars u-sidebar-invoker__icon--open"></i>
			<i class="fa fa-times u-sidebar-invoker__icon--close"></i>
		</a>
<!--
		<div id="headerSearch" class="u-header-search-form">
			<form>
				<div class="input-group">
					<button class="btn-link input-group-prepend u-header-search__btn" type="submit">
						<i class="fa fa-search"></i>
					</button>
					<input class="form-control u-header-search__field" type="search" placeholder="Escriba para buscar…">
				</div>
			</form>
		</div> -->
	</div>

	<div class="u-header-right">
		<!-- Activities -->
		<!-- <div class="dropdown mr-4">
			<a class="link-muted" href="#!" role="button" id="dropdownMenuLink" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">
				<span class="h3">
					<i class="far fa-envelope"></i>
				</span>
				<span class="u-indicator u-indicator-top-right u-indicator--xxs bg-secondary"></span>
			</a>

			<div class="dropdown-menu dropdown-menu-right border-0 py-0 mt-4" aria-labelledby="dropdownMenuLink" style="width: 360px;">
				<div class="card">
					<div class="card-header d-md-flex align-items-center py-3">
						<h2 class="h4 card-header-title">Mensajes</h2>
						<a class="ml-auto" href="#">Limpiar todo</a>
					</div>

					<div class="card-body p-0">
						<div class="list-group list-group-flush">

							<a class="list-group-item list-group-item-action" href="#">
								<div class="media align-items-center">
									<img class="u-avatar--sm rounded-circle mr-3" src="{{ asset('img/avatars/img1.jpg')}}" alt="Image description">

									<div class="media-body">
										<div class="d-md-flex align-items-center">
											<h4 class="mb-1">Chad Cannon</h4>
											<small class="text-muted ml-md-auto">23 Jan 2018</small>
										</div>

										<p class="text-truncate mb-0" style="max-width: 250px;">
											We've just done the project.
										</p>
									</div>
								</div>
							</a>

						</div>
					</div>

					<div class="card-footer py-3">
						<a class="btn btn-block btn-outline-primary" href="#">Ver todas los mensajes</a>
					</div>
				</div>
			</div>
		</div> -->
		<!-- End Activities -->

		<!-- Notifications -->
		<!-- <div class="dropdown mr-4">
			<a class="link-muted" href="#!" role="button" id="dropdownMenuLink" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">
				<span class="h3">
					<i class="far fa-bell"></i>
				</span>
				<span class="u-indicator u-indicator-top-right u-indicator--xxs bg-info"></span>
			</a>

			<div class="dropdown-menu dropdown-menu-right border-0 py-0 mt-4" aria-labelledby="dropdownMenuLink" style="width: 360px;">
				<div class="card">
					<div class="card-header d-md-flex align-items-center py-3">
						<h2 class="h4 card-header-title">Notificaciones</h2>
						<a class="ml-auto" href="#">Limpiar todo</a>
					</div>

					<div class="card-body p-0">
						<div class="list-group list-group-flush">

							<a class="list-group-item list-group-item-action" href="#">
								<div class="media align-items-center">
									<div class="u-icon u-icon--sm rounded-circle bg-danger text-white mr-3">
										<i class="fab fa-dribbble"></i>
									</div>

									<div class="media-body">
										<div class="d-md-flex align-items-center">
											<h4 class="mb-1">Dribbble</h4>
											<small class="text-muted ml-md-auto">23 Jan 2018</small>
										</div>

										<p class="text-truncate mb-0" style="max-width: 250px;">
											<span class="text-primary">@htmlstream</span> just liked your post!
										</p>
									</div>
								</div>
							</a>

						</div>
					</div>

					<div class="card-footer py-3">
						<a class="btn btn-block btn-outline-primary" href="#">Ver todas las notificaciones</a>
					</div>
				</div>
			</div>
		</div> -->
		<!-- End Notifications -->

		<!-- User Profile -->
		<div class="dropdown ml-2">
			<a class="link-muted d-flex align-items-center" href="#!" role="button" id="dropdownMenuLink" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">
				<img class="u-avatar--xs img-fluid rounded-circle mr-2" src="{{ asset('img/avatars/img3.jpg')}}" alt="User Profile">
				<span class="text-dark d-none d-sm-inline-block">
					{{ optional(Auth::user())->name }} <small class="fa fa-angle-down text-muted ml-1"></small>
				</span>
			</a>

			<div class="dropdown-menu dropdown-menu-right border-0 py-0 mt-3" aria-labelledby="dropdownMenuLink" style="width: 260px;">
				<div class="card">
					<div class="card-body">
						<ul class="list-unstyled mb-0">
							{{-- <li class="mb-4">
								<a class="d-flex align-items-center link-dark" href="{{ route('user.profile') }}">
									<span class="h3 mb-0"><i class="far fa-user-circle text-muted mr-2"></i></span> Ver perfil
								</a>
							</li> --}}
							<li>
								<a class="d-flex align-items-center link-dark" href="{{ route('logout') }}"
								onclick="event.preventDefault();
								document.getElementById('logout-form').submit();">
								<span class="h3 mb-0"><i class="far fa-share-square text-muted mr-2"></i></span> Salir
							</a>
							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								@csrf
							</form>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- End User Profile -->
</div>
</header>
<!-- End Header (Topbar) -->

<main class="u-main" role="main">
	<!-- Sidebar -->
	<aside id="sidebar" class="u-sidebar">
		<div class="u-sidebar-inner">
			<header class="u-sidebar-header">
				<a class="u-sidebar-logo" href="#">
					<img class="img-fluid" src="{{ asset('img/logo/LogoMEVO.png')}}" width="124" alt="Dashboard">
				</a>
			</header>

			<nav class="u-sidebar-nav">
				<ul class="u-sidebar-nav-menu u-sidebar-nav-menu--top-level">
					<!-- Dashboard -->
					<li class="u-sidebar-nav-menu__item">
						<a class="u-sidebar-nav-menu__link" href="{{ route('home')}}">
							<i class="fa fa-cubes u-sidebar-nav-menu__item-icon"></i>
							<span class="u-sidebar-nav-menu__item-title">Inicio</span>
						</a>
					</li>

					<hr/>

					<!-- Usuarios  -->
					 <li class="u-sidebar-nav-menu__item">
						  <a class="u-sidebar-nav-menu__link" href="#!"
							  data-target="#baseUI">
								<i class="far fa-user-circle u-sidebar-nav-menu__item-icon"></i>
								<span class="u-sidebar-nav-menu__item-title">Usuarios</span>
								<i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
								<span class="u-sidebar-nav-menu__indicator"></span>
						  </a>
						  <ul id="baseUI" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level" style="display: none;">
								<li class="u-sidebar-nav-menu__item">
									 <a class="u-sidebar-nav-menu__link" href="{{ route('usuarios.create')}}">
										  {{-- <span class="u-sidebar-nav-menu__item-icon">R</span> --}}
										  <span class="u-sidebar-nav-menu__item-title">Registrar usuarios</span>
									 </a>
								</li>
								<li class="u-sidebar-nav-menu__item">
									 <a class="u-sidebar-nav-menu__link" href="{{ route('usuarios.index')}}">
										  <span class="u-sidebar-nav-menu__item-title">Ver usuarios</span>
									 </a>
								</li>
						  </ul>
					 </li>
					 <!-- Final usuarios  -->

					 <hr/>

					 <!-- Productos  -->
					 <li class="u-sidebar-nav-menu__item">
						  <a class="u-sidebar-nav-menu__link" href="#!"
							  data-target="#productsDropDown">
								<i class="fas fa-box-open u-sidebar-nav-menu__item-icon"></i>
								<span class="u-sidebar-nav-menu__item-title">Productos</span>
								<i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
								<span class="u-sidebar-nav-menu__indicator"></span>
						  </a>
						  <ul id="productsDropDown" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level" style="display: none;">
								<li class="u-sidebar-nav-menu__item">
									 <a class="u-sidebar-nav-menu__link" href="{{ route('products.create') }}">
										  <span class="u-sidebar-nav-menu__item-title">Registrar Productos</span>
									 </a>
								</li>
								<li class="u-sidebar-nav-menu__item">
									 <a class="u-sidebar-nav-menu__link" href="{{ route('products.index') }}">
										  <span class="u-sidebar-nav-menu__item-title">Ver Productos</span>
									 </a>
								</li>
								<li class="u-sidebar-nav-menu__item">
									<a class="u-sidebar-nav-menu__link" href="{{ route('products.canceled') }}">
										 <span class="u-sidebar-nav-menu__item-title">Ver Productos Cancelados</span>
									</a>
							   </li>
						  </ul>
					 </li>
					 <!-- Final Productos  -->

					 <hr/>

					 <!-- Reportes -->
						<li class="u-sidebar-nav-menu__item">
						  <a class="u-sidebar-nav-menu__link" href="#!"
							  data-target="#reportsDropDown">
								<i class="fas fa-chart-line u-sidebar-nav-menu__item-icon"></i>
								<span class="u-sidebar-nav-menu__item-title">Reportes</span>
								<i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
								<span class="u-sidebar-nav-menu__indicator"></span>
						  </a>
						  <ul id="reportsDropDown" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level" style="display: none;">
								<li class="u-sidebar-nav-menu__item">
									 <a class="u-sidebar-nav-menu__link" href="{{ route('allreserves') }}">
										  <span class="u-sidebar-nav-menu__item-title">Reservas Realizadas</span>
									 </a>
								</li>
								<li class="u-sidebar-nav-menu__item">
									 <a class="u-sidebar-nav-menu__link" href="{{ route('products.reservationsPerDay') }}">
										  <span class="u-sidebar-nav-menu__item-title">Reservas Por Dia</span>
									 </a>
								</li>
						  </ul>
					 </li>
					 <!-- Final de reportes -->
					<hr/>
				</ul>
			</nav>
		</div>
	</aside>
	<!-- End Sidebar -->

	@include('sweetalert::cdn')
	@include('sweetalert::view')

	<div class="u-content">
		<div class="u-body">
			@yield('content')
		</div>

		<!-- Footer -->
		<footer class="u-footer d-md-flex align-items-md-center text-center text-md-left text-muted">
			<small class="text-muted ml-auto">&copy; 2020
				<a class="text-muted" href="https://github.com/rafaarraez/" target="_blank">Mevo
				</small>
			</footer>
			<!-- End Footer -->
		</div>
	</main>

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

	@yield('scripts')

</body>
</html>
