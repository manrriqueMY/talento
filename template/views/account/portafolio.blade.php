@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<br>
			<div class="msg_bg">
	            <p>
	                <b>Crea tu portafolio multimedia</b>
	            </p>
	            <p>
	                Un portafolio con imágenes y/o videos de tus trabajos o proyectos es una forma muy efectiva de mostrar tus logros. Aprovecha esta oportunidad que te da Talento Inclusivo y crea tu portafolio hoy mismo.
	            </p>
	            <input type="button" class="btn btn-primary" onclick="" value="Agregar ítem" role="button">
	        </div>
	        <br>
			<img src="//reqlut2.s3.amazonaws.com/images/ejemplo_portafolio.png" class="img-thumbnail">
			<p></p>
			<span><b>Algunas carreras o profesiones en donde un portafolio es importante:</b></span>
			<p></p>
			<ul class="lista">
	            <li>Diseño Gráfico, Diseño Industrial y otras carreras con fuerte énfasis en el diseño</li>
	            <li>Publicidad &amp; Marketing</li>
	            <li>Arquitectura</li>
	            <li>Arte y Dibujo</li>
	            <li>Fotografía</li>
	            <li>Desarrolladores Web</li>
	        </ul>
		</div>
		@include('modal.perfil')
	</div>
</div>

@endsection
@push('css')
<link rel="stylesheet" href="/assets/css/custom/perfil.css">
@endpush