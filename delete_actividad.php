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
?>
<?php
  $activity = find_by_id('activity_tasachim',(int)$_GET['id']);
  if(!$activity){
    $session->msg("d","ID de la actividad falta.");
    redirect('actividad.php');
  }
?>
<?php
  $delete_id = delete_by_id('activity_tasachim',(int)$activity['id']);
  if($delete_id){
      $session->msg("s","Actividad eliminada");
      redirect('actividad.php');
  } else {
      $session->msg("d","Eliminación falló");
      redirect('actividad.php');
  }
?>
