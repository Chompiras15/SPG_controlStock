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
  page_require_level(4);

  $tabletemp = "";
  $SuperUser = current_user();
  if( $SuperUser["sede"]=="1") $tabletemp="temp_tasachimbote";
  if( $SuperUser["sede"]=="2") $tabletemp="temp_samanco";
  if( $SuperUser["sede"]=="3") $tabletemp="temp_supe";
  if( $SuperUser["sede"]=="4") $tabletemp="temp_vegueta";
  if( $SuperUser["sede"]=="5") $tabletemp="temp_callao";
  if( $SuperUser["sede"]=="6") $tabletemp="temp_pisco";
  if( $SuperUser["sede"]=="7") $tabletemp="temp_atico";
  if( $SuperUser["sede"]=="8") $tabletemp="temp_matarani";
  if( $SuperUser["sede"]=="9") $tabletemp="temp_exalmar_chim";
  if( $SuperUser["sede"]=="10") $tabletemp="temp_exalmar_mala";

  $temperature1 = find_by_id($tabletemp,(int)$_GET['id']);
  if(!$temperature1)
  {
    $session->msg("d","ID de la Temperatura falta.");
    redirect('temperature.php');
  }

  $delete_id = delete_by_id($tabletemp,(int)$temperature1['id']);
  if($delete_id)
  {
      $session->msg("s","Registro eliminado");
      redirect('temperature.php');
  } else {
      $session->msg("d","Eliminación falló");
      redirect('temperature.php');
  }
?>