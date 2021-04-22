@extends('layouts.base')

@section('title','Home')

@section('body')

  @include('shared.menu')

  <div class="centrador-thankyou" data-aos="fade">
		<img class="responsive-thankyou" src="https://firebasestorage.googleapis.com/v0/b/fabriziosurferwinn.appspot.com/o/agradecimiento%2FAGRADECIMIENTOS.png?alt=media&token=f4093aff-15b8-4aed-b147-1b0574b4570c">
	  </div>
    

      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <p><a href="/profile" class="btn btn-sm block-black border-black text-white">Ver Pedido</a></p>
          </div>
          <div class="col-md-12 text-center">
            <p><a href="/" class="btn btn-sm block-black border-black text-white">Regresar al Inicio</a></p>
          </div>
        </div>
      </div>
@include('shared.footer')
@endsection
