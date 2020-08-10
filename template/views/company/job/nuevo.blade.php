@extends('layouts.app')
@section('content')
<div id="content-wrapper">
	<div class="container">
		<div class="heading-title text-center"><h4>Que Tipo de oferta desea Publicar</h4></div>
		<div class="line-title"><h4> </h4></div>
		<section class="container informacion">			
		    <div class="row mx-0">
		        <div class="col-md-4 col-xs-12 text-center">
		            <a href="#">
		            	<div class="card">
			            	<div class="icon">
				                <i class="fas fa-user" style="padding: 20px 23px;"></i>
				            </div>
				            <h2>
				                Profesional
				            </h2>
			            </div>
		            </a>
		        </div>
		        <div class="col-md-4 col-xs-12 text-center">
		        	<a href="#">
		        		<div class="card">
				            <div class="icon">
				                <i class="fas fa-university" style="padding: 20px 20px;"></i>
				            </div>
				            <h2>
				                Práctica
				            </h2>
				        </div>
		        	</a>
		        </div>
		        <div class="col-md-4 col-xs-12 text-center">
		            <a href="#">
		            	<div class="card">
			            	<div class="icon">
				                <i class="fas fa-lock" style="padding: 20px 23px;"></i>
				            </div>
				            <h2>
				                Trabajo para estudiante
				            </h2>
			            </div>
		            </a>
		        </div>
		        
		    </div>
		</section>
	</div>
</div>
@endsection
@push('css')
<link rel="stylesheet" href="/assets/css/custom/company.css">
@endpush