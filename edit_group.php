<?php
  
    $page_title = 'Editar Grupo';
    require_once('includes/load.php');
    // Checkin What level user has permission to view this page
    page_require_level(1);
   
    $e_group = find_by_id('user_groups',(int)$_GET['id']);
    if(!$e_group)
    {
        $session->msg("d","Missing Group id.");
        redirect('group.php');
    }

    if(isset($_POST['update']))
    {
        $req_fields = array('group-name','group-level');
        validate_fields($req_fields);
        if(empty($errors))
        {
            $name = remove_junk($db->escape($_POST['group-name']));
            $level = remove_junk($db->escape($_POST['group-level']));
            $status = remove_junk($db->escape($_POST['status']));

            $query  = "UPDATE user_groups SET ";
            $query .= "group_name='{$name}',group_level='{$level}',group_status='{$status}'";
            $query .= "WHERE ID='{$db->escape($e_group['id'])}'";
            $result = $db->query($query);

            if($result && $db->affected_rows() === 1)
            {
                //sucess
                $session->msg('s',"Grupo se ha actualizado! ");
                redirect('group.php?id='.(int)$e_group['id'], false);
            } else {
                //failed
                $session->msg('d','Lamentablemente no se ha actualizado el grupo!');
                redirect('group.php?id='.(int)$e_group['id'], false);
            }
        } else {
            $session->msg("d", $errors);
            redirect('group.php?id='.(int)$e_group['id'], false);
        }
    }
    
    include_once('layouts/header.php'); ?>

<div class="panel panel-default">
    <div class="panel-heading">
        <strong>
            <span class="glyphicon glyphicon-user"></span>
            <span>Editar Grupo</span>
        </strong>
    </div>

    <div class="panel-body">

        <div class="col-md-12 cont_form" style="margin-bottom:50px;">
            <form method="post" action="edit_group.php?id=<?php echo (int)$e_group['id'];?>">

                <div class="form-group col-md-6">
                    <label for="name" class="control-label">Nombre del Grupo</label>
                    <input type="name" class="form-control" name="group-name"
                        value="<?php echo remove_junk(ucwords($e_group['group_name'])); ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="level" class="control-label">Nivel del Grupo</label>
                    <input type="number" class="form-control" name="group-level"
                        value="<?php echo (int)$e_group['group_level']; ?>">
                </div>

                <div class="material-textfield col-md-12" style="width:100%;">
                    <label style="color:black;margin:0;" class="select" for="status">Estado</label>
                    <select class="form-control" name="status">
                        <!-- Opciones de la lista -->
                        <option <?php if($e_group['group_status'] === '1') echo 'selected="selected"';?> value="1">
                            Activo </option>
                        <option <?php if($e_group['group_status'] === '0') echo 'selected="selected"';?> value="0">
                            Inactivo</option>
                    </select>
                </div>

                <div class="form-group clearfix">
                    <button style="width:100%;border-radius: 35px;margin-top:10px;font-weight: bold;font-size: 15px;"
                        type="submit" name="update" class="btn btn-info">Actualizar Grupo</button>
                </div>

            </form>
        </div>
    </div>
</div>

<?php include_once('layouts/footer.php'); ?>