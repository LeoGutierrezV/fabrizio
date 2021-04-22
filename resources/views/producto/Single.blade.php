@extends('layouts.base')

@section('title','Home')

@section('body')

    @include('shared.menu')
    
  
  <div class="bg-light py-3">
        <div class="container">
          <div class="row">
            <div class="col-md-12 mb-0"><a class="text-black" href="Inicio">Inicio</a> <span class="mx-2 mb-0">/</span>
              <a class="text-black" href="Tienda">Tienda</a> <span class="mx-2 mb-0">/</span>
              <strong class="text-black">Detalles del Producto</strong>
            </div>
          </div>
        </div>
  
  
      <div class="site-section">
      <div class="container">
          <div class="row">
              <div class="col-sm-6 text-center">
                <img id="featured" src="{{$prod['imagen1']}}" alt="{{$prod['nombre']}}">
                <div class="slider-wrapper">
                        
                  <div id="detail-product text-center">
                    <img class="thumbnail" src="{{$prod['imagen1']}}" alt="{{$prod['nombre']}}">
                    <img class="thumbnail" src="{{$prod['imagen2']}}" alt="{{$prod['nombre']}}">
                    <img class="thumbnail" src="{{$prod['imagen3']}}" alt="{{$prod['nombre']}}">
                    <img class="thumbnail" src="{{$prod['imagen4']}}" alt="{{$prod['nombre']}}">
                  </div>
                </div>
            </div>
            
                <div class="col-sm-6">
                  <h2 class="text-black txt-rs-center">{{$prod['nombre']}}</h2>
                  <h4><p class="txt-rs-center">{{$prod['categoria']}}</p></h4>
                  <p class="txt-rs-center">({{$prod['color']}})</p>
                  <h4><p class="txt-rs-center">{{$prod['descripcion']}}</p></h4>
                  <p><strong class="text-primary h4 text-black txt-rs-center">S/{{$prod['precio']}}</strong></p>
  
                  <p><a href="/cart/add/{{$prod['id']}}" class="buy-now btn btn-sm btn-primary block-black border-black">Agregar al Carrito</a></p>
                </div>
          </div>
        </div>
      </div>
          
  </div>
  
  
  <script>
    let thumbnail = document.getElementsByClassName('thumbnail')
    
    let activeImages = document.getElementsByClassName('active')
  
    for(var i=0; i<thumbnail.length;i++){
      thumbnail[i].addEventListener('mouseover', function(){
        console.log(activeImages)
        if(activeImages.length > 0){
          activeImages[0].classList.remove('active')
        }
        this.classList.add('active')
        document.getElementById('featured').src = this.src
      })
    }
  
    let buttonRight = document.getElementById('sliderRight')
    let buttonLeft = document.getElementById('sliderLeft')
  
    buttonLeft.addEventListener('click',function(){
      document.getElementById('detail-product').scrolleft-=180
    })
  
    buttonRight.addEventListener('click',function(){
      document.getElementById('detail-product').scrolleft+=180
    })
  
  </script>
@endsection