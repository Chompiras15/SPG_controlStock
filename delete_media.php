<?php
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(1);
?>
<?php
  $categorie = find_by_id('emb_tasachim',(int)$_GET['id']);
  if(!$categorie){
    $session->msg("d","ID de la ruma falta.");
    redirect('media.php');
  }
?>
<?php
  $delete_id = delete_by_id('emb_tasachim',(int)$categorie['id']);
  if($delete_id){
      $session->msg("s","Ruma eliminada");
      redirect('media.php');
  } else {
      $session->msg("d","Eliminación falló");
      redirect('media.php');
  }
?>
