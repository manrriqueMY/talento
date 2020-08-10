@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
        <div class="col-md-8">
          <br>
          <div class="row">
            <div class="col-md-12">
                <div class="heading-title">
                    <h4>DISC</h4>
                </div>
                <div class="line-title"><h4> </h4></div>
                <div class="alert alert-info mt20">El DISC es un cuestionario de considerable confiabilidad, validez y
                    consistencia que<br>
                    permite evaluar y predecir el comportamiento de las personas frente a diferentes<br>
                    situaciones a nivel individual y grupal.<br>
                    <br>
                    Sus siglas reflejan los indicadores que se evalúan con esta herramienta: D de decisión, I de<br>
                    interacción, S de serenidad y C de cumplimiento.<br>
                    <br>
                    En su versión clásica podrás revisar tu perfil respecto a tu comportamiento emocional, tu<br>
                    meta, cómo evalúas e influyes a los demás, cómo te comportas en situaciones de mayor<br>
                    presión, de qué recursos abusas más, cuál es tu valor para la organización en la que estés,<br>
                    a qué le temes y cómo podrías ser más efectivo.</div>
            </div>
            <div class="clearfix"></div>
            <div class="col-md-12">
                <div class="message text-center mt40">
                    <b style="font-size: 14px;">Objetivo</b>
                </div>

                <div class="message mb40" id="desc_perfil_psi">
                    Emociones:<br>
                    Puede rechazar la agresión interpersonal.<br>
                    <br>
                    Meta:<br>
                    La exactitud.<br>
                    <br>
                    Juzga a los demás por:<br>
                    Su capacidad de pensamiento analítico.<br>
                    <br>
                    Influye en los demás mediante:<br>
                    La información objetiva, los argumentos lógicos.<br>
                    <br>
                    Su valor para la organización:<br>
                    Define, esclarece, obtiene información, evalúa, comprueba.<br>
                    <br>
                    Abusa de:<br>
                    El análisis.<br>
                    <br>
                    Bajo presión:<br>
                    Se vuelve aprensivo.<br>
                    <br>
                    Teme:<br>
                    Actos irracionales, el ridículo.<br>
                    <br>
                    Sería más eficaz si:<br>
                    Fuera más abierto, compartiera en público su perspicacia y opiniones.<br>
                    <br>
                    Observaciones:<br>
                    La capacidad de pensamiento crítico suele estar muy desarrollada en el Objetivo. Recalca la importancia de
                    sacar conclusiones y basar las acciones en hechos. Busca la precisión y exactitud en todo lo que hace. Sin
                    embargo, para llevar a cabo con eficiencia su trabajo, el Objetivo suele combinar la información intuitiva
                    con los datos que posee. Cuando duda sobre el curso a tomar, evita hacer el ridículo preparándose
                    meticulosamente. Por ejemplo, el Objetivo perfeccionará una nueva habilidad en privado antes de usarla en
                    alguna actividad de grupo. <br>
                    El Objetivo prefiere trabajar con personas que , como él, prefieren mantener un ambiente laboral tranquilo.
                    Como puede mostrarse reticente en expresar sus sentimiento, hay quienes lo consideran tímido. Se siente
                    particularmente incómodo ante personas agresivas. A pesar de esta apariencia templada, el Objetivo tiene un
                    fuerte necesidad de controlar el ambiente. Suele ejercer este control en forma indirecta solicitando el
                    apego a reglas y normas.<br>
                    El Objetivo se preocupa por llegar a respuestas “correctas” y le puede resultar difícil tomar decisiones en
                    situaciones ambiguas. Su tendencia a preocuparse le puede llevar a una “parálisis por análisis”. Con
                    demasiada frecuencia, cuando comete un error, titubea en reconocerlo y se empeña en buscar información que
                    le permita apoyar su postura.
                </div>
            </div>
            <div class="col-md-12 mt20">

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