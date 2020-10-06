@extends('static.layout-auth')

@section('content')
<div class="auth-bg position-relative min-vh-100 d-flex justify-content-center align-items-center py-4 py-md-5" style="background-image: url('../img/assets/signup-bg.jpg')">
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
                            <h5 class="mb-4">Registrarse</h5>
                            <form action="">
                                <div class="mb-3">
                                    <label for="full-name" class="sr-only">Nombre y apellido</label>
                                    <input id="full-name" type="text" class="form-control" placeholder="Nombre y apellido">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="sr-only">Correo electrónico</label>
                                    <input id="email" type="email" class="form-control" placeholder="Correo electrónico">
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="sr-only">Número de celular</label>
                                    <input id="phone" type="text" class="form-control" placeholder="Número de celular">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="sr-only">Contraseña</label>
                                    <input id="password" type="password" class="form-control" placeholder="Contraseña">
                                </div>
                                <button class="btn btn-primary btn-block">Registrarse</button>
                            </form>
                            <div class="small mt-4 font-sm">
                                ¿Ya tienes cuenta? <a href="/static/login" class="text-light">Iniciar sesión</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection
