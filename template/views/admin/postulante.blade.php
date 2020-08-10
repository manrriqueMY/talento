@extends('layouts.app')
@section('content')

<div id="content-wrapper">
    <div class="container">
        <div class="header">
            <div id="company_header">
                <div id="desc">                   
                    <div class="info">
                        <div class="name">Generalista Recursos Humanos(13933)</div>
                        <mdall class="subtitle mt20">
                            Pia Concha
                        </mdall>
                        <div class="name">Antofagasta Minerals</div>
                    </div>
                </div>
                <div class="stats">
                    <button class="btn btn-light"><i class="fas fa-edit"></i> Editar</button> 
                    <button class="btn btn-light"><i class="fas fa-minus"></i> Finalizar</button>
                </div>
            </div>
        </div> 
        <div id="job_header">
            <div class="row">
                <div class="col-md-6 d-flex justify-content-center"><a href="/admin/information">Información</a></div>
                <div class="col-md-6 d-flex justify-content-center"><a class="active" href="/admin/postulante">Postulantes</a></div>
            </div>
        </div> 
        <div class="row job_section">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4"><button class="btn btn-primary btn-block">En Proceso</button></div>
                    <div class="col-md-4"><button class="btn btn-primary btn-block">Inscritos</button></div>
                    <div class="col-md-4"><button class="btn btn-primary btn-block">Descartados</button></div>
                </div>
            </div>
            <div class="col-md-4">                 
                <div class="col-xs-12">
                    <div id="filtros">
                        <a href="#!" class="faa-parent animated-hover">
                            <i class="fa fa-eraser faa-tada"></i> limpiar filtros
                        </a>
                        <a href="#!" onclick="$('#advanced-filters').slideToggle();" class="faa-parent animated-hover">
                            <i class="fa fa-filter faa-tada"></i> más filtros
                        </a>                
                    </div>
                </div>
                <div id="advanced-filters" class="hidden-xs"> 
                    <div class="col-md-12"><h4><a href="#!">Filtros</a></h4></div>           
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Carrera</label>
                                <select name="" id="" class="custom-select">
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Remoto</label>
                                <select name="" id="" class="custom-select">
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Region</label>
                                <select name="" id="" class="custom-select">
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Comuna</label>
                                <select name="" id="" class="custom-select">
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Ofertas Inclusivas</label>
                                <select name="" id="" class="custom-select">
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
            <div class="col-md-8">
                <div class="col-md-12">
                    <?php $as = ["","","","",""] ?>
                    @foreach($as as $a)
                    <div class="candidate">
                        <div class="desc">
                            <div class="img"><img src="" alt=""></div>                            
                            <table>
                                <tr>
                                    <td colspan="3">
                                        <span class="color-primary"><strong>Danyer Paz Gonzales</strong></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><i class="fas fa-calendar"></i></td>
                                    <td>Experiencia</td>
                                    <td>8 año(s)</td>
                                </tr>
                                <tr>
                                    <td><i class="fas fa-archive"></i></td>
                                    <td>Trabajo</td>
                                    <td>Analista Financiero MedallaGroup</td>
                                </tr>
                                <tr>
                                    <td><i class="fas fa-graduation-cap"></i></td>
                                    <td>Carrera</td>
                                    <td>Contador Auditor UN</td>
                                </tr>
                                <tr>
                                    <td><i class="fas fa-dollar-sign"></i></td>
                                    <td>Renta</td>
                                    <td>$ 1,300,000</td>
                                </tr>
                            </table>
                        </div>
                        <div class="postule">
                            <div><span>postuló el <strong>26 marzo</strong></span></div>
                            <div><h6>CALCE</h6></div>
                            <div><h5>50%</h5></div>
                            <div><a class="color-primary" href="#!"><i class="far fa-comment-dots"></i> Respuestas</a></div>
                            <div><a class="color-primary" href="#!"><i class="fas fa-download"></i> Descargar CV</a></div>
                        </div>
                    </div>
                    <hr>
                    @endforeach
                </div>
            </div>           
        </div>
    </div>
</div>
@endsection
@push('css')
<link rel="stylesheet" href="/assets/css/custom/admin.css">
<link rel="stylesheet" href="/assets/css/custom/postulante.css">
@endpush