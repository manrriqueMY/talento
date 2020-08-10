@extends('layouts.logins')
@section('content')
<div id="content-wrapper">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6 col-xs-8">
                <div class="card">
                    <div class="card-title">
                        <div class="heading-title text-center">
                            <h3>Ingresa a tu cuenta y encuentra los mejores talentos</h3>
                        </div>
                        <div class="line-title"><h4> </h4></div>
                    </div>
                    <div class="card-body">
                        <form id="loginForm" action="#" class="needs-validation" data-toggle="validator" novalidate>
                            <div class="input-group mb-3 has-feedback">
                                <div class="input-group-prepend"> <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i></span> </div>
                                <input type="email" class="form-control" name="companyUsername" placeholder="E-mail..." value="" required>
                            </div>
                            <div class="input-group mb-3 has-feedback">
                                <div class="input-group-prepend"> <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span> </div>
                                <input type="email" class="form-control" name="companyPassword" placeholder="Contraseña..." value="" required>
                            </div>
                            <div class="mb20">
				                ¿Olvidaste tu contraseña? <a href="/password">recuperala aquí</a>
				            </div>
				            <br>
                            <button type="submit" class="btn btn-primary btn-block">Enviar</button>
                        </form>
                    </div>
                </div>
                <div class="text-center">
			        ¿Aún no has publicado en los portales asociados a <b>reqlut</b>? <a href="/register">crea tu cuenta ahora.</a>
			    </div>
            </div>
        </div>
    </div>
</div>

@endsection