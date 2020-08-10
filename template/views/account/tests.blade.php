@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
      <div class="col-md-8">
        <div class="row">
          <div class="col-md-12">
            <div class="heading-title"><h4>Evaluaciones</h4></div>
            <div class="line-title"><h4> </h4></div>
	           <br>
            <div class="alert alert-info">Contesta las evaluaciones que tenemos a tu disposición para conocer mejor tu perfil.</div>
          </div>
          <div class="col-md-12">
          	<div class="row">
           		<div class="col-xs-12 col-sm-6 col-lg-6" style="display: flex;">
           			<div class="card">
           				<div class="nice-title"><a href="/account/strengths">Evaluación de Fortalezas</a></div>
                  <div class="card-content">							    
								    <div class="nice-icon"><i class="fa fa-user"></i></div>
							    </div>
  								<div class="">
  								  <a class="btn btn-primary btn-block" href="/account/strengths"><i class="fa fa-check"></i> Tomar evaluación</a>
  								</div>
             		</div>                                
			        </div>
              <div class="col-xs-12 col-sm-6 col-lg-6">
              	<div class="card">
              		<div class="nice-title"><a href="/account/result">DISC</a></div>
                    <div class="card-content">						    	
  								    <div class="nice-icon"><i class="fa fa-search"></i></div>
                      <!--<div class="alert alert-warning text-center"> Resultado: <b>Objetivo</b> <i>26 de Jul, 2020</i>    </div>-->
  							    </div>
  								<div class="">
  								    <a class="btn btn-primary btn-block" href="/account/result"><i class="fa fa-list"></i> Resultados</a>
  								</div>
              	</div>
        		  </div>
            </div>
          </div>
        </div>
      </div>
		@include('modal.perfil')
	</div>
</div>

@endsection
@push('css')
<link rel="stylesheet" href="/assets/css/custom/perfil.css">
@endpush