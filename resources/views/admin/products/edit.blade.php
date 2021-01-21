@extends('layouts.app')

@section('content')

<!-- Form -->
<form method="POST" action="{{ route('product.update', $product->id) }}">
	@csrf

	<input type="hidden" name="_method" value="PUT">

	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<header class="card-header d-flex align-items-center">
					<i class="far fa-user-circle u-sidebar-nav-menu__item-icon"></i>
					<h2 class="h3 card-header-title">Editar Producto</h2>
				</header>

				<div class="card-body">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-6 col-sm-12 form-group mb-4">
								<label for="name">Nombre</label>
								<input id="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" name="name" placeholder="Ingrese nombre del producto" value="{{ $product->name }}" required>
								@if ($errors->has('name'))
				                <small class="form-text invalid-feedback">{{ $errors->first('name') }}</small>
				                @endif
							</div>
							<div class="col-md-6 col-sm-12 form-group mb-4">
								<label for="synonymous">Sinonimo</label>
								<input id="synonymous" class="form-control{{ $errors->has('synonymous') ? ' is-invalid' : '' }}" type="text" placeholder="Ingrese sinonimo del producto" name="synonymous" value="{{ $product->synonymous }}" required>
								@if ($errors->has('synonymous'))
				                <small class="form-text invalid-feedback">{{ $errors->first('synonymous') }}</small>
				                @endif
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-6 col-sm-12 form-group mb-4">
								<label for="sale_price">Precio de Venta:</label>
								<input id="sale_price" class="form-control{{ $errors->has('sale_price') ? ' is-invalid' : '' }}" type="number" step="0.01"  name="sale_price" placeholder="Ingrese precio de venta del producto ($)" value="{{ $product->sale_price }}" required>
								@if ($errors->has('sale_price'))
				                <small class="form-text invalid-feedback">{{ $errors->first('sale_price') }}</small>
				                @endif
							</div>
							<div class="col-md-6 col-sm-12 form-group mb-4">
								<label for="reserve_price">Precio de Reserva:</label>
								<input id="reserve_price" class="form-control{{ $errors->has('reserve_price') ? ' is-invalid' : '' }}" type="number" step="0.01"  name="reserve_price" placeholder="Ingrese precio de reserva del producto ($)" value="{{ $product->reserve_price }}" required>
								@if ($errors->has('reserve_price'))
				                <small class="form-text invalid-feedback">{{ $errors->first('reserve_price') }}</small>
				                @endif
							</div>
						</div>

						<div class="row">
							<div class="col-md-6 col-sm-12 form-group mb-4">
								<label for="coa">Presentación</label>
								<input id="origin_product" class="form-control{{ $errors->has('presentation') ? ' is-invalid' : '' }}" type="text" name="presentation" placeholder="Ingrese la ubicación de llegada" value="{{ $product->presentation }}" required>
								@if ($errors->has('presentation'))
				                <small class="form-text invalid-feedback">{{ $errors->first('presentation') }}</small>
				                @endif
							</div>
						</div>

						<div class="row">
							<div class="col-md-6 col-sm-12 form-group mb-4">
								<label for="img">Imagen del Producto</label>
								<input id="img" class="form-control{{ $errors->has('img') ? ' is-invalid' : '' }}" type="file" name="img" placeholder="img" value="{{ old('img') }}">
								@if ($errors->has('img'))
				                <small class="form-text invalid-feedback">{{ $errors->first('img') }}</small>
				                @endif
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-6 col-sm-12 form-group mb-4">
								<label for="coa">Ubicación de salida</label>
								<input id="origin_product" class="form-control{{ $errors->has('origin_product') ? ' is-invalid' : '' }}" type="text" name="origin_product" placeholder="Ingrese la ubicación de llegada" value="{{ $product->origin_product }}" required>
								@if ($errors->has('origin_product'))
				                <small class="form-text invalid-feedback">{{ $errors->first('origin_product') }}</small>
				                @endif
							</div>
							
							<div class="col-md-6 col-sm-12 form-group mb-4">
								<label for="coa">Ubicación de Llegada</label>
								<input id="arrival_location" class="form-control{{ $errors->has('arrival_location') ? ' is-invalid' : '' }}" type="text" name="arrival_location" placeholder="Ingrese la ubicación de llegada" value="{{ $product->arrival_location }}" required>
								@if ($errors->has('arrival_location'))
				                <small class="form-text invalid-feedback">{{ $errors->first('arrival_location') }}</small>
				                @endif
							</div>
						</div>

						<div class="row">
							<div class="col-md-6 col-sm-12 form-group mb-4">
								<label for="coa">COA</label>
								<input id="coa" class="form-control{{ $errors->has('coa') ? ' is-invalid' : '' }}" type="file" name="coa" placeholder="COA" value="{{ $product->coa }}">
								@if ($errors->has('coa'))
				                <small class="form-text invalid-feedback">{{ $errors->first('coa') }}</small>
				                @endif
							</div>
							<div class="col-md-6 col-sm-12 form-group mb-4">
								<label for="msds">MSDS</label>
								<input id="msds" class="form-control{{ $errors->has('msds') ? ' is-invalid' : '' }}" type="file" placeholder="MSDS" name="msds" value="{{ $product->msds }}">
								@if ($errors->has('msds'))
				                <small class="form-text invalid-feedback">{{ $errors->first('msds') }}</small>
				                @endif
							</div>
						</div>

						<div class="row">
							<div class="col-md-6 col-sm-12 form-group mb-4">
								<label for="deadline">Deadline</label>
								<input id="deadline" class="form-control{{ $errors->has('deadline') ? ' is-invalid' : '' }}" type="date" name="deadline" placeholder="Deadline" value="{{ date('Y-m-d',strtotime($product->deadline)) }}" required>
								@if ($errors->has('deadline'))
				                <small class="form-text invalid-feedback">{{ $errors->first('deadline') }}</small>
				                @endif
							</div>
						</div>

						<div class="row">
							<div class="col-md-6 col-sm-12 form-group mb-4">
								<label for="arrival_to">Fecha de Llegada</label>
								<input id="arrival_to" class="form-control{{ $errors->has('arrival_to') ? ' is-invalid' : '' }}" type="date" name="arrival_to" placeholder="Fecha de llegada" value="{{ date('Y-m-d',strtotime($product->arrival_to)) }}" required>
								@if ($errors->has('arrival_to'))
				                <small class="form-text invalid-feedback">{{ $errors->first('arrival_to') }}</small>
				                @endif
							</div>
							<div class="col-md-6 col-sm-12 form-group mb-4">
								<label for="quantity">Cantidad</label>
								<input id="quantity" class="form-control{{ $errors->has('quantity') ? ' is-invalid' : '' }}" type="text" placeholder="Cantidad" name="quantity" value="{{ $product->quantity }}" required>
								@if ($errors->has('quantity'))
				                <small class="form-text invalid-feedback">{{ $errors->first('quantity') }}</small>
				                @endif
							</div>
						</div>

						<hr>
						<div class="demo-btn-space">
							<button type="submit" class="btn btn-primary">Actualizar</button>
							<a class="btn btn-secondary" href="{{ route('products.index') }}">Salir</a>

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