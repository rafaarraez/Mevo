@extends('static.layout-auth')

@section('content')

<!-- <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center bg-white mnh-100vh">
    <a class="u-login-form py-3 mb-auto" href="{{ route('home')}}">
        <img class="img-fluid" src="{{ asset('img/logo/LogoMEVO.png')}}" width="160" alt="Mevo">
    </a>

    <div class="u-login-form">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group mb-4">
                <label for="email">Correo electrónico</label>
                <input id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" type="email" placeholder="Tu correo electronico" value="{{ old('email') }}" required autofocus>

                @if ($errors->has('email'))
                <small class="form-text invalid-feedback">{{ $errors->first('email') }}</small>
                @endif
            </div>

            <div class="form-group mb-4">
                <label for="password">Contraseña</label>
                <input id="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" type="password" placeholder="Tu contraseña" required>
                @if ($errors->has('password'))
                <small class="form-text invalid-feedback">{{ $errors->first('password') }}</small>
                @endif
            </div>

            <div class="form-group d-flex justify-content-between align-items-center mb-4">
                {{-- <div class="custom-control custom-checkbox">
                    <input id="rememberMe" class="custom-control-input" name="rememberMe" type="checkbox" {{ old('rememberMe') ? 'checked' : '' }}>
                    <label class="custom-control-label" for="rememberMe">Recordarme</label>
                </div> --}}

                <a class="link-muted small" href="{{ route('password.request') }}">¿Olvidó su contraseña?</a>
            </div>

            <button class="btn btn-primary btn-block" type="submit">Iniciar sesión</button>
        </form>
    </div>

    <div class="u-login-form text-muted py-3 mt-auto">
        <small><i class="far fa-question-circle mr-1"></i> Si no puede iniciar sesión, <a href="#" type="button" data-toggle="modal" data-target="#exampleModal"> contáctenos</a>.</small>
    </div>
-->

<div class="auth-bg position-relative min-vh-100 d-flex justify-content-center align-items-center py-4 py-md-5" style="background-image: url('../img/assets/login-bg.jpg')">
    <main class="flex-grow-1 w-100">
        <div class="position-relative" style="z-index: 10;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                        <div class="text-center mb-4 mb-md-5">
                            <a href="/static/products" class="d-inline-block">
                                <img src="{{ asset('img/logo/LogoMEVOblanco2.png') }}" class="img-fluid" title="Ir al Inicio" alt="MEVO Logo" style="max-height: 5rem">
                            </a>
                        </div>

                        <div class="card card-body backdrop-blur-4 text-white p-4 pb-lg-5" style="background: rgba(255, 255, 255, .1);">
                            <h5 class="mb-4">Ingresar</h5>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group mb-4">
                                    <label for="email">Correo electrónico</label>
                                    <input id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" type="email" placeholder="Tu correo electronico" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                    <small class="form-text invalid-feedback">{{ $errors->first('email') }}</small>
                                    @endif
                                </div>

                                <div class="form-group mb-4">
                                    <label for="password">Contraseña</label>
                                    <input id="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" type="password" placeholder="Tu contraseña" required>
                                    @if ($errors->has('password'))
                                    <small class="form-text invalid-feedback">{{ $errors->first('password') }}</small>
                                    @endif
                                </div>

                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember-me">
                                        <label class="form-check-label text-light small mb-0" for="remember-me">Recordarme</label>
                                    </div>
                                    <div>
                                        <a href="" class="text-light text-decoration-none small">¿Olvidó su contraseña?</a>
                                    </div>
                                </div>

                                <button class="btn btn-primary btn-block" type="submit">Iniciar sesión</button>
                            </form>
                            <div class="small mt-4 font-sm">
                                ¿No tienes cuenta? <a href="/static/signup" class="text-light">Crear cuenta</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

@endsection