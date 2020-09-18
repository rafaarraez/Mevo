@extends('static.layout')

@section('content')
<div class="container">
    <h1 class="text-secondary font-weight-bold h3 mb-4">Editar perfil</h1>

    <div class="row">
        <div class="col-md-4 col-lg-3">
            <div class="mb-4 mb-md-0">
                <h5 class="text-secondary font-weight-bold mb-3">Foto de perfil</h5>
                <div class="row g-2 g-md-3 mb-3">
                    <div class="col-5 col-md-12">
                        <div class="aspect-ratio aspect-ratio-1by1">
                            <img src="{{ asset('img/avatars/img5.jpg')}}">

                        </div>
                    </div>
                    <div class="col-7 col-md-12">
                        <label for="select-file" class="btn btn-outline-dark btn-sm btn-block">Seleccionar archivo</label>
                        <input id="select-file" type="file" class="d-none">
                        <small class="text-muted">Ningún archivo seleccionado</small>
                        <div class="mt-3">
                            <button class="btn btn-primary">Guardar</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-md-8 col-lg-8 offset-lg-1">
            <div class="card card-body p-md-5 mb-3 mb-lg-4">
                <form action="">
                    <!-- general info -->
                    <div class="mb-4">
                        <h5 class="text-secondary font-weight-bold mb-3">Datos generales</h5>
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="full-name">Nombre y apellido</label>
                                    <input id="full-name" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="email">Correo</label>
                                    <input id="email" type="email" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="phone">Teléfono</label>
                                    <input id="phone" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="location">Ubicación</label>
                                    <input id="location" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="website">Website</label>
                                    <input id="website" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- social networks -->
                    <div class="mb-4">
                        <h5 class="text-secondary font-weight-bold mb-3">Redes sociales</h5>
                        <div class="row">
                            <div class="col-md-8 col-xl-6">
                                <div class="mb-3">
                                    <label for="facebook">Facebook</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">@</span>
                                        </div>
                                        <input id="facebook" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="instagram">Instagram</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">@</span>
                                        </div>
                                        <input id="instagram" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="twitter">Twitter</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">@</span>
                                        </div>
                                        <input id="twitter" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="button" class="btn btn-primary">Guardar</button>
                </form>
            </div>
            <div class="card card-body p-md-5 mb-3 mb-lg-5">
                <!-- change password -->
                <form action="">
                    <h5 class="text-secondary font-weight-bold mb-3">Contraseña</h5>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="actual-pw">Contraseña actual</label>
                                <input id="actual-pw" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-lg-6">
                            <div class="mb-3">
                                <label for="new-pw">Nueva contraseña</label>
                                <input id="new-pw" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-6">
                            <div class="mb-3">
                                <label for="repeat-new-pw">Repetir nueva contraseña</label>
                                <input id="repeat-new-pw" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-danger">Cambiar contraseña</button>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection

@section('scripts')
<script type="application/javascript">
</script>
@stop
