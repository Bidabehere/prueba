<?php 
require_once('database/Database.php');
$db = new Database();
$sql = "SELECT *
		FROM productos
		ORDER BY nombre_producto ASC";
$productos = $db->getRows($sql);
;
 ?>
<div class="modal fade" id="modal-guia">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Modal title</h4>
			</div>
			<div class="modal-body">
			
				<form class="form-horizontal" role="form" id="form-guia">
				
				<div class="form-group">
				    <label class="control-label col-sm-3" for="">Producto:</label>
				    <div class="col-sm-9"> 
				      <select id="item-producto-guia" class="btn btn-default">
					  	<option ></option>
				      	<?php foreach($productos as $producto): ?>
				      		<option value="<?php echo $producto['id_producto']; ?>"><?php echo ucwords($producto['nombre_producto']); ?></option>
				      	<?php endforeach; ?>
				      </select>
				    </div>
				  </div>	 
				 
				  <div class="form-group">
				    <label class="control-label col-sm-3" for="">Cantidad</label>
				    <div class="col-sm-9">
				      <input type="number" maxlength="50" class="form-control" id="item-cantidad" placeholder="Ingresa la cantidad" required="" autofocus="">
				    </div>
				  </div>
				  <div class="form-group">
				    <label class="control-label col-sm-3" for="">Detalle</label>
				    <div class="col-sm-9">
				      <input type="text" maxlength="50" class="form-control" id="item-detalle" placeholder="Ingresa el detalle" required="" autofocus="">
				    </div>
				  </div>
				   <div class="form-group"> 
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" id="submit-guia" value="add" class="btn btn-default">Generar Guia
				      <span class="glyphicon glyphicon-save" aria-hidden="true"></span>
				      </button>
					  <button class="btn btn-default" data-dismiss="modal">Cancelar
				      <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
				      </button>
				    </div>
				  </div>
				</form>
				
			</div>
			<div class="modal-footer">
			</div>
		</div>
	</div>
</div>
<?php 
$db->Disconnect();
 ?>