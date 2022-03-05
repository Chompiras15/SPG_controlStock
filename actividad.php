<?php
  $page_title = 'Almacen-Chimbote';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(1);
  $all_actividades = find_all_sale();
  $all_actividades = find_all('activity_tasachim')
?>

</div>
<?php include_once('layouts/footer.php'); ?>
<?php
 if(isset($_POST['add_actividad'])){
   $req_field = array('nameActivity', 'details', 'date');
   validate_fields($req_field);
   $act_name = remove_junk($db->escape($_POST['nameActivity']));
   $act_details = remove_junk($db->escape($_POST['details']));
   $act_fecha = remove_junk($db->escape($_POST['fecha']));
   $date   = make_date();

   if(empty($errors)){
      $sql  = "INSERT INTO activity_tasachim (";
     $sql .=" nameActivity,details,fecha,date";
     $sql .=") VALUES (";
     $sql .=" '{$act_name}', '{$act_details}', '{$act_fecha}', '{$date}'";
     $sql .=")";
     $sql .=" ON DUPLICATE KEY UPDATE nameActivity='{$act_name}'";

      if($db->query($sql)){
        $session->msg("s", "Actividad agregada exitosamente.");
        redirect('actividad.php',false);
      } else {
        $session->msg("d", "Lo siento, registro falló");
        redirect('actividad.php',false);
      }
   } else {
     $session->msg("d", $errors);
     redirect('actividad.php',false);
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
    <div class="col-md-10">
    <div class="panel panel-default">
      <div class="panel-heading">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>Lista de Actividades</span>

       </strong>
       <a href="add_actividad.php" class="btn btn-info pull-right">Agregar Actividad</a>
      </div>
        <div class="panel-body">
          <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th class="text-center" style="width: 50px;">Id</th>
                    <th class="text-center" style="width: 100px;">Actividad</th>
                    <th class="text-center" style="width: 100px;">Detalle</th>
                    <th class="text-center" style="width: 100px;">Fecha</th>
                    <th class="text-center" style="width: 100px;">Acciones</th>
                </tr>
            </thead>
            <tbody>
              <?php foreach ($all_actividades as $act):?>
                <tr>
                    <td class="text-center"><?php echo count_id();?></td>
                    <td><?php echo remove_junk(ucfirst($act['nameActivity'])); ?></td>
                    <td><?php echo remove_junk(ucfirst($act['details'])); ?></td>
                    <td><?php echo remove_junk(ucfirst($act['fecha'])); ?></td>
                    <td class="text-center">
                      <div class="btn-group">
                        <a href="edit_actividad.php?id=<?php echo (int)$act['id'];?>"  class="btn btn-xs btn-warning" data-toggle="tooltip" title="Editar">
                          <span class="glyphicon glyphicon-edit"></span>
                        </a>
                        <a href="delete_actividad.php?id=<?php echo (int)$act['id'];?>"  class="btn btn-xs btn-danger" data-toggle="tooltip" title="Eliminar">
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
