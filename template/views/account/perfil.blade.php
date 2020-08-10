@extends('layouts.app')
@section('content')

<div id="content-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
			    <br>
			    <div class="alert alert-info" role="alert">
			        Si tienes dudas sobre como completar tu perfil escribenos a <a
			            href="mailto: contacto@talentoinclusivo.com?subject='Necesito ayuda para completar mi perfil'"
			            target="_blank">contacto@talentoinclusivo.com</a>
			    </div>
			    <div class="clean-profile">
			        <div class="box" id="info">
			            <div class="heading-title">
			                <h4>
			                    <span class="pull-right"><a data-toggle="modal" data-target="#main_modal" onclick="" href="#"><i class="fas fa-edit"></i> Editar</a></span>
			                    Información General&nbsp;&nbsp;<i class="fa fa-bookmark"></i>
			                </h4>
			                <div class="line-title"><h4> </h4></div>
			            </div>
			            <div class="content_view">
			                <div class="field">
			                    <div class="name col-sm-4">Nombre completo</div>
			                    <div class="data col-sm-8">manrrique meneses</div>
			                    
			                </div>
			                <div class="field">
			                    <div class="name col-sm-4">Correo electrónico</div>
			                    <div class="data col-sm-8">manrrique.my@gmail.com <a href="/account/config">(Cambiar nombre de
			                            usuario)</a></div>
			                    
			                </div>
			                <div class="field">
			                    <div class="name col-sm-4">Fecha de nacimiento</div>
			                    <div class="data col-sm-8">No definido</div>
			                    
			                </div>
			                <div class="field">
			                    <div class="name col-sm-4">N° de Identificación</div>
			                    <div class="data col-sm-8">No definido</div>
			                    
			                </div>
			                <div class="field">
			                    <div class="name col-sm-4">Género</div>
			                    <div class="data col-sm-8">No definido</div>
			                    
			                </div>
			                <div class="field">
			                    <div class="name col-sm-4">Nacionalidad</div>
			                    <div class="data col-sm-8">Chile</div>
			                    
			                </div>
			                <div class="field">
			                    <div class="name col-sm-4">Ubicación</div>
			                    <div class="data col-sm-8">Chile</div>
			                    
			                </div>
			                <div class="field">
			                    <div class="name col-sm-4">Dirección</div>
			                    <div class="data col-sm-8">No definido</div>
			                    
			                </div>
			                <div class="field">
			                    <div class="name col-sm-4">Estado civil</div>
			                    <div class="data col-sm-8">No definido</div>
			                    
			                </div>
			                <div class="field">
			                    <div class="name col-sm-4">Teléfono fijo</div>
			                    <div class="data col-sm-8">No definido</div>
			                    
			                </div>
			                <div class="field">
			                    <div class="name col-sm-4">Celular</div>
			                    <div class="data col-sm-8">No definido</div>
			                    
			                </div>
			                
			            </div>
			        </div>
			        <div class="box" id="presentation">
			            <div class="heading-title">
			                <h4>Presentación</h4>
			            </div>
			            <div class="line-title"><h4> </h4></div>
			            <div class="content_view">
			                <div class="white_bg">
			                    <h5>Tu presentación debe ser concisa y cautivante</h5>
			                    <p class="tb10">Debe captar la atención de la persona que la lea y hacer que desee ver más en
			                        detalle tu perfil. Puedes hablar sobre tus estudios y/o también explicar lo que puedes aportar
			                        mediante logros y/o experiencias, qué habilidades y fortalezas tienes.</p>
			                    <div class="text-center tb10">
			                        <a class="btn btn-primary " data-toggle="modal" data-target="#main_modal" onclick="" href="#" ><i
			                                class="fa fa-plus-circle"></i> Agregar presentación</a>
			                    </div>
			                </div>
			            </div>
			        </div>

			        <div class="box" id="disabilities">
			            <div class="heading-title">
			                <h4>Inclusión Laboral</h4>
			            </div>
			            <div class="line-title"><h4> </h4></div>
			            <div class="content_view">
			                <div class="white_bg">
			                    <div class="item"></div>
			                    <div class="text-center">
			                        <a class="btn btn-primary " data-toggle="modal" data-target="#main_modal" onclick="" href="#" ><i class="fas fa-edit"></i> Editar Inclusión Laboral</a>
			                    </div>
			                </div>
			            </div>
			        </div>

			        <div class="box" id="experience">
			            <div class="heading-title">
			                <h4>Experiencia Laboral</h4>
			            </div>
			            <div class="line-title"><h4> </h4></div>
			            <div class="content_view">
			                <h5 class="sub">  Años de experiencia  </h5>
			                <div class="white_bg">
			                	<div class="item">
			                    </div>
			                    <div class="text-center">
			                        <a class="btn btn-primary " data-toggle="modal" data-target="#main_modal" onclick="" href="#" ><i class="fas fa-edit"></i> Editar años de experiencia</a>
			                    </div>
			                </div>
			            </div>

			            <div class="content_view">
			                <h5 class="sub">   Emprendimiento   </h5>
			                <div class="white_bg">
			                    <div class="item">
			                    </div>
			                    <div class="text-center">
			                        <a class="btn btn-primary " data-toggle="modal" data-target="#main_modal" onclick="" href="#" ><i class="fas fa-edit"></i> Editar Emprendimiento</a>
			                    </div>
			                </div>
			            </div>

			            <div class="content_view" id="jobs">
			                <h5 class="sub">
			                    Trabajos y prácticas
			                    <a data-toggle="modal" data-target="#main_modal" onclick="" href="#" class="add pull-right"><i class="fa fa-plus-circle"></i> Agregar</a>
			                </h5>
			                <div class="item text-center">
			                    <a data-toggle="modal" data-target="#main_modal" onclick="" href="#" class="btn btn-primary add_item " ><i class="fa fa-plus-circle"></i> Agregar trabajo</a>
			                </div>
			            </div>
			        </div>

			        <div class="box">
			            <div class="heading-title">
			                <h4>Formación</h4>
			            </div>
			            <div class="line-title"><h4> </h4></div>
			            <div class="content_view">
			                <h5 class="sub" id="educationLevel">
			                    Nivel educacional
			                    <a data-toggle="modal" data-target="#main_modal" onclick="" href="#" class="add pull-right"><i class="fa fa-pencil"></i> Editar</a>
			                </h5>
			                <div>
			                    <div class="item text-center">
			                        <a data-toggle="modal" data-target="#main_modal" onclick="" href="#" class="btn btn-primary add_item " ><i class="fa fa-pencil"></i> Editar nivel educacional</a>
			                        
			                    </div>
			                </div>
			            </div>

			            <div class="content_view">
			                <h5 class="sub" id="careers">
			                    Educación superior <a data-toggle="modal" data-target="#main_modal" onclick="" href="#" class="add pull-right"><i class="fa fa-plus-circle"></i> Agregar</a>
			                </h5>
			                <div class="item text-center">
			                    <a data-toggle="modal" data-target="#main_modal" onclick="" href="#" class="btn btn-primary add_item " ><i class="fa fa-plus-circle"></i> Agregar carrera</a>
			                </div>
			            </div>

			            <div class="content_view">
			                <h5 class="sub" id="schools">
			                    Educación básica y media
			                    <a data-toggle="modal" data-target="#main_modal" onclick="" href="#" class="add pull-right"><i class="fa fa-plus-circle"></i> Agregar</a>
			                </h5>
			                <div class="item text-center">
			                    <a data-toggle="modal" data-target="#main_modal" onclick="" href="#" class="btn btn-primary add_item " ><i class="fa fa-plus-circle"></i> Agregar colegio</a>
			                </div>
			            </div>


			            <div class="content_view">
			                <h5 class="sub" id="postgraduates">
			                    Postgrados
			                    <a data-toggle="modal" data-target="#main_modal" onclick="" href="#" class="add pull-right"><i class="fa fa-plus-circle"></i> Agregar</a>
			                </h5>
			                <div class="item text-center">
			                    <a data-toggle="modal" data-target="#main_modal" onclick="" href="#" class="btn btn-primary add_item " ><i class="fa fa-plus-circle"></i> Agregar postgrado</a>
			                </div>
			            </div>

			            <div class="content_view">
			                <h5 class="sub" id="additional">
			                    Información adicional
			                    <a data-toggle="modal" data-target="#main_modal" onclick="" href="#" class="add pull-right"><i class="fa fa-plus-circle"></i> Agregar</a>
			                </h5>
			                <div class="item text-center">
			                    <a data-toggle="modal" data-target="#main_modal" onclick="" href="#" class="btn btn-primary add_item " ><i class="fa fa-plus-circle"></i> Agregar información adicional</a>
			                </div>
			            </div>

			        </div>

			        <div class="box">
			            <div class="heading-title">
			                <h4>Conocimientos</h4>
			            </div>
						<div class="line-title"><h4> </h4></div>
			            <div class="content_view">
			                <h5 class="sub" id="langs">
			                    Idiomas
			                    <a data-toggle="modal" data-target="#main_modal" onclick="" href="#" class="add pull-right"><i class="fa fa-plus-circle"></i> Agregar</a>
			                </h5>
			                <div class="item text-center">
			                    <a data-toggle="modal" data-target="#main_modal" onclick="" href="#" class="btn btn-primary add_item " ><i class="fa fa-plus-circle"></i> Agregar idioma</a>
			                </div>
			            </div>

			            <div class="content_view">
			                <h5 class="sub" id="habilities">
			                    Habilidades
			                    <a data-toggle="modal" data-target="#main_modal" onclick="" href="#" class="add pull-right"><i class="fa fa-plus-circle"></i> Agregar</a>
			                </h5>
			                <div class="item text-center">
			                    <a data-toggle="modal" data-target="#main_modal" onclick="" href="#" class="btn btn-primary add_item " ><i class="fa fa-plus-circle"></i> Agregar habilidad</a>
			                </div>
			            </div>
			        </div>
			    </div>
			    <br>
			</div>
			@include('modal.perfil')
			@include('modal.experiencia')
		</div>
	</div>
</div>

@endsection
@push('css')
<link rel="stylesheet" href="/assets/css/custom/perfil.css">
@endpush