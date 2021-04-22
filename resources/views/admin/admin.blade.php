<!DOCTYPE html>
<html>
<head>
	<title>Admin FabrizioSurferWinn</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1-0, minium-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/admin/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<script src="/static/js/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    @include('admin/menu')
	<div class="col-12">



<!--=================================TABLA PRODUCTOS======================================================-->
         <div>
         	<h1>Tabla Productos</h1>
         </div>
         <div class="col-12">
         	<table class="table">
          <thead>
            <tr>
              <th>Id</th>
              <th>Nombre</th>
              <th>Categorias</th>
              <th>Descripcion</th>
              <th>Precio</th>
              <th>Inventario</th>
              <th>Talla</th>
              <th>Color</th>
              <th>Opciones</th>
            </tr>
            <thead>
              <tbody>
                @foreach($prod as $p)
                  <tr>
                    <td>{{$p->id}}</td>
                    <td>
                      <img src="{{$p->imagen1}}" width="50px" height="50px" alt="">
                      <img src="{{$p->imagen2}}" width="50px" height="50px" alt="">
                      <img src="{{$p->imagen3}}" width="50px" height="50px" alt="">
                      <img src="{{$p->imagen4}}" width="50px" height="50px" alt="">
                      {{$p->nombre}}
                    </td>
                    <td>{{$p->categoria}}</td>
                    <td>...descripcion...</td>
                    <td>S/{{$p->precio}}</td>
                    <td>{{$p->inventario}}</td>
                    <td>{{$p->talla}}</td>
                    <td>{{$p->color}}</td>
                    <td>
                      <button class="btn btn-primary btn-small btnEditar"
                      data-id="{{$p->id}}"
                      data-nombre="{{$p->nombre}}"
                      data-descripcion="{{$p->descripcion}}"
                      data-inventario="{{$p->inventario}}"
                      data-talla="{{$p->talla}}"
                      data-color="{{$p->color}}"
                      data-precio="{{$p->precio}}"
                      data-toggle="modal" data-target="#modalEditarProducto">
                        <i class="fa fa-edit"></i>
                      </button>
                      <button class="btn btn-danger btn-small btnEliminar"
                      data-id="{{$p->id}}" data-toggle="modal" data-target="#modalEliminar">
                        <i class="fa fa-trash"></i>
                      </button>
                    </td>
                </tr>
                @endforeach
              </tbody>
            </thead>
          </thead>
        </table>

<!--=================================MODELO EDITAR PRODUCTOS=================================-->
		    <div class="modal fade" id="modalEditarProducto" tabindex="-1" role="dialog" aria-labelledby="modalEditarProducto" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <form action="../php/editarproducto.php" method="POST" enctype="multipart/form-data">
		      <div class="modal-header">
		        <h5 class="modal-title" id="modalEditarProducto">Editar Producto</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <input type="hidden" id="idEdit" name="id">
		        <div class="form-group">
		          <label for="nombreEdit">Nombre</label>
		          <input type="text" name="nombre" placeholder="nombre" id="nombreEdit" class="form-control" required>
		        </div>
		        <div class="form-group">
		          <label for="categoria">Categorias</label>
		          <select name="categoria" id="categoria" class="form-control">
		            <option value="1">Polo con Mangas</option>
		          </select>
		        </div>
		        <div class="form-group">
		          <label for="descripcionEdit">Descripcion</label>
		          <input type="text" name="descripcion" placeholder="descripcion" id="descripcionEdit" class="form-control" required>
		        </div>
		        <div class="form-group">
		          <label for="imagen">Imagen Principal</label>
		          <input type="file" name="imagen" id="imagen" class="form-control">
		        </div>
		        <div class="form-group">
		          <label for="imagen2">Imagen2</label>
		          <input type="file" name="imagen2" id="imagen2" class="form-control">
		        </div>
		        <div class="form-group">
		          <label for="imagen3">Imagen3</label>
		          <input type="file" name="imagen3" id="imagen3" class="form-control">
		        </div>
		        <div class="form-group">
		          <label for="imagen4">Imagen4</label>
		          <input type="file" name="imagen4" id="imagen4" class="form-control">
		        </div>
		        <div class="form-group">
		          <label for="precioEdit">Precio</label>
		          <input type="number" name="precio" min="0" placeholder="precio" id="precioEdit" class="form-control" required>
		        </div>
		        <div class="form-group">
		          <label for="inventarioEdit">Inventario</label>
		          <input type="text" name="inventario" placeholder="inventario" id="inventarioEdit" class="form-control" required>
		        </div>
		        <div class="form-group">
		          <label for="tallaEdit">Talla</label>
		          <input type="text" name="talla" placeholder="talla" id="tallaEdit" class="form-control" required>
		        </div>
		        <div class="form-group">
		          <label for="colorEdit">Color</label>
		          <input type="text" name="color" placeholder="color" id="colorEdit" class="form-control" required>
		        </div>

		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-primary editar">Guardar</button>
		      </div>
		      </form>
		    </div>
		  </div>
		</div>
<!--=================================MODELO ELIMINAR PRODUCTOS=================================-->
		<div class="modal fade" id="modalEliminar" tabindex="-1" role="dialog" aria-labelledby="modalEliminarLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <form action="../php/insertarproducto.php" method="post" enctype="multipart/form-data">
		      <div class="modal-header">
		        <h5 class="modal-title" id="modalEliminarLabel">Eliminar Producto</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        ¿Desea eliminar el producto?

		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-danger eliminar" data-dismiss="modal">Eliminar</button>
		      </div>
		      </form>
		    </div>
		  </div>
		</div>
		<br>

<!--=================================TABLA CATEGORIAS=================================-->
	<div>
         	<h1>Tabla Categorias</h1>
         </div>
         <div class="col-12">
         	<table class="table">
          <thead>
            <tr>
              <th>id</th>
              <th>Nombre</th>
              <th>Opciones</th>
            </tr>
            <thead>
              <tbody>
                  <tr>
                    <td><?php //echo $f['id'];?> id</td>
                    <td>
                      <?php //echo $f['nombre'];?> nombre
                    </td>
                    <td>
                      <button class="btn btn-primary btn-small btnEditar"
                      data-toggle="modal" data-target="#modalEditarCategoria">
                        <i class="fa fa-edit"></i>
                      </button>
                      <button class="btn btn-danger btn-small btnEliminar"
                      data-id="<?php //echo $f['id'];?>" data-toggle="modal" data-target="#modalEliminarCategoria">
                        <i class="fa fa-trash"></i>
                      </button>
                    </td>
                </tr>
              </tbody>
            </thead>
          </thead>
        </table>
<!--=================================MODELO EDITAR CATEGORIAS =================================-->
 	<div class="modal fade" id="modalEditarCategoria" tabindex="-1" role="dialog" aria-labelledby="modalEditarCategoria" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <form action="javascript:void(0);" method="POST" enctype="multipart/form-data">
		      <div class="modal-header">
		        <h5 class="modal-title" id="modalEditarCategoria">Editar Categoria</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <input type="hidden" id="idEdit" name="id">
		        <div class="form-group">
		          <label for="id_catego">Id</label>
		          <input type="text" name="id_catego" placeholder="Id" id="id_catego" class="form-control" required>
		        </div>
		        <div class="form-group">
		          <label for="nombre">Nombre</label>
		          <input type="text" name="nombre" placeholder="Nombre" id="nombre" class="form-control" required>
		        </div>

		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-primary editar">Guardar</button>
		      </div>
		      </form>
		    </div>
		  </div>
		</div>
<!--=================================MODELO ELIMINAR CATEGORIAS =================================-->
	<div class="modal fade" id="modalEliminarCategoria" tabindex="-1" role="dialog" aria-labelledby="modalEliminarLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <form action="../php/insertarproducto.php" method="post" enctype="multipart/form-data">
		      <div class="modal-header">
		        <h5 class="modal-title" id="modalEliminarLabel">Eliminar Categoria</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        ¿Desea eliminar la Categoria?

		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-danger eliminar" data-dismiss="modal">Eliminar</button>
		      </div>
		      </form>
		    </div>
		  </div>
		</div>
<!--==================================================================-->
    </div>
</div>
<br>










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
          url: '/producto/remove',
          method:'POST',
          data:{
            id:idEliminar
          }
        }).done(function(res){
          $(fila).fadeOut(1000);
        });
      });
      $(".btnEditar").click(function(){
        idEditar=$(this).data('id');
        var nombre=$(this).data('nombre');
        var descripcion=$(this).data('descripcion');
        var inventario=$(this).data('inventario');
        var talla=$(this).data('talla');
        var color=$(this).data('color');
        var precio=$(this).data('precio');
        $("#nombreEdit").val(nombre);
        $("#descripcionEdit").val(descripcion);
        $("#inventarioEdit").val(inventario);
        $("#tallaEdit").val(talla);
        $("#colorEdit").val(color);
        $("#precioEdit").val(precio);
        $("#idEdit").val(idEditar);
      });
    });
  </script>

</body>
</html>