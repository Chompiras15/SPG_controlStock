<?php
  
  $page_title = 'Agregar grupo';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
   page_require_level(1);

  if(isset($_POST['add']))
  {
    $req_fields = array('group-name','group-level');
    validate_fields($req_fields);

    if(find_by_groupName($_POST['group-name']) === false )
    {
      $session->msg('d','<b>Error!</b> El nombre de grupo realmente existe en la base de datos');
      redirect('group.php', false);

    }elseif(find_by_groupLevel($_POST['group-level']) === false) 
    {
      $session->msg('d','<b>Error!</b> El nombre de grupo realmente existe en la base de datos ');
      redirect('group.php', false);
    }

    if(empty($errors))
    {
      $name = remove_junk($db->escape($_POST['group-name']));
      $level = remove_junk($db->escape($_POST['group-level']));
      $status = remove_junk($db->escape($_POST['status']));

      $query  = "INSERT INTO user_groups (";
      $query .="group_name,group_level,group_status";
      $query .=") VALUES (";
      $query .=" '{$name}', '{$level}','{$status}'";
      $query .=")";
        
      if($db->query($query))
      {
          //sucess
        $session->msg('s',"Grupo ha sido creado! ");
        redirect('group.php', false);
      
      } else {
          //failed
        $session->msg('d','Lamentablemente no se pudo crear el grupo!');
        redirect('group.php', false);
      }

    } else {
      $session->msg("d", $errors);
      redirect('group.php',false);
    }
  }
  include_once('layouts/header.php');
?>

<div class="row">
  <div class="panel panel-default ">
    <div class="panel-heading">
      <strong>
        <span class="glyphicon glyphicon-th"></span>
        <span>Agregar grupo de Usuario</span>
      </strong>
    </div>
    <div class="panel-body" style="height: 400px;margin-top: 5%;">
      <div class="col-md-3"></div>
      <div class="col-md-6 cont_form">
        <form method="post" action="add_group.php">
          <div class="material-textfield">
            <input placeholder=" " type="text" name="group-name" required>
            <label>Nombre del Grupo</label>
          </div>

          <div class="material-textfield">
            <input placeholder=" " type="number" name="group-level" required>
            <label>Nivel del Grupo</label>
          </div>

          <div class="form-group">
            <label for="status">Estado</label>
            <select class="form-control" name="status">
              <option value="1">Activo</option>
              <option value="0">Inactivo</option>
            </select>
          </div>

          <div class="form-group clearfix">
            <button style="width:100%;border-radius: 35px;" type="submit" name="add" class="btn btn-info">Guardar</button>
          </div> 
        </form>
      </div>
    </div>

  </div>
</div>

<?php include_once('layouts/footer.php'); ?>
