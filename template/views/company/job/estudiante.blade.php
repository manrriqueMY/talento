@extends('layouts.app')
@section('content')
<div id="content-wrapper">
    <div class="container white_content">
        <div >
            <form class="needs-validation" method="POST" onsubmit="" id="JobOfferForm" novalidate="true">
                <div class="row">
                	<div class="col-md-7">
	                    <div class="content_title_menu">
	                        <div class="menu_wrapper">
	                            <div class="link header">
	                                <span class="fa-stack fa-lg">
	                                    <i class="fa fa-circle fa-stack-2x"></i>
	                                    <i class="fa fa-inverse fa-stack-1x">1</i>
	                                </span>
	                                Descripción general
	                            </div>
	                        </div>
	                    </div>
	                    <div class="main_content no_min">
	                        <div class="row">
	                        	<div class="form-group has-feedback col-xs-6 col-md-8 ">
		                        	<div class="col-md-12">
		                        		<label class="control-label required" for="JobOffer_jobTitle">Título del proceso</label>
		                        		<input type="text" id="JobOffer_jobTitle" name="jobTitle" required class="form-control"> 
		                        	</div>
		                        </div>
		                        <div class="form-group has-feedback col-xs-6 col-md-4 " style="">
		                        	<label class="control-label required" for="jobOfferTypeSelect">Tipo de oferta</label>
		                        	<select id="jobOfferTypeSelect" name="portalType" onchange=""  class="custom-select">
		                                <option value="0" selected="selected">Profesional</option>
		                                <option value="1">Práctica</option>
		                                <option value="2">Trabajo para estudiantes</option>
		                            </select> 
		                        </div>
		                        <div class="form-group  has-feedback col-md-4 "> 
		                        	<label class="control-label required" for="classified">Privacidad </label>
		                        	<span data-toggle="tooltip" data-placement="top" title="Las ofertas &quot;Privadas&quot; no aparecen con el nombre de tu empresa ni tampoco en tu página de empresa, si no que el nombre que tu definas.">
		                        		<i class="fa fa-question-circle"></i>
		                        	</span>
		                            <select id="classified" name="classified" class="custom-select">
		                                <option value="0" selected="selected">Público</option>
		                                <option value="1">Privado</option>
		                            </select> 
		                        </div>
		                        

		                        <div class="form-group  has-feedback col-md-12 ">
		                        	<label class="control-label required" for="isInclusive">¿La oferta es inclusiva?</label>
		                        	<span data-toggle="tooltip" data-placement="top" title="Las ofertas inclusivas son aquellos trabajos aptos para personas en situación de discapacidad. En caso de que la oferta sea apta para personas en situación de discapacidad.">
		                        		<i class="fa fa-question-circle"></i>
		                        	</span>
		                            <select id="isInclusive" name="isInclusive" class="custom-select">
		                                <option value="0" selected="selected">No</option>
		                                <option value="1">Si</option>
		                            </select> 
		                        </div>
		                        
		                        <div class="form-group  has-feedback col-md-12 "> 
		                        	<label class="control-label required" for="JobOffer_description">Descripción</label>
		                        	<span data-toggle="tooltip" data-placement="top" title="Detallar la descripción del cargo, tareas y responsabilidades. Además se recomienda especificar cualquier otro detalle que pueda orientar a los postulantes.">
		                        		<i class="fa fa-question-circle"></i>
		                        	</span>
		                            <textarea id="JobOffer_description" name="description" required  rows="6" class="form-control"></textarea>
		                        </div>	                        

		                        <div class="form-group  has-feedback col-md-12 ">
		                        	<label class="control-label required">Experiencia</label>
									<span data-toggle="tooltip" data-placement="top" title="Indiferente: cualquier nivel de experiencia. Sin experiencia: de 0 a 2 años de experiencia. Junior: de 2 a 5 años de experiencia. Senior: de 5 a 10 años de experiencia. Experto: 10 o más años de experiencia">
		                        		<i class="fa fa-question-circle"></i>
		                        	</span>

		                        	<br>
		                            <div id="JobOffer_experience"  class="btn-group">
		                                <label class=" " >
		                                	<input type="radio" class="radio" id="JobOffer_experience_0" name="experience" required value="1" checked>
	                                        <label class="control-label required r0" for="JobOffer_experience_0">Indiferente</label>
	                                    </label>
	                                    <label class=" " >
	                                    	<input type="radio" class="radio" id="JobOffer_experience_1" name="experience" required value="2">
	                                        <label class="control-label required" for="JobOffer_experience_1">Sin experiencia</label>
	                                    </label>
	                                    <label class=" " >
	                                    	<input type="radio" class="radio" id="JobOffer_experience_2" name="experience" required value="3">
	                                        <label class="control-label required" for="JobOffer_experience_2">Junior</label>
	                                    </label>
	                                    <label class=" " >
	                                    	<input type="radio" class="radio" id="JobOffer_experience_3" name="experience" required value="4">
	                                        <label class="control-label required" for="JobOffer_experience_3">Senior</label> 
	                                    </label>
	                                    <label class=" " >
	                                    	<input type="radio" class="radio" id="JobOffer_experience_4" name="experience" required value="5">
	                                        <label class="control-label required r1" for="JobOffer_experience_4">Experto</label>
	                                    </label>
		                            </div> 
		                        </div>
		                        <div class="form-group  has-feedback col-md-6 ">
		                        	<label class="control-label required" for="JobOffer_jobArea">Área de trabajo</label>
		                        	<select id="JobOffer_jobArea" name="jobArea" required class="custom-select">
		                                <option value="" selected="selected">Área de trabajo</option>
		                                <option value="13">Administración</option>
		                                <option value="16">Consultoría</option>
		                                <option value="19">Contabilidad</option>
		                                <option value="14">Control de Gestión</option>
		                                <option value="2">Creatividad y Diseño</option>
		                            </select> 
		                        </div>
	                            <div class="form-group  has-feedback col-md-6 " style="">
	                            	<label class="control-label required" for="jobTypeSelect">Tipo de cargo</label>
	                            	<select id="jobTypeSelect"  name="jobType" required class="custom-select">
	                                    <option value="" selected="selected">Tipo de cargo</option>
	                                    <option value="9">Gerente General</option>
	                                    <option value="100">Analista</option>
	                                    <option value="101">Analista Sr</option>
	                                    <option value="102">Jefe</option>
	                                    <option value="103">Subgerente</option>
	                                    <option value="104">Gerente</option>
	                                </select> 
	                            </div>
		                        

		                        <div class="form-group  has-feedback col-xs-6 col-md-8 "> 
		                        	<div class="col-md-12">
		                        		<label  class="control-label required" for="salary">Sueldo ofrecido</label>
		                        		<span data-toggle="tooltip" data-placement="top" title="El sueldo es importante ya que sirve para recomendar y calzar las ofertas de acuerdo a lo que los talentos desean ganar.">
			                        		<i class="fa fa-question-circle"></i>
			                        	</span>
		                            	<input type="text" id="salary" name="salary" required col="col-xs-6 col-md-8 " class="form-control">
		                        	</div>
		                        </div>
		                        <div class="form-group  has-feedback col-xs-6 col-md-4 " style="">
		                        	<label class="control-label required" for="JobOffer_showSalary">¿Mostrar el sueldo ofrecido?</label>
		                        	<select id="JobOffer_showSalary" name="showSalary" class="custom-select">
		                                <option value="0" selected="selected">No</option>
		                                <option value="1">Si</option>
		                            </select> 
		                        </div>
		                        

		                        <div class="form-group  has-feedback col-md-4"> 
		                        	<label class="control-label required" for="JobOffer_vacancies">N° de Vacantes</label>
		                            <select id="JobOffer_vacancies" name="vacancies" required class="custom-select">
		                                <option value="">Seleccionar</option>
		                                <option value="1" selected="selected">1 persona</option>
		                                <option value="2">2 personas</option>
		                                <option value="3">3 personas</option>
		                                <option value="4">4 personas</option>
		                                <option value="5">5 personas</option>
		                                <option value="6">6 personas</option>
		                                <option value="7">7 personas</option>
		                                <option value="8">8 personas</option>
		                                <option value="9">9 personas</option>
		                                <option value="10">10 personas</option>
		                            </select> 
		                        </div>
		                        <div class="form-group  has-feedback col-md-4" style=""> 
		                        	<label class="control-label required" for="JobOffer_workDayType">Jornada</label> 
		                            <select id="JobOffer_workDayType" name="workDayType"  class="custom-select">
		                                <option value="1">Completa</option>
		                                <option value="0">Medio día</option>
		                                <option value="2">Part-Time</option>
		                                <option value="3">Freelance</option>
		                                <option value="4">Por turno</option>
		                            </select> 
		                        </div>
		                        <div class="form-group  has-feedback col-md-4" style=""> 
		                        	<label class="control-label required" for="JobOffer_contractType">Plazo</label> 
		                        	<select id="JobOffer_contractType" name="contractType" col="col-xs-4"  class="custom-select">
		                                <option value="0">Indefinido</option>
		                                <option value="1">Plazo fijo</option>
		                            </select> 
		                        </div>
		                        
		                        <div class="form-group  has-feedback col-md-12 col-xs-12 ">
		                        	<label class="control-label required">Remoto</label> <br>                         
		                            <div id="remote" onchange="" col="col-md-4 col-xs-12" class="btn-group">
		                            	<label >
		                                	<input type="radio" id="JobOffer_remote_0" class="radio" name="remote" required value="0" checked="checked">
		                                	<label class="control-label r0" for="JobOffer_remote_0">No</label>
		                                </label>
		                                <label  >
		                                    <input type="radio" id="JobOffer_remote_1" class="radio" name="remote" required value="1">
		                                    <label class="control-label r1" for="JobOffer_remote_1">Si</label>
		                                </label>
		                            </div> 
		                        </div>
		                        
		                            <div class="form-group  has-feedback col-md-4 ">
		                            	<label class="control-label required" for="countrySelect">País</label>
		                             	<select id="countrySelect" name="country" required onchange="" class="custom-select">
		                                    <option value="">Seleccionar</option>
		                                    <option value="11">Afganistán</option>
		                                    <option value="12">Albania</option>
		                                    <option value="13">Alemania</option>
		                                    <option value="14">American Samoa</option>
		                                    <option value="15">Andorra</option>
		                                </select> 
		                            </div>
		                            <div class="form-group  has-feedback col-md-4 ">
		                            	<label class="control-label required" for="regionSelect">Región</label>
		                                <select id="regionSelect" name="region" required onchange="" class="custom-select">
		                                    <option value="">Seleccionar</option>
		                                    <option value="2">I Región de Tarapacá</option>
		                                    <option value="3">II Región de Antofagasta</option>
		                                    <option value="4">III Región de Atacama</option>
		                                    <option value="5">IV Región de Coquimbo</option>
		                                    <option value="10">IX Región de la Araucanía</option>
		                                </select> 
		                            </div>
		                            <div class="form-group  col-md-4 ">
		                            	<label class="control-label" for="townshipSelect">Comuna</label>
		                                <select id="townshipSelect" name="township"  class="custom-select" required>
		                                    <option value="">Seleccionar</option>
		                                    <option value="39">Alhué</option>
		                                    <option value="46">Buin</option>
		                                    <option value="47">Calera de Tango</option>
		                                    <option value="1">Cerrillos</option>
		                                    <option value="2">Cerro Navia</option>
		                                    <option value="50">Colina</option>
		                                    <option value="3">Conchalí</option>
		                                    <option value="38">Curacaví</option>
		                                </select>
		                            </div>		                            
	                        </div>
	                    </div>
	                </div>

	                <div class="col-md-5">
	                    <div >
	                        <div class="content_title_menu">
	                            <div class="menu_wrapper">
	                                <div class="link header">
	                                    <span class="fa-stack fa-lg">
	                                        <i class="fa fa-circle fa-stack-2x"></i>
	                                        <i class="fa fa-inverse fa-stack-1x">2</i>
	                                    </span>
	                                    Preguntas al postulante
	                                </div>
	                            </div>
	                        </div>
	                        <div class="main_content no_min">
	                            <div id="add_question_link" class="text-center col-12 ">
	                                <a  href="#" class="btn btn-primary  btn-block "><i class="fa fa-plus-circle"></i> Agregar una pregunta</a>
	                            </div>
	                            <br>
	                            <div class="col-md-12">
	                            	<div class="alert alert-warning">
		                                La renta esperada no se puede remover
		                            </div>
	                            </div>
	                           
	                            <div id="questions" >
	                                <div>
	                                    <div class="form-group col-12 ">
	                                        <input type="text" class="form-control" disabled="" value="¿Renta líquida esperada?">
	                                    </div>                                    
	                                </div>
	                            </div>

	                            <div id="divQuestion1">
									<div class="main row">
									    <div class="form-group  has-feedback col-xs-6 col-md-6">
									        <label class="control-label required">Tipo de Pregunta</label>
									        <select id="type1" name="type" class="custom-select">
									            <option value="1">Respuesta corta</option>
									            <option value="2">Selección Simple</option>
									            <option value="3">Selección Multiple</option>
									        </select>
									    </div>
									    <div class="form-group  has-feedback col-xs-6 col-md-6"> <label
									            class="control-label required" for="isKiller1">¿Pregunta Filtro?</label> <select id="isKiller1"
									            name="isKiller" col="col-xs-6 col-sm-6 " class="custom-select">
									            <option value="0">No</option>
									            <option value="1">Sí</option>
									        </select> <span class="glyphicon form-control-feedback glyphicon-ok" aria-hidden="true"></span>
									    </div>
									    <div class="form-group has-feedback col-md-12 ">
									        <input type="text" id="JobOffer_questions_1_question" name="question"
									            required="required" class="form-control">
									    </div>
									</div>
									<div class="options">
									    <div id="choicesContainer1" class="choices row" style="">
									        <div class="col-md-12">
												<div class="input-group mb-3">
												  <div class="input-group-prepend">
												    <span class="input-group-text"><i class="fas fa-dot-circle"></i></span>
												  </div>
												  <input type="text" class="form-control" required>
												  <div class="input-group-append">
												    <span class="input-group-text"><i class="fas fa-times"></i></span>
												  </div>
												</div>
												<div class="input-group mb-3">
												  <div class="input-group-prepend">
												    <span class="input-group-text"><i class="fas fa-dot-circle"></i></span>
												  </div>
												  <input type="text" class="form-control" required>
												  <div class="input-group-append">
												    <span class="input-group-text"><i class="fas fa-times"></i></span>
												  </div>
												</div>
									        </div>									        
									        <div class="col-md-12">
									            <a href="#" class="float-right"><i class="fa fa-plus-circle"></i> Agregar opción</a>
									        </div>
									    </div>
									    <div class="col-xs-12 text-center">
									        <a href="#" class="btn btn-xs btn-danger"><i class="fa fa-times-circle"></i> Quitar
									            Pregunta</a>
									    </div>
									    
									</div>
								</div>
	                            
	                        </div>
	                    </div>
	                    <br>
	                    <div >
	                        <div class="content_title_menu">
	                            <div class="menu_wrapper">
	                                <div class="link header">
	                                    <span class="fa-stack fa-lg">
	                                        <i class="fa fa-circle fa-stack-2x"></i>
	                                        <i class="fa fa-inverse fa-stack-1x">3</i>
	                                    </span>
	                                    Definir formación
	                                    <span data-toggle="tooltip" data-html="true" data-placement="top" title="<b>Formación</b><br>
	                                            La formación sirve para recomendar de mejor manera<br><br>
	                                            También son una referencia para los postulantes a la hora de postular.">
			                        		<i class="fa fa-question-circle"></i>
			                        	</span>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="main_content no_min">
	                            <div >
	                                <div id="careers" >
	                                    <table class="table">
	                                    	<tr>
	                                    		<td>
	                                    			<select id="JobOffer_genericCareers_0_genericCareer" name="genericCareer" required class="custom-select">
		                                                <option value="" selected="selected">Carrera...</option>
		                                                <option value="1">Actuación / Teatro</option>
		                                                <option value="2">Acuicultura</option>
		                                                <option value="6">Administración</option>
		                                                <option value="4">Administración de Empresas</option>
		                                                <option value="5">Administración de Servicios</option>
		                                                <option value="3">Administración y Gestión Pública</option>
		                                                <option value="7">Aeronáutica</option>
		                                                <option value="8">Agronegocios</option>
		                                                <option value="9">Agronomía</option>
		                                                <option value="12">Análisis de Sistemas</option>
		                                            </select>
	                                    		</td>
	                                    		<td>
	                                    			<a href="#" class="delete-icon"><i class="fa fa-times-circle fa-2x"></i></a>
	                                    		</td>
	                                    	</tr>
	                                    </table>
	                                </div>
	                                <div id="add_career_link" class="text-center col-md-12">
	                                    <a  href="#" class="btn btn-primary  btn-block "><i class="fa fa-plus-circle"></i> Agregar una carrera</a>
	                                </div>
	                            </div>
	                            <br>
	                            <div>
	                                <div id="universities"  class="row">
	                                    <table class="table">
	                                    	<tr>
	                                    		<td>
	                                    			<select id="JobOffer_universities_0_university" name="university" class="custom-select">
		                                                <option value="">Seleccionar</option>
		                                                <option value="942">Armada de Chile</option>
		                                                <option value="462">Armada de Chile</option>
		                                                <option value="352">Culinary</option>
		                                                <option value="92">Duoc UC</option>
		                                                <option value="99">INACAP</option>
		                                                <option value="229">Instituto Aeronáutico Precadet</option>
		                                            </select>
		                                        </td>
	                                    		<td>
	                                    			<a href="#" class="delete-icon"><i class="fa fa-times-circle fa-2x"></i></a>
	                                    		</td>
	                                    	</tr>
	                                    </table>
	                                </div>
	                                <div id="add_university_link" class="text-center col-md-12">
	                                    <a  href="#" class="btn btn-primary  btn-block "><i class="fa fa-plus-circle"></i> Agregar universidad</a>
	                                </div>
	                            </div>
	                            <br>
	                            <div>	                            	
	                                <div id="languages">
	                                	<table class="table">
	                                		<tr>
	                                			<td>
	                                				<select id="JobOffer_universities_0_university" name="language" class="custom-select">
		                                                <option value="">Seleccionar</option>
		                                                <option value="942">Español</option>
		                                                <option value="462">Ingles</option>
		                                            </select>
	                                			</td>
	                                			<td>
	                                				<select id="JobOffer_languages_0_level" name="level" class="custom-select">
	                                					<option value="0">Básico</option>
	                                					<option value="1">Intermedio</option>
	                                					<option value="2">Alto</option>
	                                					<option value="3">Avanzado</option>
	                                				</select>
	                                			</td>
	                                			<td>
	                                				<a href="#" class="delete-icon"><i class="fa fa-times-circle fa-2x"></i></a>
	                                			</td>
	                                		</tr>
	                                	</table>
	                                </div>
	                                <div id="add_language_link" class="text-center col-md-12">
	                                    <a  href="#" class="btn btn-primary  btn-block "><i class="fa fa-plus-circle"></i> Agregar un idioma</a>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
						<br>
	                    <div >
	                        <input type="hidden" id="hasKillerQuestions" name="hasKillerQuestion" class="form-control" value="0">
	                        <div class="content_title_menu">
	                            <div class="menu_wrapper">
	                                <div class="link header">
	                                    <span class="fa-stack fa-lg">
	                                        <i class="fa fa-circle fa-stack-2x"></i>
	                                        <i class="fa fa-inverse fa-stack-1x">4</i>
	                                    </span>
	                                    Duración de la oferta
	                                </div>
	                            </div>
	                        </div>
	                        <div class="main_content no_min">
	                            <div>
	                                <div class="col-md-4 hidden-md hidden-xs"></div>
	                                <div class="form-group has-feedback col-xs-12 col-md-12 col-md-12 ">
	                                    <select id="JobOffer_offerDuration" name="offerDuration" class="custom-select">
                                            <option value="7">7 días</option>
                                            <option value="14">14 días</option>
                                            <option value="30" selected="selected">30 días</option>
                                            <option value="60">60 días</option>
                                        </select> 
	                                </div>
	                                <div class="col-xs-12 col-md-12 col-md-12 text-right">
	                                    <input type="submit" class="btn btn-primary btn-block " name="save" value="PUBLICAR">
	                                </div>
	                                
	                            </div>
	                        </div>
	                    </div>
	                </div>
                </div>
            </form>
        </div>
        

    </div>
</div>
@endsection
@push('css')
<link rel="stylesheet" href="/assets/css/custom/company.css">
<link rel="stylesheet" href="/assets/css/custom/create.css">
@endpush
@push('js')
<script>
	$(function () {
	  $('[data-toggle="tooltip"]').tooltip();
	});
</script>
@endpush