@extends('layouts.app')

@section('content')

<!-- Form -->
<form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
	@csrf
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<header class="card-header d-flex align-items-center">
					<i class="far fa-user-circle u-sidebar-nav-menu__item-icon"></i>
					<h2 class="h3 card-header-title">Registrar Producto Nuevo</h2>
				</header>

				<div class="card-body">
					<div class="container-fluid">

						<div class="row">
							<div class="col-md-6 col-sm-12 form-group mb-4">
								<label for="name">Nombre</label>
								<input id="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" name="name" placeholder="Ingrese nombre del producto" value="{{ old('name') }}" required>
								@if ($errors->has('name'))
				                <small class="form-text invalid-feedback">{{ $errors->first('name') }}</small>
				                @endif
							</div>
							<div class="col-md-6 col-sm-12 form-group mb-4">
								<label for="synonymous">Sinonimo</label>
								<input id="synonymous" class="form-control{{ $errors->has('synonymous') ? ' is-invalid' : '' }}" type="text" placeholder="Ingrese sinonimo del producto" name="synonymous" value="{{ old('synonymous') }}" required>
								@if ($errors->has('synonymous'))
				                <small class="form-text invalid-feedback">{{ $errors->first('synonymous') }}</small>
				                @endif
							</div>
						</div>

						<div class="row">
							<div class="col-md-6 col-sm-12 form-group mb-4">
								<label for="sale_price">Precio de Venta:</label>
								<input id="sale_price" class="form-control{{ $errors->has('sale_price') ? ' is-invalid' : '' }}" type="number" name="sale_price" placeholder="Ingrese precio de venta del producto ($)" value="{{ old('sale_price') }}" required>
								@if ($errors->has('sale_price'))
				                <small class="form-text invalid-feedback">{{ $errors->first('sale_price') }}</small>
				                @endif
							</div>
							<div class="col-md-6 col-sm-12 form-group mb-4">
								<label for="reserve_price">Precio de Reserva:</label>
								<input id="reserve_price" class="form-control{{ $errors->has('reserve_price') ? ' is-invalid' : '' }}" type="number" name="reserve_price" placeholder="Ingrese precio de reserva del producto ($)" value="{{ old('reserve_price') }}" required>
								@if ($errors->has('reserve_price'))
				                <small class="form-text invalid-feedback">{{ $errors->first('reserve_price') }}</small>
				                @endif
							</div>
						</div>

						<div class="row">
							<div class="col-md-6 col-sm-12 form-group mb-4">
								<label for="coa">Presentación</label>
								<input id="coa" class="form-control{{ $errors->has('presentation') ? ' is-invalid' : '' }}" type="text" name="presentation" placeholder="Ingrese el tipo presentation" value="{{ old('presentation') }}" required>
								@if ($errors->has('presentation'))
				                <small class="form-text invalid-feedback">{{ $errors->first('presentation') }}</small>
				                @endif
							</div>
						</div>

						<div class="row">
							<div class="col-md-6 col-sm-12 form-group mb-4">
								<label for="coa">COA</label>
								<input id="coa" class="form-control{{ $errors->has('coa') ? ' is-invalid' : '' }}" type="file" name="coa" placeholder="COA" value="{{ old('coa') }}" required>
								@if ($errors->has('coa'))
				                <small class="form-text invalid-feedback">{{ $errors->first('coa') }}</small>
				                @endif
							</div>
							<div class="col-md-6 col-sm-12 form-group mb-4">
								<label for="msds">MSDS</label>
								<input id="msds" class="form-control{{ $errors->has('msds') ? ' is-invalid' : '' }}" type="file" placeholder="MSDS" name="msds" value="{{ old('msds') }}" required>
								@if ($errors->has('msds'))
				                <small class="form-text invalid-feedback">{{ $errors->first('msds') }}</small>
				                @endif
							</div>
						</div>

						<div class="row">
							<div class="col-md-6 col-sm-12 form-group mb-4">
								<label for="img">Imagen del Producto</label>
								<input id="img" class="form-control{{ $errors->has('img') ? ' is-invalid' : '' }}" type="file" name="img" placeholder="img" value="{{ old('img') }}" required>
								@if ($errors->has('img'))
				                <small class="form-text invalid-feedback">{{ $errors->first('img') }}</small>
				                @endif
							</div>
						</div>

						<div class="row">
							<div class="col-md-6 col-sm-12 form-group mb-4">
								<label for="coa">Ubicación de Salida</label>
								<input id="origin_product" class="form-control{{ $errors->has('origin_product') ? ' is-invalid' : '' }}" type="text" name="origin_product" placeholder="Ingrese la ubicación de salida del producto" value="{{ old('origin_product') }}" required>
								@if ($errors->has('origin_product'))
				                <small class="form-text invalid-feedback">{{ $errors->first('origin_product') }}</small>
				                @endif
							</div>

							<div class="col-md-6 col-sm-12 form-group mb-4">
								<label for="coa">Ubicación de Llegada</label>
								<input id="arrival_location" class="form-control{{ $errors->has('arrival_location') ? ' is-invalid' : '' }}" type="text" name="arrival_location" placeholder="Ingrese la ubicación de llegada del producto" value="{{ old('arrival_location') }}" required>
								@if ($errors->has('arrival_location'))
				                <small class="form-text invalid-feedback">{{ $errors->first('arrival_location') }}</small>
				                @endif
							</div>
						</div>

						<div class="row">
							<div class="col-md-6 col-sm-12 form-group mb-4">
								<label for="deadline">Fecha limite de reserva</label>
								<input id="deadline" class="form-control{{ $errors->has('deadline') ? ' is-invalid' : '' }}" type="date" name="deadline" placeholder="Deadline" value="{{ old('deadline') }}" required>
								@if ($errors->has('deadline'))
				                <small class="form-text invalid-feedback">{{ $errors->first('deadline') }}</small>
				                @endif
							</div>
					
							<div class="col-md-6 col-sm-12 form-group mb-4">
								<label for="arrival_to">Fecha de Llegada</label>
								<input id="arrival_to" class="form-control{{ $errors->has('arrival_to') ? ' is-invalid' : '' }}" type="date" name="arrival_to" placeholder="Fecha de llegada" value="{{ old('arrival_to') }}" required>
								@if ($errors->has('arrival_to'))
				                <small class="form-text invalid-feedback">{{ $errors->first('arrival_to') }}</small>
				                @endif
							</div>
							<div class="col-md-6 col-sm-12 form-group mb-4">
								<label for="quantity">Cantidad</label>
								<input id="quantity" class="form-control{{ $errors->has('quantity') ? ' is-invalid' : '' }}" type="text" placeholder="Cantidad" name="quantity" value="{{ old('quantity') }}" required>
								@if ($errors->has('quantity'))
				                <small class="form-text invalid-feedback">{{ $errors->first('quantity') }}</small>
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