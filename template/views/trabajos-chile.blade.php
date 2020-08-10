@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <div class="container">
        <div class="heading-title">        
            <h4>Trabajos exclusivos </h4>            
        </div>
        <div class="line-title"><h4> </h4></div>
        <small><strong>11 trabajos encontrados</strong></small>
        
        <div class="row">
            <div class="col-md-8">
                <div class="input-group" id="busca">
                    <input type="text" class="form-control">
                    <span id="searchSubmit" class="input-group-addon btn btn-primary" onlick="">
                          <i id="fasearch" class="fa fa-search faa-pulse"></i> Buscar  
                      </span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group" id="busca">
                    <select class="custom-select" name="" id="">
                        <option value="">Tipo Oferta</option>
                        <option value="">Profecional</option>
                        <option value="">Práctica</option>
                        <option value="">Trabajo Para Estudiantes</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-xs-12">
            <div class="float-right" id="filtros">
                <a href="#" class="faa-parent animated-hover">
                    <i class="fa fa-eraser faa-tada"></i> limpiar filtros
                </a>
                <a href="#" onclick="$('#advanced-filters').slideToggle();" class="faa-parent animated-hover">
                    <i class="fa fa-filter faa-tada"></i> más filtros
                </a>                
            </div>
        </div>
        <div id="advanced-filters" style="display: none;">            
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="">Carrera</label>
                        <select name="" id="" class="custom-select">
                            <option value=""></option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="">Remoto</label>
                        <select name="" id="" class="custom-select">
                            <option value=""></option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="">Region</label>
                        <select name="" id="" class="custom-select">
                            <option value=""></option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="">Comuna</label>
                        <select name="" id="" class="custom-select">
                            <option value=""></option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="">Ofertas Inclusivas</label>
                        <select name="" id="" class="custom-select">
                            <option value=""></option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="">Fecha de Publicación</label>
                        <select name="" id="" class="custom-select">
                            <option value=""></option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="">Ordenar por</label>
                        <select name="" id="" class="custom-select">
                            <option value=""></option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="amount1">Años de Experiencia</label>                        
                        <div id="slider-range1"></div>
                        <div class="d-flex justify-content-between">
                            <span id="am11"></span>
                            <span id="am12"></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="amount2">Sueldo</label>                                             
                        <div id="slider-range2"></div>
                        <div class="d-flex justify-content-between">
                            <span id="am21"></span>
                            <span id="am22"></span>
                        </div>
                    </div>
                </div>
            </div>               
        </div>

        <div class="row">

            <div class="col-md-12">
                <div id="trabajos">
                    
                    <?php $lista = ["a","s","s","d"] ?>
                    @foreach($lista as $ke)

                    <div class="row">
                        <div class="col-xs-12 col-md-8 row">
                            <div class="col-xs-12 col-md-4">
                                <a href="/empresa">
                                    <img class="img-responsive faa-horizontal animated-hover" height="75"
                                            src="//reqlut2.s3.amazonaws.com/uploads/logos/ef0168fd1028554079e3d8903f4f95daad2e2984-5242880.jpg">
                                </a>
                            </div>
                            <div class="col-xs-12 col-md-8" id="descripcion">
                                <div class="title">
                                    <a target="_blank" href="/trabajo">Jefe (a) Turno Perforación y Tronadura (14065) </a>
                                    <a class="btn btn-sm btn-voice"><i class="fa fa-volume-up"></i></a>
                                </div>

                                <div class="subtitle">
                                    <a href="/empresa">Antofagasta Minerals</a>
                                    <span>&nbsp;·&nbsp;</span>
                                    <span itemprop="addressRegion">II Región de Antofagasta</span>
                                </div>

                                <div>
                                    <span class="tags">Profesional</span>
                                    <span class="tags">Ingeniería</span>
                                </div>

                                <div class="summary">
                                    <span>Indiferente (de 0 a más de 20 años de experiencia) </span>
                                    <a target="_blank" href="/trabajo">&nbsp;Ver más +</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="hidden-xs">
                                <p><strong>Fecha de publicación</strong></p>
                                <p class="date text-right-sm"> 26 de Jul, 2020</p>
                            </div>

                            <p><strong>Compartir</strong></p>
                            <div class="share text-right-sm mt10-xs">
                                <a href="#!" target="_blank"><i class="fab fa-facebook-square faa-shake animated-hover"></i></a>
                                <a href="#!" target="_blank"><i class="fab fa-twitter faa-shake animated-hover"></i></a>
                                <a href="#!" target="_blank"><i class="fab fa-linkedin faa-shake animated-hover"></i></a>
                                <a href="#!" target="_blank"><i class="fab fa-whatsapp faa-shake animated-hover"></i></a>
                            </div>
                            <a class="btn postula btn-primary btn-block faa-parent animated-hover" target="_blank" href="/trabajo">
                                Postular <i class="fa fa-chevron-circle-right faa-horizontal"></i>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>    
            </div>     
        </div>          
    </div>
</div>

@endsection

@push('css')
<link rel="stylesheet" href="/assets/css/custom/trabajos.css">
@endpush
@push('js')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>

      $( function() {
        $( "#slider-range1" ).slider({
          range: true,
          min: 0,
          max: 20,
          values: [ 0, 10 ],
          slide: function( event, ui ) {
            $("#am11").html(ui.values[ 0 ] + " años");
            $("#am12").html("mas de " + ui.values[ 1 ] + " años");
          }
        });
        $("#am11").html($( "#slider-range1" ).slider( "values", 0 ) + " años");
        $("#am12").html("mas de " + $( "#slider-range1" ).slider( "values", 1 ) + " años");

        $( "#slider-range2" ).slider({
          range: true,
          min: 0,
          max: 5000000,
          values: [ 1000, 1000000 ],
          slide: function( event, ui ) {
            $("#am21").html("$ " + ui.values[ 0 ]);
            $("#am22").html("$ " + ui.values[ 1 ]);
          }
        });
        $("#am21").html("$ " + $( "#slider-range2" ).slider( "values", 0 ));
        $("#am22").html("$ " + $( "#slider-range2" ).slider( "values", 1 ));
      });
</script>
@endpush