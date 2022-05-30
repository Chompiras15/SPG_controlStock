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
  page_require_level(2);
  $tableActi = "";
  $SuperUser = current_user();

  if( $SuperUser["sede"]=="T-Callao") {$tableActi="activity_callao";$tabla_sed="sede_pnc_callao";}

?>
<?php
  $categorieDelete = find_by_id($tabla_sed,(int)$_GET['id']);
  if(!$categorieDelete){
    $session->msg("d","ID de la ruma falta.");
    redirect('pnc_almacen.php');
  }
?>
<?php
  $delete_idDelete = delete_by_id($tabla_sed,(int)$categorieDelete['id']);
  if($delete_idDelete){
      $session->msg("s","Ruma eliminada");
      redirect('pnc_almacen.php');
  } else {
      $session->msg("d","Eliminación falló");
      redirect('pnc_almacen.php');
  }
?>