@extends('static.layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="text-secondary fw-bold h3 mb-4">
                <a href="{{ route('user.products') }}" class="text-muted text-decoration-none pe-3 me-3 border-end" title="Volver"><i class="fas fa-arrow-left"></i></a>Perfil
            </h1>
        </div>
        <div class="col-6">
            <div class="text-end">
                <a href="{{ route('user.profile.edit') }}" class="btn btn-primary btn-sm mb-3 mb-md-0">Editar perfil</a>
            </div>
        </div>
    </div>

    <div class="row g-2 g-md-3 g-lg-4 mb-4">
        <!-- <div class="col-4 col-md-3 order-2">
            <img src="{{ asset('img/avatars/img5.jpg') }}" class="img-fluid">
        </div> -->
        <div class="col-8 col-md-7 order-3">
            <h3 class="text-primary">{{ $usuario->name }}</h3>

            <!-- user info -->
            <ul class="list-unstyled">
                <li class="text-muted lh-sm">{{ $userProfile->city }}, {{ $userProfile->state }}, {{$userProfile->country}}</li>
                <li class="text-muted lh-sm">{{ $userProfile->mobile }}</li>
                <li class="text-muted lh-sm">{{ $userProfile->email }}</li>
            </ul>
        </div>
    </div>

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link custom-tab-link text-uppercase active" data-bs-toggle="tab" href="#products" role="tab" aria-controls="products" aria-selected="true">Mis pedidos</a>
        </li>
    </ul>

    <div class="tab-content" id="myTabContent">
        <div class="tab-pane show active" id="products" role="tabpanel">
            <div class="py-4">
                <h5 class="text-secondary fw-bold mb-4">Mis pedidos</h5>

                <!-- empty state -->
                @if(count($reserves) === 0)
                <div class="text-center py-sm-5">
                    <div class="mb-4">
                        <img src="{{ asset('/img/assets/no-data.svg') }}" class="img-fluid" alt="No data" style="max-width: 130px">
                    </div>
                    <h5 class="fw-bold">Aún no haces tu primer pedido</h5>
                    <p class="text-muted fs-md mb-0">Mira nuestros <a href="{{ route('user.products') }}">Productos disponibles</a> para reservar el que quieras.</p>
                </div>
                @endif
                <!-- end empty state -->

                @foreach($reserves as $product)
                    <article class="card mb-4">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                @if($product->products->file)
                                    <a href="{{ $product->products->file }}" class="product__sideImage d-none d-lg-block aspect-ratio aspect-ratio-1by1" target="_blank" style="width: 150px">
                                        <img src="{{ $product->products->file }}">
                                    </a>
                                @else
                                    <a href="{{ asset('img/assets/no-img.png') }}" class="product__sideImage d-none d-lg-block aspect-ratio aspect-ratio-1by1" target="_blank" style="width: 150px">
                                        <img src="{{ asset('img/assets/no-img.png') }}">
                                    </a>
                                @endif
                            </div>
                            <div class="flex-grow-1">
                                <div class="card-header bg-white border-0 pt-3">
                                    <div class="row gy-3 gy-lg-0">
                                        <div class="col-lg-6 col-xl-7">
                                            <div class="d-flex align-items-center">
                                                <div class="d-lg-none me-3">
                                                    @if($product->products->file)
                                                        <a href="{{ $product->products->file }}" class="aspect-ratio aspect-ratio-1by1" target="_blank" style="width: 5rem">
                                                            <img src="{{ $product->products->file }}">
                                                        </a>
                                                    @else
                                                        <a href="{{ asset('img/assets/no-img.png') }}" class="aspect-ratio aspect-ratio-1by1" target="_blank" style="width: 5rem">
                                                            <img src="{{ asset('img/assets/no-img.png') }}">
                                                        </a>
                                                    @endif
                                                </div>
                                                <div>
                                                    <h6 class="fw-bold lh-1 h5">{{ $product->products->name }}</h6>
                                                    <p class="text-muted fs-md lh-1 mb-0">{{ $product->products->synonymous }}</p>
                                                    <p class="text-muted fs-md lh-1 mt-1 mb-0">Cantidad: <span class="font-monospace">{{ $product->quantity }}</span></p>
                                                    <p class="text-muted fs-md lh-1 mt-1 mb-0">Precio Individual: <span class="font-monospace">${{ $product->pricing }} USD</span></p>
                                                    <p class="text-muted fs-md lh-1 mt-1 mb-0">Total a cancelar: <span class="font-monospace">${{ $product->pricing*$product->quantity  }} USD</span></p>
                                                </div>
                                            </div>
                                            <!-- <h6 class="fw-bold lh-1 h5">{{ $product->products->name }}</h6>
                                            <p class="text-muted fs-md lh-1 mb-0">{{ $product->products->synonymous }}</p> -->
                                        </div>
                                        <div class="col-lg-6 col-xl-5">
                                            <div class="d-flex flex-wrap justify-content-center justify-content-lg-end align-items-center mt-3 mt-lg-0">

                                                <div>
                                                    @if($product->delivery === 1)
                                                    <span class="badge bg-light text-muted rounded-pill me-2 mb-1">
                                                        <svg class="me-1" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                                                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                                                        </svg>Delivery
                                                    </span>
                                                    @endif
                                                </div>

                                                <div>
                                                    @if($product->is_reserve === 0)
                                                    <span class="badge bg-success rounded-pill me-2 mb-1">Compra</span>
                                                    @elseif($product->is_reserve === 1)
                                                    <span class="badge bg-dark rounded-pill me-2 mb-1">Reserva</span>
                                                    @endif
                                                </div>

                                                <div>
                                                    @if($product->status === 1)
                                                    <span class="badge bg-warning rounded-pill me-2 mb-1">Esperando Confirmación</span>
                                                    @elseif($product->status === 2)
                                                    <span class="badge bg-info rounded-pill me-2 mb-1">Aprobado/En Tránsito</span>
                                                    @elseif($product->status === 3)
                                                    <span class="badge bg-success rounded-pill me-2 mb-1">Entregado</span>
                                                    @elseif($product->status === 4)
                                                    <span class="badge bg-danger rounded-pill me-2 mb-1">Cancelado</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row align-items-lg-center">
                                        <div class="col-6 col-lg-4 order-0 order-lg-0">
                                            <div class="d-flex align-items-center mb-3 mb-lg-0">
                                                <div class="flex-shrink-0 d-none d-sm-block">
                                                    <svg class="text-muted me-2" width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <circle opacity="0.15" cx="17" cy="17" r="17" fill="currentColor"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17 27C17 27 24.5 19.8925 24.5 14.5C24.5 12.5109 23.7098 10.6032 22.3033 9.1967C20.8968 7.79018 18.9891 7 17 7C15.0109 7 13.1032 7.79018 11.6967 9.1967C10.2902 10.6032 9.5 12.5109 9.5 14.5C9.5 19.8925 17 27 17 27ZM17 18.25C17.9946 18.25 18.9484 17.8549 19.6517 17.1517C20.3549 16.4484 20.75 15.4946 20.75 14.5C20.75 13.5054 20.3549 12.5516 19.6517 11.8483C18.9484 11.1451 17.9946 10.75 17 10.75C16.0054 10.75 15.0516 11.1451 14.3483 11.8483C13.6451 12.5516 13.25 13.5054 13.25 14.5C13.25 15.4946 13.6451 16.4484 14.3483 17.1517C15.0516 17.8549 16.0054 18.25 17 18.25Z" fill="currentColor"/>
                                                    </svg>
                                                </div>
                                                <div class="flex-grow-1" style="min-width: 1px">
                                                    <div class="text-muted small">Puerto destino</div>
                                                    <a href="https://www.google.com/maps/place/{{ $product->products->arrival_location }}" class="d-block text-truncate text-reset fw-bold small" target="_blank">
                                                        {{ $product->products->arrival_location }}
                                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-box-arrow-up-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" d="M1.5 13A1.5 1.5 0 0 0 3 14.5h8a1.5 1.5 0 0 0 1.5-1.5V9a.5.5 0 0 0-1 0v4a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 0 0-1H3A1.5 1.5 0 0 0 1.5 5v8zm7-11a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0V2.5H9a.5.5 0 0 1-.5-.5z"/>
                                                            <path fill-rule="evenodd" d="M14.354 1.646a.5.5 0 0 1 0 .708l-8 8a.5.5 0 0 1-.708-.708l8-8a.5.5 0 0 1 .708 0z"/>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-2 order-3 order-lg-1">
                                            <div class="text-muted small">Fecha reservado</div>
                                            <div class="fw-bold small">
                                                {{ Carbon\Carbon::parse($product->created_at)->toFormattedDateString('d/m/Y') }}
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-2 order-4 order-lg-2">
                                            <div class="text-muted small">Fecha aprox. de llegada</div>
                                            <div class="fw-bold small">
                                                {{ Carbon\Carbon::parse($product->products->arrival_to)->toFormattedDateString('d/m/Y') }}
                                            </div>
                                        </div>
                                        <div class="col-3 col-lg-2 order-1 order-lg-3">
                                            <div class="mb-3 mb-lg-0">
                                                <div class="text-muted small">COA</div>
                                                <div class="fw-bold small">
                                                    <a href="{{ $product->products->coa }}" class="text-reset text-nowrap" target="_blank">
                                                        Adjunto
                                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-box-arrow-up-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" d="M1.5 13A1.5 1.5 0 0 0 3 14.5h8a1.5 1.5 0 0 0 1.5-1.5V9a.5.5 0 0 0-1 0v4a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 0 0-1H3A1.5 1.5 0 0 0 1.5 5v8zm7-11a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0V2.5H9a.5.5 0 0 1-.5-.5z"/>
                                                            <path fill-rule="evenodd" d="M14.354 1.646a.5.5 0 0 1 0 .708l-8 8a.5.5 0 0 1-.708-.708l8-8a.5.5 0 0 1 .708 0z"/>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3 col-lg-2 order-2 order-lg-4">
                                            <div class="mb-3 mb-lg-0">
                                                <div class="text-muted small">MSDS</div>
                                                <div class="fw-bold small">
                                                    <a href="{{ $product->products->msds }}" class="text-reset text-nowrap" target="_blank">
                                                        Adjunto
                                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-box-arrow-up-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" d="M1.5 13A1.5 1.5 0 0 0 3 14.5h8a1.5 1.5 0 0 0 1.5-1.5V9a.5.5 0 0 0-1 0v4a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 0 0-1H3A1.5 1.5 0 0 0 1.5 5v8zm7-11a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0V2.5H9a.5.5 0 0 1-.5-.5z"/>
                                                            <path fill-rule="evenodd" d="M14.354 1.646a.5.5 0 0 1 0 .708l-8 8a.5.5 0 0 1-.708-.708l8-8a.5.5 0 0 1 .708 0z"/>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                @endforeach
                {{ $reserves->links() }}
            </div>
        </div>
    </div>

</div>

@endsection
