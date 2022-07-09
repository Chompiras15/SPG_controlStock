<!--   
 ====================================================================
        SGP - BUSINESS ( JHONATAN LARA && ABRAHAM VALVERDE)
 Descripción:Elimina Almacen
 Creado: 11/03/2022
 Chimbote Peru 
 ====================================================================
  
-->

<?php
   $page_title = 'Home Page';
  require_once('includes/load.php');
  if (!$session->isUserLoggedIn(true)) { redirect('index.php', false);}
  
  $SuperUser = current_user();

  if( $SuperUser["sede"]=="T-Chimb") {$tableIns="instachim";}
  if( $SuperUser["sede"]=="T-Samanco") {$tableIns="instasama";}
  if( $SuperUser["sede"]=="T-Supe") {$tableIns="instasupe";}
  if( $SuperUser["sede"]=="T-Vegueta") {$tableIns="instavegu";}
  if( $SuperUser["sede"]=="T-Callao") {$tableIns="instacall";}
  if( $SuperUser["sede"]=="T-Pisco") {$tableIns="instapisc";}
  if( $SuperUser["sede"]=="T-Atico") {$tableIns="instaatic";}
  if( $SuperUser["sede"]=="T-Matarani") {$tableIns="instamata";}
  if( $SuperUser["sede"]=="E-Chimbote") {$tableIns="insexchim";}
  if( $SuperUser["sede"]=="E-Chicama") {$tableIns="insexchic";}
  $tableActi = $tableIns;
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