<?php 
    require_once('../class/Producto.php');
    $productos = $producto->all_productos();
    
 ?>
<br />
<div class="table-responsive">
        <table id="myTable-item" class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Total</th>
					<th>
                        <center>Acciones</center>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($productos as $it): ?>
                    <tr align="center">
                        <td align="left"><?php echo $it['id_producto']; ?></td>
                        <td align="left"><?php echo $it['nombre_producto']; ?></td>
                        <td align="left"><?php echo $it['total_producto']; ?></td>
                        <td>
                           <center>
                               <button onclick="editModalProduct('<?php echo $it['id_producto']; ?>');" type="button" class="btn btn-warning btn-xs">Editar
                                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                </button>
                           </center>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
</div>


<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

<!-- for the datatable of employee -->
<script type="text/javascript">
    $(document).ready(function() {
        $('#myTable-item').DataTable();
    });
</script>

<?php 
$producto->Disconnect();
 ?>