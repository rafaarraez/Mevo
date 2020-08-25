@extends('static.layout')

@section('content')
<div class="container">
    <h1 class="text-primary font-weight-bold mb-4">Editar perfil</h1>

    <div class="row">
        <div class="col-md-3">
            <h3 class="text-primary font-weight-bold mb-4">Foto de perfil</h3>
            <div class="mb-3">
                <img src="{{ asset('img/800x500/img1.jpg')}}" class="img-fluid">
            </div>

            <div class="form-group">
                <label for="select-file" class="btn btn-outline-dark btn-sm btn-block">Seleccionar archivo</label>
                <input id="select-file" type="file" class="d-none">
                <small class="text-muted">Ningún archivo seleccionado</small>
            </div>

            <button class="btn btn-primary">Guardar</button>
        </div>
        <div class="col-md-8 offset-md-1">
            <div class="card card-body px-md-5">

                <form action="">
                    <!-- general info -->
                    <div class="mb-4">
                        <h3 class="text-primary font-weight-bold mb-4">Datos generales</h3>
                        <div class="form-row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="full-name">Nombre y apellido</label>
                                    <input id="full-name" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="email">Correo</label>
                                    <input id="email" type="email" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="phone">Teléfono</label>
                                    <input id="phone" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="location">Ubicación</label>
                                    <input id="location" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="website">Website</label>
                                    <input id="website" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- social networks -->
                    <div class="mb-4">
                        <h3 class="text-primary font-weight-bold mb-4">Redes sociales</h3>
                        <div class="form-row">
                            <div class="col-md-8 col-xl-6">
                                <div class="form-group">
                                    <label for="facebook">Facebook</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">@</span>
                                        </div>
                                        <input id="facebook" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="instagram">Instagram</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">@</span>
                                        </div>
                                        <input id="instagram" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
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

                <!-- change password -->
                <form action="">
                    <div class="mt-5">
                        <h3 class="text-primary font-weight-bold mb-4">Contraseña</h3>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="actual-pw">Contraseña actual</label>
                                    <input id="actual-pw" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="new-pw">Nueva contraseña</label>
                                    <input id="new-pw" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="repeat-new-pw">Repetir nueva contraseña</label>
                                    <input id="repeat-new-pw" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-danger">Cambiar contraseña</button>
                    </div>
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
