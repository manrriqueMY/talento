@extends('layouts.app')
@section('content')

<div id="content-wrapper">
    <div class="container white_content">
        <div class="row">
            <div class="col-md-12">
                <div id="sub_menu" class="text-center">
                    <div class="hidden-xs row">

                        <div class="col-sm-3">
                            <a class="link selected" href="/company/job/active">
                                Activos
                                &nbsp;<span class="alert_icon">0</span>
                            </a>
                        </div>
                        <div class="col-sm-3">
                            <a class="link" href="/company/job/closed">
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
                        
                    </div>

                    <div class="visible-xs-block">
                        <div class="col-xs-12">
                            <a class="link selected" onclick="$('#account_mobile_menu').slideToggle();">
                                <span class="caret pull-right" id="account_mobile_caret"></span>
                                Activos
                            </a>
                            <div id="account_mobile_menu" style="display: none;">
                                <a class="link hidden-xs" href="/company/job/active">
                                    Activos
                                </a>
                                <a class="link" href="/company/job/closed">
                                    Cerrados
                                </a>
                                <a class="link" href="/company/job/waiting">
                                    En espera
                                </a>
                                <a class="link" href="/company/job/pending">
                                    Rechazados </a>
                            </div>
                        </div>                      
                    </div>
                </div>
                <br>
                <div class="header">
                    <div id="company_header">
                        <div id="desc">                   
                            <div class="info">
                                <div class="name">Proceso en Espera de Aprobación</div>
                            </div>
                        </div>
                        <div class="stats">
                            <span>Para aprobar un Proceso haga click en <i class="far fa-thumbs-up"></i></span>
                        </div>
                    </div>
                </div>
                <br>
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
                        <td><a class="btn" href="#!"><i class="far fa-thumbs-up"></i></a><a class="btn" href="#!"><i class="far fa-thumbs-down"></i></a></td>
                    </tr>
                    <tr>
                        <td>17 marzo 2020</td>
                        <td>25 marzo 2020</td>
                        <td>Analista Cuentas por Pagar</td>
                        <td>Antofagasta Mineral</td>
                        <td>Región Metropolitana</td>
                        <td>Los Condes</td>
                        <td>TInclusivo</td>
                        <td><a class="btn" href="#!"><i class="far fa-thumbs-up"></i></a><a class="btn" href="#!"><i class="far fa-thumbs-down"></i></a></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@push('css')
<link rel="stylesheet" href="/assets/css/custom/admin.css">
<link rel="stylesheet" href="/assets/css/custom/company.css">
@endpush