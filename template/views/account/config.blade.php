@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8">
      <br>
      <div id="sub_menu">
          <div class="text-center">              
              <div class="row">
                <div class="col-md-6">
                  <a class="link selected" href="/account/config">
                      Cuenta
                  </a>
                </div>
                <div class="col-md-6">
                    <a class="link" href="/account/mails">
                        Correos
                    </a>
                </div>
              </div>
          </div>
      </div>
      <form name="ChangeUsername" method="post" action="/account/save/username" data-toggle="validator" novalidate="true" class="needs-validation">
          <div class="box tb20">
              <br>
              <h5 class="main">Cambiar nombre de usuario (manrrique.my@gmail.com)</h5>
              <div class="content_view">
                  <div class="form-group  has-feedback">
                    <label class="control-label required" for="ChangeUsername_username">Nuevo correo</label> 
                    <input type="email" id="ChangeUsername_username" name="username" required="required" class="form-control">
                  </div>
                  <div class="pull-right">
                      <input type="submit" name="changeUsername" class="btn btn-primary " value="Cambiar nombre de usuario">
                  </div>
                  <div class="clearfix"></div>
              </div>
          </div>
      </form>

      <form name="ChangePassword" method="post" action="/account/save/password" data-toggle="validator" novalidate="true" class="needs-validation">
          <div class="box">
            <br>
              <h4 class="main">Cambiar contraseña</h4>
              <div class="content_view">
                  <div class="form-group  has-feedback"> <label class="control-label required"
                          for="ChangePassword_oldPassword">Contraseña actual</label> <input type="password"
                          id="ChangePassword_oldPassword" name="ChangePassword[oldPassword]" required="required"
                          class="form-control"> <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                  </div>
                  <div class="form-group  has-feedback"> <label class="control-label required"
                          for="ChangePassword_newPassword_first">Contraseña nueva</label> <input type="password"
                          id="ChangePassword_newPassword_first" name="ChangePassword[newPassword][first]"
                          required="required" class="form-control"> <span class="glyphicon form-control-feedback"
                          aria-hidden="true"></span>
                  </div>
                  <div class="form-group  has-feedback"> <label class="control-label required"
                          for="ChangePassword_newPassword_second">Confirma tu contraseña nueva</label> <input
                          type="password" id="ChangePassword_newPassword_second"
                          name="ChangePassword[newPassword][second]" required="required" class="form-control"> <span
                          class="glyphicon form-control-feedback" aria-hidden="true"></span>
                  </div>
                  <div class="pull-right">
                      <input type="submit" name="changePassword"
                          class="btn btn-primary " value="Cambiar contraseña"
                          role="button" style="pointer-events: all; cursor: pointer;">
                  </div>
                  <div class="clearfix"></div>
              </div>
              <input type="hidden" id="ChangePassword__token" name="ChangePassword[_token]" class="form-control"
                  value="5rx35Rc78XOYoxPfTStvqX0xODsAAhS0gDY4YdrlNss">
          </div>
      </form>

      <form action="/account/config/close" method="POST" data-toggle="validator" novalidate="true" class="needs-validation">
          <div class="box">
            <br>
              <h4 class="main">Cerrar tu cuenta</h4>
              <div class="content_view">
                  <div class="form-group">
                      <label for="reason">Al cerrar tu cuenta no podrás volver a ingresar a la plataforma</label>
                      <textarea class="form-control" name="reason" id="reason" placeholder="Cuentános la razón"
                          required="required" rows="3"></textarea>
                  </div>
                  <div class="alert alert-warning" style="padding: 10px; margin-bottom: 5px; margin-top: -10px;">Esta
                      acción no es reversible</div>
                  <div class="pull-right">
                      <input onclick="return confirm('¿Estás seguro de cerrar tu cuenta?');" type="submit"
                          name="changePassword" class="btn btn-danger "
                          value="Cerrar cuenta" role="button" style="pointer-events: all; cursor: pointer;">
                  </div>
                  <div class="clearfix"></div>
              </div>
          </div>
      </form>
      <br>
  </div>
    @include('modal.perfil')
  </div>
</div>

@endsection
@push('css')
<link rel="stylesheet" href="/assets/css/custom/perfil.css">
@endpush