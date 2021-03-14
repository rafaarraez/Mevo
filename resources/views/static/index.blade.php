<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="Nuestra empresa no ofrece solo materias primas, ofrecemos energía química que usted transforma."/>
    <meta name="keywords" content="quimicos, valencia, venezuela, caracas, venezuela, quimicos venezuela, materia prima, quimicos prima, entrega quimicos"/>
    <meta name="robots" content="index"/>
    <meta http-equiv=”Content-Language” content=”es”/>
    <meta name=”distribution” content=”global”/>
    <meta property="og:title" content="Mevo" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://conmevo.com/" />
    <meta property="og:image" content="{{ asset('img/icon/apple-icon-180x180.png') }}" />
    <meta property="og:description" content="Nuestra empresa no ofrece solo materias primas, ofrecemos energía química que usted transforma." />

    <!-- Icons -->
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
    <link rel="shortcut icon" href="{{ asset('img/icon/favicon.ico')}}" type="image/x-icon">

    <title>Mevo</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- App Styles -->
    <link rel="stylesheet" href="{{ asset('font-awesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:wght@300;400;600;800&display=swap" rel="stylesheet">

</head>
<body class="landing-body">

    <section class="landing-hero bg-image-cover" style="background-image: url('{{ asset('img/assets/photo_wf8df4ds.jpg') }}')">

        @if (!Auth::check())
        <div class="position-absolute top-0 end-0 pt-3">
            <div class="container-fluid">
                <a href="/login" class="btn btn-blue-landing btn-sm px-4">
                    <svg class="me-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                        <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                    </svg> Ingresar
                </a>
            </div>
        </div>
        @endif

        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-9 col-sm-8 col-md-6 col-xxl-4">
                    <div class="mb-5">
                        <!-- <img class="img-fluid" src="{{ asset('img/logo/logo-light.svg')}}" title="MEVO" alt="Logo MEVO"> -->
                        <svg id="hero-logo-svg" viewBox="0 0 486 171" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M289.91 3.99451H252.422L306.905 138.31L363.388 3.99451H346.393L317.902 75.3967L289.91 3.99451Z" fill="white" stroke-width="1" stroke="white" />
                            <path d="M0 3.99451H34.4893L65.4798 75.3966L94.9707 3.99451H130.96V135.814H94.9707V47.9343L58.4686 134.658C58.1738 135.358 57.4874 135.814 56.7268 135.814C55.972 135.814 55.2895 135.365 54.9912 134.672L19.9938 53.4268V135.814H0V3.99451Z" fill="white" stroke-width="1" stroke="white" />
                            <path class="e" d="M138.957 3.99451H246.924V19.9726H138.957V3.99451Z" fill="#2B8DC4" stroke-width="1" stroke="#2B8DC4" />
                            <path class="e" d="M138.957 61.9151H246.924V77.8932H138.957V61.9151Z" fill="#2B8DC4" stroke-width="1" stroke="#2B8DC4" />
                            <path class="e" d="M246.924 117.838H138.957V133.817H246.924V117.838Z" fill="#2B8DC4" stroke-width="1" stroke="#2B8DC4" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M415.372 140.807C454.296 140.807 485.85 109.286 485.85 70.4035C485.85 31.5207 454.296 0 415.372 0C376.448 0 344.893 31.5207 344.893 70.4035C344.893 109.286 376.448 140.807 415.372 140.807ZM415.372 123.83C436.865 123.83 445.862 99.9103 445.862 70.4035C445.862 40.8967 437.365 16.9767 415.372 16.9767C393.378 16.9767 384.881 40.8967 384.881 70.4035C384.881 99.9103 393.878 123.83 415.372 123.83Z"  stroke-width="1" stroke="white" />
                            <path d="M3.249 170.766H0.999695V153.727H3.249V170.766Z" fill="white" stroke-width="1" stroke="white" />
                            <path d="M59.8298 170.766H57.5688L48.9816 157.636V170.766H46.7206V153.727H48.9816L57.5922 166.916V153.727H59.8298V170.766Z" fill="white" stroke-width="1" stroke="white" />
                            <path d="M103.173 170.766V153.727H107.987C109.471 153.727 110.783 154.055 111.924 154.71C113.064 155.365 113.943 156.298 114.56 157.507C115.184 158.716 115.501 160.105 115.509 161.673V162.761C115.509 164.369 115.196 165.777 114.571 166.986C113.954 168.195 113.068 169.124 111.912 169.771C110.764 170.419 109.424 170.75 107.894 170.766H103.173ZM105.422 155.576V168.929H107.788C109.522 168.929 110.869 168.39 111.83 167.314C112.798 166.237 113.283 164.704 113.283 162.715V161.72C113.283 159.785 112.826 158.283 111.912 157.214C111.006 156.138 109.717 155.591 108.046 155.576H105.422Z" fill="white" stroke-width="1" stroke="white" />
                            <path d="M170.273 153.727V165.313C170.266 166.92 169.758 168.234 168.751 169.256C167.751 170.278 166.392 170.852 164.674 170.977L164.076 171C162.21 171 160.722 170.497 159.613 169.49C158.504 168.484 157.941 167.099 157.926 165.336V153.727H160.152V165.266C160.152 166.498 160.491 167.458 161.171 168.145C161.85 168.823 162.819 169.163 164.076 169.163C165.349 169.163 166.322 168.823 166.993 168.145C167.673 167.466 168.012 166.51 168.012 165.277V153.727H170.273Z" fill="white" stroke-width="1" stroke="white" />
                            <path d="M218.197 163.171C216.268 162.617 214.862 161.938 213.979 161.135C213.105 160.323 212.667 159.325 212.667 158.139C212.667 156.797 213.202 155.689 214.272 154.815C215.35 153.934 216.748 153.493 218.466 153.493C219.638 153.493 220.68 153.719 221.594 154.172C222.516 154.624 223.227 155.248 223.726 156.044C224.234 156.84 224.488 157.71 224.488 158.654H222.227C222.227 157.624 221.899 156.816 221.243 156.231C220.587 155.638 219.661 155.342 218.466 155.342C217.357 155.342 216.49 155.588 215.865 156.079C215.249 156.563 214.94 157.238 214.94 158.104C214.94 158.798 215.233 159.387 215.819 159.871C216.412 160.347 217.416 160.784 218.829 161.181C220.251 161.579 221.36 162.02 222.157 162.504C222.961 162.98 223.555 163.538 223.937 164.177C224.328 164.817 224.523 165.57 224.523 166.436C224.523 167.817 223.984 168.925 222.906 169.76C221.828 170.587 220.388 171 218.583 171C217.412 171 216.318 170.778 215.303 170.333C214.288 169.88 213.503 169.264 212.948 168.484C212.402 167.704 212.128 166.818 212.128 165.827H214.389C214.389 166.857 214.768 167.673 215.526 168.273C216.291 168.866 217.31 169.163 218.583 169.163C219.771 169.163 220.68 168.921 221.313 168.437C221.946 167.953 222.262 167.294 222.262 166.459C222.262 165.625 221.969 164.981 221.383 164.528C220.798 164.068 219.735 163.616 218.197 163.171Z" fill="white" stroke-width="1" stroke="white" />
                            <path d="M278.55 155.576H273.067V170.766H270.83V155.576H265.359V153.727H278.55V155.576Z" fill="white" stroke-width="1" stroke="white" />
                            <path d="M326.684 163.873H322.677V170.766H320.416V153.727H326.063C327.984 153.727 329.461 154.164 330.491 155.038C331.53 155.911 332.05 157.183 332.05 158.853C332.05 159.914 331.761 160.838 331.183 161.626C330.613 162.414 329.816 163.003 328.793 163.393L332.799 170.626V170.766H330.386L326.684 163.873ZM322.677 162.036H326.133C327.25 162.036 328.137 161.747 328.793 161.17C329.457 160.592 329.789 159.82 329.789 158.853C329.789 157.799 329.472 156.992 328.84 156.43C328.215 155.868 327.309 155.584 326.122 155.576H322.677V162.036Z" fill="white" stroke-width="1" stroke="white" />
                            <path d="M376.974 170.766H374.725V153.727H376.974V170.766Z" fill="white" stroke-width="1" stroke="white" />
                            <path d="M430.075 166.319H422.929L421.324 170.766H419.004L425.518 153.727H427.486L434.012 170.766H431.704L430.075 166.319ZM423.609 164.47H429.407L426.502 156.5L423.609 164.47Z" fill="white" stroke-width="1" stroke="white" />
                            <path d="M477.917 168.929H486V170.766H475.656V153.727H477.917V168.929Z" fill="white" stroke-width="1" stroke="white" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <div class="hero-sublogo">
            <h4 class="text-uppercase">Aportamos la energía que transformas</h4>
            <ul class="list-inline social-links-list mt-4">
                <li class="list-inline-item">
                    <a href="" class="text-light">
                        <i class="fab fa-facebook"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="" class="text-light">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="" class="text-light">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
            </ul>
        </div>

        <!-- saber mas -->
        <div class="position-absolute bottom-0 left-0 right-0 d-block text-center py-3">
            <div class="container">
                <a href="#main" class="d-inline-block text-decoration-none text-white">
                    <span class="small">Saber más</span>
                    <div>
                        <i class="fa fa-arrow-down"></i>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <main id="main" class="position-relative" role="main">

        <!-- Navbar -->
        <nav class="navbar navbar-expand-md navbar-dark bg-secondary sticky-top">
            <div class="container">

                <div class="logo-wrapper">
                    <a class="navbar-brand me-0" href="/">
                        <img src="{{ asset('img/logo/logo-light.svg')}}" title="MEVO" alt="Logo MEVO" style="width: 104px">
                    </a>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- mobile menu -->
                <ul class="navbar-nav align-items-center flex-row d-md-none ms-auto">
                    @if (Auth::check())
                        <li class="nav-item d-md-none dropdown">
                            <a href="#" class="nav-link text-uppercase fs-md" id="mobile-profile-dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php $first_name = explode(" ", Auth::user()->name); ?>
                                {{ $first_name[0] }}<small class="fa fa-angle-down ms-2"></small>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end position-absolute" aria-labelledby="mobile-profile-dropdown">
                                <div style="min-width: 200px"></div>
                                <div><h6 class="dropdown-header">{{ Auth::user()->name }}</h6></div>
                                @if(Auth::user()->hasRole('admin'))
                                    <a class="dropdown-item py-2" href="{{ route('home') }}">
                                        <i class="fas fa-desktop text-muted me-2"></i>Panel de Admin
                                    </a>
                                @else
                                <a class="dropdown-item py-2" href="{{ route('user.profile') }}">
                                    <i class="fas fa-history text-muted me-2"></i>Mis pedidos
                                </a>
                                <a class="dropdown-item py-2" href="{{ route('user.profile.edit') }}">
                                    <i class="far fa-user-circle text-muted me-2"></i>Editar perfil
                                </a>
                                @endif
                                <a class="dropdown-item py-2" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form-mobile').submit();">
                                    <i class="far fa-share-square text-muted me-2"></i>Salir
                                </a>
                                <form id="logout-form-mobile" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @else
                        <li class="nav-item">
                            <a href="/login" class="btn btn-primary btn-sm">Ingresar</a>
                        </li>
                    @endif
                </ul>

                <!-- desktop menu -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav py-3 py-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-center text-lg-left text-uppercase fs-md" href="{{ route('landing') }}">Home</a>
                        </li>
                        @if(Auth::check())
                            @if(!Auth::user()->hasRole('admin'))
                            <li class="nav-item">
                                <a class="nav-link text-center text-lg-left text-uppercase fs-md" href="{{ route('user.products') }}">Productos</a>
                            </li>
                            @endif
                        @endif
                    </ul>
                    <ul class="navbar-nav align-items-center d-none d-md-flex ms-auto">

                        @if(Auth::check())
                        @if(!Auth::user()->hasRole('admin'))
                        <li class="nav-item mr-3 d-none d-lg-inline-block">
                            <a href="{{ route('user.profile.edit') }}" class="nav-link text-uppercase fs-md">Mis pedidos</a>
                        </li>
                        @endif
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link text-uppercase fs-md" id="profile-dropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <!-- <span class="avatar mr-1">
                                    <span class="avatar-text">ad</span>
                                    <img src="{{ asset('img/avatars/img5.jpg') }}" class="avatar-img rounded-circle" alt="Foto de perfil">
                                </span> -->
                                <span class="d-none d-sm-inline-block">
                                    @if (Auth::check()) {{ Auth::user()->name }}<small class="fa fa-angle-down ms-2"></small> @endif
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end position-absolute" aria-labelledby="profile-dropdown">
                                <div style="min-width: 200px"></div>
                                <div><h6 class="dropdown-header">{{ Auth::user()->name }}</h6></div>
                                @if(Auth::user()->hasRole('admin'))
                                    <a class="dropdown-item py-2" href="{{ route('home') }}">
                                        <i class="fas fa-desktop text-muted me-2"></i>Panel de Admin
                                    </a>
                                @else
                                <a class="dropdown-item py-2" href="{{ route('user.profile') }}">
                                    <i class="fas fa-history text-muted me-2"></i>Mis pedidos
                                </a>
                                <a class="dropdown-item py-2" href="{{ route('user.profile.edit') }}">
                                    <i class="far fa-user-circle text-muted me-2"></i>Editar perfil
                                </a>
                                @endif
                                <a class="dropdown-item py-2" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    <i class="far fa-share-square text-muted me-2"></i>Salir
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @else
                        <li class="nav-item">
                            <a href="/login" class="btn btn-blue-landing btn-sm">
                                <svg class="me-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                                    <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                                </svg> Ingresar
                            </a>
                        </li>
                        @endif
                    </ul>
                </div>

            </div>
        </nav>
        <!-- End navbar -->

        <section class="map-bg py-9 py-xl-10">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <h1 class="section-title lh-1 display-3 mb-4">Convierte<br> <span class="text-blue-landing" style="font-size: 130%">Energía Química</span><br> en grandes productos</h1>
                        <p class="section-desc mb-4">Nuestra empresa no ofrece solo materias primas, ofrecemos energía química que usted transforma.</p>
                        <a href="" class="btn btn-primary px-4">Registrarse</a>
                    </div>
                    <div class="col-lg-6 offset-lg-1">
                        <div class="img-frame mt-5 mt-lg-0">
                            <img src="https://advancedrum.com/wp-content/uploads/2017/08/warehouse_load-1.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-blue-landing position-relative py-7 py-xl-9">
            <div class="container">

                <div class="section-name-wrapper">
                    <h1 class="display-1 section-name mb-0">Cómo funciona</h1>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center mb-5 mb-lg-8">
                            <p class="section-desc h5">Trabajamos en la frontera de la tecnología e innovación para asegurarnos de que todos los productos lleguen a nuestros clientes finales.</p>
                        </div>
                    </div>
                </div>

                <ol class="landing-steps list-unstyled d-flex my-5 my-lg-7">
                    <li class="step-item d-flex flex-lg-column align-items-lg-center px-3 px-lg-4 mb-4">
                        <div class="step-number me-4 me-lg-0 mb-4 mb-lg-5">1</div>
                        <h5 class="step-content h3"><a href="" class="text-light">Ingresa con tu cuenta</a>  a nuestra web</h5>
                    </li>
                    <li class="step-item d-flex flex-lg-column align-items-lg-center px-3 px-lg-4 mb-4">
                        <div class="step-number me-4 me-lg-0 mb-4 mb-lg-5">2</div>
                        <h5 class="step-content h3">Sé el primero en conocer lo que llega</h5>
                    </li>
                    <li class="step-item d-flex flex-lg-column align-items-lg-center px-3 px-lg-4 mb-4">
                        <div class="step-number me-4 me-lg-0 mb-4 mb-lg-5">3</div>
                        <h5 class="step-content h3">Selecciona el producto a reservar</h5>
                    </li>
                    <li class="step-item d-flex flex-lg-column align-items-lg-center px-3 px-lg-4 mb-4">
                        <div class="step-number me-4 me-lg-0 mb-4 mb-lg-5">4</div>
                        <h5 class="step-content h3">Recibe tu producto en almacen</h5>
                    </li>
                </ol>

                <div class="text-center">
                    <a href="" class="btn btn-primary px-4">Comenzar</a>
                </div>
            </div>
        </section>

        <section class="position-relative py-9 py-xl-10">
            <div class="container">

                <div class="section-name-wrapper">
                    <h1 class="display-1 section-name --inverted mb-0">La empresa</h1>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7 col-xxl-6">
                        <h2 class="section-title text-blue-landing text-uppercase">Acerca de nosotros</h2>
                        <p class="mb-5">En Mevo Industrial, trabajamos día a día desarrollando nuevas alianzas con todos nuestros proveedores estratégicos alrededor del mundo; así como también, implementamos estrategias con nuestros clientes para mejorar su cadena de suministro así como también sus indicadores internos, tanto financieros como logísticos. </p>
                        <h2 class="section-title text-blue-landing text-uppercase">Cómo lo hacemos</h2>
                        <p>Sumamos estrategias comerciales y tecnológicas. Para reducir los costos y, mejorar su eficiencia y trazabilidad.</p>
                        <p>Nuestra empresa no ofrece solo materias primas, ofrecemos energía química que usted transforma.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-image-cover py-9" style="background-image: url('{{ asset('img/assets/photo_wf8df4ds.jpg') }}')">
            <div class="container">
                <div class="row align-items-lg-center">
                    <div class="col-lg-6 col-xl-5 offset-xl-1">
                        <h1 class="section-title lh-1 display-3">Déjanos un <br><span class="text-blue-landing" style="font-size: 150%">mensaje</span></h1>
                        <p class="h5">Estaríamos encantados en ayudarte en lo que necesites.</p>
                    </div>
                    <div class="col-lg-6 col-xl-4 offset-xl-1">
                        <div class="img-frame">
                            <div class="contact-form p-5">
                                <h3 class="mb-4">Contacto</h3>
                                <form action="/send-form" method="POST">
                                    {{ csrf_field() }}
                                    <div class="mb-3">
                                        <label for="name" class="sr-only">Nombre</label>
                                        <input type="text" name="name" class="form-control form-control-inverse" id="name" placeholder="Nombre">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="sr-only">Correo electrónico</label>
                                        <input type="email" name="email" class="form-control form-control-inverse" id="email" placeholder="Correo electrónico">
                                    </div>
                                    <div class="mb-3">
                                        <label for="message" class="sr-only">Mensaje</label>
                                        <textarea name="message" id="message" rows="4" class="form-control form-control-inverse" placeholder="Mensaje"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary px-4">Enviar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <footer class="bg-blue-landing text-center py-5">
        <div class="container">
            <ul class="list-inline social-links-list mb-5">
                <li class="list-inline-item">
                    <a href="" class="text-light">
                        <i class="fab fa-facebook"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="" class="text-light">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="" class="text-light">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
            </ul>
            <div class="small">Copyright &copy; 2020 MEVO</div>
        </div>
    </footer>

    <!-- Global Vendor -->
    <script src="{{ asset('js/app.js') }}" defer></script>

</body>
</html>
