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
  page_require_level(2);
  if( $SuperUser["sede"]=="T-Chimbote") $table="sede_tasachimbote";
  if( $SuperUser["sede"]=="T-Samanco") $table="sede_samanco";
  if( $SuperUser["sede"]=="T-Supe") $table="sede_supe";
  if( $SuperUser["sede"]=="T-Vegueta") $table="sede_vegueta";
  if( $SuperUser["sede"]=="T-Callao") $table="sede_callao";
  if( $SuperUser["sede"]=="T-Pisco") $table="sede_pisco";
  if( $SuperUser["sede"]=="T-Atico") $table="sede_atico";
  if( $SuperUser["sede"]=="T-Matarani") $table="sede_matarani";
  if( $SuperUser["sede"]=="E-Chimbote") $table="sede_exalmar_chim";
  if( $SuperUser["sede"]=="E-Chicama") $table="sede_exalmar_mala";
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
<<<<<<< HEAD
if(isset($_POST['edit_cat']))
{

  if( $SuperUser["sede"]=="E-Chimbote") $req_field = array('sector', 'cod_ruma', 'cant_saco', 'date_producc', 'date_vencimiento', 'calidad', 'nicho','observation','almacen');
  else $req_field = array('sector', 'cod_ruma', 'cant_saco', 'date_producc', 'date_vencimiento', 'calidad', 'nicho');
 
=======
if(isset($_POST['edit_cat'])){
  $req_field = array('sector', 'cod_ruma', 'cant_saco', 'date_producc', 'date_vencimiento', 'calidad', 'nicho');
>>>>>>> parent of bf7ff50 (excel, print pdf)
  validate_fields($req_field);

  $cat_sector = remove_junk($db->escape($_POST['sector']));
  $cat_ruma = remove_junk($db->escape($_POST['cod_ruma']));
  $cat_saco = remove_junk($db->escape($_POST['cant_saco']));
  $cat_producc = remove_junk($db->escape($_POST['date_producc']));
  $cat_caduca = remove_junk($db->escape($_POST['date_vencimiento']));
  $cat_calidad = remove_junk($db->escape($_POST['calidad']));
  $cat_nicho = remove_junk($db->escape($_POST['nicho']));
<<<<<<< HEAD
  $cat_observation = remove_junk($db->escape($_POST['observation']));
  //if( $SuperUser["sede"]=="E-Chimbote")  $cat_almacen = remove_junk($db->escape($_POST['almacen']));
  
=======
  $date=make_date();
  /**<var>$cat_name = remove_junk($db->escape($_POST['categorie-name']));
  $cat_name = remove_junk($db->escape($_POST['categorie-name']));</var>*/
>>>>>>> parent of bf7ff50 (excel, print pdf)
  if(empty($errors))
  {
    if($cat_saco<1001)
    {
<<<<<<< HEAD
          $sql   = "UPDATE $table SET";
          $sql  .=" sector ='{$cat_sector}', cod_ruma ='{$cat_ruma}',";
          $sql  .=" cant_saco ='{$cat_saco}',date_producc ='{$cat_producc}', date_vencimiento ='{$cat_caduca}', calidad ='{$cat_calidad}',nicho='{$cat_nicho}',observation='{$cat_observation}'";
            $sql .= " WHERE id='{$categorie['id']}'";
          $result = $db->query($sql);
          
     
      if($result && $db->affected_rows() === 1) {
        $session->msg("s", "Categoría actualizada con éxito.");
        redirect('categorie.php',false);
      } else {
        $session->msg("d", "Lo siento, actualización falló.");
        redirect('categorie.php',false);
      }
       
=======

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
>>>>>>> parent of bf7ff50 (excel, print pdf)

    }else{
      $session->msg("d", "Excedió el límite de cantidad.");
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
<<<<<<< HEAD
                <input type="text" class="form-control" name="observation" value="<?php echo remove_junk(ucfirst($categorie['observation']));?>">
                
=======
>>>>>>> parent of bf7ff50 (excel, print pdf)
           </div>
           <button type="submit" name="edit_cat" class="btn btn-primary">Actualizar Ruma</button>
       </form>
       </div>
     </div>
   </div>
</div>



<?php include_once('layouts/footer.php'); ?>
