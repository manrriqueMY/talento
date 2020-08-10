@extends('layouts.app')
@section('content')
<div class="company-banner"></div>
<div id="content-wrapper">    
    <div class="container">
        <div class="header">
            <br>
            <!--<div id="company_header">
                <div id="desc">
                    <div class="header_content">
                        <div class="photo">
                            <div class="img_wrapper">
                                <img class="img-responsive"
                                    src="//reqlut2.s3.amazonaws.com/uploads/logos/ef0168fd1028554079e3d8903f4f95daad2e2984-5242880.jpg"
                                    alt="Trabajo en Antofagasta Minerals" title="Empleo en Antofagasta Minerals">
                            </div>
                        </div>
                    </div>
                    <div class="info">
                        <div class="name">Antofagasta Minerals</div>
                        <small class="subtitle mt20">
                            Chile
                            | <span>Mineria, Energía y Recursos Naturales</span>
                            | <a href="/trabajar-en-antofagasta-minerals.html">Ver más +</a>
                        </small>
                    </div>
                </div>
                <div class="stats">
                    <a class="stat" href="/trabajar-en-antofagasta-minerals#jobOffers">
                        <div class="number">4</div>
                        <div class="stat_name">Trabajos</div>
                    </a>
                </div>
            </div>-->
            <div id="company_header">
                <div class="header_content float-left">                            
                    <div class="photo hidden-xs">
                        <div class="img_wrapper">
                            <img class="img-responsive" height="60" src="//reqlut2.s3.amazonaws.com/uploads/logos/ef0168fd1028554079e3d8903f4f95daad2e2984-5242880.jpg">
                        </div>
                    </div>
                </div>
                    
                <div class="info float-left">
                    <div class="name">Antofagasta Minerals</div>
                    <div class="subtitle mt20">
                        Chile
                        | <span>Mineria, Energía y Recursos Naturales</span>
                        | <a href="/trabajar-en-antofagasta-minerals">Ver más +</a>
                    </div>
                </div>
                <div class="stats hidden-xs text-center float-right">
                    <a class="stat" href="/empresa">
                        <div class="number">7</div>
                        <div class="stat_name">Trabajos</div>
                    </a>
                </div>
            </div>
        </div>
    
        <div id="job_header">
            <div class="col-md-12">
                
                <div class="heading-title">
                    <h4>
                        Jefe (a) Turno Perforación y Tronadura (14065) 
                        <a class="btn btn-primary float-right" href="#apply" id="postula"><i class="far fa-hand-pointer"></i> Postular</a>
                    </h4>              
                </div>
                <div class="line-title"><h4> </h4></div>
                <br>
                <b>Publicado el 26 de Jul</b>
            </div>
        </div> 

			<div class="wrapper">
			    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
			        <div class="panel panel-default" id="benefitsForm">
			            <div class="panel-heading" role="tab" id="headingThree">
			                <h4 class="panel-title">
			                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion"  href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
			                        <div class="heading-title">
					                    <h4> ACERCA DE ANTOFAGASTA MINERALS </h4>
					                </div>
                                    <div class="line-title"><h4> </h4></div>
			                    </a>
			                </h4>
			            </div>
			            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
			                <div class="panel-body">
			                    Antofagasta plc es una empresa controlada por capitales chilenos, que cotiza sus acciones en la bolsa de Valores de Londres, con una división minera y otra de transporte ferroviario. La división minera está representada por Antofagasta Minerals, principal grupo minero privado del país y uno de los 10 mayores productores de cobre del mundo. Actualmente operamos cuatro compañías: Los Pelambres, Antucoya, Centinela, y Zaldívar. Además de cobre, el Grupo produce molibdeno y oro. La división de transporte está en manos del Ferrocarril de Antofagasta a Bolivia (FCAB), que brinda soluciones integradas de transporte de carga en la región de Antofagasta. Somos una compañía global que cree en las personas, dónde éstas son el centro de nuestro negocio. Propiciamos un ambiente laboral que fomente la colaboración, flexibilidad y equidad, donde se valore la diversidad y el talento. Un lugar que permita desarrollar el máximo potencial de nuestros trabajadores y se convierta en un espacio de innovación.
			                </div>
			            </div>
			        </div>
			        <div class="panel panel-default" id="socialForm">
			            <div class="panel-heading" role="tab" id="headingThree">
			                <h4 class="panel-title">
			                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion"  href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
			                        <div class="heading-title">
					                    <h4> OFERTAS LABORALES EN ANTOFAGASTA MINERALS </h4>
					                </div>
                                    <div class="line-title"><h4> </h4></div>
			                    </a>
			                </h4>
			            </div>
			            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
			                <div class="panel-body">
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
			    </div>
			</div>
    </div>
</div>
@endsection
@push('css')
<link rel="stylesheet" href="/assets/css/custom/trabajos.css">
<link rel="stylesheet" href="/assets/css/custom/company.css">
<link rel="stylesheet" href="/assets/css/custom/profile.css">
<link rel="stylesheet" href="/assets/css/custom/trabajo.css">
@endpush