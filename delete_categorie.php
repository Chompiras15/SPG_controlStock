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
?>
<?php
  $categorie = find_by_id('sede_tasachimbote',(int)$_GET['id']);
  if(!$categorie){
    $session->msg("d","ID de la ruma falta.");
    redirect('categorie.php');
  }
?>
<?php
  $delete_id = delete_by_id('sede_tasachimbote',(int)$categorie['id']);
  if($delete_id){
      $session->msg("s","Ruma eliminada");
      redirect('categorie.php');
  } else {
      $session->msg("d","Eliminación falló");
      redirect('categorie.php');
  }
?>
