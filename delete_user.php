<?php
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(1);

  //$delete_id = delete_by_id('users',(int)$_GET['id']);
  $sql = "UPDATE users SET status='0' WHERE id='{$_GET['id']}'";
  $result = $db->query($sql);
  if($result)
  {
      $session->msg("s","Usuario Bloqueado");
      redirect('users.php');
  } else {
      $session->msg("d","Se ha producido un error en Bloquear el usuario");
      redirect('users.php');
  }
?>
