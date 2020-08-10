@extends('layouts.app')
@section('content')
<div id="content-wrapper">
    <div class="container white_content">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-title"><h4>E-mail descartados</h4></div>
                <div class="line-title"><h4> </h4></div>
            </div>
            <div class="col-xs-12 col-md-8">
            	<br>
                <form id="mailForm" action="" method="POST" class="needs-validation" novalidate="true">
                    <div class="row">
                        <div class="col-md-6 ">
                            <label for="automaticEmailNotSelected">Enviar e-mails a cadidatos descartados</label>
                            <select id="automaticEmailNotSelected" name="automaticEmailNotSelected" class="custom-select">
                                <option value="0">Manualmente</option>
                                <option value="1" selected="">Automaticamente al pasarlos a descartados</option>
                                <option value="2">Automaticamente al finalizar el proceso</option>
                            </select>
                            <small class="form-text text-muted">¿Cuando se envian los e-mails a candidatos no seleccionados?</small>
                        </div>
                        <div class="col-md-6"></div>
                        <div class="col-md-6 ">
                            <div class="input-group mt-3 has-feedback">
                                <div class="input-group-prepend"> <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span> </div>
                                <input type="email" class="form-control" name="senderName" placeholder="Remitente..." value="" required>
                            </div>
                            <small class="form-text text-muted">Nombre del remitente (empresa)</small>
                        </div>
                        <div class="col-md-6 ">
                           <div class="input-group mt-3 has-feedback">
                                <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1"><i class="fas fa-reply"></i></span></div>
                                <input type="email" class="form-control" name="replyTo" placeholder="E-mail respuesta" value="plataforma@reqlut.com" required>
                            </div>
                            <small class="form-text text-muted">E-mail al que se responderan los correos</small>
                        </div>
                        <div class="col-md-6 ">
                            <div class="input-group mt-3 has-feedback">
                                <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i></span></div>
                                <input type="email" class="form-control" name="subject" placeholder="Asunto" value="Información {JOB_TITLE} en {COMPANY}" required>
                            </div>
                            <small class="form-text text-muted">Asunto del correo a no seleccionados</small>
                        </div>
                        <div class="col-md-6 mt-3">
                            <a href="#" data-text="{APPLICANT_NAME}" class="btn btn-outline-primary btn-sm btn-subject" ><i class="fa fa-plus-circle"></i> Nombre postulante</a>
                            <a href="#" data-text="{APPLICANT_LAST_NAME}" class="btn btn-outline-primary btn-sm btn-subject" ><i class="fa fa-plus-circle"></i> Apellidos postulante</a>
                            <a href="#" data-text="{COMPANY}" class="btn btn-outline-primary btn-sm btn-subject mt10" ><i class="fa fa-plus-circle"></i> Empresa</a>
                            <a href="#" data-text="{JOB_TITLE}" class="btn btn-outline-primary btn-sm btn-subject mt10" ><i class="fa fa-plus-circle"></i> Oferta</a>
                        </div>
                        <div class="col-md-12 mt-3">
                            <label for="notSelectedEmail">Cuerpo e-mail descartados</label>
                            <textarea id="notSelectedEmail" name="notSelectedEmail" aria-hidden="true" class="form-control">
                            	&lt;!DOCTYPE html&gt;&lt;html&gt;&lt;head&gt;&lt;/head&gt;&lt;body&gt;&lt;p&gt;&lt;span style="color: #999999;"&gt;Estimado&amp;nbsp;{APPLICANT_NAME},&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style="color: #999999;"&gt;Ha concluido el proceso de evaluaci&amp;oacute;n de los candidatos y queremos agredecerte por tu inter&amp;eacute;s y postulaci&amp;oacute;n en nuestra empresa. Sentimos comunicarte que no has sido selecccionado para ocupar el cargo&amp;nbsp;{JOB_TITLE} en&amp;nbsp;{COMPANY}, sin embargo te queremos invitar en alg&amp;uacute;n proceso futuro que tengamos.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style="color: #999999;"&gt;&amp;iexcl;Gracias nuevamente por participar y te animamos a seguir postulando con nuestra empresa!&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style="color: #999999;"&gt;Atentamente equipo {COMPANY},&lt;/span&gt;&lt;/p&gt;&lt;/body&gt;&lt;/html&gt;
                            </textarea>
                        </div>
                        <br>
                        <div class="col-md-12 mt20">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                        <br>
                    </div>
                </form>
                <br>
            </div>
            <div class="col-xs-12 col-md-4 advice">
                <div class="title"><i class="fa fa-exclamation-circle"></i> ¿Cómo funciona?</div>
                <p class=""><i class="fa fa-angle-right"></i> Puedes elegir que los e-mail a candidatos descartados se envién automáticamente al pasarlos a descartados o bien que se envién de manera manual. Esto lo puedes hacer en la pestaña "Descartados" seleccionando la acción "Enviar e-mail a descartados"</p>
                <p class=""><i class="fa fa-angle-right"></i> A la izquierda aparecen campos con los que puedes personalizar tus correos a candidatos no seleccionados.</p>
                <p class=""><i class="fa fa-angle-right"></i> Los campos que no completes usarán los valores por defecto.</p>
                <p class=""><i class="fa fa-angle-right"></i> Tanto al asunto del correo como al cuerpo de este le puedes agregar "variables" (nombre y apellidos del postulante, titulo de la oferta laboral y nombre de la empresa.</p>
                <p class=""><i class="fa fa-angle-right"></i> Cuando el correo sea enviado estas variables serán reemplazados por los valores específicos para el correo que estas enviando.</p>
            </div>
        </div>
    </div>
</div>
@endsection
@push('css')
<link rel="stylesheet" href="/assets/css/custom/company.css">
@endpush
@push('js')
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
	$(document).ready( function() {
		tinymce.init({
			selector: '#notSelectedEmail'
		});
	});
</script>
@endpush