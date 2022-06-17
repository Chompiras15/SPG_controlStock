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

  $table = "employees";
  //require_once('includes/load.php');
  $SuperUser = current_user();
?>
<?php
  $employees = find_by_id($table,(int)$_GET['id']);
  if(!$employees){
    $session->msg("d","ID del empleado falta.");
    redirect('employees.php');
  }
?>
<?php
  $delete_id = delete_by_id($table,(int)$employees['id']);
  if($delete_id){
      $session->msg("s","Ruma eliminada");
      redirect('employees.php');
  } else {
      $session->msg("d","Eliminación falló");
      redirect('employees.php');
  }
?>