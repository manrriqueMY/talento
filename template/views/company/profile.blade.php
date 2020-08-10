@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">    	
        <div class="col-lg-4">
            <div id="logoForm">
                <div class="heading-title">
                    <h4>Logo</h4>
                </div>
                <div class="line-title"><h4> </h4></div>
                <form name="Company" method="post" action="#" class="needs-validation" enctype="multipart/form-data" novalidate="true">
                	<br>
                    <div class="form-group has-feedback ">
                        <div class="fileinput">
                            <div class="d-flex justify-content-center" style="width: 320px;">
                                <img src="//reqlut2.s3.amazonaws.com/uploads/logos/default.jpg">
                            </div>
                            <div class="fileinput-preview fileinput-exists" id="preview" style="max-width: 320px;"></div>
                            <div class="custom-file">
							    <input type="file" class="custom-file-input" id="Company_photo" name="photo" required="">
							    <label class="custom-file-label" for="Company_photo">Seleccione una imagen</label>
							</div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                    	<button type="submit" class="btn btn-block btn-primary">Guardar logo <i class="fa fa-check"></i></button>
                    </div>                    
                </form>
            </div>

            <div class="toggle-handle-group completeness hidden-md">
                <div class="item done"><a href="#logoForm">Logo<i class="fa fa-chevron-circle-right pull-right"></i></a> </div>
                <div class="item done"><a href="#infoForm">Información general<i class="fa fa-chevron-circle-right pull-right"></i></a></div>
                <div class="item not_done"><a href="#aboutForm">Descripción de la empresa<i class="fa fa-chevron-circle-right pull-right"></i></a></div>
                <div class="item not_done"><a href="#missionForm">Misión y visión<i class="fa fa-chevron-circle-right pull-right"></i></a></div>
                <div class="item not_done"><a href="#benefitsForm">Beneficios<i class="fa fa-chevron-circle-right pull-right"></i></a></div>
                <div class="item not_done"><a href="#socialForm">Redes sociales<i class="fa fa-chevron-circle-right pull-right"></i></a></div>
            </div>
        </div>
        <div class="col-lg-8 col-md-12">
            <div id="infoForm" class="box">
                <div class="heading-title">
                    <h4>Información general</h4>
                </div>
                <div class="line-title"><h4> </h4></div>
                <form name="CompanyInfo" method="post" action="#" id="company_info_form" class="needs-validation row" novalidate="true">
                    <div class="form-group  has-feedback col-md-12 ">
                    	<input type="text" id="CompanyInfo_name" name="name" required="required" placeholder="Nombre..." col="col-md-12 " class="form-control" value="Spyrohost"> 
                    </div>                   

                    <div class="form-group  col-md-6 "><input type="text" id="rut" name="identification" placeholder="N° de identificación..."  col="col-md-6 " class="form-control" value="20604512453"> </div>
                    <div class="form-group  has-feedback col-md-6 ">
                    	<select  id="CompanyInfo_sector" name="sector" placeholder="Industria..." col="col-md-6 "    class="custom-select">
                            <option value="20">Automotriz</option>
                            <option value="5">Bienes de Consumo</option>
                            <option value="7">Consultoría </option>
                            <option value="11">Educacion</option>
                            <option value="14">Fabricación Industrial</option>
                            <option value="12">Farmaceutico y Salud</option>
                            <option value="10">Gobierno y ONG's</option>
                            <option value="9">Inmobiliaria, Construcción e Ingeniería</option>
                            <option value="16">Innovación e I+D</option>
                            <option value="17">Marketing, Publicidad y Diseño</option>
                            <option value="13">Medios y Comunicaciones</option>
                        </select> 
                    </span>
                    </div>
                    

                    <div class="form-group  has-feedback col-md-6 ">
                    	<select  id="CompanyInfo_country"  name="country" required="required" col="col-md-6 " onchange=""  class="custom-select">
                            <option value="">País...</option>
                            <option value="11">Afganistán</option>
                            <option value="12">Albania</option>
                            <option value="13">Alemania</option>
                            <option value="14">American Samoa</option>
                            <option value="15">Andorra</option>
                            <option value="16">Angola</option>
                            <option value="17">Anguila</option>
                            <option value="20">Antártida</option>
                            <option value="18">Antigua and Barbuda</option>
                            <option value="19">Antillas Holandesas</option>
                            <option value="21">Arabia Saudita</option>
                        </select> 
                    </span>
                    </div>
                    <div class="form-group  has-feedback col-md-6 ">
                    	<select  id="regionSelect" name="region" required="required" col="col-md-6 " onchange=""  class="custom-select">
                            <option value="">Región...</option>
                            <option value="2">I Región de Tarapacá</option>
                            <option value="3">II Región de Antofagasta</option>
                            <option value="4">III Región de Atacama</option>
                            <option value="5">IV Región de Coquimbo</option>
                            <option value="10">IX Región de la Araucanía</option>
                            <option value="1" selected="selected">Región Metropolitana</option>
                            <option value="6">V Región de Valparaíso</option>
                            <option value="7">VI Región del Lib. Gral. Bernardo O´Higgins</option>
                            <option value="8">VII Región del Maule</option>
                            <option value="9">VIII Región del Bío - Bío</option>
                            <option value="11">X Región de Los Lagos</option>
                            <option value="12">XI Región de Aysén</option>
                            <option value="13">XII Región de Magallanes</option>
                            <option value="14">XIV Región de Los Ríos</option>
                            <option value="15">XV Región de Arica y Parinacota</option>
                        </select> 
                    </span>
                    </div>
                    

                    <div class="form-group  has-feedback col-md-6 ">
                    	<select  id="townshipSelect" name="township" required="required" col="col-md-6 "  class="custom-select">
                            <option value="">Comuna...</option>
                            <option value="39">Alhué</option>
                            <option value="46">Buin</option>
                            <option value="47">Calera de Tango</option>
                            <option value="1">Cerrillos</option>
                            <option value="2">Cerro Navia</option>
                            <option value="50">Colina</option>
                            <option value="3">Conchalí</option>
                        </select> 
                    </span>
                    </div>
                    <div class="form-group  has-feedback col-md-6 "><input type="text" id="CompanyInfo_address"
                            name="CompanyInfo[address]" required="required" placeholder="Dirección comercial..."
                            col="col-md-6 " class="form-control" value="Av separadora industrial mz b"> <span
                            class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    </div>
                    

                    <div class="form-group  col-md-6 ">
                    	<select  id="CompanyInfo_companySize" name="companySize" col="col-md-6 "  class="custom-select">
                            <option value="">Tamaño de la empresa...</option>
                            <option value="1">1-10 trabajadores</option>
                            <option value="2" selected="selected">11-50 trabajadores</option>
                            <option value="3">51-200 trabajadores</option>
                            <option value="4">201-1500 trabajadores</option>
                            <option value="5">1501-5000 trabajadores</option>
                            <option value="6">+5000 trabajadores</option>
                        </select>
                    </div>
                    <div class="form-group  has-feedback col-md-6 ">
                        <div class="iti iti--allow-dropdown">
                            <div class="iti__flag-container">
                                <div class="iti__selected-flag" role="combobox" aria-owns="country-listbox" tabindex="0"
                                    title="Peru (Perú): +51">
                                    <div class="iti__flag iti__pe"></div>
                                    <div class="iti__arrow"></div>
                                </div>                                
                            </div>
                            <input type="text" id="phone" name="publicPhone" required="required" col="col-md-6 " class="form-control" value="+5116065216" placeholder="912 345 678">
                            <input type="hidden" name="publicPhone">
                        </div>
                    </div>  
                    <div class="col-md-12">
                    	<div class="d-flex justify-content-center ">
	                        <button type="submit" class="btn btn-primary ">Guardar información general <i class="fa fa-check"></i></button>
	                    </div>
                    </div>
                </form>
            </div>

			<br>

			<div class="wrapper">
			    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
			        <div class="panel panel-default" id="aboutForm">
			            <div class="panel-heading active" role="tab" id="headingOne">
			                <h4 class="panel-title">
			                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
			                        <div class="heading-title">
					                    <h4>Descripción de la empresa</h4>
					                </div>
                                    <div class="line-title"><h4> </h4></div>
			                    </a>
			                </h4>
			            </div>
			            <div id="collapseOne" class="panel-collapse collapse in show" role="tabpanel" aria-labelledby="headingOne">
			                <div class="panel-body">
			                    <form name="CompanyAbout" method="post" action="#" id="company_about_form" class="needs-validation" novalidate="true">
				                    <div class="form-group  has-feedback">
				                        <textarea id="about" name="about" required="required"  placeholder="Acerca de la empresa"  rows="6" class="form-control"></textarea> 
				                    </div>
				                    <div class="text-center ">
				                        <button type="submit" class="btn btn-block-md btn-primary">Guardar descripción de la empresa <i class="fa fa-check"></i></button>
				                    </div>
				                </form>
			                </div>
			            </div>
			        </div>
			        <div class="panel panel-default" id="missionForm">
			            <div class="panel-heading" role="tab" id="headingTwo">
			                <h4 class="panel-title">
			                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
			                        <div class="heading-title">
					                    <h4>Misión y visión</h4>
					                </div>
                                    <div class="line-title"><h4> </h4></div>
			                    </a>
			                </h4>
			            </div>
			            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
			                <div class="panel-body">
			                    <form name="CompanyAbout" method="post" action="#" id="company_about_form" class="needs-validation" novalidate="true" >
			                    <div class="form-group  has-feedback">
			                        <textarea id="mission" name="mission" required="required" placeholder="Acerca de la empresa"  rows="6" class="form-control"  aria-hidden="true"></textarea> 
			                    </div>
			                    <div class="text-center ">
			                        <button type="submit" class="btn btn-block-md btn-primary ">Guardar misión y visión <i  class="fa fa-check"></i>
			                        </button>
			                    </div>
			                </form>
			                </div>
			            </div>
			        </div>
			        <div class="panel panel-default" id="benefitsForm">
			            <div class="panel-heading" role="tab" id="headingThree">
			                <h4 class="panel-title">
			                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion"  href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
			                        <div class="heading-title">
					                    <h4>Beneficios</h4>
					                </div>
                                    <div class="line-title"><h4> </h4></div>
			                    </a>
			                </h4>
			            </div>
			            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
			                <div class="panel-body">
			                    <form name="CompanyBenefits" method="post" action="#" id="company_benefits_form" class="needs-validation" novalidate="true" >
			                    <div class="form-group  has-feedback">
			                        <textarea id="benefits" name="benefits" required="required" placeholder="Beneficios"  rows="6" class="form-control"></textarea> 
			                    </div>
			                    <div class="text-center ">
			                        <button type="submit" class="btn btn-block-md btn-primary">Guardar beneficios <i class="fa fa-check"></i></button>
			                    </div>
			                </form>
			                </div>
			            </div>
			        </div>
			        <div class="panel panel-default" id="socialForm">
			            <div class="panel-heading" role="tab" id="headingThree">
			                <h4 class="panel-title">
			                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion"  href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
			                        <div class="heading-title">
					                    <h4>Redes Sociales</h4>
					                </div>
                                    <div class="line-title"><h4> </h4></div>
			                    </a>
			                </h4>
			            </div>
			            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
			                <div class="panel-body">
			                     <form name="CompanySocial" method="post" action="#" id="company_social_form" class="needs-validation row" novalidate="true" >
				                    <div class="form-group col-md-12 ">
				                        <div class="input-group mb-3 has-feedback">
				                            <div class="input-group-prepend"> <span class="input-group-text" id="basic-addon1"><i class="fas fa-cloud"></i></span> </div>
				                            <input type="text" class="form-control" name="website" placeholder="Sitio web empresa..." value="" required>
				                        </div>
				                    </div>
				                    
				                    <div class="form-group col-md-6 ">
				                        <div class="input-group mb-3 has-feedback">
				                            <div class="input-group-prepend"> <span class="input-group-text" id="basic-addon1"><i class="fab fa-linkedin"></i></span> </div>
				                            <input type="text" class="form-control" name="webLinkedIn" placeholder="LinkedIn..." value="" required>
				                        </div>
				                    </div>
				                    <div class="form-group col-md-6 ">
				                        <div class="input-group mb-3 has-feedback">
				                            <div class="input-group-prepend"> <span class="input-group-text" id="basic-addon1"><i class="fab fa-youtube"></i></span> </div>
				                            <input type="text" class="form-control" name="webYoutube" placeholder="Youtube..." value="" required>
				                        </div>
				                    </div>
				                    
				                    <div class="form-group col-md-6 ">
				                        <div class="input-group mb-3 has-feedback">
				                            <div class="input-group-prepend"> <span class="input-group-text" id="basic-addon1"><i class="fab fa-facebook"></i></span> </div>
				                            <input type="text" class="form-control" name="webYoutube" placeholder="Facebook..." value="" required>
				                        </div>
				                    </div>
				                    <div class="form-group col-md-6 ">
				                        <div class="input-group mb-3 has-feedback">
				                            <div class="input-group-prepend"> <span class="input-group-text" id="basic-addon1"><i class="fab fa-instagram"></i></span> </div>
				                            <input type="text" class="form-control" name="webInstagram" placeholder="Instagram..." value="" required>
				                        </div>
				                    </div>
				                    
				                    <div class="form-group col-md-6 ">
				                        <div class="input-group mb-3 has-feedback">
				                            <div class="input-group-prepend"> <span class="input-group-text" id="basic-addon1"><i class="fab fa-twitter"></i></span> </div>
				                            <input type="text" class="form-control" name="webTwitter" placeholder="Twitter..." value="" required>
				                        </div>
				                    </div>
				                    

									<div class="col-md-12">
								        <div class="text-center ">
					                        <button type="submit" class="btn btn-block-md btn-primary ">Guardar redes sociales <i class="fa fa-check"></i></button>
					                    </div>
									</div>
				                </form>
			                </div>
			            </div>
			        </div>
			    </div>
			</div>
			<br>
        </div>
    </div>
</div>
@endsection
@push('css')
<link rel="stylesheet" href="/assets/css/custom/company.css">
<link rel="stylesheet" href="/assets/css/custom/profile.css">
@endpush
@push('js')
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.9.2/tinymce.min.js"></script>-->
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script src="/assets/js/custom/company.js"></script>
@endpush