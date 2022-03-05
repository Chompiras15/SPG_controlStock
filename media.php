<?php
  $page_title = 'Almacen-Chimbote';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(1);
  
  $all_embarques = find_all('emb_tasachim')
?>
<?php
 if(isset($_POST['add_emb'])){
   $req_field = array('cod_contrato', 'cant_out', 'cod_ruma', 'date_out', 'supervisor');
   validate_fields($req_field);
   $cod_contrato = remove_junk($db->escape($_POST['cod_contrato']));
   $cant_out = remove_junk($db->escape($_POST['cant_out']));
   $cod_ruma = remove_junk($db->escape($_POST['cod_ruma']));
   $date_out = remove_junk($db->escape($_POST['date_out']));
   $supervisor = remove_junk($db->escape($_POST['supervisor']));
 

   if(empty($errors))
   {
      $sql  = "INSERT INTO emb_tasachim (";
     $sql .=" cod_contrato,cant_out,cod_ruma,date_out,supervisor";
     $sql .=") VALUES (";
     $sql .=" '{$cod_contrato}', '{$cant_out}', '{$cod_ruma}', '{$date_out}', '{$supervisor}'";
     $sql .=")";
     $sql .=" ON DUPLICATE KEY UPDATE cod_contrato='{$cod_contrato}'";

      if($db->query($sql)){
        $session->msg("s", "Ruma agregada exitosamente.");
        redirect('media.php',false);
      } else {
        $session->msg("d", "Lo siento, registro falló");
        redirect('media.php',false);
      }
   } else {
     $session->msg("d", $errors);
     redirect('media.php',false);
   }
 }
?>
<?php include_once('layouts/header.php'); ?>

  <div class="row">
     <div class="col-md-12">
       <?php echo display_msg($msg); ?>
     </div>
  </div>
   <div class="row">
    <div class="col-md-5">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <span class="glyphicon glyphicon-th"></span>
            <span>Agregar Embarcación</span>
         </strong>
        </div>
        <div class="panel-body">
          <form method="post" action="media.php">
            <div class="form-group">
                <input type="text" class="form-control" name="cod_contrato" placeholder="Cod_Contrato" required>
                <input type="text" class="form-control" name="cant_out" placeholder="Cantidad " required>
                <input type="text" class="form-control" name="cod_ruma" placeholder="Codigo Ruma" required>
                <input type="date" class="form-control" name="date_out" placeholder="Fecha de Salida" required>
                <input type="text" class="form-control" name="supervisor" placeholder="Supervisor" required>
      
            </div>
            <button type="submit" name="add_emb" class="btn btn-primary">Agregar Embarque</button>
        </form>
        </div>
      </div>
    </div>
    <div class="col-md-7">
    <div class="panel panel-default">
      <div class="panel-heading">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>Lista de Embarcaciones</span>
       </strong>
      </div>
        <div class="panel-body">
          <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th class="text-center" style="width: 50px;">Id</th>
                    <th>Cod_Contrato</th>
                    <th class="text-center" style="width: 50px;">cantidad</th>
                    <th>Cod_ruma</th>
                    <th class="text-center" style="width: 50px;">fecha</th>
                    <th>supervisor</th>
                  
                </tr>
            </thead>
            <tbody>
              <?php foreach ($all_embarques as $embar):?>
                <tr>
                    <td class="text-center"><?php echo count_id();?></td>
                    <td><?php echo remove_junk(ucfirst($embar['cod_contrato'])); ?></td>
                    <td><?php echo remove_junk(ucfirst($embar['cant_out'])); ?></td>
                    <td><?php echo remove_junk(ucfirst($embar['cod_ruma'])); ?></td>
                    <td><?php echo remove_junk(ucfirst($embar['date_out'])); ?></td>
                    <td><?php echo remove_junk(ucfirst($embar['supervisor'])); ?></td>
                   
                  
                    <td class="text-center">
                      <div class="btn-group">
                        <a href="edit_embarcaciones.php?id=<?php echo (int)$embar['id'];?>"  class="btn btn-xs btn-warning" data-toggle="tooltip" title="Editar">
                          <span class="glyphicon glyphicon-edit"></span>
                        </a>
                        <a href="delete_media.php?id=<?php echo (int)$embar['id'];?>"  class="btn btn-xs btn-danger" data-toggle="tooltip" title="Eliminar">
                          <span class="glyphicon glyphicon-trash"></span>
                        </a>
                      </div>
                    </td>

                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
       </div>
    </div>
    </div>
   </div>
  </div>
  <?php include_once('layouts/footer.php'); ?>
