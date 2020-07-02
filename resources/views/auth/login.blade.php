@extends('layouts.guest')

@section('content')

<div class="col-lg-6 d-flex flex-column justify-content-center align-items-center bg-white mnh-100vh">
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Contactanos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label class="text-muted" for="name">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Por Favor ingrese su nombre">
                    </div>
                    <div class="form-group">
                        <label class="text-muted" for="email">Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Por Favor ingrese su email">
                    </div>
                    <div class="form-group">
                        <label class="text-muted" for="menssage">Mensaje</label>
                        <textarea name="menssage" placeholder="Escriba su mensaje..." class="form-control" id="" cols="30" rows="10"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-secondary">Enviar</button>
            </div>
            </div>
        </div>
    </div>
</div>

@endsection