<?php 
  include_once('includes/load.php'); 

  $req_fields = array('username','password' );
  validate_fields($req_fields);
  $username = remove_junk($_POST['username']);
  $password = remove_junk($_POST['password']);
  $table="users";
  if(empty($errors))
  {
    $user_id = authenticate($username, $password, $table);
    if($user_id)
    {
      //create session with id
      $session->login($user_id);
      //Update Sign in time
      updateLastLogIn($user_id);
      $session->msg("s", "Bienvenido a SGP Business.");
      redirect('home.php',false);

    } else {
      $session->msg("d", "Nombre de usuario y/o contraseña incorrecto.");
      redirect('index.php',false);
    }

  } else {
    $session->msg("d", $errors);
    redirect('index.php',false);
  }

?>
