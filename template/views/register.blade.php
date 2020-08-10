@extends('layouts.logins')
@section('content')  
<div id="content-wrapper">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-8 col-xs-10">
                <div class="card">
                    <div class="card-title">
                        <div class="heading-title text-center">
                            <h4>Registrate y encuentra los mejores talentos</h4>
                        </div>
                        <div class="line-title"><h4> </h4></div>
                    </div>
                    <div class="card-body">
                        <form id="loginForm" action="#" class="needs-validation" data-toggle="validator" novalidate>
                            <div class="row">
                                <div class="col-md-6">
                                    <label id="label-name" for="name" class="control-label">Nombre</label>
                                    <div class="input-group  has-feedback">
                                        <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i></span></div>
                                        <input type="email" class="form-control" name="email" placeholder="Correo registrado..." value="" required>
                                    </div> 
                                </div>
                                <div class="col-md-6">
                                    <label id="label-name" for="name" class="control-label">RUT</label>
                                    <div class="input-group  has-feedback">
                                        <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1">ID</span></div>
                                        <input type="email" class="form-control" name="email" placeholder="Correo registrado..." value="" required>
                                    </div> 
                                </div>
                                <div class="col-md-6">
                                    <label for="type" class="control-label">Tipo</label>
                                    <select id="typeSelect" class="custom-select" name="" required="">
                                        <option value="1">Empresa</option>
                                        <option value="2">Persona natural</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="sector" class="control-label">Industria</label>
                                    <select id="sectorSelect" class="custom-select" name="" required="">
                                        <option value=""></option>
                                        <option value="20">Automotriz</option>
                                        <option value="5">Bienes de Consumo</option>
                                        <option value="7">Consultoría </option>
                                        <option value="11">Educacion</option>
                                        <option value="14">Fabricación Industrial</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="country" class="control-label">País</label>
                                        <select class="custom-select" name="" id="country" required="">
                                            <option value="1" selected="">Chile</option>
                                            <option value="2">Argentina</option>
                                            <option value="3">Perú</option>
                                            <option value="4">México</option>
                                            <option value="5">Francia</option>
                                            <option value="6">Estados Unidos</option>
                                            <option value="7">Colombia</option>
                                        </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="regionSelect" class="control-label">Región</label>
                                        <select class="custom-select" name="" id="regionSelect" required="">
                                            <option value="1">Región Metropolitana</option>
                                            <option value="2">I    Región de Tarapacá</option>
                                            <option value="3">II   Región de Antofagasta</option>
                                            <option value="4">III  Región de Atacama</option>
                                            <option value="5">IV   Región de Coquimbo</option>
                                            <option value="6">V    Región de Valparaíso</option>
                                            <option value="7">VI   Región del Lib. Gral. Bernardo O´Higgins</option>
                                        </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="regionSelect" class="control-label">Comuna</label>
                                        <select class="custom-select" name="" id="regionSelect" required="">
                                            <option value="1">Región Metropolitana</option>
                                            <option value="2">I    Región de Tarapacá</option>
                                            <option value="3">II   Región de Antofagasta</option>
                                            <option value="4">III  Región de Atacama</option>
                                            <option value="5">IV   Región de Coquimbo</option>
                                            <option value="6">V    Región de Valparaíso</option>
                                            <option value="7">VI   Región del Lib. Gral. Bernardo O´Higgins</option>
                                        </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="address" class="control-label">Dirección</label>
                                    <div class="input-group  has-feedback">
                                        <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1"><i class="fa fa-map-marker"></i></span></div>
                                        <input type="email" class="form-control" name="email" placeholder="Correo registrado..." value="" required>
                                    </div> 
                                </div>
                                <div class="col-md-6">
                                    <label for="address" class="control-label">Teléfono de contacto</label>
                                    <div class="input-group  has-feedback">
                                        <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1"><i class="fa fa-map-marker"></i></span></div>
                                        <input type="email" class="form-control" name="email" placeholder="Teléfono" value="" required>
                                    </div>
                                </div>
                                <div class="col-md-6"></div>
                                <div class="col-md-6">
                                    <label for="positionSelect" class="control-label">¿Cuál es tu rol en la empresa?</label>
                                        <select id="positionSelect" class="custom-select" name="" required="">
                                            <option value="">Seleccione...</option>
                                            <option value="1">Especialista de RRHH / Analista Talento</option>
                                            <option value="2">Administrador</option>
                                            <option value="3">Jefe RRHH</option>
                                            <option value="4">Gerente RRHH</option>
                                            <option value="5">Dueño</option>
                                            <option value="6">EST/Agencia Reclutamiento</option>
                                            <option value="7">Analista</option>
                                            <option value="8">Jefe</option>
                                            <option value="9">Gerente</option>
                                            <option value="10">Otro</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="sizeSelect" class="control-label">¿Cuál es el tamaño de la empresa?</label>
                                        <select id="sizeSelect" class="custom-select" name="" required="">
                                            <option value="">Tamaño de la empresa...</option>
                                            <option value="1">1-10 trabajadores</option>
                                            <option value="2">11-50 trabajadores</option>
                                            <option value="3">51-200 trabajadores</option>
                                            <option value="4">201-1500 trabajadores</option>
                                            <option value="5">1501-5000 trabajadores</option>
                                            <option value="6">+5000 trabajadores</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <div class="heading-title">
                                        <h3>Usuario</h3>
                                    </div>
                                    <div class="line-title"><h4> </h4></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <br>
                                        <label class="control-label required" for="email">Email de contacto </label> <span data-toggle="popover" data-trigger="focus" title="Tu email" data-content="Utiliza tu correo electrónico para iniciar sesión con tu cuenta.<br><br>
                                                        Puedes asociar más de una empresa a tu cuenta, por lo que si ya tienes cuenta te pediremos tu contraseña de usuario."> <i class="fa fa-question-circle"></i></span>
                                        <div class="input-group  has-feedback">
                                            <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i></span></div>
                                            <input type="email" class="form-control" name="email" placeholder="Correo registrado..." value="" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary btn-block">Registrarse</button>
                                </div>
                            </div>                            
                        </form>
                    </div>
                </div>
                <div class="hint">Al registrarse usted estará de acuerdo con los <a target="_blank" href="/terminosCondiciones"> Términos &amp; condiciones de uso
                </a></div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('js')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script>
      $(document).ready(function () {
          $('[data-toggle="popover"]').popover();
      });
  </script>
@endpush