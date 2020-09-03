@extends('layouts.user')

@section('content')

<div class="container">
    <div class="mb-4">
        <header class="d-flex align-items-center">
            <i class="far fa-list-alt u-sidebar-nav-menu__item-icon"></i>
            <h3 class="h3 card-header-title">Productos Recientes</h3>
        </header>
        <div class="d-flex justify-content-between align-items-end border-bottom my-4 flex-wrap pb-3">
            <form action="" method="get" class="form-inline flex-md-nowrap ml-md-3">
                

                <div class="input-group mb-3 mb-md-0 mr-3" style="width: 300px">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-search text-muted"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" name="user-name" value="{{request()['user-name']}}" placeholder="Buscar por nombre">
                </div>
                <div class="input-group mb-3 mb-md-0 mr-3" style="width: 300px">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-search text-muted"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" name="user-lastname" value="{{request()['user-lastname']}}" placeholder="Buscar por Locación de Llegada">
                </div>
                <div class="input-group mb-3 mb-md-0 mr-3" style="width: 300px">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-search text-muted"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" name="user-email" value="{{request()['user-email']}}" placeholder="Buscar por Email">
                </div>
                <div class="input-group mb-3 mb-md-0">
                    <input type="submit" class="ml-3 btn btn-primary" value="Filtrar">
                </div>
                
                @if (request()['user-name'] || request()['user-lastname'] || request()['user-email'] || request()['status']|| request()['date-range'] )
                <div class="input-group mb-3 mb-md-0">
                    <a href="/user-profiles" class="ml-3 btn btn-primary">Limpiar</a>
                </div>
                @endif
            </form>
        </div>
        @foreach($products as $product)
            @if($product->total_disponible > 0 || $product->total_disponible == null && $product->cantidad_total != $product->total_reservado)
                <div class="card-body" style="backgroung: #f6f6f6;">
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <!-- List group-->
                            <ul class="list-group">
                                <!-- list group item-->
                                <li class="list-group-item">
                                    <!-- Custom content-->
                                    <div class="media align-items-lg-center flex-column flex-lg-row p-3 row">
                                        <div class="media-body col-lg-6">
                                            <h3 class="mt-0 font-weight-bold mb-2">{{ $product->name }}</h3>
                                            <p class="font-italic text-muted mb-0 small">{{ $product->synonymous }} / COA: <a href="{{ $product->coa }}" target="_blank">Archivo</a> / MSDS: <a href="{{ $product->msds }}" target="_blank">Archivo</a></p>
                                            <div class="d-flex align-items-center justify-content-between mt-1">
                                                <h5 class="font-weight-bold my-2">Disponibles: <td class="text-center"> {{ $product->total_disponible == null ? $product->cantidad_total : $product->total_disponible  }}<progress value="{{ $product->total_disponible == null ? $product->cantidad_total : $product->total_disponible  }}" max="{{$product->cantidad_total}}"></progress>{{$product->cantidad_total}}</h5>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-1">
                                                <h5 class="font-weight-bold my-2">Presentación: <td class="text-center">{{ $product->presentation }}</h5>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-1">
                                                <h5 class="font-weight-bold my-2">From: <a href="https://www.google.com/maps/place/{{ $product->origin_product }}" target="_blank">{{ $product->origin_product }}</a> -- <span class="text-muted"><i class="fas fa-angle-double-right"></i></span> -- to: <a href="https://www.google.com/maps/place/{{ $product->arrival_location }}" target="_blank">{{ $product->arrival_location }}</a></h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-6" style="border-left: 1px solid #eaeaea;">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h5 class="font-weight-bold my-2">Fecha maxima de reserva: {{ Carbon\Carbon::parse($product->deadline)->format('d/m/Y') }}</h5>
                                            </div>
                                            <!-- <div class="d-flex align-items-center justify-content-between">
                                                <h5 class="font-weight-bold my-2">Fecha aproximada: {{ Carbon\Carbon::parse($product->approximate_date)->format('d/m/Y') }}</h5>
                                            </div> -->
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h5 class="font-weight-bold my-2">Fecha de llegada: {{ Carbon\Carbon::parse($product->arrival_to)->format('d/m/Y') }}</h5>
                                            </div>

                                            <div class="d-flex align-items-center justify-content-between mt-1">
                                                <button class="btn btn-primary" href="#reserve-{{$product->id}}" aria-expanded="false" title="Reservar" data-toggle="modal" data-dismiss="modal" data-backdrop="false" >Reservar</button>
                                            </div>                            
                                        </div>
                                    </div> <!-- End -->
                                </li> <!-- End -->               
                            </ul> <!-- End -->
                        </div>
                    </div>  
                </div>

                <!-- Small Size -->
                <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="reserve-{{$product->id}}">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title" id="exampleModalLabel">Desea reservar {{ $product->name }}?</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Por favor confirme la cantidad.
                            </div>
                            <div class="container">
                                @isset( $product)
                                <form action="{{ url('/products/reserve/' . Auth::user()->id . '/' . $product->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="reserve">¿Desea servicio de entraga?:</label>                                                    
                                        <input type="checkbox" name="delivery" class="form-control" placeholder="Cantidad a reservar" value="1">
                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" id="availible_quantity" name="availible_quantity" value="{{ $product->total_disponible == null ? $product->cantidad_total : $product->total_disponible }}">
                                        <label for="reserve">Cantidad:</label>
                                        <input type="number" id="reserve_quantity" name="quantity" class="form-control" placeholder="Cantidad a reservar" required>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">
                                            Reservar
                                        </button>                                                
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                    </div>
                                </form>
                                @endisset
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Small Size -->
            @endif
        @endforeach     
    </div>    
</div>
@endsection

@section('scripts')
<script type="application/javascript">
    
    
</script>
@stop