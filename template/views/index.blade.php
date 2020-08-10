@extends('layouts.app')
@section('content')
<div class="slider">
    <div class="container">
        <div class="slider-background">
            <div class="slider-text">
                <h1>Primer Portal Chileno de empleos inclusivos que conecta a Personas con Discapacidad y ofertas laborales</h1>
                <div class="btn btn-primary" data-toggle="modal" data-target="#login_modal">Registrarme</div>
            </div>
        </div>
    </div>
</div>
<section class="container informacion">
    <div class="row mx-0">
        <div class="col-md-4 col-xs-12 text-center">
            <div class="icon">
                <i class="fas fa-user" style="padding: 20px 23px;"></i>
            </div>
            <h2>
                TU PERFIL INCLUYE
            </h2>
            <span>
                Curriculum, portafolio, habilidades, fortalezas e intereses
            </span>
        </div>
        <div class="col-md-4 col-xs-12 text-center">
            <div class="icon">
                <i class="fas fa-university" style="padding: 20px 20px;"></i>
            </div>
            <h2>
                OFERTAS EXCLUSIVAS
            </h2>
            <span>
                Encuentra ofertas publicadas de forma exclusiva para personas en situación de Discapacidad
            </span>
        </div>
        <div class="col-md-4 col-xs-12 text-center">
            <div class="icon">
                <i class="fas fa-lock" style="padding: 20px 23px;"></i>
            </div>
            <h2>
                TU PRIVACIDAD IMPORTA
            </h2>
            <span>
                Tus datos siempre estarán muy resguardados. Siempre recibirás notificaciones cuando alguna empresa quiera contactarse contigo.
            </span>
        </div>
        <div class="col-12 text-center mt-5">
            <div class="btn btn-primary">Ver Ofertas</div>
        </div>
    </div>
</section>
<section class="container informacion">
    <div class="row mx-0">
        <div class="offset-sm-2 col-sm-8 col-xs-12 text-center">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/8moMlTWaZ9I" title="Talento Inclusivo"></iframe>
            </div>
        </div>
    </div>
</section>
<h3 class="title line color-primary">
    <span>Colaboramos con</span>
</h3>
<section class="container informacion">
    <div class="slider-colaboradores">
        <div><div style="background-image: url('https://reqlut2.s3.amazonaws.com/uploads/logos/543d1b812e7ef543d1b812e86d65622.jpg')"></div></div>
        <div><div style="background-image: url('https://reqlut2.s3.amazonaws.com/uploads/logos/b66368f4e12609fd8cf3201d37fe983c82a5d88f-5242880.png')"></div></div>
        <div><div style="background-image: url('https://reqlut2.s3.amazonaws.com/uploads/logos/eaa2817053fbc6643a7b481ddbb4cec0ba9a1c6f-5242880.png')"></div></div>
        <div><div style="background-image: url('https://reqlut2.s3.amazonaws.com/uploads/logos/6164d7f5e9d78432b4243b2e4757eb06763be3ea.jpg')"></div></div>
        <div><div style="background-image: url('https://reqlut2.s3.amazonaws.com/uploads/logos/7f226406292e0fb2792987d007688d926d33c572-5242880.png')"></div></div>
        <div><div style="background-image: url('https://reqlut2.s3.amazonaws.com/uploads/logos/da661a8d30962057aac9da49424f7d7f7c3a5650.png')"></div></div>
        <div><div style="background-image: url('https://reqlut2.s3.amazonaws.com/uploads/logos/de86ccb5512294ef6c6c91ca9501964179485359-5242880.png')"></div></div>
        <div><div style="background-image: url('https://reqlut2.s3.amazonaws.com/uploads/logos/4051ce02fc51ceb257d27d8f1ce71677e83eaf7b-5242880.png')"></div></div>
        <div><div style="background-image: url('https://reqlut2.s3.amazonaws.com/uploads/logos/c13f86f59ad519dadb3e87118e6f847261302e37-5242880.png')"></div></div>
        <div><div style="background-image: url('https://reqlut2.s3.amazonaws.com/uploads/logos/53aaf097e668653aaf097e66fc46501.jpg')"></div></div>
        <div><div style="background-image: url('https://reqlut2.s3.amazonaws.com/uploads/logos/5407269625dc45407269625e4563569.png')"></div></div>
        <div><div style="background-image: url('https://reqlut2.s3.amazonaws.com/uploads/logos/b36b12b7ea0dddc7085958597b99ea71458ce373-5242880.png')"></div></div>
        <div><div style="background-image: url('https://reqlut2.s3.amazonaws.com/uploads/logos/a2da1d13e7568f65c0894c62070f6d0a8a2481ff-5242880.png')"></div></div>
        <div><div style="background-image: url('https://reqlut2.s3.amazonaws.com/uploads/logos/941acca37b1c313f39270419e17d82df71ad239f-5242880.png')"></div></div>
        <div><div style="background-image: url('https://reqlut2.s3.amazonaws.com/uploads/logos/ef0168fd1028554079e3d8903f4f95daad2e2984-5242880.jpg')"></div></div>
    </div>
</section>
@endsection
@push('js')
<script src="/assets/js/custom/index.js"></script>
@endpush