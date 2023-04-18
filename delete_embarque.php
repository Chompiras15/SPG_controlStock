<!--   
 ====================================================================
        SGP - BUSINESS ( JHONATAN LARA && ABRAHAM VALVERDE)
 Descripción:Elimina Despachos
 Creado: 11/03/2022
 Chimbote Peru 
 ====================================================================
  
-->

<?php
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(2);

  $table = "";
  $tabla_sed="";
  //require_once('includes/load.php');
  $SuperUser = current_user();
  if( $SuperUser["sede"]=="1"){ $table="emb_tasachim";$tabla_sed="sede_tasachimbote";}
  if( $SuperUser["sede"]=="2") {$table="emb_samanco";$tabla_sed="sede_samanco";}
  if( $SuperUser["sede"]=="3") {$table="emb_supe";$tabla_sed="sede_supe";}
  if( $SuperUser["sede"]=="4"){ $table="emb_vegueta";$tabla_sed="sede_vegueta";}
  if( $SuperUser["sede"]=="5") {$table="emb_callao";$tabla_sed="sede_callao";}
  if( $SuperUser["sede"]=="6") {$table="emb_pisco";$tabla_sed="sede_pisco";}
  if( $SuperUser["sede"]=="7") {$table="emb_atico";$tabla_sed="sede_atico";}
  if( $SuperUser["sede"]=="8") {$table="emb_matarani";$tabla_sed="sede_matarani";}
  if( $SuperUser["sede"]=="9") {$table="emb_exalmar_chim";$tabla_sed="sede_exalmar_chim";}
  if( $SuperUser["sede"]=="10") {$table="emb_exalmar_mala";$tabla_sed="sede_exalmar_mala";}

  $categorie = find_by_id($table,(int)$_GET['id']);
  if(!$categorie)
  {
    $session->msg("d","ID de la ruma falta.");
    redirect('embarque.php');
  }

  $delete_id = delete_by_id($table,(int)$categorie['id']);
  if($delete_id)
  {
      $session->msg("s","Ruma eliminada");
      redirect('embarque.php');
  } else {
      $session->msg("d","Eliminación falló");
      redirect('embarque.php');
  }
?>