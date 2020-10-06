@extends('static.layout')

@section('content')
<div class="container">
    <h1 class="text-secondary font-weight-bold h3 mb-4">
        <a href="/perfil" class="text-muted text-decoration-none pr-2 mr-2" title="Volver"><i class="fas fa-arrow-left"></i></a>Editar perfil
    </h1>

    <div class="row">
        <!-- <div class="col-md-4 col-lg-3">
            <div class="mb-4 mb-md-0">
                <h5 class="text-secondary font-weight-bold mb-3">Foto de perfil</h5>
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
                        <h5 class="text-secondary font-weight-bold mb-3">Datos generales</h5>
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
                                <label for="merchant-select-country">Pais</label>
                                <select id="merchant-select-country" class="form-select" name="country">
                                    <optgroup label="Sur América">
                                        <option {{ $userProfile->country === 'VE' ? 'selected':''
                                    }} value="VE" data-flag="/img/landing/flags/ve.svg">Venezuela
                                        </option>
                                        <option {{ $userProfile->country === 'CO' ? 'selected':''
                                    }} value="CO" data-flag="/img/landing/flags/co.svg">Colombia
                                        </option>
                                        <option {{ $userProfile->country === 'PE' ? 'selected':''
                                    }} value="PE" data-flag="/img/landing/flags/pe.svg">Perú
                                        </option>
                                        <option {{ $userProfile->country === 'CL' ? 'selected':''
                                    }} value="CL" data-flag="/img/landing/flags/cl.svg">Chile
                                        </option>
                                        <option {{ $userProfile->country === 'AR' ? 'selected':''
                                    }} value="AR" data-flag="/img/landing/flags/ar.svg">Argentina
                                        </option>
                                        <option {{ $userProfile->country === 'BR' ? 'selected':''
                                    }} value="BR" data-flag="/img/landing/flags/br.svg">Brazil
                                        </option>
                                        <option {{ $userProfile->country === 'EC' ? 'selected':''
                                    }} value="EC" data-nb="true"
                                                data-flag="/img/landing/flags/ec.svg">Ecuador
                                        </option>
                                        <option {{ $userProfile->country === 'BO' ? 'selected':''
                                    }} value="BO" data-nb="true"
                                                data-flag="/img/landing/flags/bo.svg">Bolivia
                                        </option>
                                        <option {{ $userProfile->country === 'PY' ? 'selected':''
                                    }} value="PY" data-nb="true"
                                                data-flag="/img/landing/flags/py.svg">Paraguay
                                        </option>
                                        <option {{ $userProfile->country === 'UY' ? 'selected':''
                                    }} value="UY" data-nb="true"
                                                data-flag="/img/landing/flags/uy.svg">Uruguay
                                        </option>
                                    </optgroup>
                                    <optgroup label="Centro América">
                                        <option {{ $userProfile->country === 'PA' ? 'selected':''
                                    }} value="PA" data-flag="/img/landing/flags/pa.svg">Panamá
                                        </option>
                                        <option {{ $userProfile->country === 'GT' ? 'selected':''
                                    }} value="GT" data-nb="true"
                                                data-flag="/img/landing/flags/gt.svg">Guatemala
                                        </option>
                                        <option {{ $userProfile->country === 'SV' ? 'selected':''
                                    }} value="SV" data-nb="true"
                                                data-flag="/img/landing/flags/sv.svg">El Salvador
                                        </option>
                                        <option {{ $userProfile->country === 'HN' ? 'selected':''
                                    }} value="HN" data-nb="true"
                                                data-flag="/img/landing/flags/hn.svg">Honduras
                                        </option>
                                        <option {{ $userProfile->country === 'NI' ? 'selected':''
                                    }} value="NI" data-nb="true"
                                                data-flag="/img/landing/flags/ni.svg">Nicaragua
                                        </option>
                                        <option {{ $userProfile->country === 'CR' ? 'selected':''
                                    }} value="CR" data-nb="true"
                                                data-flag="/img/landing/flags/cr.svg">Costa Rica
                                        </option>
                                        <option {{ $userProfile->country === 'BZ' ? 'selected':''
                                    }} value="BZ" data-nb="true"
                                                data-flag="/img/landing/flags/bz.svg">Belize
                                        </option>
                                    </optgroup>
                                    <optgroup label="Norte América">
                                        <option {{ $userProfile->country === 'MX' ? 'selected':''
                                    }} value="MX" data-flag="/img/landing/flags/mx.svg">México
                                        </option>
                                        <option {{ $userProfile->country === 'US' ? 'selected':''
                                    }} value="US" data-flag="/img/landing/flags/us.svg">United
                                            States
                                        </option>
                                        <option {{ $userProfile->country === 'CA' ? 'selected':''
                                    }} value="CA" data-nb="true"
                                                data-flag="/img/landing/flags/ca.svg">Canada
                                        </option>
                                    </optgroup>
                                    <optgroup label="Islas del Caribe">
                                        <option {{ $userProfile->country === 'DO' ? 'selected':''
                                    }} value="DO" data-nb="true"
                                                data-flag="/img/landing/flags/do.svg">República
                                            Dominicana
                                        </option>
                                        <option {{ $userProfile->country === 'PR' ? 'selected':''
                                    }} value="PR" data-nb="true"
                                                data-flag="/img/landing/flags/pr.svg">Puerto Rico
                                        </option>
                                        <option {{ $userProfile->country === 'AW' ? 'selected':''
                                    }} value="AW" data-nb="true"
                                                data-flag="/img/landing/flags/aw.svg">Aruba
                                        </option>
                                        <option {{ $userProfile->country === 'CW' ? 'selected':''
                                    }} value="CW" data-nb="true"
                                                data-flag="/img/landing/flags/cw.svg">Curacao
                                        </option>
                                        <option {{ $userProfile->country === 'TT' ? 'selected':''
                                    }} value="TT" data-nb="true"
                                                data-flag="/img/landing/flags/tt.svg">Trinidad y
                                            Tobago
                                        </option>
                                        <option {{ $userProfile->country === 'BS' ? 'selected':''
                                    }} value="BS" data-nb="true"
                                                data-flag="/img/landing/flags/bs.svg">Bahamas
                                        </option>
                                        <option {{ $userProfile->country === 'BB' ? 'selected':''
                                    }} value="BB" data-nb="true"
                                                data-flag="/img/landing/flags/bb.svg">Barbados
                                        </option>
                                    </optgroup>
                                    <optgroup label="Europa">
                                        <option {{ $userProfile->country === 'GB' ? 'selected':''
                                    }} value="GB" data-flag="/img/landing/flags/gb.svg">Reino Unido
                                        </option>
                                        <option {{ $userProfile->country === 'ES' ? 'selected':''
                                    }} value="ES" data-flag="/img/landing/flags/es.svg">España
                                        </option>
                                        <option {{ $userProfile->country === 'PT' ? 'selected':''
                                    }} value="PT" data-flag="/img/landing/flags/pt.svg">Portugal
                                        </option>
                                        <option {{ $userProfile->country === 'IT' ? 'selected':''
                                    }} value="IT" data-flag="/img/landing/flags/it.svg">Italia
                                        </option>
                                        <option {{ $userProfile->country === 'FR' ? 'selected':''
                                    }} value="FR" data-flag="/img/landing/flags/fr.svg">Francia
                                        </option>
                                        <option {{ $userProfile->country === 'DE' ? 'selected':''
                                    }} value="DE" data-flag="/img/landing/flags/de.svg">Alemania
                                        </option>
                                    </optgroup>
                                    <option {{ $userProfile->country === 'AU' ? 'selected':''}} value="AU"
                                            data-flag="/img/landing/flags/au.svg">Australia
                                    </option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="state">Estado</label>
                                <input id="state" type="text" class="form-control" name="state" value="{{ $userProfile->state }}">
                            </div>
                            <div class="col-md-6">
                                <label for="city">Ciudad</label>
                                <input id="city" type="text" class="form-control" name="city" value="{{ $userProfile->city }}">
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
                <form class="form-cotrol" id="merchant-natural" action="{{ route('user.changePassword', Auth::user()->id) }}" enctype="multipart/form-data"
                        method="post">
                    {{ csrf_field() }}
                    <h5 class="text-secondary font-weight-bold mb-3">Contraseña</h5>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="actual-pw">Contraseña actual</label>
                                <input id="actual-pw" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-12 col-xl-6">
                            <div class="mb-3">
                                <label for="new-pw">Nueva contraseña</label>
                                <input id="new-pw" type="text" class="form-control" name="password">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-12 col-xl-6">
                            <div class="mb-3">
                                <label for="repeat-new-pw">Repetir nueva contraseña</label>
                                <input id="repeat-new-pw" name="password_confirmation" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-danger px-3"><i class="fas fa-lock small mr-2"></i> Cambiar contraseña</button>
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
