<!--   
 ====================================================================
        SGP - BUSINESS ( JHONATAN LARA && ABRAHAM VALVERDE)
 Descripción:Elimina Actividades
 Creado: 11/03/2022
 Chimbote Peru 
 ====================================================================
  
-->
<?php
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(1);

  $tableActi = "";
  $SuperUser = current_user();
  if( $SuperUser["sede"]=="T-Chimbote"){ $tableActi="activity_tasachim";$tabla_sed="sede_tasachimbote";}
  if( $SuperUser["sede"]=="T-Samanco") {$tableActi="activity_samanco";$tabla_sed="sede_samanco";}
  if( $SuperUser["sede"]=="T-Supe") {$tableActi="activity_supe";$tabla_sed="sede_supe";}
  if( $SuperUser["sede"]=="T-Vegueta"){ $tableActi="activity_vegueta";$tabla_sed="sede_vegueta";}
  if( $SuperUser["sede"]=="T-Callao") {$tableActi="activity_callao";$tabla_sed="sede_callao";}
  if( $SuperUser["sede"]=="T-Pisco") {$tableActi="activity_pisco";$tabla_sed="sede_pisco";}
  if( $SuperUser["sede"]=="T-Atico") {$tableActi="activity_atico";$tabla_sed="sede_atico";}
  if( $SuperUser["sede"]=="T-Matarani") {$tableActi="activity_matarani";$tabla_sed="sede_matarani";}
  if( $SuperUser["sede"]=="E-Chimbote") {$tableActi="activity_exalmar_chim";$tabla_sed="sede_exalmar_chim";}
  if( $SuperUser["sede"]=="E-Chicama") {$tableActi="activity_exalmar_mala";$tabla_sed="sede_exalmar_mala";}
?>
<?php
  $activity = find_by_id($tableActi,(int)$_GET['id']);
  if(!$activity){
    $session->msg("d","ID de la actividad falta.");
    redirect('actividad.php');
  }
?>
<?php
  $delete_id = delete_by_id($tableActi,(int)$activity['id']);
  if($delete_id){
      $session->msg("s","Actividad eliminada");
      redirect('actividad.php');
  } else {
      $session->msg("d","Eliminación falló");
      redirect('actividad.php');
  }
?>
