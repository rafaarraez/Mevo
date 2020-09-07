@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card mb-4">
        <header class="card-header d-flex align-items-center">
            <i class="far fa-list-alt u-sidebar-nav-menu__item-icon"></i>
            <h3 class="h3 card-header-title">Productos Reservados</h3>
        </header>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover" id="data-table">
                    <thead>
                        <tr>
                            <th class="text-center" scope="col">#</th>
                            <th class="text-center" scope="col">Nombre</th>
                            <th class="text-center" scope="col">Sinonimi</th>
                            <th class="text-center" scope="col">Ubicaciónn de llegada</th>
                            <th class="text-center" scope="col">COA</th>
                            <th class="text-center" scope="col">MSDS</th>
                            <th class="text-center" scope="col">Fecha de reserva</th>
                            <th class="text-center" scope="col">Fecha de Llegada</th>
                            <th class="text-center" scope="col">Cantidad Reservada</th>
                            <th class="text-center" scope="col">Acciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($reserves as $product)
                        <tr>
                            <td class="text-center">{{ $product->products->id }}</td>
                            <td class="text-center">{{ $product->products->name }}</td>
                            <td class="text-center">{{ $product->products->synonymous }}</td>
                            <td class="text-center"><a href="https://www.google.com/maps/place/{{ $product->products->arrival_location }}" target="_blank">{{ $product->products->arrival_location }}</a></td>
                            <td class="text-center"><a href="{{ $product->products->coa }}" target="_blank">Archivo</a></td>
                            <td class="text-center"><a href="{{ $product->products->msds }}" target="_blank">Archivo</a></td>
                            <td class="text-center">{{ Carbon\Carbon::parse($product->created_at)->format('d/m/Y') }}</td>
                            <td class="text-center">{{ Carbon\Carbon::parse($product->products->arrival_to)->format('d/m/Y') }}</td>
                            <td class="text-center">{{ $product->quantity  }}</td>
                            <td class="text-center">
                                <a class="link-muted" href="#" aria-expanded="false" title="Eliminar usuario" data-toggle="modal" data-dismiss="modal" data-backdrop="false">
                                    Ver inforne
                                </a>
                            </td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script type="application/javascript">
    
    
</script>
@stop