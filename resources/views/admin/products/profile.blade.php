@extends('layouts.user')

@section('content')

<div class="card mb-4">
	<div class="card-body">
		<div class="row">
			<div class="col-md-4 border-md-right border-light text-center" style="margin: auto;">
				<img class="img-fluid rounded-circle mb-3" src="{{ asset('img/avatars/img3.jpg')}}" alt="Image description" width="84">

				<h2 class="mb-2">{{$usuario->name}}</h2>

				<ul class="list-inline mb-4">
					<li class="list-inline-item mr-3">
						<a class="link-muted" href="#!">
							<i class="fab fa-facebook"></i>
						</a>
					</li>
					<li class="list-inline-item mr-3">
						<a class="link-muted" href="#!">
							<i class="fab fa-twitter"></i>
						</a>
					</li>
					<li class="list-inline-item mr-3">
						<a class="link-muted" href="#!">
							<i class="fab fa-slack"></i>
						</a>
					</li>
					<li class="list-inline-item">
						<a class="link-muted" href="#!">
							<i class="fab fa-linkedin-in"></i>
						</a>
					</li>
				</ul>

				<a class="link-muted" href="#!">
					<i class="fa fa-envelope mr-2"></i> Enviar mensaje
				</a>
			</div>

			<div class="col-md-8">
				<h3 class="card-title">Informacion del usuario</h3>
				<h3 class="card-title"> Correo electronico</h3>
				<p class="mb-5">
					<strong>{{$usuario->email}}</strong>
				</p>

				<div class="row">
					<div class="col-lg-4 mb-5 mb-lg-0">
						<h4 class="h3 mb-3">Ranking del usuario</h4>

						<div class="mb-1">
							<span class="font-size-44 text-dark">4.8</span>
							<span class="h1 font-weight-light text-muted">/ 5.0</span>
						</div>

						<p class="text-muted mb-0">245 vistas</p>
					</div>

					<div class="col-lg-8">
						<h4 class="h3 mb-3">Habilidades</h4>

						<div class="d-flex flex-wrap align-items-center">
							<span class="bg-light text-muted rounded py-2 px-3 mb-2 mr-2">Tag</span>
							<span class="bg-light text-muted rounded py-2 px-3 mb-2 mr-2">Web Design</span>
							<span class="bg-light text-muted rounded py-2 px-3 mb-2 mr-2">HTML5</span>
							<span class="bg-light text-muted rounded py-2 px-3 mb-2 mr-2">CSS</span>
							<span class="bg-light text-muted rounded py-2 px-3 mb-2 mr-2">Marketing</span>
							<span class="bg-light text-muted rounded py-2 px-3 mb-2 mr-2">JavaScript</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection