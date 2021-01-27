@extends('static.layout-auth')

@section('content')

<div class="auth-bg position-relative min-vh-100 d-flex justify-content-center align-items-center py-4 py-md-5" style="background-image: url('../img/assets/login-bg.jpg')">
    <main class="flex-grow-1 w-100">
        <div class="position-relative" style="z-index: 10;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                        <div class="text-center mb-4 mb-md-5">
                            <a href="/" class="d-inline-block">
                                <img src="{{ asset('img/logo/LogoMEVOblanco2.png') }}" class="img-fluid" title="Ir al Inicio" alt="MEVO Logo" style="max-height: 5rem">
                            </a>
                        </div>
                        <div class="fs-14 mb-2">
                            <a href="/login" class="pr-4" style="color: #f8f9fa; text-decoration: none;">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="bi bi-chevron-left"><path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"></path></svg>
                                Volver
                            </a>
                        </div>
                        <div class="card card-body backdrop-blur-4 text-white p-4 pb-lg-5" style="background: rgba(255, 255, 255, .1);">
                            <h5>Recuperar contraseña</h5>
                            <span class="fs-14 text-muted mb-0">Ingrese la dirección de correo electrónico asociada a su cuenta y le enviaremos un enlace para recuperar su contraseña</span>
                            <hr>
                            <form method="POST" action="{{ route('forgot-password') }}">
                                @csrf
                                <div class="form-group mb-4">
                                    <label for="email">Correo electrónico</label>
                                    <input id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" type="email" placeholder="Tu correo electronico" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                    <small class="form-text invalid-feedback">{{ $errors->first('email') }}</small>
                                    @endif
                                </div>

                                @if(isset($success))
                                    <span class="text-success font-weight-bold my-3 mx-2">¡Se ha enviado un correo de recuperación de contraseña!.</span> 
                                @endif  
                                @if(isset($error))
                                    <span class="text-success font-weight-bold my-3 mx-2">No existe un usuario con esa direccion de email.</span> 
                                @endif  

                                <button class="btn btn-primary btn-block" type="submit">Enviar enlace de recuperación</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

@endsection