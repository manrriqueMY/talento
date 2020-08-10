@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
        <div class="col-md-8">
            <br>
            <div class="msg_bg">
              <p>
                  <b>¡Conoce y desarrolla tu talento!</b>
              </p>
              <p>
                  Talento Inclusivo te proporciona un test de fortalezas de clase mundial que te permitirá descubrir y conocer tu
                  talento y fortalezas para que luego puedas desarrollarlas de mejor manera.
              </p>
              <p>
                  Tras realizar este test, Talento Inclusivo podrá recomendarte trabajos que tengan mejor afinidad contigo, para
                  que así puedas encontrar ese trabajo en donde serás realmente feliz.
              </p>
              <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#testfortaleza" onclick="">Tomar test de Fortalezas</a>
          </div>
        </div>
        @include('modal.testfortaleza')
		@include('modal.perfil')
	</div>
</div>

@endsection
@push('css')
<link rel="stylesheet" href="/assets/css/custom/perfil.css">
@endpush
@push('js')
<script>
  function ShowQuestionTest(n) {
    $("#q_"+(n-1)).hide();
    $("#q_"+n).show();
  }
</script>
@endpush