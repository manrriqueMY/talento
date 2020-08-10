@extends('layouts.app')
@section('content')
<div id="content-wrapper">
    <div class="container white_content">
        <div class="row">
            <div class="col-md-9">
                <div id="sub_menu" class="text-center">
				    <div class="hidden-xs row">

				        <div class="col-sm-3">
				            <a class="link " href="/company/job/active">
				                Activos
				                &nbsp;<span class="alert_icon">0</span>
				            </a>
				        </div>
				        <div class="col-sm-3">
				            <a class="link selected" href="/company/job/closed">
				                Cerrados
				                &nbsp;<span class="alert_icon">0</span>
				            </a>
				        </div>
				        <div class="col-sm-3">
				            <a class="link" href="/company/job/waiting">
				                En espera
				                &nbsp;<span class="alert_icon">0</span>
				            </a>
				        </div>
				        <div class="col-sm-3">
				            <a class="link" href="/company/job/pending">
				                Rechazados &nbsp;<span class="alert_icon">0</span>
				            </a>
				        </div>
				        <div class="clearfix"></div>
				    </div>

				    <div class="visible-xs-block">
				        <div class="col-xs-12">
				            <a class="link selected" onclick="$('#account_mobile_menu').slideToggle();">
				                <span class="caret pull-right" id="account_mobile_caret"></span>
				                Cerrados
				            </a>
				            <div id="account_mobile_menu" style="display: none;">
				                <a class="link s" href="/company/job/active">
				                    Activos
				                </a>
				                <a class="link hidden-x" href="/company/job/closed">
				                    Cerrados
				                </a>
				                <a class="link" href="/company/job/waiting">
				                    En espera
				                </a>
				                <a class="link" href="/company/job/pending">
				                    Rechazados </a>
				            </div>
				        </div>
				        <div class="clearfix"></div>
				    </div>
				</div>
                <div class="heading-title"><h4>Procesos Finalizados</h4></div>
                <div class="line-title"><h4> </h4></div>
                <table class="table table-striped">
                	<tr>
                		<th>Inicio</th>
                		<th>Fin</th>
                		<th>Cargo</th>
                		<th>Empresa</th>
                		<th>Region</th>
                		<th>Comuna</th>
                		<th>Origen</th>
                		<th>Selección</th>
                	</tr>
                	<tr>
                		<td>17 marzo 2020</td>
                		<td>25 marzo 2020</td>
                		<td>Analista Cuentas por Pagar</td>
                		<td>Antofagasta Mineral</td>
                		<td>Región Metropolitana</td>
                		<td>Los Condes</td>
                		<td>TInclusivo</td>
                		<td>Sin Respuesta</td>
                	</tr>
                </table>
            </div>
            @include('modal.publica')
        </div>
    </div>
</div>
@endsection
@push('css')
<link rel="stylesheet" href="/assets/css/custom/company.css">
@endpush