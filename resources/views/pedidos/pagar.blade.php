@extends('layouts.base')

@section('title','Home')

@section('body')

  @include('shared.menu')

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


  
<div class="site-section">
      <div class="container">
        <div class="row row-pb-lg">
					<div class="col-md-10 offset-md-1">
						<div class="process-wrap">
							<div class="process text-center active">
								<p><span>01</span></p>
								<h3>Bolsa<a></h3>
							</div>
							<div class="process text-center active">
								<p><span>02</span></p>
								<h3>Checkout</h3>
							</div>
							<div class="process text-center">
								<p><span>03</span></p>
								<h3>Orden Completa</h3>
							</div>
						</div>
					</div>
				</div>
        <div class="row">
          <div class="col-md-6 mb-5 mb-md-0">
            <h2 class="h3 mb-3 text-black">DETALLES DE PEDIDO</h2>
                <div class="p-3 p-lg-5 border">
                  <table class="table site-block-order-table mb-5">
                    <tbody>

                    <tr>
                        <td class="text-black font-weight-bold">Número de Pedido: -</td>
                    </tr>
                      
                    <tr>
                        <td class="text-black font-weight-bold">Nombre: {{Request::session()->get('user')['name']}}</td>
                    </tr>

                    <tr>
                        <td class="text-black font-weight-bold">Email: {{Request::session()->get('user')['email']}}</td>
                    </tr>

                    <tr>
                        <td class="text-black font-weight-bold">Telefono/Celular: {{Request::session()->get('user')['telefono']}}</td>
                    </tr>

                    <tr>
                        <td class="text-black font-weight-bold">País: {{$pais}}</td>
                    </tr>

                    <tr>
                        <td class="text-black font-weight-bold">Departamento: {{$departamento.'/'.$departamento2}}</td>
                    </tr>

                    <tr>
                        <td class="text-black font-weight-bold">Distrito: {{$distrito}}</td>
                    </tr>

                    <tr>
                        <td class="text-black font-weight-bold ">Dirección: {{$direccion}} <br/> {{$direccion2}}</td>
                    </tr>


                    </tbody>
                  </table>

            </div>
          </div>
          <div class="col-md-6">
            
            <div class="row mb-5">
              <div class="col-md-12">
                <h2 class="h3 mb-3 text-black">INFORMACIÓN DEL PEDIDO</h2>
                <div class="p-3 p-lg-5 border">
                  <table class="table site-block-order-table mb-5">
                    <thead>
                      <th>Producto</th>
                      <th>Categoria</th>
                      <th>Cantidad</th>
                      <th>Precio</th>
                    </thead>
                    <tbody>
                        {{-- --------------- --}}
                        @php
                        $total = 0;    
                        @endphp
                        @foreach(Request::session()->get('cart') as $c)
                      <tr>
                        <td id="nombre_productoFinal">{{$c['nombre']}}</td>
                        <td id="nombre_descripcionFinal">{{$c['cat']}}</td>
                        <td class="text-center">x{{$c['cant']}}</td>
                        <td id="nombre_precioFinal">S/{{$c['precio']}}</td>
                        @php
                            $total += ($c['cant']*$c['precio']);    
                        @endphp
                      </tr>
                      @endforeach
                    
                      {{-- ---------------------- --}}
                      <tr>
                        <td class="text-black font-weight-bold"><strong>Total del Pedido:</strong></td>
                        <td></td>
                        <td></td>
                        <td class="text-black font-weight-bold"><strong><S>{{($total+13)}}</strong></td>
                      </tr>
                    </tbody>
                  </table>

                <div id="accordion">

                  {{-- <div class="card">
                    <div class="card-header" id="headingOne">
                      <h5 class="mb-0 text-center">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseUno" aria-expanded="false" aria-controls="collapseDos">
                          VISA
                        </button>
                      </h5>
                    </div>
                    <div id="collapseUno" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                      <div class="card-body">

                        <p class="col-md-12"><small>Realiza la compra presionando Pagar
                          Si deseas cambiar de medio de pago presiona Cancelar</small></p>
                          <div class="text-center">
                            <form action="/insertarpago.php" method="POST">
                              <button class="btn btn-primary block-black border-black" type="button" name="" id="buyButton" value="COMPRAR" data-producto="1">Pagar con Culqi</button>
                            </form>
                        </div>

                      </div>
                    </div>
                  </div> --}}

                  <div class="card">
                    <div class="card-header" id="headingThree">
                      <h5 class="mb-0 text-center">
                        <button class="btn btn-link collapsed" id="generarCodePag" data-toggle="collapse" data-target="#collapseTres" aria-expanded="false" aria-controls="collapseTres">
                          YAPE/BCP
                        </button>
                      </h5>
                    </div>
                    <div id="collapseTres" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                      <div class="card-body text-center">
                        <img src="images/YapeE.jpeg">
                      </div>
                      <div class="col-12 text-center">
                        <p class="text-black">Ingresa a Yape desde tu celular,<br>
                        Escanea este código QR,<br>
                        o haz el pago al número<br>
                        934896605<br>
                        agregándolo como contacto.<br>

                        Ingresa el siguiente monto a transferir<br>
                        S/{{($total+13)}}<br>
                        Añade este código<br>
                        <form action="/pedido/finalizar" method="POST">
                        <input type="text" class="text-center" id="codigoPag" readonly="true" name="codigo_pago"><br>
                        Como nota y dale Pagar.<br></p>
                        <br>
                        {{csrf_field()}}
                        <input type="hidden" name="total" value="{{$total}}">
                          <button class="btn block-black" type="submit">Finalizar</button>
                        </form>
                      </div>
                      <br>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingThree">
                      <h5 class="mb-0 text-center">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseCuatro" aria-expanded="false" aria-controls="collapseCuatro">
                          DEPOSITO BANCARIO
                        </button>
                      </h5>
                    </div>
                    <div id="collapseCuatro" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                      <div class="card-body text-black text-center">
                        Método de Pago: DEPÓSITO / TRANSFERENCIA <br>

                        Nombre / Razón Social: Aimar Fabrizio Diaz Orrillo<br>

                        Banco: Banco de Crédito<br>

                        Número de cuenta: 19497347559065<br>

                        Código Interbancario (Entidad-Oficina-Cuenta-CC): 00219419734755906596<br>

                        Monto: S/{{($total+13)}} <br>

                        Correo: contacto@fabriziosurferwinn.com<br>

                        Celular: <strong><a href="https://wa.me/51934896605">999449749<a></strong><br>

                        Instrucciones: Enviar comprobante de pago respondiendo al correo de notificación de pedido o enviar a universofsw.25021999@gmail.com indicando en asunto el código de referencia del pedido. Otras formas de pago: Transferencia vía BCP a la cuenta 19497347559065/CCI 00219419734755906596. Yape al número <strong><a href="https://wa.me/51934896605">999449749<a></strong>. Cuentas a nombre de Aimar Fabrizio Diaz Orrillo. Recuerda que si realizas un depósito en ventanilla, deberás añadir al monto de tu pedido la comisión que cobra el banco (7 soles apróx.). No olvides enviar el comprobante de pago por correo. Tu llegará en un plazo de 3 días hábiles, pero si lo necesitas con urgencia comunícate con nosotros para poder ayudarte.

                        Puedes contactarte con nosotros para cualquier información adicional:<br>


                       (+51) <strong><a href="https://wa.me/51934896605">999449749<a></strong><br>

                       <a class="link" href="mailto:contacto@fabriziosurferwinn.com">contacto@fabriziosurferwinn.com</a> <br>
                       <br>
                       <form action="/pedido/finalizar" method="POST">
                        <input type="text" value="DEPOSITO BANCARIO" class="text-center" id="codigoPag" readonly="true" name="codigo_pago">
                        {{csrf_field()}}
                        <input type="hidden" name="total" value="{{$total}}">
                       <button type="submit" class="btn block-black">Finalizar</button>
                        </form>
                       <br>
                      </div>
                    </div>
                  </div>

                </div>
                <!--==============================-->
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>


@include('home/colection')




<script>
    $("#generarCodePag").click(function(){

      var num = Math.floor(Math.random()*900000000)+100000000;
      $("#codigoPag").val(num)
    });
</script>
  @include('shared.footer')
@endsection