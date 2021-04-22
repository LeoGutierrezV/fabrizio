@extends('layouts.base')

@section('title','Home')

@section('body')

  @include('shared.menu')
  <div class="bg-light py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mb-0"><a class="text-black" href="Inicio">Home</a> <span class="mx-2 mb-0">/</span>
         <strong class="text-black">Tienda</strong></div>
      </div>
    </div>
  </div>

  <div class="site-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-9 order-2">
          <div class="row">
            <div class="col-md-12 mb-5">
              <div class="float-md-left mb-4"><h2 class="text-black h5">Bienvenidos a mi Universo</h2></div>
            </div>
          </div>
          <div class="row mb-5">
            @foreach($prod as $p)
            <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
              <div class="block-4 text-center">
                <figure class="image">
                  <a class="block-2-item" href="/product/{{$p['id']}}"><img src="{{$p['imagen1']}}" alt="{{$p['nombre']}}" class="img-fluid"></a>
                </figure>
                <div class="block-4-text p-4">
                  <h3><a class="EYELEVATION"  href="/product/{{$p['id']}}">{{$p['nombre']}}</a></h3>
                  <h6><p class="mb-0">{{$p['categoria']}}</p></h6>
                  <h6><p class="mb-0">{{$p['color']}}</p></h6>
                  <p class="text-primary font-weight-bold text-black">S/ {{$p['precio']}}</p>
                </div>
              </div>
            </div>

            @endforeach
          </div>

        </div>
{{--FILTROS --------------------------------------- --}}
@include('shop/filtros')

{{-- --------------------------------------- --}}




      </div>

      
    </div>
  </div>
  @include('shared.footer')
@endsection