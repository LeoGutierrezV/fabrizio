
@extends('layouts.base')

@section('title','Home')

@section('body')
@include('shared.menu')
			<div class="perfil-cliente">
				<div class="col-12 border-grosor">
					<div class="col-12 header-perfil-cliente">Su Cuenta
						<p><strong>Gestiona tus pedidos y datos personales</strong></p>
					</div>
					<div class="col-12 border-division"></div>
						<div class="site-section">
					      <div class="container">
					        <img class="OJO" src="https://firebasestorage.googleapis.com/v0/b/fabriziosurferwinn.appspot.com/o/logos%2FOJO%20FSW.png?alt=media&token=7dff1ec4-9345-4eac-a515-3c859f9da86c" width="90px">
					        <br>
					        <div class="row">
					          <div class="col-md-6 mb-5 mb-md-0">
					            <h2 class="h3 mb-3 text-black">Datos Personales</h2>
					            <div class="p-3 p-lg-5 border">

					            	<div class="col-7">
										<strong class="text-cliente">Perfil</strong>
										<div class="img-perfil-cliente">
											<img class="img-cliente" src="https://firebasestorage.googleapis.com/v0/b/fabriziosurferwinn.appspot.com/o/logos%2FOJO%20FSW.png?alt=media&token=7dff1ec4-9345-4eac-a515-3c859f9da86c" height="35px" alt="Image-Profile-Client">
										</div>
									</div>

									<div class="">
										<strong class="text-cliente">Nombres</strong>
										<input type="" value="{{$user->name}}" name="" class="form-control" readonly="true">
									</div>
									<div class="">
										<strong class="text-cliente">Apellidos</strong>
										<input type="" name="" value="{{$user->last_name}}" class="form-control" readonly="true">
									</div>
									<div class="">
										<strong class="text-cliente">Telefono/Celular</strong>
										<input type="" name="" value="{{$user->telefono}}" class="form-control" readonly="true">
									</div>
									<br>
									<div class="">
										<button class="btn block-black">Editar Datos</button>
									</div>
									<br>

					            </div>
					          </div>
					          <div class="col-md-6">
					            
					            <div class="row mb-5">
					              <div class="col-md-12">
					                <h2 class="h3 mb-3 text-black">Opciones</h2>
					                <div class="p-3 p-lg-5 border">
					                	<div class="container-general-options-pedidos">
											<div class="row">
											<div class="container-pedido">
												<div class="block-pedidos">
													<div class="container-text-perfil">
														<span class="fas fa-gift"></span>
														<p>Pedidos</p>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="block-pedidos">
													<div class="container-text-perfil">
														<span class="fab fa-whatsapp"></span>
														<p><a class="link text-light" href="">WhatsApp</a> </p>
													</div>
												</div>
											</div>
											</div>
											<!--<div class="container-pedido">
												<div class="block-pedidos">
													<div class="container-text-perfil">
														<span class="fas fa-shield-alt"></span>
														<p>Seguridad</p>
													</div>
												</div>
											</div>-->
											<!--<div class="container-pedido">
												<div class="block-pedidos">
													<div class="container-text-perfil">
														<span class="fas fa-truck"></span>
														<p>Direcciones</p>
													</div>
												</div>
											</div>-->
										</div>
										<div class="space-min"></div>
										@if($listo)
										<div>
											<label for="c_fname" class="text-black">Nombre <span class="text-danger">*</span></label>	
											<input type="" name="" value="{{$user->name}}" class="form-control" readonly="true">
											<div class="form-group row">
												<div class="col-md-6">
													<label for="c_fname" class="text-black">DNI <span class="text-danger">*</span></label>
													<input type="" name="" value="{{$user->username}}" class="form-control" readonly="true">
												</div>
												<div class="col-md-6">
													<label for="c_fname" class="text-black">Código Pago <span class="text-danger">*</span></label>
													<input type="" name="" value="{{$pedidos->codigo_pago}}" class="form-control" readonly="true">
												</div>
											</div>
											<div class="form-group row">
												<div class="col-md-6">
													<label for="c_fname" class="text-black">Status Págo<span class="text-danger">*</span></label>
													<input type="" name="" value="{{'listo'}}" class="form-control" readonly="true">
												</div>
												<div class="col-md-6">
													<label for="c_fname" class="text-black">Status Envío <span class="text-danger">*</span></label>
													<input type="" name="" value="{{$pedidos->completado?'Listo':'En proceso'}}" class="form-control" readonly="true">
												</div>
											</div>

											<div class="form-group row">
												<div class="col-md-6">
													<label for="c_fname" class="text-black">Número de Pedido <span class="text-danger">*</span></label>
													<input type="" name="" value="{{$pedidos->id_rastreo}}" class="form-control" readonly="true">
												</div>
												<div class="col-md-6">
													<label for="c_fname" class="text-black">Pago Total <span class="text-danger">*</span></label>
													<input type="" name="" class="form-control" readonly="true">
												</div>
											</div>
											<p>Cualquier duda o seguimiento de sus compras Comunicarse por WhatsApp</p>
										</div>
										@else 
										<div>
											<label for="c_fname" class="text-black">Nombre <span class="text-danger">*</span></label>	
											<input type="" name="" value="{{$user->name}}" class="form-control" readonly="true">
											<div class="form-group row">
												<div class="col-md-6">
													<label for="c_fname" class="text-black">DNI <span class="text-danger">*</span></label>
													<input type="" name="" value="{{$user->username}}" class="form-control" readonly="true">
												</div>
												<div class="col-md-6">
													<label for="c_fname" class="text-black">Código Pago <span class="text-danger">*</span></label>
													<input type="" name="" value="" class="form-control" readonly="true">
												</div>
											</div>
											<div class="form-group row">
												<div class="col-md-6">
													<label for="c_fname" class="text-black">Status Págo<span class="text-danger">*</span></label>
													<input type="" name="" value="" class="form-control" readonly="true">
												</div>
												<div class="col-md-6">
													<label for="c_fname" class="text-black">Status Envío <span class="text-danger">*</span></label>
													<input type="" name="" value="" class="form-control" readonly="true">
												</div>
											</div>

											<div class="form-group row">
												<div class="col-md-6">
													<label for="c_fname" class="text-black">Número de Pedido <span class="text-danger">*</span></label>
													<input type="" name="" value="" class="form-control" readonly="true">
												</div>
												<div class="col-md-6">
													<label for="c_fname" class="text-black">Pago Total <span class="text-danger">*</span></label>
													<input type="" name="" class="form-control" readonly="true">
												</div>
											</div>
											<p>Cualquier duda o seguimiento de sus compras Comunicarse por WhatsApp</p>
										</div>
										@endif

					                </div>
					              </div>
					            </div>

					          </div>
					        </div>
					      </div>
					    </div>
				</div>
			</div>

@include('shared.footer')

@endsection