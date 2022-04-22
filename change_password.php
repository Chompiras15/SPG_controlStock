<?php
  $page_title = 'Cambiar contraseña';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(3);
?>
<?php $user = current_user(); ?>
<?php
  if(isset($_POST['update'])){

    $req_fields = array('new-password','old-password','id' );
    validate_fields($req_fields);

    if(empty($errors)){

             if(sha1($_POST['old-password']) !== current_user()['password'] )
             {
               $session->msg('d', "Tu antigua contraseña no coincide");
               redirect('change_password.php',false);
             }

            $id = (int)$_POST['id'];
            $new = remove_junk($db->escape(sha1($_POST['new-password'])));
            $sql = "UPDATE users SET password ='{$new}' WHERE id='{$db->escape($id)}'";
            $result = $db->query($sql);
                if($result && $db->affected_rows() === 1):
                  $session->logout();
                  $session->msg('s',"Inicia sesión con tu nueva contraseña.");
                  redirect('index.php', false);
                else:
                  $session->msg('d',' Lo siento, actualización falló.');
                  redirect('change_password.php', false);
                endif;
    } else {
      $session->msg("d", $errors);
      redirect('change_password.php',false);
    }
  }
?>
<?php include_once('layouts/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <?php echo display_msg($msg); ?>
    </div>
</div>
<div class="row">

    <div class="panel panel-default">
        <div class="panel-heading">
            <strong>
                <span class="glyphicon glyphicon-lock"></span>
                <span> CAMBIAR CONTRASEÑA </span>
            </strong>

        </div>

        <div class="panel-body">

            <div class="col-md-3">
            </div>
            <div class="col-md-12 cont_form">
                <form method="post" action="change_password.php">
                    <div class="material-textfield-pass">
                            
                            <input placeholder=" " type="password" class="form-control inputPass" name="old-password" placeholder="Antigua contraseña">
                            <label for="oldPassword" class="control-label">Antigua contraseña</label>
                      </div>
                    <div class="material-textfield-pass">
                        <input placeholder=" " type="password" class="form-control inputPass" name="new-password" placeholder="Nueva contraseña" required>
                        <label for="newPassword" class="control-label">Nueva contraseña</label>
                    </div>

                   

                    <div class="form-group clearfix">
                        <input type="hidden" name="id" value="<?php echo (int)$user['id'];?>">
                        <button style='width:100%;border-radius: 35px;margin-top:10px' type="submit" name="update" class="btn btn-info">Actualizar Contraseña</button>
                    </div>
                   
                </form>
         
            </div>
        </div>
    </div>
</div>


<?php include_once('layouts/footer.php'); ?>
