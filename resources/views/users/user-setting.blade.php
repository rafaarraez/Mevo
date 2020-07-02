@extends('layouts.user')

@section('content')
<form method="POST" action="{{ route('usuarios.updateByuser', Auth::user()->id) }}">

	@csrf
    <input type="hidden" name="type" value="2">

	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<header class="card-header d-flex align-items-center">
					<i class="far fa-user-circle u-sidebar-nav-menu__item-icon"></i>
					<h2 class="h3 card-header-title">Actualizar Datos</h2>
				</header>

				<div class="card-body">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-6 col-sm-12 form-group mb-4">
								<label for="name">Nombre y Apellido</label>
								<input id="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" name="name" placeholder="Ingrese nombre" value="{{ $userProfile->name }}" required>
								@if ($errors->has('name'))
				                <small class="form-text invalid-feedback">{{ $errors->first('name') }}</small>
				                @endif
							</div>
							<div class="col-md-6 col-sm-12 form-group mb-4">
								<label for="name">Telefóno</label>
								<input id="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" name="mobile" placeholder="Numero de Telefóno" value="{{ $userProfile->mobile }}" required>
								@if ($errors->has('name'))
				                <small class="form-text invalid-feedback">{{ $errors->first('name') }}</small>
				                @endif
							</div>
						</div>

                        <div class="row">
							<div class="col-md-6 col-sm-12 form-group mb-4">
								<label for="password">Nueva Contraseña</label>
								<input id="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="text" name="password" placeholder="Contraseña" required>
								@if ($errors->has('password'))
				                <small class="form-text invalid-feedback">{{ $errors->first('password') }}</small>
				                @endif
							</div>
							<div class="col-md-6 col-sm-12 form-group mb-4">
								<label for="password_confirmation">Repetir Contraseña</label>
								<input id="password_confirmation" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" type="text" name="password_confirmation" placeholder="Repita contraseña" required>
								@if ($errors->has('password_confirmation'))
				                <small class="form-text invalid-feedback">{{ $errors->first('password_confirmation') }}</small>
				                @endif
							</div>
						</div>

                        <hr>
						<div class="row">
                            <div class="col-md-6 col-sm-12 form-group mb-4">
								<label for="company_name">Nombre de la Empresa</label>
								<input id="company_name" class="form-control{{ $errors->has('company_name') ? ' is-invalid' : '' }}" type="text" name="company_name" placeholder="Nombre de su Compañia" value="{{ $userProfile->company_name }}" required>
								@if ($errors->has('company_name'))
				                <small class="form-text invalid-feedback">{{ $errors->first('company_name') }}</small>
				                @endif
							</div>
							<div class="col-md-6 col-sm-12 form-group mb-4">
								<label for="organitational_level">Nivel Organizacional</label>
								<select name="organitational_level" class="form-control custom-select{{ $errors->has('organitational_level') ? ' is-invalid' : '' }}" id="roles">
					            	<option disabled>Seleccione una Categoria</option>
                                    <option value="1">Industria</option>
                                    <option value="2">Mediana</option>
                                    <option value="3">Pequeña</option>
					            </select>
					            @if ($errors->has('organitational_level'))
					           	<small class="form-text invalid-feedback">{{ $errors->first('organitational_level') }}</small>
					            @endif       
							</div>
						</div>

                        <div class="row">
                            <div class="col-md-6 col-sm-12 form-group mb-4">
								<label for="job">Job</label>
								<input id="job" class="form-control{{ $errors->has('job') ? ' is-invalid' : '' }}" type="text" name="job" placeholder="job" value="{{ $userProfile->job }}" required>
								@if ($errors->has('job'))
				                <small class="form-text invalid-feedback">{{ $errors->first('job') }}</small>
				                @endif
							</div>

							<div class="col-md-6 col-sm-12 form-group mb-4">
								<label for="job">position</label>
								<input id="position" class="form-control{{ $errors->has('position') ? ' is-invalid' : '' }}" type="text" name="position" placeholder="Cargo" value="{{ $userProfile->position }}" required>
								@if ($errors->has('position'))
				                <small class="form-text invalid-feedback">{{ $errors->first('position') }}</small>
				                @endif
							</div>
						</div>

                        <hr>
                        <div class="row">
                            <div class="col-md-6 col-sm-12 form-group mb-4">
								<label for="country">Pais</label>
								<select name="country" class="form-control custom-select{{ $errors->has('country') ? ' is-invalid' : '' }}" id="country">
									<option {{ $userProfile->country === 'VE' ? 'selected':'' }} value="VE">Venezuela
					            </select>
					            @if ($errors->has('country'))
					           	<small class="form-text invalid-feedback">{{ $errors->first('country') }}</small>
					            @endif       
							</div>

							<div class="col-md-6 col-sm-12 form-group mb-4">
								<label for="state">Estado</label>
								<input id="state" class="form-control{{ $errors->has('state') ? ' is-invalid' : '' }}" type="text" name="state" placeholder="Estado" value="{{ $userProfile->state }}" required>
								@if ($errors->has('state'))
				                <small class="form-text invalid-feedback">{{ $errors->first('state') }}</small>
				                @endif
							</div>
						</div>

                        <div class="row">
                            <div class="col-md-6 col-sm-12 form-group mb-4">
								<label for="city">city</label>
								<input id="city" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" type="text" name="city" placeholder="Pais" value="{{ $userProfile->city }}" required>
								@if ($errors->has('city'))
				                <small class="form-text invalid-feedback">{{ $errors->first('city') }}</small>
				                @endif
							</div>
						</div>

						<hr>
						<div class="demo-btn-space">
							<button type="submit" class="btn btn-primary">Actualizar Perfil</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
@endsection
