@extends('static.layout')

@section('content')
<div class="container">
    <h1 class="text-secondary font-weight-bold h3 mb-4">Productos</h1>

    @foreach($products as $product)
        @if($product->total_disponible > 0 || $product->total_disponible == null && $product->cantidad_total != $product->total_reservado)
            <article class="card mb-4">
                <div class="card-header bg-white border-0 pt-3">
                    <div class="row">
                        <div class="col-lg-6 col-xl-8">
                            <h6 class="font-weight-bold lh-1 h5">{{ $product->name }}</h6>
                            <p class="text-muted fs-md lh-1 mb-0">{{ $product->synonymous }}</p>
                        </div>
                        <div class="col-lg-6 col-xl-4">
                            <div class="d-flex justify-content-between justify-content-lg-end align-items-center mt-3 mt-lg-0">
                                <!-- <div class="font-weight-bold mr-3 h5 mb-0">$ 1.690,50 USD</div> -->
                                <div>
                                    <a href="#reserve-{{$product->id}}" aria-expanded="false" title="Reservar" data-toggle="modal" data-dismiss="modal" class="btn btn-success px-4 px-lg-5">Reservar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-lg-4">
                            <div class="d-flex align-items-center mb-3 mb-lg-0">
                                <div class="flex-shrink-0 d-none d-sm-block">
                                    <svg class="text-primary mr-2" width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle opacity="0.15" cx="17" cy="17" r="17" fill="currentColor"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17 27C17 27 24.5 19.8925 24.5 14.5C24.5 12.5109 23.7098 10.6032 22.3033 9.1967C20.8968 7.79018 18.9891 7 17 7C15.0109 7 13.1032 7.79018 11.6967 9.1967C10.2902 10.6032 9.5 12.5109 9.5 14.5C9.5 19.8925 17 27 17 27ZM17 18.25C17.9946 18.25 18.9484 17.8549 19.6517 17.1517C20.3549 16.4484 20.75 15.4946 20.75 14.5C20.75 13.5054 20.3549 12.5516 19.6517 11.8483C18.9484 11.1451 17.9946 10.75 17 10.75C16.0054 10.75 15.0516 11.1451 14.3483 11.8483C13.6451 12.5516 13.25 13.5054 13.25 14.5C13.25 15.4946 13.6451 16.4484 14.3483 17.1517C15.0516 17.8549 16.0054 18.25 17 18.25Z" fill="currentColor"/>
                                    </svg>
                                </div>
                                <div class="flex-grow-1">
                                    <div class="text-muted small lh-1">Puerto destino</div>
                                    <a href="https://www.google.com/maps/place/{{ $product->arrival_location }}" class="text-reset font-weight-bold small lh-1" target="_blank">
                                        {{ $product->arrival_location }}
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-box-arrow-up-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M1.5 13A1.5 1.5 0 0 0 3 14.5h8a1.5 1.5 0 0 0 1.5-1.5V9a.5.5 0 0 0-1 0v4a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 0 0-1H3A1.5 1.5 0 0 0 1.5 5v8zm7-11a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0V2.5H9a.5.5 0 0 1-.5-.5z"/>
                                            <path fill-rule="evenodd" d="M14.354 1.646a.5.5 0 0 1 0 .708l-8 8a.5.5 0 0 1-.708-.708l8-8a.5.5 0 0 1 .708 0z"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="text-muted small">COA</div>
                            <div class="font-weight-bold small">
                                <a href="{{ $product->coa }}" target="_blank">Adjunto</a>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="text-muted small">MSDS</div>
                            <div class="font-weight-bold small">
                                <a href="{{ $product->msds }}" target="_blank">Adjunto</a>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="text-muted small">Fecha limite de reserva</div>
                            <div class="font-weight-bold small">
                                {{ Carbon\Carbon::parse($product->deadline)->toFormattedDateString('d/m/Y') }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-white py-3">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0 d-none d-sm-block">
                            <svg class="text-primary mr-2" width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle opacity="0.15" cx="17" cy="17" r="17" fill="currentColor"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M17.2325 8.39121C17.0833 8.33141 16.9167 8.33141 16.7675 8.39121L9.3075 11.375L17 14.4512L24.6925 11.375L17.2325 8.39121ZM25.75 12.2987L17.625 15.5487V25.4512L25.75 22.2012V12.3V12.2987ZM16.375 25.4525V15.5475L8.25 12.2987V22.2025L16.375 25.4525ZM16.3038 7.22996C16.7507 7.05121 17.2493 7.05121 17.6962 7.22996L26.6075 10.795C26.7234 10.8414 26.8227 10.9215 26.8926 11.0248C26.9626 11.1282 27 11.2501 27 11.375V22.2025C26.9998 22.4522 26.9249 22.6962 26.7847 22.903C26.6446 23.1098 26.4457 23.2698 26.2138 23.3625L17.2325 26.955C17.0833 27.0148 16.9167 27.0148 16.7675 26.955L7.7875 23.3625C7.55531 23.27 7.35618 23.11 7.2158 22.9033C7.07543 22.6965 7.00026 22.4524 7 22.2025V11.375C7.00003 11.2501 7.03743 11.1282 7.10738 11.0248C7.17734 10.9215 7.27664 10.8414 7.3925 10.795L16.3038 7.22996Z" fill="currentColor"/>
                            </svg>
                        </div>
                        <div class="flex-grow-1">
                            <div class="progress bg-light rounded" style="height: .5rem;">
                                <div class="progress-bar bg-danger rounded" style="width: {{ $product->total_disponible == null ? 100 : ($product->total_disponible*100)/$product->cantidad_total  }}%" role="progressbar" aria-valuenow="{{ $product->total_disponible == null ? $product->cantidad_total : $product->total_disponible  }}" aria-valuemin="0" aria-valuemax="{{$product->cantidad_total}}"></div>
                            </div>
                            <div class="small mt-1">
                                <span class="text-muted">Disponibilidad:</span> <span class="font-weight-bold">{{ $product->total_disponible == null ? $product->cantidad_total : $product->total_disponible  }} de {{$product->cantidad_total}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
             <!-- Small Size -->
             <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="reserve-{{$product->id}}">
                <div class="modal-dialog modal-md" role="document">
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
                                    <input type="checkbox" name="delivery" placeholder="Cantidad a reservar" value="1">
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
    {{ $products->links() }}
</div>
@endsection

@section('scripts')
<script type="application/javascript">
    
    
</script>
@stop