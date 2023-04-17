<?php
  $page_title = 'Agregar usuarios';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(1);
  $groups = find_all('user_groups');
  $sedes = find_all('sedes');

  if(isset($_POST['add_user']))
  {
    $req_fields = array('full-name','username','password','sede','level' );
    validate_fields($req_fields);

    if(empty($errors))
    {
      $name   = remove_junk($db->escape($_POST['full-name']));
      $username   = remove_junk($db->escape($_POST['username']));
      $password   = remove_junk($db->escape($_POST['password']));
      $sede   = remove_junk($db->escape($_POST['sede']));
      $user_level = (int)$db->escape($_POST['level']);
      $password = sha1($password);
      
      $query = "INSERT INTO users (";
      $query .="name,username,password,sede,user_level,status,typeSystems";
      $query .=") VALUES (";
      $query .=" '{$name}', '{$username}', '{$password}', '{$sede}','{$user_level}','1','3'";
      $query .=")";
      
      if($db->query($query))
      {
          //sucess
        $session->msg('s'," Cuenta de usuario ha sido creada");
        redirect('users.php', false);
      
      } else {
          //failed
        $session->msg('d',' No se pudo crear la cuenta.');
        redirect('add_user.php', false);
      }
    } else {
      
      $session->msg("d", $errors);
      redirect('add_user.php',false);
    }
  }
  
?>
<?php include_once('layouts/header.php'); ?>
  <?php echo display_msg($msg); ?>
  <div class="row">
    <div class="panel panel-default ">
      <div class="panel-heading">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>Agregar usuario</span>
       </strong>
      </div>
      <div class="panel-body">
        <div class="col-md-3">
        </div>
        <div class="col-md-12 cont_form">
          <form method="post" action="add_user.php">
            <div class="material-textfield">
              <input placeholder=" " type="text" name="full-name" required>
              <label>Nombre</label>
          </div>

          <div class="material-textfield">
              <input placeholder=" " type="text" name="username" required>
              <label>Usuario</label>
          </div>

          <div class="material-textfield">
              <input placeholder=" " type="password" name="password" required>
              <label>Contraseña</label>
          </div>

        <div class="material-textfield">
              <label class="select" for="sede">Selecciona Sede:</label>
                <select class="form-control" name="sede">
              
                  <?php foreach ($sedes as $sed ):?>
                    <option value="<?php echo $sed['id'];?>"><?php echo ucwords($sed['name']);?></option>
                  <?php endforeach;?>
                
                </select>
            </div>

            <div class="material-textfield">
              <label class="select" for="level">Rol de usuario</label>
                <select class="form-control" name="level">
                  <?php foreach ($groups as $group ):?>
                   <option value="<?php echo $group['group_level'];?>"><?php echo ucwords($group['group_name']);?></option>
                <?php endforeach;?>
                </select>
            </div>
            <div class="form-group clearfix">
              <button style="width:100%;border-radius: 50px;    margin-top: 15px;" type="submit" name="add_user" class="btn btn-primary">Guardar</button>

            </div>
          </form>
        </div>
        <div class="col-md-3">
        </div>              
       

      </div>

    </div>
  </div>

<?php include_once('layouts/footer.php'); ?>
