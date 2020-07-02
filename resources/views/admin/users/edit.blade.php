@extends('layouts.app')

@section('content')

<!-- Form -->
<form method="POST" action="{{ route('usuarios.update', $usuario->id) }}">
	@csrf

	<input type="hidden" name="_method" value="PUT">

	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<header class="card-header d-flex align-items-center">
					<i class="far fa-user-circle u-sidebar-nav-menu__item-icon"></i>
					<h2 class="h3 card-header-title">Registrar usuario</h2>
				</header>

				<div class="card-body">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-6 col-sm-12 form-group mb-4">
								<label for="name">Nombre</label>
								<input id="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" name="name" placeholder="Ingrese nombre" value="{{ $usuario->name }}" required>
								@if ($errors->has('name'))
				                <small class="form-text invalid-feedback">{{ $errors->first('name') }}</small>
				                @endif
							</div>
							<div class="col-md-6 col-sm-12 form-group mb-4">
								<label for="email">Correo electronico</label>
								<input id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="text" placeholder="Ingrese correo electronico" name="email" value="{{ $usuario->email }}" required>
								@if ($errors->has('email'))
				                <small class="form-text invalid-feedback">{{ $errors->first('email') }}</small>
				                @endif
							</div>
						</div>

						<div class="row">
							<div class="col-md-6 col-sm-12 form-group mb-4">
								<label for="password">Contraseña</label>
		                        <input id="password" class="form-control form-icon-input-right{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" placeholder="Actualizar contraseña" aria-describedby="passwordHelp">
		                        @if ($errors->has('password'))
				                <small class="form-text invalid-feedback">{{ $errors->first('password') }}</small>
				                @endif
							</div>
							<div class="col-md-6 col-sm-12 form-group mb-4">
								<label for="rol_id">Asignar rol</label>
								<select name="rol_id" class="form-control custom-select{{ $errors->has('rol_id') ? ' is-invalid' : '' }}" id="roles">
					            	<option></option>
					            </select>
					            @if ($errors->has('rol_id'))
					           	<small class="form-text invalid-feedback">{{ $errors->first('rol_id') }}</small>
					            @endif       
							</div>
						</div>
						<hr>
						<div class="demo-btn-space">
							<button type="submit" class="btn btn-primary">Registrar</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
<!-- End Form -->

@endsection

@section('scripts')

<script type="text/javascript">
	$(document).ready(function () {
        // inicializamos el plugin
        $('#roles').select2({
        	placeholder: "Seleccionar un rol",
        	theme: "bootstrap",
            ajax: {
            	dataType: 'json',
            	url: '{{ url("getroles") }}',
            	delay: 250,
            	data: function(params) {
            		return {
            			term: params.term
            		}
            	},
            	processResults: function (data, page) {
            		return {
            			results: data
            		};
            	},
            }
        });
    });
</script>

@endsection