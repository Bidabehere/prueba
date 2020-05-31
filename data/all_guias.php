<?php 
    require_once('../class/Guia.php');
    $guias = $guia->all_guias();
    // echo '<pre>';
    //     print_r($items);
    // echo '</pre>';
 ?>
<br />
<div class="table-responsive">
        <table id="myTable-item" class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Descripción</th>
                    <th>Nro. Guia</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($guias as $it): ?>
                    <tr align="center">
                        <td align="left"><?php echo $it['id_guia']; ?></td>
                        <td align="left"><?php echo $it['descripcion']; ?></td>
                        <td align="left"><?php echo $it['numero_guia']; ?></td>
                        
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
$guia->Disconnect();
 ?>