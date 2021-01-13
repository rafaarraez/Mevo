@extends('layouts.app')

@section('content')

<div class="card mb-4">
	<header class="card-header d-flex align-items-center">
		<i class="far fa-list-alt u-sidebar-nav-menu__item-icon"></i>
		<h3 class="h3 card-header-title">Productos</h3>
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
						<td class="text-center">{{ Carbon\Carbon::parse($product->deadline)->format('d/m/Y') }}</td>
						<td class="text-center">{{ Carbon\Carbon::parse($product->arrival_to)->format('d/m/Y') }}</td>
						<td class="text-center">{{ $product->quantity }}</td>
						<td class="text-center">{{ $product->total_reservado === null ? 0 : $product->total_reservado }}</td>

						<td class="text-center ">
							<a class="link-muted" href="{{ route('products.edit', ['id' => $product->id]) }}" title="Editar usuario" data-toggle="tooltip" data-placement="left"><i class="fa fa-sliders-h"></i>
							</a>

							<!-- <a class="link-muted" href="#deletef-{{$product->id}}" title="Eliminar usuario" data-toggle="modal" data-dismiss="modal" data-backdrop="false">
								<i class="fa fa-trash"></i>
							</a> -->
						</td>
					</tr>

					<!-- Small Size -->
					<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="deletef-{{$product->id}}">
						<div class="modal-dialog modal-sm" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h3 class="modal-title" id="exampleModalLabel">¿Eliminar {{ $product->name }}?</h3>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									Por favor confirme si esta seguro de eliminar.
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
									@isset( $product)
									<form action="{{ url('products/' . $product->id) }}" method="POST">
										{{ csrf_field() }}
										{{ method_field('DELETE') }}
										<button type="submit" class="btn btn-primary">
											Eliminar
										</button>
									</form>
									@endisset
								</div>
							</div>
						</div>
					</div>
					<!-- End Small Size -->
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>



@endsection
