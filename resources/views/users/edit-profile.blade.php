@extends('static.layout')

@section('content')
<div class="container">
    <h1 class="text-secondary fw-bold h3 mb-4">
        <a href="/perfil" class="text-muted text-decoration-none pe-3 me-3 border-end" title="Volver"><i class="fas fa-arrow-left"></i></a>Editar perfil
    </h1>

    <div class="row">
        <!-- <div class="col-md-4 col-lg-3">
            <div class="mb-4 mb-md-0">
                <h5 class="text-secondary fw-bold mb-3">Foto de perfil</h5>
                <div class="row g-2 g-md-3 mb-3">
                    <div class="col-5 col-md-12">
                        <img src="{{ asset('img/avatars/img5.jpg')}}" class="img-fluid">
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
        </div> -->
        <div class="col-lg-6 col-xl-7">
            <div class="card card-body p-md-5 mb-3 mb-lg-4">
                <form class="form-cotrol" id="merchant-natural" action="{{ route('user.updateProfile', Auth::user()->id) }}" enctype="multipart/form-data"
                            method="post">
                    {{ csrf_field() }}
                    <!-- general info -->
                    <div class="mb-4">
                        <h5 class="text-secondary fw-bold mb-3">Datos generales</h5>
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="full-name">Nombre y apellido</label>
                                    <input id="full-name" type="text" value="{{ $userProfile->name }}" readonly class="form-control">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="email">Correo</label>
                                    <input id="email" type="email" value="{{ $userProfile->email }}" readonly class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="phone">Teléfono</label>
                                    <input id="phone" type="text" name="mobile" value="{{ $userProfile->mobile }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="merchant-select-country">Pais</label>
                                    <select id="merchant-select-country" class="form-select" name="country">
                                        <optgroup label="Sur América">
                                            <option {{ $userProfile->country === 'VE' ? 'selected':'' }} value="VE">Venezuela</option>
                                            <option {{ $userProfile->country === 'CO' ? 'selected':'' }} value="CO">Colombia</option>
                                            <option {{ $userProfile->country === 'PE' ? 'selected':'' }} value="PE">Perú</option>
                                            <option {{ $userProfile->country === 'CL' ? 'selected':'' }} value="CL">Chile</option>
                                            <option {{ $userProfile->country === 'AR' ? 'selected':'' }} value="AR">Argentina</option>
                                            <option {{ $userProfile->country === 'BR' ? 'selected':'' }} value="BR">Brazil</option>
                                            <option {{ $userProfile->country === 'EC' ? 'selected':'' }} value="EC">Ecuador</option>
                                            <option {{ $userProfile->country === 'BO' ? 'selected':'' }} value="BO">Bolivia</option>
                                            <option {{ $userProfile->country === 'PY' ? 'selected':'' }} value="PY">Paraguay</option>
                                            <option {{ $userProfile->country === 'UY' ? 'selected':'' }} value="UY">Uruguay</option>
                                        </optgroup>
                                        <optgroup label="Centro América">
                                            <option {{ $userProfile->country === 'PA' ? 'selected':'' }} value="PA">Panamá</option>
                                            <option {{ $userProfile->country === 'GT' ? 'selected':'' }} value="GT">Guatemala</option>
                                            <option {{ $userProfile->country === 'SV' ? 'selected':'' }} value="SV">El Salvador</option>
                                            <option {{ $userProfile->country === 'HN' ? 'selected':'' }} value="HN">Honduras</option>
                                            <option {{ $userProfile->country === 'NI' ? 'selected':'' }} value="NI">Nicaragua</option>
                                            <option {{ $userProfile->country === 'CR' ? 'selected':'' }} value="CR">Costa Rica</option>
                                            <option {{ $userProfile->country === 'BZ' ? 'selected':'' }} value="BZ">Belize</option>
                                        </optgroup>
                                        <optgroup label="Norte América">
                                            <option {{ $userProfile->country === 'MX' ? 'selected':'' }} value="MX">México</option>
                                            <option {{ $userProfile->country === 'US' ? 'selected':'' }} value="US">UnitedStates</option>
                                            <option {{ $userProfile->country === 'CA' ? 'selected':'' }} value="CA">Canada</option>
                                        </optgroup>
                                        <optgroup label="Islas del Caribe">
                                            <option {{ $userProfile->country === 'DO' ? 'selected':'' }} value="DO">República Dominicana</option>
                                            <option {{ $userProfile->country === 'PR' ? 'selected':'' }} value="PR">Puerto Rico</option>
                                            <option {{ $userProfile->country === 'AW' ? 'selected':'' }} value="AW">Aruba</option>
                                            <option {{ $userProfile->country === 'CW' ? 'selected':'' }} value="CW">Curacao</option>
                                            <option {{ $userProfile->country === 'TT' ? 'selected':'' }} value="TT">Trinidad y Tobago</option>
                                            <option {{ $userProfile->country === 'BS' ? 'selected':'' }} value="BS">Bahamas</option>
                                            <option {{ $userProfile->country === 'BB' ? 'selected':'' }} value="BB">Barbados</option>
                                        </optgroup>
                                        <optgroup label="Europa">
                                            <option {{ $userProfile->country === 'GB' ? 'selected':'' }} value="GB">Reino Unido</option>
                                            <option {{ $userProfile->country === 'ES' ? 'selected':'' }} value="ES">España</option>
                                            <option {{ $userProfile->country === 'PT' ? 'selected':'' }} value="PT">Portugal</option>
                                            <option {{ $userProfile->country === 'IT' ? 'selected':'' }} value="IT">Italia</option>
                                            <option {{ $userProfile->country === 'FR' ? 'selected':'' }} value="FR">Francia</option>
                                            <option {{ $userProfile->country === 'DE' ? 'selected':'' }} value="DE">Alemania</option>
                                        </optgroup>
                                        <optgroup label="Otros">
                                            <option {{ $userProfile->country === 'AU' ? 'selected':''}} value="AU">Australia</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 col-md-6">
                                <div class="mb-3">
                                    <label for="state">Estado</label>
                                    <input id="state" type="text" class="form-control" name="state" value="{{ $userProfile->state }}">
                                </div>
                            </div>
                            <div class="col-6 col-md-6">
                                <div class="mb-3">
                                    <label for="city">Ciudad</label>
                                    <input id="city" type="text" class="form-control" name="city" value="{{ $userProfile->city }}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary px-4">Guardar</button>
                </form>
            </div>
        </div>
        <div class="col-lg-6 col-xl-5">
            <div class="card card-body p-md-5 mb-3 mb-lg-5">
                <!-- change password -->
                <form class="form-cotrol" id="merchant-natural" action="{{ route('user.changePassword', Auth::user()->id) }}" enctype="multipart/form-data" method="post">
                    {{ csrf_field() }}
                    <h5 class="text-secondary fw-bold mb-3">Contraseña</h5>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="actual-pw">Contraseña actual</label>
                                <input id="actual-pw" type="password" class="form-control" name="old_password" required>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-12 col-xl-6">
                            <div class="mb-3">
                                <label for="new-pw">Nueva contraseña</label>
                                <input id="new-pw" type="password" class="form-control" name="password" required>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-12 col-xl-6">
                            <div class="mb-3">
                                <label for="repeat-new-pw">Repetir nueva contraseña</label>
                                <input id="repeat-new-pw" name="password_confirmation" type="password" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-danger px-3"><i class="fas fa-lock small me-2"></i> Cambiar contraseña</button>
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
