<!--   
 ====================================================================
        SGP - BUSINESS ( JHONATAN LARA && ABRAHAM VALVERDE)
 Descripción:Edita Actividades
 Creado: 11/03/2022
 Chimbote Peru 
 ====================================================================
  
-->

<?php
  $page_title = 'Editar Empleado';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(2);
  $tableEmployes = "employees";
  $SuperUser = current_user();
?>
<?php
  //Display all catgories.
  $employees = find_by_id($tableEmployes,(int)$_GET['id']);
  if(!$employees){
    $session->msg("d","No se encontro empleado id.");
    redirect('employees.php');
  }
?>

<?php
if(isset($_POST['edit_employees'])){
$req_field = array('tipo_doc', 'numero','nombre','genero','f_nacimiento','cargo','sede','banco','cuenta');  
validate_fields($req_field);
  $emplo_doc = remove_junk($db->escape($_POST['tipo_doc']));
    $emplo_numero = remove_junk($db->escape($_POST['numero']));
    $emplo_nombre = remove_junk($db->escape($_POST['nombre']));
    $emplo_genero = remove_junk($db->escape($_POST['genero']));
    $emplo_nacimiento = remove_junk($db->escape($_POST['f_nacimiento']));
    $emplo_cargo = remove_junk($db->escape($_POST['cargo']));
    $emplo_sede = remove_junk($db->escape($_POST['sede']));
    $emplo_banco = remove_junk($db->escape($_POST['banco']));
    $emplo_cuenta = remove_junk($db->escape($_POST['cuenta']));
  /**<var>$cat_name = remove_junk($db->escape($_POST['categorie-name']));
  $cat_name = remove_junk($db->escape($_POST['categorie-name']));</var>*/
  if(empty($errors)){
    $sql   = "UPDATE $tableEmployes SET";
    $sql  .=" tipo_doc ='{$emplo_doc}', numero ='{$emplo_numero}',";
    $sql  .=" nombre ='{$emplo_nombre}', genero ='{$emplo_genero}', f_nacimiento ='{$emplo_nacimiento}', cargo ='{$emplo_cargo}', sede ='{$emplo_sede}', banco ='{$emplo_banco}', cuenta ='{$emplo_cuenta}'";
       $sql .= " WHERE id='{$employees['id']}'";
     $result = $db->query($sql);
     if($result && $db->affected_rows() === 1) {
       $session->msg("s", "Empleado actualizada con éxito.");
       redirect('employees.php',false);
     } else {
       $session->msg("d", "Lo siento, actualización falló.");
       redirect('employees.php',false);
     }
  } else {
    $session->msg("d", $errors);
    redirect('employees.php',false);
  }
}
?>
<?php include_once('layouts/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <?php echo display_msg($msg); ?>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <strong>
                <span class="glyphicon glyphicon-calendar"></span>
                <span>Editar Empleado</span>
            </strong>

        </div>

        <div class="panel-body">
            <div class="col-md-3">
            </div>
            <div class="col-md-12 edit_form">
                <form method="post" action="edit_employees.php?id=<?php echo (int)$employees['id'];?>">
                    <div class="col-md-12 cont_selectEdit">
                        <select name="tipo_doc" class="selectpicker" data-show-subtext="true" data-live-search="true" <?php echo (int)$employees['id'];?> style="width:100%;">
                            <!-- Opciones de la lista -->
                            <option value="DNI"
                                <?php if($employees['tipo_doc']=="DNI"){;?>selected <?php } ?>>
                                DNI</option>
								
							<option value="Carnet de Estangería"
                                <?php if($employees['tipo_doc']=="Carnet de Estangería"){;?>selected <?php } ?>>
                                Carnet de Estrangería</option>
                                
                 
                        </select>
                    </div>

                   

                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Numero</label>
                        <input type="text" class="form-control" name="numero"
                            value="<?php echo remove_junk(ucfirst($employees['numero']));?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre"
                            value="<?php echo remove_junk(ucfirst($employees['nombre']));?>">
                    </div>
                       <div class="col-md-12 cont_selectEdit">
                        <select name="genero" class="selectpicker" data-show-subtext="true" data-live-search="true" <?php echo (int)$employees['id'];?> style="width:100%;">
                            <!-- Opciones de la lista -->
                            <option value="Masculino"
                                <?php if($employees['genero']=="Masculino"){;?>selected <?php } ?>>
                                Masculino</option>
								
							<option value="Femenino"
                                <?php if($employees['genero']=="Femenino"){;?>selected <?php } ?>>
                                Femenino</option>
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Fecha Nacimiento</label>
                        <input type="date" class="form-control" name="f_nacimiento"
                            value="<?php echo remove_junk(ucfirst($employees['f_nacimiento']));?>">
                    </div>
                    <div class="col-md-12 cont_selectEdit">
                        <select name="cargo" class="selectpicker" data-show-subtext="true" data-live-search="true" <?php echo (int)$employees['id'];?> style="width:100%;">
                            <!-- Opciones de la lista -->
                            <option value="Supervisor Operativo"
                                <?php if($employees['cargo']=="Supervisor Operativo"){;?>selected <?php } ?>>
                                Supervisor Operativo</option>
								
							<option value="Supervisor Calidad"
                                <?php if($employees['cargo']=="Supervisor Calidad"){;?>selected <?php } ?>>
                                Supervisor Calidad</option>

                            <option value="Supervisor Ssoma"
                                <?php if($employees['cargo']=="Supervisor Ssoma"){;?>selected <?php } ?>>
                                Supervisor Ssoma</option>

                            <option value="Auxiliar"
                                <?php if($employees['cargo']=="Auxiliar"){;?>selected <?php } ?>>
                                Auxiliar</option>

                            <option value="Conductor de Camion"
                                <?php if($employees['cargo']=="Conductor de camion"){;?>selected <?php } ?>>
                                Conductor de Camion</option>

                            <option value="Operador de Montacarga"
                                <?php if($employees['cargo']=="Operador de Montacarga"){;?>selected <?php } ?>>
                                Operador de Montacarga</option>

                             <option value="Administrativo"
                                <?php if($employees['cargo']=="Administrativo"){;?>selected <?php } ?>>
                                Administrativo</option>

                        </select>
                    </div>

                    <div class="col-md-12 cont_selectEdit">
                        <select name="sede" class="selectpicker" data-show-subtext="true" data-live-search="true" <?php echo (int)$employees['id'];?> style="width:100%;">
                            <!-- Opciones de la lista -->
                            <option value="Tasa-Chimbote"
                                <?php if($employees['sede']=="Tasa-Chimbote"){;?>selected <?php } ?>>
                                Tasa-Chimbote</option>
								
							<option value="Tasa-Samanco"
                                <?php if($employees['sede']=="Tasa-Samanco"){;?>selected <?php } ?>>
                                Tasa-Samanco</option>

                            <option value="Tasa-Supe"
                                <?php if($employees['sede']=="Tasa-Supe"){;?>selected <?php } ?>>
                                Tasa-Supe</option>

                            <option value="Tasa-Vegueta"
                                <?php if($employees['sede']=="Tasa-Vegueta"){;?>selected <?php } ?>>
                                Auxiliar</option>

                            <option value="Tasa-Callao"
                                <?php if($employees['sede']=="Tasa-Callao"){;?>selected <?php } ?>>
                                Tasa-Callao</option>

                            <option value="Tasa-Pisco"
                                <?php if($employees['sede']=="Tasa-Pisco"){;?>selected <?php } ?>>
                                Tasa-Pisco</option>

                             <option value="Tasa-Atico"
                                <?php if($employees['sede']=="Tasa-Atico"){;?>selected <?php } ?>>
                                Tasa-Atico</option>

                            <option value="Tasa-Matarani"
                                <?php if($employees['sede']=="Tasa-Matarani"){;?>selected <?php } ?>>
                                Tasa-Matarani</option>

                            <option value="Exalmar-Chimbote"
                                <?php if($employees['sede']=="Exalmar-Chimbote"){;?>selected <?php } ?>>
                                Exalmar-Chimbote</option>

                            <option value="Exalmar-Chicama"
                                <?php if($employees['sede']=="Exalmar-Chicama"){;?>selected <?php } ?>>
                                Exalmar-Chicama</option>

                        </select>
                    </div>

                                  <div class="col-md-12 cont_selectEdit">
                        <select name="banco" class="selectpicker" data-show-subtext="true" data-live-search="true" <?php echo (int)$employees['id'];?> style="width:100%;">
                            <!-- Opciones de la lista -->
                            <option value="BCP"
                                <?php if($employees['banco']=="BCP"){;?>selected <?php } ?>>
                                BCP</option>
								
							<option value="Interbank"
                                <?php if($employees['banco']=="Interbank"){;?>selected <?php } ?>>
                                Interbank</option>
                            <option value="BBVA"
                                <?php if($employees['banco']=="BBVA"){;?>selected <?php } ?>>
                                BBVA</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Cuenta</label>
                        <input type="number" class="form-control" name="cuenta"
                            value="<?php echo remove_junk(ucfirst($employees['cuenta']));?>">
                    </div>
            
                    <div class='form-group clearfix'>
                        <button style='width:100%;border-radius: 35px;margin-top:10px' type="submit" name="edit_employees"
                            class="btn btn-primary">Actualizar
                            Empleado</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>




<?php include_once('layouts/footer.php'); ?>