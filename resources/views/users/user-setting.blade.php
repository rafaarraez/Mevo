@extends('static.layout')

@section('content')

<div class="container">
    <h1 class="text-secondary fw-bold h3 mb-4">Completar perfil</h1>

    <div class="row">
        <div class="col-md-8 col-lg-8">
            <div class="card card-body p-md-5 mb-3 mb-lg-4">
                <form method="POST" action="{{ route('usuarios.updateByuser', Auth::user()->id) }}">
                    {{ csrf_field() }}
                    <!-- general info -->
                    <div class="mb-4">
                        <h5 class="text-secondary mb-3">Datos generales</h5>
						<div class="alert alert-danger fw-bold mb-4">(*) Se recomienda actualizar su contraseña</div>
                        <div class="row">
							<div class="col-md-6 col-sm-12 form-group mb-4">
								<label for="name">Nombre y Apellido</label>
								<input id="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" name="name" value="{{ $userProfile->name }}" required>
								@if ($errors->has('name'))
				                <small class="form-text invalid-feedback">{{ $errors->first('name') }}</small>
				                @endif
							</div>
							<div class="col-md-6 col-sm-12 form-group mb-4">
								<label for="mobile">Telefóno</label>
								<input id="mobile" value="{{ old('mobile') }}" class="form-control{{ $errors->has('mobile') ? ' is-invalid' : '' }}" type="text" name="mobile" value="{{ $userProfile->mobile }}" required>
								@if ($errors->has('mobile'))
				                <small class="form-text invalid-feedback">{{ $errors->first('mobile') }}</small>
				                @endif
							</div>
							<div class="col-md-6 col-sm-12 form-group mb-4">
								<label for="password">Nueva Contraseña <span class="text-danger">*</span></label>
								<input id="password" value="{{ old('password') }}" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="text" name="password" required>
								@if ($errors->has('password'))
				                <small class="form-text invalid-feedback">{{ $errors->first('password') }}</small>
				                @endif
							</div>
							<div class="col-md-6 col-sm-12 form-group mb-4">
								<label for="password_confirmation">Repetir Contraseña <span class="text-danger">*</span></label>
								<input id="password_confirmation" value="{{ old('password_confirmation') }}" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" type="text" name="password_confirmation" required>
								@if ($errors->has('password_confirmation'))
				                <small class="form-text invalid-feedback">{{ $errors->first('password_confirmation') }}</small>
				                @endif
							</div>

                            <hr class="my-4">

                            <!-- work info -->
							<h5 class="text-secondary fw-bold mb-3">Datos de Trabajo</h5>
                            <div class="col-md-6 col-sm-12 form-group mb-4">
								<label for="company_name">Nombre de la Empresa</label>
								<input id="company_name" value="{{ old('company_name') }}" class="form-control{{ $errors->has('company_name') ? ' is-invalid' : '' }}" type="text" name="company_name" value="{{ $userProfile->company_name }}" required>
								@if ($errors->has('company_name'))
				                <small class="form-text invalid-feedback">{{ $errors->first('company_name') }}</small>
				                @endif
							</div>
							<div class="col-md-6 col-sm-12 form-group mb-4">
								<label for="organitational_level">Nivel Organizacional</label>
								<select name="organitational_level" value="{{ old('organitational_level') }}" class="form-select{{ $errors->has('organitational_level') ? ' is-invalid' : '' }}" id="roles">
					            	<option selected disabled>Seleccione una Categoria</option>
                                    <option value="1">Industria</option>
                                    <option value="2">Mediana</option>
                                    <option value="3">Pequeña</option>
					            </select>
					            @if ($errors->has('organitational_level'))
					           	<small class="form-text invalid-feedback">{{ $errors->first('organitational_level') }}</small>
					            @endif
							</div>

							<div class="col-md-6 col-sm-12 form-group mb-4">
								<label for="job">Cargo</label>
								<input id="position"  value="{{ old('position') }}" class="form-control{{ $errors->has('position') ? ' is-invalid' : '' }}" type="text" name="position" value="{{ $userProfile->position }}" required>
								@if ($errors->has('position'))
				                <small class="form-text invalid-feedback">{{ $errors->first('position') }}</small>
				                @endif
							</div>

                        	<hr class="my-4">

                            <!-- location info -->
							<h5 class="text-secondary fw-bold mb-3">Ubicación</h5>
                            <div class="col-md-6 col-sm-12 form-group mb-4">
								<label for="country">Pais</label>
								<select name="country" value="{{ old('country') }}" class="form-select{{ $errors->has('country') ? ' is-invalid' : '' }}" id="country">
									<option {{ $userProfile->country === 'VE' ? 'selected':'' }} value="VE">Venezuela
					            </select>
					            @if ($errors->has('country'))
					           	<small class="form-text invalid-feedback">{{ $errors->first('country') }}</small>
					            @endif
							</div>

							<div class="col-md-6 col-sm-12 form-group mb-4">
								<label for="state">Estado</label>
								<input id="state" value="{{ old('state') }}" class="form-control{{ $errors->has('state') ? ' is-invalid' : '' }}" type="text" name="state" value="{{ $userProfile->state }}" required>
								@if ($errors->has('state'))
				                <small class="form-text invalid-feedback">{{ $errors->first('state') }}</small>
				                @endif
							</div>

                            <div class="col-md-6 col-sm-12 form-group mb-4">
								<label for="city">Ciudad</label>
								<input id="city" value="{{ old('city') }}" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" type="text" name="city" value="{{ $userProfile->city }}" required>
								@if ($errors->has('city'))
				                <small class="form-text invalid-feedback">{{ $errors->first('city') }}</small>
				                @endif
							</div>
						</div>
                    </div>

					<button type="submit" class="btn btn-primary">Actualizar Perfil</button>

                </form>
            </div>
        </div>
    </div>

</div>
@endsection
