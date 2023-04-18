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
  if( $SuperUser["sede"]=="1"){ $tableActi="activity_tasachim";$tabla_sed="sede_tasachimbote";}
  if( $SuperUser["sede"]=="2") {$tableActi="activity_samanco";$tabla_sed="sede_samanco";}
  if( $SuperUser["sede"]=="3") {$tableActi="activity_supe";$tabla_sed="sede_supe";}
  if( $SuperUser["sede"]=="4"){ $tableActi="activity_vegueta";$tabla_sed="sede_vegueta";}
  if( $SuperUser["sede"]=="5") {$tableActi="activity_callao";$tabla_sed="sede_callao";}
  if( $SuperUser["sede"]=="6") {$tableActi="activity_pisco";$tabla_sed="sede_pisco";}
  if( $SuperUser["sede"]=="7") {$tableActi="activity_atico";$tabla_sed="sede_atico";}
  if( $SuperUser["sede"]=="8") {$tableActi="activity_matarani";$tabla_sed="sede_matarani";}
  if( $SuperUser["sede"]=="9") {$tableActi="activity_exalmar_chim";$tabla_sed="sede_exalmar_chim";}
  if( $SuperUser["sede"]=="10") {$tableActi="activity_exalmar_mala";$tabla_sed="sede_exalmar_mala";}

  $categorieDelete = find_by_id($tabla_sed,(int)$_GET['id']);
  if(!$categorieDelete)
  {
    $session->msg("d","ID de la ruma falta.");
    redirect('almacen.php');
  }

  $delete_idDelete = delete_by_id($tabla_sed,(int)$categorieDelete['id']);
  if($delete_idDelete)
  {
    $session->msg("s","Ruma eliminada");
    redirect('almacen.php');
  } else {
    $session->msg("d","Eliminación falló");
    redirect('almacen.php');
  }
?>