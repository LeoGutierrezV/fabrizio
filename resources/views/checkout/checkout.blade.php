@extends('layouts.base')

@section('title','Home')

@section('body')

  @include('shared.menu')
    
  <form action="/pagar" name="form" id="form" method="post">

      <div class="site-section">
        <div class="container">
          <div class="row mb-5">
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
          <img class="OJO" src="https://i.imgur.com/Ue6a7JD.png" width="90px">
          <br>
          <div class="row">
            <div class="col-md-6 mb-5 mb-md-0">
              <h2 class="h3 mb-3 text-black">DETALLES DE LA COMPRA</h2>
              <div class="p-3 p-lg-5 border">
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="c_fname" class="text-black">Nombre <span class="text-danger">*</span></label>
                    <input type="text" class="form-control border-black" value="{{Request::session()->get('user')['name']}}" id="c_fname" name="name" required>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error Message</small>
                  </div>
                  <div class="col-md-6">
                    <label for="c_lname" class="text-black">Apellido <span class="text-danger">*</span></label>
                    <input type="text" value="{{Request::session()->get('user')['last_name']}}" class="form-control border-black" id="c_lname" name="last_name" required>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error Message</small>
                  </div>
                </div>
  
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="c_dni" class="text-black">DNI <span class="text-danger">*</span></label>
                    <input type="text" class="form-control border-black" value="{{Request::session()->get('user')['username']}}" id="c_dni" name="username" required readonly>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error Message</small>
                  </div>
                
  
                  <div class="col-md-6">
                    <label for="c_signo" class="text-black">Signo <span class="text-danger">*</span></label>
                    <input type="text" class="form-control border-black"value="{{Request::session()->get('user')['signo']}}" id="c_signo" name="signo" required>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error Message</small>
                  </div>
                </div>
  
  
  
                <div class="form-group row">
                  <div class="col-md-12">
                  <label for="country" class="text-black">País <span class="text-danger">*</span></label>
                  <input type="text" id="country" class="form-control border-black plain-text" name="pais" value="Perú" readonly="true" required>
                  <small>Error Message</small>
                </div>
                </div>
  
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_department" class="text-black">Departamento</label>
                    <select class="form-control border-black" id="c_department" name="departamento" required>
                      <option value="">Selecciona tu Departamento</option>  
                      <option value="Amazonas">Amazonas</option>
                      <option value="Áncash">Áncash</option> 
                      <option value="Apurímac">Apurímac</option> 
                      <option value="Arequipa">Arequipa</option> 
                      <option value="Ayacucho">Ayacucho</option>  
                      <option value="Cajamarca">Cajamarca</option>
                      <option value="Cuzco">Cuzco</option> 
                      <option value="Huancavelica">Huancavelica</option> 
                      <option value="Huánuco">Huánuco</option> 
                      <option value="Ica">Ica</option>  
                      <option value="Junín">Junín</option>  
                      <option value="La Libertad">La Libertad</option>
                      <option value="Lambayeque">Lambayeque</option> 
                      <option value="Lima">Lima</option> 
                      <option value="Loreto">Loreto</option> 
                      <option value="Madre de Dios">Madre de Dios</option> 
                      <option value="Moquegua">Moquegua</option>  
                      <option value="Pasco">Pasco</option>  
                      <option value="Piura">Piura</option>
                      <option value="Puno">Puno</option> 
                      <option value="San Martín">San Martín</option> 
                      <option value="Tacna">Tacna</option> 
                      <option value="Tumbes">Tumbes</option>  
                      <option value="Ucayali">Ucayali</option>  
                    </select>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error Message</small>
                  </div>
                </div>
                <br>
                <div class="form-group row">
                  <div class="col-md-12">
                  <input  type="text" class="form-control border-black" placeholder="Si no aparece tu Departamento detallalo aquí" id="c_department2" name="departamento2">
                    <small>Error Message</small>
                  </div>
                </div>
  
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_district" class="text-black">Distrito <span class="text-danger">*</span></label>
                    <input required type="text" class="form-control border-black" id="c_district" name="distrito" placeholder="Distrito">
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error Message</small>
                  </div>
                </div>
  
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_address" class="text-black">Dirección <span class="text-danger">*</span></label>
                    <input required type="text" class="form-control border-black" id="c_address" name="direccion" placeholder="Dirección">
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error Message</small>
                  </div>
                </div>
  
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_address" class="text-black">Dirección Exacta <span class="text-danger">*</span></label>
                    <input required type="text" class="form-control border-black" id="c_address2" name="direccion2">
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error Message</small>
                  </div>
                </div>
  
                <div class="form-group row mb-5">
                  <div class="col-md-6">
                    <label for="c_email_address" class="text-black">Correo <span class="text-danger">*</span></label>
                    <input required type="text" class="form-control border-black" id="c_email_address" name="email" 
                    value="{{Request::session()->get('user')['email']}}"

                    >
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error Message</small>
                  </div>
                  <div class="col-md-6">
                    <label for="c_phone" class="text-black">Número de Celular <span class="text-danger">*</span></label>
                    <input required type="text" value="{{Request::session()->get('user')['telefono']}}"class="form-control border-black" id="c_phone" name="telefono" placeholder="Número de Celular">
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error Message</small>
                  </div>
                </div>
            
                <div class="form-group">

                </div>
  
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
                        <th>Cantidad</th>
                       
                        <th>Total</th>
                      </thead>
                      <tbody>
                        @php 
                        
                        if(Request::session()->has('cart')){
                            foreach(Request::session()->get('cart') as $d){
                                echo '<tr><td>';
                                echo $d['nombre'].'</td>';
                                echo'<td class="text-center">x';
                                echo $d['cant'];
                                echo'</td>;
                                <td>S/.';
                                echo number_format($d['precio'],2,'.','');
                                echo '</td>';
                                echo'</tr>';
                            }
                        }
                        @endphp
                        <tr>
                          <td class="text-black font-weight-bold"><strong>Subtotal: </strong></td>
                          <td></td>
                          <td class="text-black">S/.
                            @php
                                
                            if(Request::session()->has('cart'))
                            {
                                $total =0;
                                $datatotal = Request::session()->get('cart');
                                foreach($datatotal as $d){
                                    $total += $d['precio'] * $d['cant'];
                                }
                                echo number_format($total,2,'.','');
                            }
                        @endphp      
                        </td>
                        </tr>
  
                        <tr>
                          <td class="text-black font-weight-bold"><strong>Envío del Pedido:</strong></td>
                          <td></td>
                          <td>S/.13.00</td>
                        </tr>
                        <tr>
                          <td class="text-black font-weight-bold"><strong>Total del Pedido:</strong></td>
                          <td></td>
                          <td class="text-black font-weight-bold"><strong>S/.
                            @php
                                
                                if(Request::session()->has('cart'))
                                {
                                    $total =0;
                                    $datatotal = Request::session()->get('cart');
                                    foreach($datatotal as $d){
                                        $total += $d['precio'] * $d['cant'];
                                    }
                                    echo number_format(($total+13),2,'.','');
                                }
                            @endphp
                            </strong></td>
                        </tr>
                      <table>
                        <tbody>
                        <tr>
                          <td>
                            <div class="col-md-12">
                               
                                    <input required type="checkbox" name="terminos" id="terminos"> He leído y estoy de acuerdo con los<a href="PoliticasPrivacidad" class="text-black"> Acepto los Terminos y Condiciones</a>
                             

                            </div>
                            <small class="text-center">Error Message</small>
                          </td>
                        </tr>
                        </tbody>
                      </table>
                      </tbody>
                    </table>
                    <br>
                    {{csrf_field()}}
                    <div class="form-group">
                      <button class="btn block-black border-black text-white btn-lg py-3 btn-block" name="btn" onclick="veri()" type="submit">Realizar pedido</button>
                    </div>
  
                  </div>
                </div>
              </div>
  
            </div>
          </div>
          <!-- </form> -->
        </div>
      </div>
      </form>
  

  {{-- <script>
    let terminos = document.getElementById('terminos');
    function veri(){
      if(terminos.checked){
          document.getElementById('form').submit();
      }else{
        alert('Acepta los Terminos y Condiciones');
      }
    }
  </script> --}}
@endsection