@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if(Auth::user()->hasRole('admin'))
                        <div class="text-center">Bienvenido administrador</div>
                    @else
                        <div>Bienvenido</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
