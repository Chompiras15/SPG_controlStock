<?php
  $page_title = 'Editar Embarcaciones';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(1);
?>
<?php
  //Display all catgories.
  $categorie = find_by_id('emb_tasachim',(int)$_GET['id']);
  if(!$categorie){
    $session->msg("d","Missing Embarcaciones id.");
    redirect('media.php');
  }
?>

<?php
if(isset($_POST['edit_emb']))
{
    $req_field = array('cod_contrato', 'cant_out', 'cod_ruma', 'supervisor');
  validate_fields($req_field);
  $cod_contrato = remove_junk($db->escape($_POST['cod_contrato']));
  $cant_out = remove_junk($db->escape($_POST['cant_out']));
  $cod_ruma = remove_junk($db->escape($_POST['cod_ruma']));
  $supervisor = remove_junk($db->escape($_POST['supervisor']));
  $date=make_date();
  /**<var>$cat_name = remove_junk($db->escape($_POST['categorie-name']));
  $cat_name = remove_junk($db->escape($_POST['categorie-name']));</var>*/
  if(empty($errors)){
    $sql   = "UPDATE emb_tasachim SET";
    $sql  .=" cod_contrato ='{$cod_contrato}', cant_out ='{$cant_out}',";
    $sql  .=" cod_ruma ='{$cod_ruma}',date_out ='{$date}', supervisor ='{$supervisor}'";
       $sql .= " WHERE id='{$categorie['id']}'";
     $result = $db->query($sql);
     if($result && $db->affected_rows() === 1) {
       $session->msg("s", "Categoría actualizada con éxito.");
       redirect('media.php',false);
     } else {
       $session->msg("d", "Lo siento, actualización falló.");
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
   <div class="col-md-5">
     <div class="panel panel-default">
       <div class="panel-heading">
         <strong>
           <span class="glyphicon glyphicon-th"></span>
           <span>Editando <?php echo remove_junk(ucfirst($categorie['cod_contrato']));?></span>
           <span>Editando <?php echo remove_junk(ucfirst($categorie['cant_out']));?></span>
           <span>Editando <?php echo remove_junk(ucfirst($categorie['cod_ruma']));?></span>
           <span>Editando <?php echo remove_junk(ucfirst($categorie['date_out']));?></span>
           <span>Editando <?php echo remove_junk(ucfirst($categorie['supervisor']));?></span>
  
        </strong>
       </div>
       <div class="panel-body">
         <form method="post" action="edit_embarcaciones.php?id=<?php echo (int)$categorie['id'];?>">
           <div class="form-group">
                <input type="text" class="form-control" name="cod_contrato" placeholder="Cod_Contrato" value="<?php echo remove_junk(ucfirst($categorie['cod_contrato']));?>">
                <input type="text" class="form-control" name="cant_out" placeholder="Cantidad " value="<?php echo remove_junk(ucfirst($categorie['cant_out']));?>">
                <input type="text" class="form-control" name="cod_ruma" placeholder="Codigo Ruma" value="<?php echo remove_junk(ucfirst($categorie['cod_ruma']));?>" >
                <input type="text" class="form-control" name="supervisor" placeholder="Supervisor" value="<?php echo remove_junk(ucfirst($categorie['supervisor']));?>">
           </div>
           <button type="submit" name="edit_emb" class="btn btn-primary">Actualizar Embarcaciones</button>
       </form>
       </div>
     </div>
   </div>
</div>



<?php include_once('layouts/footer.php'); ?>
