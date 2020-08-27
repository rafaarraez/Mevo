@extends('static.layout-auth')

@section('content')
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
                            <form action="">
                                <div class="mb-3">
                                    <label for="email" class="sr-only">Correo electrónico</label>
                                    <input id="email" type="email" class="form-control" placeholder="Correo electrónico" autocomplete="false">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="sr-only">Contraseña</label>
                                    <input id="password" type="password" class="form-control" placeholder="Contraseña" autocomplete="false">
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" value="" id="remember-me">
                                        <label class="form-check-label text-light small mb-0" for="remember-me">Recordarme</label>
                                    </div>
                                    <div>
                                        <a href="" class="text-light text-decoration-none small">¿Olvidó su contraseña?</a>
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-block">Ingresar</button>
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
