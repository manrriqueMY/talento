@extends('layouts.app')
@section('content')

<div id="content-wrapper">
    <div class="container">
        <div class="header">
            <div id="company_header">
                <div id="desc">                   
                    <div class="info">
                        <div class="name">Analista en Desarrollo</div>
                        <small class="subtitle mt20">
                            Pia Concha
                        </small>
                    </div>
                </div>
                <div class="stats">
                    <button class="btn btn-primary"><i class="fas fa-edit"></i> Editar</button> <i class="far fa-thumbs-up"></i> <i class="far fa-thumbs-down"></i>
                </div>
            </div>

        </div>      
    </div>
</div>
@endsection
@push('css')
<link rel="stylesheet" href="/assets/css/custom/admin.css">
@endpush