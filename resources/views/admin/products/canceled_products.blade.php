@extends('layouts.app')

@section('content')

<div class="card mb-4">
	<header class="card-header d-flex align-items-center">
		<i class="far fa-list-alt u-sidebar-nav-menu__item-icon"></i>
		<h3 class="h3 card-header-title">Productos Cancelados</h3>
		<ul class="list-inline ml-auto mb-0">
			<li class="list-inline-item">
				<a class="link-muted h3" href="{{ route('products.create')}}" data-original-title="Nuevo Producto" data-toggle="tooltip" data-placement="left">
					<i class="fa fa-plus mr-2"></i>
				</a>
			</li>
		</ul>
	</header>

	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-hover" id="data-table">
				<thead>
					<tr>
						<th class="text-center" scope="col">#</th>
						<th class="text-center" scope="col">Nombre</th>
						<th class="text-center" scope="col">Sinonimi</th>
						<th class="text-center" scope="col">Ubicaciónn de Salida</th>
						<th class="text-center" scope="col">Ubicaciónn de llegada</th>
						<th class="text-center" scope="col">Presentación</th>
						<th class="text-center" scope="col">COA</th>
						<th class="text-center" scope="col">MSDS</th>
						<th class="text-center" scope="col">Fecha maxima de reserva</th>
						<th class="text-center" scope="col">Fecha de Llegada</th>
						<th class="text-center" scope="col">Total</th>
						<th class="text-center" scope="col">Reservados</th>
						<th class="text-center" scope="col">Acciones</th>
					</tr>
				</thead>

				<tbody>
					@foreach($products as $product)
					<tr>
						<td class="text-center">{{ $product->id }}</td>
						<td class="text-center">{{ $product->name }}</td>
						<td class="text-center">{{ $product->synonymous }}</td>
						<td class="text-center"><a href="https://www.google.com/maps/place/{{ $product->origin_product }}" target="_blank">{{ $product->origin_product }}</a></td>
						<td class="text-center"><a href="https://www.google.com/maps/place/{{ $product->arrival_location }}" target="_blank">{{ $product->arrival_location }}</a></td>
						<td class="text-center">{{ $product->presentation }}</td>
						<td class="text-center"><a href="{{ $product->coa }}" target="_blank">Archivo</a></td>
						<td class="text-center"><a href="{{ $product->msds }}" target="_blank">Archivo</a></td>
						<td class="text-center">¡CANCELADO!</td>
						<td class="text-center">¡CANCELADO!</td>
						<td class="text-center">{{ $product->quantity }}</td>
						<td class="text-center">{{ $product->total_reservado === null ? 0 : $product->total_reservado }}</td>

						<td class="text-center ">
							<a class="link-muted" href="{{ route('products.details', ['id' => $product->id]) }}" title="Ver Detalles" data-toggle="tooltip" data-placement="left">
								<i class="fa fa-eye"></i>
							</a>

						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>



@endsection
