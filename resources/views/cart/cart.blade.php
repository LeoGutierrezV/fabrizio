@extends('layouts.base')

@section('title','Home')

@section('body')
@include('shared.menu')

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a class="text-black" href="/">Inicio</a> <span class="mx-2 mb-0">/</span>
           <strong class="text-black">Carrito</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <form class="col-md-12" method="post">
            <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="product-thumbnail">Imagen</th>
                    <th class="product-name">Producto</th>
                    <th class="product-name">Categoria</th>
                    <th class="product-price">Precio</th>
                    <th class="product-quantity">Cantidad</th>
                    <th class="product-total">Total</th>
                    <th class="product-remove">Remover</th>
                  </tr>
                </thead>
                <tbody>
                  
                    @if(Request::session()->has('cart'))
                    @foreach (Request::session()->get('cart') as $p)
                    <tr id="row{{$p['id']}}">
                
                    <td class="product-thumbnail">
                      <img src="{{$p['img']}}" alt="asdasdas" class="img-fluid">
                    </td>

                    <td class="product-name">
                      <h2 class="h5 text-black">{{$p['nombre']}}</h2>
                    </td>
                    
                    <td class="product-name">
                      {{$p['cat']}}
                    </td>

                    <td>
                      <input type="hidden" id="Precio{{$p['id']}}" value="{{$p['precio']}}">
                      {{$p['precio']}}
                    </td>

                    <td>
                      <div class="input-group mb-3" style="max-width: 120px;">
                        <div class="input-group-prepend">
                          <button onclick="cart_ajax(0,'{{$p['id']}}')" class="btn border-black text-black js-btn-minus btnIncrementar" type="button">&minus;</button>
                        </div>
                        <input type="text" id="cant{{$p['id']}}" class="form-control text-center txtCantidad" 
                         value="{{$p['cant']}}" 
                          disabled>
                        <div class="input-group-append">
                          <button onclick="cart_ajax(2,'{{$p['id']}}')" class="btn border-black text-black js-btn-plus btnIncrementar" type="button">&plus;</button>
                        </div>
                      </div>
                    </td>



                    <td>
                      S/ <span style="font-size: 14px;" id="Cantt{{$p['id']}}"> {{($p['precio']*$p['cant'])}}</span>
                    </td>


                    <td><a onclick="cart_ajax(1,'{{$p['id']}}')" class="btn border-black text-white block-black btn-sm btnEliminar">X</a></td>
                    </tr>
                    @endforeach
                    @endif
                    
                  

                </tbody>
              </table>
              <div class="movil-cart">
                <div class="col-md-5 ml-auto text-center">
                  @if(Request::session()->has('cart'))
                  @foreach(Request::session()->get('cart') as $p)
                    <div class="p-4 border-grosor mb-3 border-black">
                      <div class="btn-movil-remove"><a href="javaScript:cart_ajax(1,'{{$p['id']}}');" class="btn border-black btn-movil-remove2 text-white block-black btn-sm btnEliminar" data-id="{{$p['id']}}">X</a></div>
                    <img src="{{$p['img']}}" alt="{{$p['nombre']}}" width="125px">
                      <span class="d-block EYELEVATION">{{$p['nombre']}}</span><br>
                      <span class="d-block verpedidodetalles">Cantidad:{{$p['cant']}}</span>
                      <span class="d-block verpedidodetalles">Precio: S/{{$p['precio']}}</span>
                    </div>
                  @endforeach
                  @endif
                 
                </div>
              </div>
            </div>
          </form>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
              <div class="col-md-6 mb-3 mb-md-0">
                <button class="btn block-black text-white btn-sm btn-block" onclick="location.reload()">Actualizar compra</button>
              </div>
              <div class="col-md-6">
                <a href="/shop"><button class="btn block-black text-white btn-sm btn-block">Seguir comprando</button></a>
              </div>
            </div>
          </div>
          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <span class="text-black">Subtotal</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">
                      @if(Request::session()->has('cart'))
                      @php
                        $total = 0;
                      @endphp
                      @foreach(Request::session()->get('cart') as $p)
                        @php
                            $total += ($p['cant'] * $p['precio']);
                        @endphp
                      @endforeach
                      S/{{$total}}
                      @endif
                    </strong>
                  </div>
                </div>
                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">Total</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">S/{{$total}}</strong>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <form action="/checkout" method="GET">
                      {{csrf_field()}}
                      <button class="btn block-black text-white btn-lg py-3 btn-block" type="submit" >Hacer Pedido</button>
                    </form>
                  </div>
                </div>
              </div>
            </div> 
          </div>
        </div>
      </div>
    </div>

<script>
  function cart_ajax(action,pid){
    let dataf = 0;
    if(action == 0){
      fetch('/cart/remove/one/ajax/'+pid)
      .then((response) => {
        dataf = response;
        if(dataf.status ==200 || dataf.status == '200'){
          if( document.getElementById('cant'+pid).value <=0){
            document.getElementById('row'+pid).style = 'display:none;';
          }
        }else if(dataf.status == 400 || dataf.status == '400'){
          document.getElementById('row'+pid).style.display = 'none';
        }
        actualizar(pid);
        
      })


    }else if(action==1){
      fetch('/cart/remove/ajax/'+pid)
      .then((response) => {
        dataf = response;
        if(dataf.status ==200 || dataf.status == '200'){

          document.getElementById('row'+pid).style = 'display:none;';
        }else if(dataf.status == 400 || dataf.status == '400'){
          document.getElementById('row'+pid).style.display = 'none';
        }
        actualizar(pid);
        location.reload();
        
      })

    }else if(action==2){
      fetch('/cart/add/ajax/'+pid)
      .then((response) => {
        dataf = response;
        if(dataf.status ==200 || dataf.status == '200'){
          actualizar(pid);
          return;
        }else if(dataf.status == 400 || dataf.status == '400'){
          document.getElementById('row'+pid).value -= 1;
        }
        
        
      })

    }
    actualizar(pid);
  };


  function actualizar(pid){

    let total = Math.round(parseInt(document.getElementById('cant'+pid).value) * parseFloat(document.getElementById("Precio"+pid).value));
    document.getElementById('Cantt'+pid).innerHTML = ''+total;
  }



</script>
@endsection