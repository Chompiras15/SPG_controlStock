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
  page_require_level(1);

  $table = "";
  //require_once('includes/load.php');
  $SuperUser = current_user();
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
  $categorie = find_by_id($table,(int)$_GET['id']);
  if(!$categorie){
    $session->msg("d","ID de la ruma falta.");
    redirect('categorie.php');
  }
?>
<?php
  $delete_id = delete_by_id($table,(int)$categorie['id']);
  if($delete_id){
      $session->msg("s","Ruma eliminada");
      redirect('categorie.php');
  } else {
      $session->msg("d","Eliminación falló");
      redirect('categorie.php');
  }
?>
