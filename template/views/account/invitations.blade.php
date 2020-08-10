@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">

		<div class="col-md-8">
            <div id="sub_menu"><br>
			    <div class="text-center">			        
			        <div class="row">
			        	<div class="col-md-6">
				            <a class="link" href="/account/applications">
				                Postulaciones
				            </a>
				        </div>
				        <div class="col-md-6">
				            <a class="link selected" href="/account/invitations">
				                Invitaciones
				            </a>
				        </div>
			        </div>
			    </div>
			</div>
            <div class="box">
                <div class="heading-title"><h4>Procesos Activos</h4></div>
                <div class="line-title"><h4> </h4></div>
				<br>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Proceso</th>
                            <th>Empresa</th>
                            <th class="hidden-xs">Fecha</th>
                            <th class="hidden-xs">Etapa</th>
                            <th class="hidden-xs">Visto</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>

                <div class="alert alert-info text-center"> No tienes postulaciones activas </div>
            </div>

            <div class="box">
                <div class="heading-title"><h4>Procesos Finalizados</h4></div>
                <div class="line-title"><h4> </h4></div>
                <br>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Proceso</th>
                            <th>Empresa</th>
                            <th class="hidden-xs">Fecha</th>
                            <th class="hidden-xs">Etapa</th>
                            <th class="hidden-xs">Visto</th>
                            <th></th>
                            <th></th>
                            <th>Seguimiento</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>

                <div class="alert alert-info text-center"> No tienes postulaciones a ofertas finalizadas </div>
            </div>
        </div>
		@include('modal.perfil')
	</div>
</div>

@endsection
@push('css')
<link rel="stylesheet" href="/assets/css/custom/perfil.css">
@endpush