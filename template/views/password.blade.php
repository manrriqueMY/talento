@extends('layouts.logins')
@section('content')
<div id="content-wrapper">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6 col-xs-8">
                <div class="card">
                    <div class="card-title">
                        <div class="heading-title text-center">
                            <h4>Recuperar contraseña</h4>
                        </div>
                        <div class="line-title"><h4> </h4></div>
                    </div>
                    <div class="card-body">
                        <form id="loginForm" action="#" class="needs-validation" data-toggle="validator" novalidate>
                            <div class="alert alert-info">
                                <b>Ingresa tu correo registrado</b>
                                <br />
                                Te enviaremos un correo con las intrucciones
                            </div>
                            <div class="input-group mb-3 has-feedback">
                                <div class="input-group-prepend"> <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i></span> </div>
                                <input type="email" class="form-control" name="email" placeholder="Correo registrado..." value="" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection