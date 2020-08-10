@extends('layouts.app')
@section('content')
<div class="slider">
    <div class="container">
        <div class="slider-background">
            <div class="slider-text">
                <h1>Publica en Talento Inclusivo</h1>
                <div class="row">
                    <div class="col-xs-12 col-md-6"><a href="/login" class="btn btn-primary btn-block">Ya he publicado
                            en reqlut</a></div>
                    <div class="col-xs-12 col-md-6"><a href="/register" class="btn btn-primary btn-block">No, soy nuevo</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="container informacion">
    <div class="row mx-0">
        <div class="col-md-4 col-xs-12 text-center">
            <div class="icon">
                <i class="fa fa-plus" style="padding: 20px 23px;"></i>
            </div>
            <h2>
                PUBLICA UN CARGO
            </h2>
            <span>
                Encuentra los mejores talentos dentro de Talento Inclusivo
            </span>
        </div>
        <div class="col-md-4 col-xs-12 text-center">
            <div class="icon">
                <i class="fa fa-wrench" style="padding: 20px 24px;"></i>
            </div>
            <h2>
                HERRAMIENTAS DE GESTIÓN
            </h2>
            <span>
                Las mejores herramientas para gestionar todos tus procesos de selección
            </span>
        </div>
        <div class="col-md-4 col-xs-12 text-center">
            <div class="icon">
                <i class="fa fa-rocket" style="padding: 20px 23px;"></i>
            </div>
            <h2>
                POSICIONA TU EMPRESA
            </h2>
            <span>
                Aprovecha el perfil de empresa para posicionar tu marca empleadora
            </span>
        </div>
    </div>
</section>

@endsection
@push('js')
<script src="/assets/js/custom/index.js"></script>
@endpush