<!--   
 ====================================================================
        SGP - BUSINESS ( JHONATAN LARA && ABRAHAM VALVERDE)
 Descripción:Agrega Empleados
 Creado: 11/03/2022
 Chimbote Peru 
 ====================================================================
  
-->

<?php
  $page_title = 'Almacen-Chimbote';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(5);
  
  $tableEmployees = "employees";
  $SuperUser = current_user();
  $all_Employees = find_all($tableEmployees)
?>

<?php
 if(isset($_POST['add_employees']))
 {
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
    if(empty($errors))
    {
                $sql  = "INSERT INTO $tableEmployees (";
                $sql .=" tipo_doc,numero,nombre,genero,f_nacimiento,cargo,sede,banco,cuenta";
                $sql .=") VALUES (";
                $sql .=" '{$emplo_doc}', '{$emplo_numero}', '{$emplo_nombre}' ,'{$emplo_genero}', '{$emplo_nacimiento}', '{$emplo_cargo}', '{$emplo_sede}','{$emplo_banco}','{$emplo_cuenta}'";
                $sql .=")";
                $sql .=" ON DUPLICATE KEY UPDATE tipo_doc='{$emplo_numero}'";

                if($db->query($sql)){
                $session->msg("s", "empleado agregada exitosamente.");
                redirect('employees.php',false);
            } else {
                $session->msg("d", "Lo siento, registro falló");
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
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <strong>
            <span class="glyphicon glyphicon-calendar"></span>
            <span>Agregar empleados</span>
        </strong>

    </div>

    <div class="panel-body">
        <div class="col-md-3">
        </div>
        <div class="col-md-12 cont_form">
            <form method="post" action="add_employees.php">

            
                <div class="col-md-6 cont_select" style="margin:0;padding:0;">
                   
                         <select  class="selectpicker" data-show-subtext="true" data-live-search="true" name="tipo_doc">
                        <!-- Opciones dae la lista -->
                            <option value="DNI" selected>DNI</option>
                            <option value="Carnet de Estrangería">Carnet de estrangería</option>  
                        </select>
                </div>
                <div class="material-textfield">
                    <input type="text" name="numero" placeholder=" " required>
                    <label>Numero</label>
                </div>

                <div class="material-textfield">
                    <input type="text"  name="nombre" placeholder=" " required>
                    <label>Nombre</label> 
                </div>

              <div class="col-md-6 cont_select" style="margin:0;padding:0;">
                   
                         <select  class="selectpicker" data-show-subtext="true" data-live-search="true" name="genero">
                        <!-- Opciones dae la lista -->
                            <option value="Maculino" selected>Maculino</option>
                            <option value="Femenino" selected>Femenino</option> 
                        </select>
                </div>

                <div class="material-textfield">
                    <label class="select">Fecha de Naciemiento</label>
                    <input type="date"  name="f_nacimiento" placeholder="Fecha de Nacimiento" required>
                      

                </div>

                <div class="col-md-6 cont_select" style="margin:0;padding:0;">
                   
                         <select  class="selectpicker" data-show-subtext="true" data-live-search="true" name="cargo">
                        <!-- Opciones dae la lista -->
                            <option value="Supervisor Operativo" selected>Supervisor Operativo</option>
                            <option value="Supervisor Calidad" selected>Supervisor Calidad</option>
                            <option value="Supervisor Ssoma" selected>Supervisor Ssoma</option>
                            <option value="Auxiliar">Auxiliar</option>
                            <option value="Conductor de Camión">Conductor Camión</option> 
                             <option value="Operador de Montacarga">Operador de Montacarga</option>  
                             <option value="Administrativo">Administrativo</option>  

                        </select>
                </div>

                  <div class="col-md-6 cont_select" style="margin:0;padding:0;">
                   
                         <select  class="selectpicker" data-show-subtext="true" data-live-search="true" name="sede">
                        <!-- Opciones dae la lista -->
                            <option value="Tasa-Chimbote" selected>Tasa - Chimbote</option>
                            <option value="Tasa-Samanco" >Tasa - Samanco</option> <!-- Opción por defecto -->
                            <option value="Tasa-Supe">Tasa - Supe</option>
                            <option value="Tasa-Vegueta">Tasa - Végueta</option>
                            <option value="Tasa-Callao">Tasa - Callao</option>
                            <option value="Tasa-Pisco">Tasa - Pisco</option>
                            <option value="Tasa-Atico">Tasa - Atico</option>
                            <option value="Tasa-Matarani">Tasa - Matarani</option>
                            <option value="Exalmar-Chimbote">Exalmar - Chimbote</option>
                            <option value="Exalmar-Chicama">Exalmar - Chicama</option>
                        </select>
                </div>
                <div class="col-md-6 cont_select" style="margin:0;padding:0;">
                   
                         <select  class="selectpicker" data-show-subtext="true" data-live-search="true" name="banco">
                        <!-- Opciones dae la lista -->
                            <option value="BCP" selected>BCP</option>
                            <option value="Interbank" >Interbank</option> <!-- Opción por defecto -->
                            <option value="BBVA">BBVA</option>
                        </select>
                </div>

                <div class="material-textfield">
                    <label class="select">Cuenta</label>
                    <input type="number"  name="cuenta" placeholder="Cuenta" required>
                    
                </div>
                

                <div class='form-group clearfix'>
                    <button style='width:100%;border-radius: 35px;margin-top:10px' type='submit' name='add_employees'
                        class='btn btn-info'>Añadir Empleado</button>
                </div>
            </form>
     
        </div>
    </div>
</div>



    <?php include_once('layouts/footer.php'); ?>