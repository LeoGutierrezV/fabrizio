<!DOCTYPE html>
<html>
<head>
	<title>Admin FabrizioSurferWinn</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1-0, minium-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
	@include('admin/menu')
	<div class="col-12">
		<br>
		<!--=================================TABLA PEDIDOS======================================================-->
		<div class="col-6">
			<h1>Tabla Pedidos</h1>
		</div>
		<div class="col-12">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th class="space-btn-pedidos text-center">Fecha</th>
						<th  class="space-btn-extensed text-center">Nombre Comprador</th>
						<th  class="space-btn-extensed text-center">telefono</th>
						<th  class="space-btn-pedidos text-center">Codigo Pago</th>
						<th class="space-btn text-center">Estado</th>
						<th class="space-btn-pedidos text-center margin">Paqueteria</th>
						<th class="space-btn-pedidos text-center">CodigoRastreo</th>
						<th class="space-btn-extensed text-center">Detalles Envio</th>
					</tr>
				</thead>
			</table>
			
			<div id="accordion">
				<div class="">
					<div class="" id="heading">
						<table class="table table-bordered">
							<tbody>
								@foreach($ped as $p)
								<tr>
									<form action="/pedido/editar" method="post">
									<td class="space-btn-pedidos text-center">
										<p class="margin text-center"> {{$p->fecha}}</p>

									</td>
									<td class="space-btn-extensed text-center">
										<p class="margin text-center">{{$p->nombre}}</p>
									</td>
									<td class="space-btn-extensed text-center">
										<p class="margin text-center">{{$p->telefono}}</p>
									</td>
									<td class="space-btn-pedidos text-center">
										<p class="margin text-center"> 
											{{$p->codigo_pago}}
											<input id="iddd" type="hidden" name="id" value="{{$p->id}}"></p>
									</td>
									<td class="space-btn text-center">

										<p class="margin text-center">Completado: <select name="status" >
											@if($p->completado==true)
											<option value="true">Completado</option>
											<option value="false">En Proceso</option>
											@else
											<option value="false">En Proceso</option>
											<option value="true">Completado</option>
											@endif
											
										</select> </p>
			
											</td>
									<td class="space-btn-pedidos text-center">
										<p class="margin text-center"><input type="text" name="paqueteria" id="" value="{{$p->paqueteria}}">  </p>
										
									</td>
									<td class="space-btn-pedidos text-center">
										
										 <input type="text" name="id_rastreo" value="{{$p->id_rastreo}}">
									</td>
									<td class="space-btn-extensed text-center margin">
										<button type="submit" class="btn btn-primary btn-small btnEditar margin-min"  >
											<i class="fa fa-edit"></i>
										</button>
										{{ csrf_field() }}
										
										<div class="btn btn-danger btn-small btnEliminar margin-min"
										data-id="" data-toggle="modal" data-target="#modalEliminarPedido">
										<i class="fa fa-trash"></i>
									</form>

									</div>
									{{-- <div class="btn btn-success collapsed margin-min" type="button" data-toggle="collapse" data-target="#collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">
										Ver <i class="fa fa-search"></i>
									</div> --}}
								</td>
								
							</tr>
							@endforeach

						</tbody>
					</table>
				</div>
				<div class="row">
					<div class="col">
						<div class="collapse multi-collapse" id="collapse"> <!--<?php //echo $f['id'];?>-->
							<div class="card card-body">
								<table class="table table-dark">
									<thead>
										<h4>DETALLES DE ENVIO</h4>
									</thead>
									<tbody>
										<tr>
											<th scope="col">País</th>
											<td><?php //echo $fila[1];?></td>
										</tr>
										<tr>
											<th scope="col">Departamento</th>
											<td><?php //echo $fila[2];?> <br> <?php //echo $fila[3];?></td>
										</tr>
										<tr>
											<th scope="col">Distrito</th>
											<td><?php //echo $fila[4];?>Distrito</td>
										</tr>
										<tr>
											<th scope="col">Dirección <br> Direccion Exacta</th>
											<td><?php //echo $fila[5];?> <br> <?php //echo $fila[6];?></td>
										</tr>
										<tr>
											<th scope="col">Status</th>
											<td><b><?php //echo $f['status'];?></b></td>
										</tr>
									</tbody>
									
								</table>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="collapse multi-collapse" id="collapse"> <!--<?php //echo $f['id'];?>-->
							<div class="card card-body">
								<table class="table table-dark">
									<thead>
										<h4>DETALLES CLIENTE</h4>
										<tr>
											<th scope="col">Nombre Completos:</th>
											<th scope="col"><?php //echo $f['nombre'];?></th>
											Nombres Completos
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="col">Correo:</th>
											<td><?php //echo $f['email'];?></td>
											Email
										</tr>
										<tr>
											<th scope="col">Celular:</th>
											<td><?php //echo $f['telefono'];?></td>
											Telefono
										</tr>
										<tr>
											<th scope="col">DNI:</th>
											<td><?php //echo $fila[8];?></td>
											Dni
										</tr>
										<tr>
											<th scope="col">Signo:</th>
											<td><?php //echo $fila[9];?></td>
											Signo
										</tr>
									</tbody>
									
								</table>
							</div>
						</div>
					</div>
					
					<div class="col">
						<div class="collapse multi-collapse" id="collapse"> <!--<?php //echo $f['id'];?>-->
							<div class="card card-body">
								<table class="table table-dark">
									<thead>
										<h4>PEDIDO</h4>
										<tr>
											<th>Id</th>
											<th>Fecha</th>
											<th>Nombre</th>
											<th>Precio</th>
											<th>Cantidad</th>
											<th>Talla</th>
											<th>Color</th>
											<th>SubTotal</th>
											<th>Status</th>
											<th>Paqueteria</th>
											<th>N°Seguimiento</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th><?php //echo $f2['id'];?> Id</th>
											<th><?php //echo $f2['id'];?> Fecha</th>
											<td><?php //echo $f2['nombre'];?> Nombre</td>
											<td>S/<?php //echo number_format($f2['precio'],2,'.','');?> Precio</td>
											<td><?php //echo $f2['cantidad'];?> Cantidad</td>
											<td><?php //echo $f2['talla'];?> Talla</td>
											<td><?php //echo $f2['color'];?> Color</td>
											<td>S/<?php //echo number_format($f2['subtotal'],2,'.','');?> Subtotal</td>
											<td><?php //echo $f['status'];?> Status</td>
											<td><?php //echo $f['paqueteria'];?> Paqueteria</td>
											<td><?php //echo $f['n_seguimiento'];?> n_seguimiento</td>
										</tr>
									</tbody>
									
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
	<!--=================================MODELO ELIMINAR PEDIDOS=================================-->
	<div class="modal fade" id="modalEliminarPedido" tabindex="-1" role="dialog" aria-labelledby="modalEliminarLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
		  <div class="modal-content">
			<form action="../php/insertarproducto.php" method="post" enctype="multipart/form-data">
			<div class="modal-header">
			  <h5 class="modal-title" id="modalEliminarLabel">Eliminar Pedido</h5>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
			<div class="modal-body">
			  ¿Desea eliminar el Pedido?

			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			  <button type="submit" class="btn btn-danger eliminar" data-dismiss="modal">Eliminar</button>
			</div>
			</form>
		  </div>
		</div>
	  </div>

<!--=================================MODELO EDITAR PEDIDOS=================================-->
		  <div class="modal fade" id="modalEditarPedido" tabindex="-1" role="dialog" aria-labelledby="modalEditarPedido" aria-hidden="true">
		<div class="modal-dialog" role="document">
		  <div class="modal-content">
			<form action="/pedido/editar" method="POST" enctype="multipart/form-data">
			<div class="modal-header">
			  <h5 class="modal-title" id="modalEditarPedido">Editar Pedido</h5>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
			<div class="modal-body">
			  <input type="hidden" id="idEdit" name="id">
			  <!--<div class="form-group">
				<label for="id_transaccion">IdTransacción</label>
				<input type="text" name="id_transaccion" placeholder="IdTransacción" id="id_transaccion" class="form-control" required>
			  </div>-->
			  <div class="form-group">
				<label for="status">Estado (Completado)</label>
				<input type="checkbox" name="status" placeholder="Estado" id="status"  required >
			  </div>
			  <div class="form-group">
				<label for="paqueteria">Paqueteria</label>
				<input type="text" name="paqueteria" id="paqueteria" placeholder="Paqueteria" class="form-control">
			  </div>
			  <div class="form-group">
				<label for="cod_Rastreo">CodigoRastreo</label>
				<input type="text" name="cod_Rastreo" placeholder="Codigo Rastreo" id="cod_Rastreo" class="form-control" required>
			  </div>
			  {{csrf_field()}}

			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			  <button type="submit" class="btn btn-primary editar">Guardar</button>
			</div>
			</form>
		  </div>
		</div>
	  </div>
</div>



<script>
	$(document).ready(function(){
	  var idEliminar= -1;
	  var idEditar=-1;
	  var fila;
	  $(".btnEliminar").click(function(){
		idEliminar= $(this).data('id');
		fila=$(this).parent('td').parent('tr');
	  });
	  $(".eliminar").click(function(){
		$.ajax({
		  url: '../php/eliminarproducto.php',
		  method:'POST',
		  data:{
			id:idEliminar
		  }
		}).done(function(res){
		  $(fila).fadeOut(1000);
		});
	  });
	  $(".btnEditar").click(function(){
		let f = $(this).data('completado');
		var idEditar=f.split('/')[0];
		var nombre=f.split('/')[1];
		var descripcion=$(this).data('paq');
		var inventario=$(this).data('codigor');
		$("#status").checked(nombre);
		$("#paqueteria").val(descripcion);
		$("#cod_Rastreo").val(inventario);
		$("#idEditar").val(idEditar);

	  });
	});
  </script>
</body>
</html>