<div class="modal fade" id="modal-product">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Modal title</h4>
			</div>
			<div class="modal-body">
			
				<form class="form-horizontal" role="form" id="form-product">
				<input type="hidden" id="item-id">
				  <div class="form-group">
				    <label class="control-label col-sm-3" for="">Nombre:</label>
				    <div class="col-sm-9">
				      <input type="text" maxlength="50" class="form-control" id="item-nombre" placeholder="Ingresa el nombre" required="" autofocus="">
				    </div>
				  </div>
				  <div class="form-group">
				    <label class="control-label col-sm-3" for="">Total:</label>
				    <div class="col-sm-9">
				      <input type="number" maxlength="50" class="form-control" id="item-cantidad" placeholder="Ingresa la cantidad" required="" autofocus="">
					  <input type="text" maxlength="50" class="form-control" id="item-id-producto"  autofocus="">
					</div>
				  </div>
			
				  <div class="form-group"> 
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" id="submit-product" value="add" class="btn btn-default">Guardar datos
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
