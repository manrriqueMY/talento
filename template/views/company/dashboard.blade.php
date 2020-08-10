@extends('layouts.app')
@section('content')
<div id="content-wrapper">
    <div class="container white_content">
        <div class="row">
            <div class="col-md-9">
                <br>
                <div class="">
                    <h1 class="black left">                        
                        Estadísticas de Spyrohost

                        <div class="pull-right message-filter">
                            <a href="/company/dashboard" class="active">Mes</a> |
                            <a href="/company/dashboard">Año</a> |
                            <a href="/company/dashboard">Todos</a>
                        </div>
                    </h1>
                    <div class="row">
                    	<div class="col-md-4 company_sum first">
	                        <div class="big_num">
	                            0
	                        </div>
	                        <div class="name">
	                            <span class="hidden-md">
	                                Procesos publicados
	                            </span>
	                            <span class="visible-md-block">
	                                Publicados
	                            </span>
	                        </div>
	                        <div class="lower">
	                            en Julio 2020
	                        </div>
	                    </div>
	                    <div class="col-md-4 company_sum">
	                        <div class="big_num">
	                            0 <br>
	                        </div>
	                        <div class="name">
	                            Postulantes
	                        </div>
	                        <div class="lower">
	                            en Julio 2020
	                        </div>
	                    </div>
	                    <div class="col-md-4 company_sum">
	                        <div class="big_num">
	                            0 <br>
	                        </div>
	                        <div class="name">
	                            Visitas
	                        </div>
	                        <div class="lower">
	                            en Julio 2020
	                        </div>
	                    </div>
                    </div>
                    
					<br>
                    <div>
                        <span class="hint">Contando las publicaciones de todos los <a href="/company/usuarios">usuarios</a> de la empresa</span>
                    </div>
					<br>
                </div>
                <div class="mt40">
                    <h1 class="black">
                        Procesos pendientes
                    </h1>
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th>Creación</th>
                                <th>Nombre</th>
                            </tr>
                            <tr>
                                <td class="alert alert-info text-center" colspan="5">
                                    No tienes procesos pendientes
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="mt40">
                    <h1 class="black">
                        Procesos activos
                    </h1>
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th>Publicación</th>
                                <th>Nombre</th>
                                <th class="text-center">Visitas</th>
                                <th class="text-center">Postulantes</th>
                                <th class="text-center">Match</th>
                            </tr>
                            <tr>
                                <td class="alert alert-info text-center" colspan="5">
                                    No tienes procesos activos
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="">
                    <h1 class="black">
                        Procesos finalizados
                    </h1>
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th>Publicación</th>
                                <th>Término</th>
                                <th>Nombre</th>
                                <th class="text-center">Visitas</th>
                                <th class="text-center">Postulantes</th>
                            </tr>
                            <tr>
                                <td class="alert alert-info text-center" colspan="5">
                                    No tienes procesos cerrados
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <br>
            </div>
            @include('modal.publica')
        </div>
    </div>
</div>
@endsection
@push('css')
<link rel="stylesheet" href="/assets/css/custom/company.css">
@endpush