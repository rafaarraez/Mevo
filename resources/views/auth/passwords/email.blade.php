@extends('layouts.guest')

@section('content')

<div class="col-lg-6 d-flex flex-column justify-content-center align-items-center bg-white mnh-100vh">
    <a class="u-login-form py-3 mb-auto" href="{{ route('home')}}">
        <img class="img-fluid" src="{{ asset('img/logo.png')}}" width="160" alt="Autenticación de Usuarios y Roles en Laravel">
    </a>

    <div class="u-login-form">
        <form class="mb-3" method="POST" action="{{ route('password.email') }}">
            @csrf

            <h1 class="h2">Recupera tu contraseña</h1>
            <p class="small">Si no recibe un correo electrónico, asegúrese de revisar también su carpeta de correo no deseado.</p>

            <div class="form-group mb-4">
                <label for="email">Tu correo electrónico</label>
                <input id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" type="email" placeholder="carlos@example.com" value="{{ old('email') }}" required>
                @if ($errors->has('email'))
                <small class="form-text invalid-feedback">{{ $errors->first('email') }}</small>
                @endif
            </div>

            <button class="btn btn-primary btn-block" type="submit">Enviar contraseña</button>
        </form>

        <p class="small text-muted">
            ¿Deseas regresar? <a href="{{ route('home')}}">Haz clic aqui!</a>
        </p>
    </div>

    <div class="u-login-form text-muted py-3 mt-auto">
        <small><i class="far fa-question-circle mr-1"></i> Si no puede recuperar su contraseña <a href="https://github.com/Carlosferrerhernandez" target="_blank">contáctanos</a>.</small>
    </div>
</div>

@endsection