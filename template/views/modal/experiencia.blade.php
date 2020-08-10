<div class="modal" id="main_modal" aria-hidden="false">    
    <div class="modal-dialog">
        <div class="modal-content" id="pop_up_window">
            <div class="modal-header">
                <h4 class="modal-title">Experiencia laboral</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>                
            </div>
            <form name="UserJob" method="post" action="#" id="user_job_form" class="needs-validation" novalidate="true">
                <div class="modal-body">
                    
                    <div class="row">
                        <div class="form-group  has-feedback col-md-12 ">
                            <label class="control-label required" for="UserJob_title">Cargo</label>
                            <span class="twitter-typeahead">
                                <input id="title" type="text" list="browsers" col="col-md-12 " class="form-control" required>                   
                            </span>
                        </div>
                        <div class="form-group  has-feedback col-md-12  ">
                            <label class="control-label required" for="UserJob_companyName">Empresa</label> 
                            <span class="twitter-typeahead">
                                <input type="text" name="companyName" list="browsers"  id="companyName" col="col-md-12  " class="form-control " required>
                            </span>
                        </div>
                        
                        <datalist id="browsers">
                          <option value="Chrome">
                          <option value="Firefox">
                          <option value="Internet Explorer">
                          <option value="Opera">
                          <option value="Safari">
                          <option value="Microsoft Edge">
                        </datalist>

                        <div class="form-group  has-feedback col-md-6 ">
                            <label class="control-label required" for="UserJob_jobArea">Área de trabajo</label>
                            <select id="UserJob_jobArea" name="jobArea" required col="col-md-6 " onchange=""  class="custom-select">
                                <option value="" selected="selected">Área de trabajo</option>
                                <option value="13">Administración</option>
                                <option value="16">Consultoría</option>
                                <option value="19">Contabilidad</option>
                                <option value="14">Control de Gestión</option>
                                <option value="2">Creatividad y Diseño</option>
                                <option value="4">Editorial</option>
                                <option value="15">Educación</option>   
                                <option value="1">Estrategia y Desarrollo de Negocios</option>
                                <option value="6">Finanzas</option>
                                <option value="21">Gatronomía y hotelería</option>
                            </select>
                        </div>
                        <div class="form-group  has-feedback col-md-6 ">
                            <label class="control-label required" for="jobTypeSelect">Tipo de cargo</label>
                            <select id="jobTypeSelect" name="jobType" required col="col-md-6 "  class="custom-select">
                                <option value="" selected="selected">Tipo de cargo</option>
                                <option value="9">Gerente General</option>
                                <option value="100">Analista</option>
                                <option value="101">Analista Sr</option>
                                <option value="102">Jefe</option>
                                <option value="103">Subgerente</option>
                                <option value="104">Gerente</option>
                                <option value="105">Asistente</option>
                            </select>
                        </div>
                        

                        <div class="form-group  has-feedback col-md-6 ">
                            <label class="control-label required">¿Es una práctica?</label><br>                    
                            <div id="UserJob_internship" col="col-md-6 " class="btn-group">
                                <label class="">
                                    <input type="radio" class="radio" id="UserJob_internship_0" name="internship" required value="0" checked>
                                    <label class="r0" for="UserJob_internship_0">No</label>
                                </label>
                                <label class="">
                                    <input type="radio" class="radio" id="UserJob_internship_1" name="internship" required value="1">
                                    <label class="r1"  for="UserJob_internship_1">Si</label>
                                </label>
                            </div>
                        </div>
                        <div class="form-group  has-feedback col-md-6 ">
                            <label class="control-label required">¿Es tu trabajo actual?</label><br>                        
                            <div id="current" col="col-md-6 " class="btn-group">
                                <label class="">
                                    <input type="radio" class="radio" id="UserJob_current_0" name="current" required value="0" checked>
                                    <label class="r0" for="UserJob_current_0">No</label>
                                </label>
                                <label class="" > 
                                    <input type="radio" class="radio" id="UserJob_current_1" name="current" required value="1">
                                    <label class="r1" for="UserJob_current_1">Si</label>
                                </label>
                            </div>
                        </div>
                        

                        <div class="form-group  has-feedback col-md-3 ">
                            <label class="control-label required" for="UserJob_initialMonth">Fecha</label>
                            <select id="UserJob_initialMonth" name="initialMonth" required col="col-md-3 " class="custom-select">
                                <option value="" selected="selected">Mes</option>
                                <option value="1">Ene</option>
                                <option value="2">Feb</option>
                                <option value="3">Mar</option>
                                <option value="4">Abr</option>
                                <option value="5">May</option>
                                <option value="6">Jun</option>
                                <option value="7">Jul</option>
                                <option value="8">Ago</option>
                                <option value="9">Sep</option>
                                <option value="10">Oct</option>
                                <option value="11">Nov</option>
                                <option value="12">Dic</option>
                            </select>
                        </div>
                        <div class="form-group  has-feedback col-md-3 ">
                            <label class="control-label required" for="UserJob_initialYear">Inicio</label>
                            <select id="UserJob_initialYear" name="initialYear" required col="col-md-3 " class="custom-select">
                                <option value="" selected="selected">Año</option>
                                <option value="2020">2020</option>
                                <option value="2019">2019</option>
                                <option value="2018">2018</option>
                                <option value="2017">2017</option>
                                <option value="2016">2016</option>
                                <option value="2015">2015</option>
                            </select>
                        </div>

                            <div class="form-group  has-feedback col-md-3 ">
                                <label class="control-label required" for="UserJob_endMonth">Fecha</label>
                                <select id="UserJob_endMonth" name="endMonth" required="" col="col-md-3 "  class="custom-select">
                                    <option value="" selected="selected">Mes</option>
                                    <option value="1">Ene</option>
                                    <option value="2">Feb</option>
                                    <option value="3">Mar</option>
                                    <option value="4">Abr</option>
                                    <option value="5">May</option>
                                    <option value="6">Jun</option>
                                    <option value="7">Jul</option>
                                    <option value="8">Ago</option>
                                    <option value="9">Sep</option>
                                    <option value="10">Oct</option>
                                    <option value="11">Nov</option>
                                    <option value="12">Dic</option>
                                </select> 
                            </div>
                            <div class="form-group  has-feedback col-md-3 "> 
                                <label class="control-label required" for="UserJob_endYear">Término</label> 
                                <select id="UserJob_endYear" name="endYear" required="" col="col-md-3" class="custom-select">
                                    <option value="" selected="selected">Año</option>
                                    <option value="2020">2020</option>
                                    <option value="2019">2019</option>
                                    <option value="2018">2018</option>
                                    <option value="2017">2017</option>
                                    <option value="2016">2016</option>
                                    <option value="2015">2015</option>
                                    <option value="2014">2014</option>
                                    <option value="2013">2013</option>
                                    <option value="2012">2012</option>
                                    <option value="2011">2011</option>
                                    <option value="2010">2010</option>
                                </select> 
                            </div>                

                        <div class="form-group  has-feedback col-md-12">
                            <label class="control-label required" for="UserJob_detail">Detalle</label>
                            <textarea id="UserJob_detail" name="detail" required col="col-md-12" rows="4" class="form-control"></textarea>
                        </div>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-cancel" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>