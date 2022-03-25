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
  if( $SuperUser["sede"]=="T-Chimbote"){ $table="emb_tasachim";$tabla_sed="sede_tasachimbote";}
  if( $SuperUser["sede"]=="T-Samanco") {$table="emb_samanco";$tabla_sed="sede_samanco";}
  if( $SuperUser["sede"]=="T-Supe") {$table="emb_supe";$tabla_sed="sede_supe";}
  if( $SuperUser["sede"]=="T-Vegueta"){ $table="emb_vegueta";$tabla_sed="sede_vegueta";}
  if( $SuperUser["sede"]=="T-Callao") {$table="emb_callao";$tabla_sed="sede_callao";}
  if( $SuperUser["sede"]=="T-Pisco") {$table="emb_pisco";$tabla_sed="sede_pisco";}
  if( $SuperUser["sede"]=="T-Atico") {$table="emb_atico";$tabla_sed="sede_atico";}
  if( $SuperUser["sede"]=="T-Matarani") {$table="emb_matarani";$tabla_sed="sede_matarani";}
  if( $SuperUser["sede"]=="E-Chimbote") {$table="emb_exalmar_chim";$tabla_sed="sede_exalmar_chim";}
  if( $SuperUser["sede"]=="E-Chicama") {$table="emb_exalmar_mala";$tabla_sed="sede_exalmar_mala";}




?>
<?php
  $categorie = find_by_id($table,(int)$_GET['id']);
  if(!$categorie){
    $session->msg("d","ID de la ruma falta.");
    redirect('media.php');
  }
?>
<?php
  $delete_id = delete_by_id($table,(int)$categorie['id']);
  if($delete_id){
      $session->msg("s","Ruma eliminada");
      redirect('media.php');
  } else {
      $session->msg("d","Eliminación falló");
      redirect('media.php');
  }
?>
