@extends('layouts.user')

@section('content')

<div class="card mb-4">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12 border-md-right border-light text-center" style="margin: auto;">
                <img class="img-fluid rounded-circle mb-3"
                    src="{{ asset('img/avatars/img3.jpg') }}" alt="Image description" width="84">

                <h2 class="mb-2">{{ $usuario->name }}</h2>


                <!-- <a class="link-muted" href="#!">
					<i class="fa fa-envelope mr-2"></i> Enviar mensaje
				</a> -->
            </div>

            <div class="col-md-12">

                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#userProfile" role="tab"
                            aria-controls="pills-home" aria-selected="true">Información del Usuario</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#userPasword" role="tab"
                            aria-controls="pills-profile" aria-selected="false">Contraseña</a>
                    </li>

                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="userProfile" role="tabpanel"
                        aria-labelledby="pills-home-tab">
                        <form class="form-cotrol" id="merchant-natural" action="{{ route('user.updateProfile', Auth::user()->id) }}" enctype="multipart/form-data"
                            method="post">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="nombres" class="text-primary">Empresa</label>
                                    <input type="text" class="form-control edit-userprofile"
                                        name="company_name" value="{{ $userProfile->company_name }}" disabled>
                                </div>
                                <div class="col-md-6">
                                    <label for="nombres" class="text-primary">Nivel Organizacional</label>
                                    <select name="organitational_level" class="form-control edit-userprofile custom-select{{ $errors->has('organitational_level') ? ' is-invalid' : '' }}" id="roles" disabled>
										<option disabled>Seleccione una Categoria</option>
										<option {{ $userProfile->organitational_level === '1' ? 'selected':''}} value="1">Industria</option>
										<option {{ $userProfile->organitational_level === '2' ? 'selected':''}} value="2">Mediana</option>
										<option {{ $userProfile->organitational_level === '3' ? 'selected':''}} value="3">Pequeña</option>
									</select>
                                </div>
                                <div class="col-md-6">
                                    <label for="nombres" class="text-primary">Nombre</label>
                                    <input type="text" class="form-control edit-userprofile"
                                        name="job" value="{{ $userProfile->job }}" disabled>
                                </div>
                                <div class="col-md-6">
                                    <label for="nombres" class="text-primary">Posicion</label>
                                    <input type="text" class="form-control edit-userprofile"
                                        name="position" value="{{ $userProfile->position }}" disabled>
                                </div>
                                <div class="col-md-6">
                                    <label for="nombres" class="text-primary">Pais</label>
									<select id="merchant-select-country"
                                                            class="custom-select edit-userprofile flag-selector flag-selector--full"
                                                            name="country" disabled>
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
                                    <label for="nombres" class="text-primary">Estado</label>
                                    <input type="text" class="form-control edit-userprofile"
                                        name="state" value="{{ $userProfile->state }}" disabled>
                                </div>
                                <div class="col-md-6">
                                    <label for="nombres" class="text-primary">Ciudad</label>
                                    <input type="text" class="form-control edit-userprofile"
                                        name="city" value="{{ $userProfile->city }}" disabled>
                                </div>
                                <div class="col-md-6">
                                    <label for="nombres" class="text-primary">Numero de Telefóno</label>
                                    <input type="text" class="form-control edit-userprofile"
                                        name="mobile" value="{{ $userProfile->mobile }}" disabled>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn btn-secondary my-4" id="edit-profile">Editar Perfil
                                    </button>
                                    <button class="btn btn-secondary my-4" id="save-edit-profile" hidden>Guardar
                                        Cambios
                                    </button>
                                    <button class="btn btn-danger my-4" id="cancel-edit-profile" hidden>
                                        Cancelar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
					
                    <div class="tab-pane fade" id="userPasword" role="tabpanel" aria-labelledby="pills-profile-tab">
						<form class="form-cotrol" id="merchant-natural" action="{{ route('user.changePassword', Auth::user()->id) }}" enctype="multipart/form-data"
                            method="post">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="password" class="text-primary">Contraseña</label>
                                    <input type="password" class="form-control" placeholder="Ingrese su nueva Contraseñá" name="password">
                                </div>
                                <div class="col-md-6">
                                    <label for="password_confirmation" class="text-primary">Confirme su nueva contraseña</label>
                                    <input type="password" class="form-control" placeholder="Re-ingrese su contraseña nueva" name="password_confirmation">
                                </div>

                                <div class="col-md-6">
                                    <button class="btn btn-secondary my-4" >
										Guardar Cambios
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
            <!-- <div class="row">
					<div class="col-lg-4 mb-5 mb-lg-0">


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
				</div> -->

        </div>
    </div>
</div>

@endsection

@section('scripts')
<script type="application/javascript">

    $('#edit-profile').on("click", function(e) {
        e.preventDefault();
        $('.edit-userprofile').removeAttr('disabled');
        $('#edit-profile').attr('hidden', 'true');
        $('#save-edit-profile').removeAttr('hidden');
        $('#cancel-edit-profile').removeAttr('hidden');
    });

    $('#cancel-edit-profile').on("click", function(e) {
        e.preventDefault();
        $('.edit-userprofile').attr('disabled', 'true');
        $('#edit-profile').removeAttr('hidden');
        $('#save-edit-profile').attr('hidden', 'true');
        $('#cancel-edit-profile').attr('hidden', 'true');
    });
    
</script>
@stop
