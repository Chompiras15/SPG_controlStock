<?php
  $page_title = 'Editar Actividad';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(1);
?>
<?php
  //Display all catgories.
  $activity = find_by_id('activity_tasachim',(int)$_GET['id']);
  if(!$activity){
    $session->msg("d","No se encontro Actividad id.");
    redirect('actividad.php');
  }
?>

<?php
if(isset($_POST['edit_actividad'])){
  $req_field = array('nameActivity', 'details', 'fecha');
  validate_fields($req_field);
  $act_name = remove_junk($db->escape($_POST['nameActivity']));
  $act_details = remove_junk($db->escape($_POST['details']));
  $act_fecha = remove_junk($db->escape($_POST['fecha']));
  $date=make_date();
  /**<var>$cat_name = remove_junk($db->escape($_POST['categorie-name']));
  $cat_name = remove_junk($db->escape($_POST['categorie-name']));</var>*/
  if(empty($errors)){
    $sql   = "UPDATE activity_tasachim SET";
    $sql  .=" nameActivity ='{$act_name}', details ='{$act_details}',";
    $sql  .=" fecha ='{$act_fecha}',date ='{$date}'";
       $sql .= " WHERE id='{$activity['id']}'";
     $result = $db->query($sql);
     if($result && $db->affected_rows() === 1) {
       $session->msg("s", "Actividad actualizada con éxito.");
       redirect('actividad.php',false);
     } else {
       $session->msg("d", "Lo siento, actualización falló.");
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
   <div class="col-md-5">
     <div class="panel panel-default">
       <div class="panel-heading">
         <strong>
           <span class="glyphicon glyphicon-th"></span>
           <span>Editando <?php echo remove_junk(ucfirst($activity['nameActivity']));?></span>
           <span>Editando <?php echo remove_junk(ucfirst($activity['details']));?></span>
           <span>Editando <?php echo remove_junk(ucfirst($activity['fecha']));?></span>
           
        </strong>
       </div>
       <div class="panel-body">
         <form method="post" action="edit_actividad.php?id=<?php echo (int)$activity['id'];?>">
           <div class="form-group">
               <input type="text" class="form-control" name="nameActivity" value="<?php echo remove_junk(ucfirst($activity['nameActivity']));?>">
               <input type="text" class="form-control" name="details" value="<?php echo remove_junk(ucfirst($activity['details']));?>">
               <input type="date" class="form-control" name="fecha" value="<?php echo remove_junk(ucfirst($activity['fecha']));?>">

           </div>
           <button type="submit" name="edit_actividad" class="btn btn-primary">Actualizar Actividad</button>
       </form>
       </div>
     </div>
   </div>
</div>



<?php include_once('layouts/footer.php'); ?>
