<div class="modal" tabindex="-1" role="dialog" id="login_modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body" style="position: relative;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i style="font-size: 22px;" class="fa fa-times-circle"></i> </button>
                <div class="clearfix"></div>
                <a class="btn btn-sm btn-voice " style="left: 10px; top: 10px; z-index: 10;"><i class="fa fa-volume-up"></i></a>
                <div class="col-xs-12 home_register login_reqlut text-center mb20">
                    <div class="login_reqlut_or"> Utiliza tu cuenta de <img src="/assets/images/logo-gris.png"> </div>
                </div>
                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12 home_register home_login" id="modal-inner-login">
                        <div class="or">ingresa con tu email</div>
                        <form id="userLoginForm" action="/account/login_check" class="needs-validation" novalidate
                            role="form" method="POST">
                            <div>
                                <div class="form-group has-feedback has-success">
                                    <label for="username">E-mail registrado</label>
                                    <input type="email" id="username" name="_username" required class="form-control">
                                </div>
                            </div>
                            <div>
                                <div class="form-group has-feedback">
                                    <label for="password">Contraseña</label>
                                    <input id="password" type="password" name="_password" required class="form-control">
                                </div>
                            </div>

                            <div class>
                                <button class="btn btn-outline-primary btn-block " id="userLoginSubmit">Iniciar sesión<i class="fa fa-refresh fa-spin loading ml30"  style="display: none;"></i></button>
                            </div>

                            <div class="hint">
                                <a href="/password" class="text-info">¿Olvidaste tu contraseña?</a>
                                <div class="visible-xs-block">
                                    <a class="text-info" onclick="ToggleLoginModal(false)">¿Eres nuevo?</a>
                                </div>
                            </div>

                            <div class="clearfix"></div>
                        </form>
                    </div>

                    <div class="col-md-6 col-sm-12 col-xs-12  hidden-xs home_register" id="modal-inner-register">
                        <div class="or">crea tu cuenta</div>
                        <form action="/register" class="userRegisterForm needs-validation" novalidate role="form" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label for="name-register">Nombre</label>
                                        <input id="name-register" type="text" name="name" required  class="form-control">
                                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label for="lastname-register">Apellidos</label>
                                        <input id="lastname-register" type="text" name="lastName" required  class="form-control">
                                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label for="email-register">Email</label>
                                        <input id="email-register" type="text" name="username" class="form-control" required>
                                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label for="password-register">Contraseña</label>
                                        <input id="password-register" type="password" name="password" class="form-control" required>
                                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="row">
                                <div class="col-md-12"><button class="btn btn-primary btn-block userRegisterSubmit ">Crear cuenta</button></div>
                            </div>

                            <div class="hint">
                                <div class="row">
                                    <div class="col-md-12">
                                        Al registrarse usted estará de acuerdo con los <a target="_blank"
                                        href="/home/terminosCondiciones.html">Términos &amp; Condiciones de Uso</a>
                                    </div>
                                </div>
                            </div>
                            <div class="hint">
                                <div class="visible-xs-block">
                                    <a onclick="ToggleLoginModal(true)">¿Ya estás registrado?</a>
                                </div>
                            </div>

                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>