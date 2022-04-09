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
  page_require_level(5);

  $tabletemp = "";
  $SuperUser = current_user();
 if( $SuperUser["sede"]=="T-Chimb") $tabletemp="temp_tasachimbote";
  if( $SuperUser["sede"]=="T-Samanco") $tabletemp="temp_samanco";
  if( $SuperUser["sede"]=="T-Supe") $tabletemp="temp_supe";
  if( $SuperUser["sede"]=="T-Vegueta") $tabletemp="temp_vegueta";
  if( $SuperUser["sede"]=="T-Callao") $tabletemp="temp_callao";
  if( $SuperUser["sede"]=="T-Pisco") $tabletemp="temp_pisco";
  if( $SuperUser["sede"]=="T-Atico") $tabletemp="temp_atico";
  if( $SuperUser["sede"]=="T-Matarani") $tabletemp="temp_matarani";
  if( $SuperUser["sede"]=="E-Chimbote") $tabletemp="temp_exalmar_chim";
  if( $SuperUser["sede"]=="E-Chicama") $tabletemp="temp_exalmar_mala";
?>
<?php
  $temperature1 = find_by_id($tabletemp,(int)$_GET['id']);
  if(!$temperature1){
    $session->msg("d","ID de la actividad falta.");
    redirect('actividad.php');
  }
?>
<?php
  $delete_id = delete_by_id($tabletemp,(int)$temperature['id']);
  if($delete_id){
      $session->msg("s","Registro eliminado");
      redirect('temperature.php');
  } else {
      $session->msg("d","Eliminación falló");
      redirect('temperature.php');
  }
?>