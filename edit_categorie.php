<!--   
 ====================================================================
        SGP - BUSINESS ( JHONATAN LARA && ABRAHAM VALVERDE)
 Descripción:Edita Categoria
 Creado: 11/03/2022
 Chimbote Peru 
 ====================================================================
  
-->

<?php
  $page_title = 'Editar categoría';
  require_once('includes/load.php');
  $SuperUser = current_user();
  // Checkin What level user has permission to view this page
  page_require_level(1);
  if( $SuperUser["sede"]=="Chimbote") $table="sede_tasachimbote";
  if( $SuperUser["sede"]=="Atico") $table="sede_atico";
?>
<?php
  //Display all catgories.
  $categorie = find_by_id($table,(int)$_GET['id']);
  if(!$categorie){
    $session->msg("d","Missing categorie id.");
    redirect('categorie.php');
  }
?>

<?php
if(isset($_POST['edit_cat'])){
  $req_field = array('sector', 'cod_ruma', 'cant_saco', 'date_producc', 'date_vencimiento', 'calidad', 'nicho');
  validate_fields($req_field);
  $cat_sector = remove_junk($db->escape($_POST['sector']));
  $cat_ruma = remove_junk($db->escape($_POST['cod_ruma']));
  $cat_saco = remove_junk($db->escape($_POST['cant_saco']));
  $cat_producc = remove_junk($db->escape($_POST['date_producc']));
  $cat_caduca = remove_junk($db->escape($_POST['date_vencimiento']));
  $cat_calidad = remove_junk($db->escape($_POST['calidad']));
  $cat_nicho = remove_junk($db->escape($_POST['nicho']));
  $date=make_date();
  /**<var>$cat_name = remove_junk($db->escape($_POST['categorie-name']));
  $cat_name = remove_junk($db->escape($_POST['categorie-name']));</var>*/
  if(empty($errors))
  {
    $sql   = "UPDATE $table SET";
    $sql  .=" sector ='{$cat_sector}', cod_ruma ='{$cat_ruma}',";
    $sql  .=" cant_saco ='{$cat_saco}',date_producc ='{$cat_producc}', date_vencimiento ='{$cat_caduca}', calidad ='{$cat_calidad}',nicho='{$cat_nicho}',date_almacenamiento='{$date}'";
       $sql .= " WHERE id='{$categorie['id']}'";
     $result = $db->query($sql);
     if($result && $db->affected_rows() === 1) {
       $session->msg("s", "Categoría actualizada con éxito.");
       redirect('categorie.php',false);
     } else {
       $session->msg("d", "Lo siento, actualización falló.");
       redirect('categorie.php',false);
     }
  } else {
    $session->msg("d", $errors);
    redirect('categorie.php',false);
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
           <span>Editando <?php echo remove_junk(ucfirst($categorie['sector']));?></span>
           <span>Editando <?php echo remove_junk(ucfirst($categorie['cod_ruma']));?></span>
           <span>Editando <?php echo remove_junk(ucfirst($categorie['cant_saco']));?></span>
           <span>Editando <?php echo remove_junk(ucfirst($categorie['date_producc']));?></span>
           <span>Editando <?php echo remove_junk(ucfirst($categorie['date_vencimiento']));?></span>
           <span>Editando <?php echo remove_junk(ucfirst($categorie['calidad']));?></span>
           <span>Editando <?php echo remove_junk(ucfirst($categorie['nicho']));?></span>
        </strong>
       </div>
       <div class="panel-body">
         <form method="post" action="edit_categorie.php?id=<?php echo (int)$categorie['id'];?>">
           <div class="form-group">
               <input type="text" class="form-control" name="sector" value="<?php echo remove_junk(ucfirst($categorie['sector']));?>">
               <input type="text" class="form-control" name="cod_ruma" value="<?php echo remove_junk(ucfirst($categorie['cod_ruma']));?>">
               <input type="text" class="form-control" name="cant_saco" value="<?php echo remove_junk(ucfirst($categorie['cant_saco']));?>">
               <input type="date" class="form-control" name="date_producc" value="<?php echo remove_junk(ucfirst($categorie['date_producc']));?>">
               <input type="date" class="form-control" name="date_vencimiento" value="<?php echo remove_junk(ucfirst($categorie['date_vencimiento']));?>">
               <input type="text" class="form-control" name="calidad" value="<?php echo remove_junk(ucfirst($categorie['calidad']));?>">
                <input type="text" class="form-control" name="nicho" value="<?php echo remove_junk(ucfirst($categorie['nicho']));?>">
           </div>
           <button type="submit" name="edit_cat" class="btn btn-primary">Actualizar Ruma</button>
       </form>
       </div>
     </div>
   </div>
</div>



<?php include_once('layouts/footer.php'); ?>
