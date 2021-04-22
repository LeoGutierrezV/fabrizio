
<!--=================================TABLA CUPONES======================================================-->
<div>
    <h1>Tabla Cupones</h1>
 </div>
 <table class="table">
           <thead>
             <tr>
               <th>Id</th>
               <th>Codigo</th>
               <th>Status</th>
               <th>Tipo</th>
               <th>Valor</th>
               <th>Fecha de Vencimiento</th>
               <th>Opciones</th>
             </tr>
             <thead>
               <tbody>
                   <tr>
                     <td><?php //echo $f['id'];?>Id</td>
                     <td>
                       <?php //echo $f['codigo'];?>Codigo
                     </td>
                     <td><?php //echo $f['status'];?> Status</td>
                     <td><?php //echo $f['tipo'];?> Tipo</td>
                     <td>S/<?php //echo number_format($f['valor'],2,'.','');?> Valor</td>
                     <td><?php //echo $f['fecha_vencimiento'];?> fecha Vencimiento</td>
                     <td>
                         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCupones">
                               <i class="fa fa-plus"></i>
                         </button>
                           <button class="btn btn-danger btn-small btnEliminar" data-id="<?php //echo $f['id'];?>" data-toggle="modal" data-target="#modalEliminarCupones">
                             <i class="fa fa-trash"></i>
                           </button>
                     </td>
                 </tr>
               </tbody>
             </thead>
           </thead>
         </table>
 
<!--=================================MODELO AGREGAR CUPONES=================================-->
<div class="modal fade" id="exampleModalCupones" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="../php/insertarcupon.php" method="POST" enctype="multipart/form-data">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear Cupon</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="nombre">Codigo</label>
          <div class="row">
            <div class="col-9">
              <input type="text" name="codigo" placeholder="codigo" id="codigo" class="form-control" required>
            </div>
            <div class="col-3">
              <button class="btn btn-primary btn-small col-12" id="generar">Generar</button>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="tipo">Tipo</label>
          <select name="tipo" id="tipo" class="form-control">
            <option value="moneda">Modeda</option>
            <option value="porcentaje">Porcentaje</option>
          </select>
        </div>
        <div class="form-group">
          <label for="valor">Valor del Cupon</label>
          <input type="number" name="valor" min="0" placeholder="valor" id="valor" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="fecha">Fecha de Vencimiento</label>
          <input type="date" name="fecha" min="0" placeholder="fecha" id="fecha" class="form-control" required>
        </div>
        

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!--=================================MODELO ELIMINAR CUPONES=================================-->

<div class="modal fade" id="modalEliminarCupones" tabindex="-1" role="dialog" aria-labelledby="modalEliminarLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="../php/insertarproducto.php" method="post" enctype="multipart/form-data">
      <div class="modal-header">
        <h5 class="modal-title" id="modalEliminarLabel">Eliminar Cupon</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ¿Desea eliminar el Cupon?

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