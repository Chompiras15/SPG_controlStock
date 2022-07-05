<!--   
 ====================================================================
        SGP - BUSINESS ( JHONATAN LARA && ABRAHAM VALVERDE)
 Descripción:Elimina Almacen
 Creado: 11/03/2022
 Chimbote Peru 
 ====================================================================
  
-->

<?php
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  $tableActi = "inspection";
  $SuperUser = current_user();
?>
<?php
  $categorieDelete = find_by_id($tableActi,(int)$_GET['id']);
  if(!$categorieDelete){
    $session->msg("d","ID de la Inspección falta.");
    redirect('inspection.php');
  }
?>
<?php
  $delete_idDelete = delete_by_id($tableActi,(int)$categorieDelete['id']);
  if($delete_idDelete){
      $session->msg("s","Inspección eliminada");
      redirect('inspection.php');
  } else {
      $session->msg("d","Eliminación falló");
      redirect('inspection.php');
  }
?>