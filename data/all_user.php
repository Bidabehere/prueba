<?php 
    require_once('../class/User.php');
    $users = $user->all_user();
    
 ?>
<br />
<div class="table-responsive">
        <table id="myTable-item" class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Documento</th>
					<th>
                        <center>Acciones</center>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($users as $it): ?>
                    <tr align="center">
                        <td align="left"><?php echo $it['nombre']; ?></td>
                        <td align="left"><?php echo $it['apellido']; ?></td>
                        <td align="left"><?php echo $it['documento']; ?></td>
                        <td>
                           <center>
                               <button onclick="editModalUser('<?php echo $it['id_usuarios']; ?>');" type="button" class="btn btn-warning btn-xs">Editar
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
$user->Disconnect();
 ?>