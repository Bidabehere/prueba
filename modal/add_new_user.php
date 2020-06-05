<?php 

 ?>
<div class="modal fade" id="modal-user">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Usuario</h4>
			</div>
			<div class="modal-body">
			
				<form class="form-horizontal" role="form" id="form-user">
				  <div class="form-group">
				    <label class="control-label col-sm-3" for="">Nombre:</label>
				    <div class="col-sm-9">
				      <input type="text" maxlength="50" class="form-control" id="item-nombre" placeholder="Ingresa el nombre" required="" autofocus="">
				    </div>
				  </div>
				  <div class="form-group">
				    <label class="control-label col-sm-3" for="">Apellido:</label>
				    <div class="col-sm-9">
				      <input type="text" maxlength="50" class="form-control" id="item-apellido" placeholder="Ingresa el apellido" required="" autofocus="">
				    </div>
				  </div>
				  <div class="form-group">
				    <label class="control-label col-sm-3" for="">Nro. documento:</label>
				    <div class="col-sm-9">
					<input type="number" maxlength="50" class="form-control" id="item-nrodocumento" placeholder="Ingresa nro documento" required="" autofocus="">
				    <input type="hidden" maxlength="50" class="form-control" id="item-id-usuario"  autofocus="">
				    </div>
				  </div>
				  <div class="form-group"> 
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" id="submit-user" value="add" class="btn btn-default">Guardar datos
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

<script>

</script>