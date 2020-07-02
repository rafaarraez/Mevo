@extends('layouts.app')

@section('content')

<div class="card mb-4">
	<header class="card-header d-flex align-items-center">
		<i class="far fa-list-alt u-sidebar-nav-menu__item-icon"></i>
		<h3 class="h3 card-header-title">Usuarios registrados</h3>
		<ul class="list-inline ml-auto mb-0">
		    <li class="list-inline-item">
		      <a class="link-muted h3" href="{{ route('usuarios.create')}}" data-original-title="Nuevo usuario" data-toggle="tooltip" data-placement="left">
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
						<th scope="col">#</th>
						<th scope="col">Nombre</th>
						<th scope="col">Correo electronico</th>
						<th scope="col">Rol</th>
						<th class="text-center" scope="col">Acciones</th>
					</tr>
				</thead>

				<tbody>
					@foreach($usuarios as $usuario)
					<tr>
						<td>{{$usuario->id}}</td>
						<td>{{$usuario->name}}</td>
						<td>{{$usuario->email}}</td>
						@foreach ($usuario->roles as $role)
						<td><a class="badge badge-soft-info" style="font-size: 12px;" href="{{ url('usuario/' . $usuario->id)}}">{{$role->name}}</a></td>
						@endforeach
						<td class="text-center ">
							<a class="link-muted" href="{{ URL::to('usuarios/' . $usuario->id . '/edit')}}" aria-expanded="false" title="Editar usuario" data-toggle="tooltip" data-placement="left"><i class="fa fa-sliders-h"></i>
							</a>

							<a class="link-muted" href="#deletef" aria-expanded="false" title="Eliminar usuario" data-toggle="modal" data-dismiss="modal" data-backdrop="false">
                                <i class="fa fa-trash"></i>
							</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>

<!-- Small Size -->
<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="deletef">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title" id="exampleModalLabel">Eliminar ficha</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				Por favor confirme si esta seguro de eliminar la ficha.
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
				@isset($usuario)
                <form action="{{ url('usuarios/' .$usuario->id) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-primary" >
                        Eliminar
                    </button>
                </form>
                @endisset
			</div>
		</div>
	</div>
</div>
<!-- End Small Size -->

@endsection