<!--   
 ====================================================================
        SGP - BUSINESS ( JHONATAN LARA && ABRAHAM VALVERDE)
 Descripción:Agrega Actividades
 Creado: 11/03/2022
 Chimbote Peru 
 ====================================================================
  
-->

<?php
  $page_title = 'Almacen-Chimbote';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(3);
  
  $tableActi = "";
  $SuperUser = current_user();
  if( $SuperUser["sede"]=="1"){ $tableActi="activity_tasachim";$tabla_sed="sede_tasachimbote";}
  if( $SuperUser["sede"]=="2") {$tableActi="activity_samanco";$tabla_sed="sede_samanco";}
  if( $SuperUser["sede"]=="3") {$tableActi="activity_supe";$tabla_sed="sede_supe";}
  if( $SuperUser["sede"]=="4"){ $tableActi="activity_vegueta";$tabla_sed="sede_vegueta";}
  if( $SuperUser["sede"]=="5") {$tableActi="activity_callao";$tabla_sed="sede_callao";}
  if( $SuperUser["sede"]=="6") {$tableActi="activity_pisco";$tabla_sed="sede_pisco";}
  if( $SuperUser["sede"]=="7") {$tableActi="activity_atico";$tabla_sed="sede_atico";}
  if( $SuperUser["sede"]=="8") {$tableActi="activity_matarani";$tabla_sed="sede_matarani";}
  if( $SuperUser["sede"]=="9") {$tableActi="activity_exalmar_chim";$tabla_sed="sede_exalmar_chim";}
  if( $SuperUser["sede"]=="10") {$tableActi="activity_exalmar_mala";$tabla_sed="sede_exalmar_mala";}

  $all_actividades = find_all($tableActi);
  $actividades = find_all("activitis");

 if(isset($_POST['add_actividad']))
 {

    if( $SuperUser["sede"]=="9") $req_field = array('nameActivity', 'details','observation','auxiliares','hora_ini','fecha','almacen');
    else $req_field = array('nameActivity', 'details','observation','auxiliares','hora_ini','fecha');
    
    validate_fields($req_field);
    $act_name = remove_junk($db->escape($_POST['nameActivity']));
    $act_details = remove_junk($db->escape($_POST['details']));
    $act_observation = remove_junk($db->escape($_POST['observation']));
    $act_aux = remove_junk($db->escape($_POST['auxiliares']));
    $act_ini = remove_junk($db->escape($_POST['hora_ini']));
    $act_fin = remove_junk($db->escape($_POST['hora_fin']));
    $act_fecha = remove_junk($db->escape($_POST['fecha']));
    if( $SuperUser["sede"]=="9")  $act_almacen =remove_junk($db->escape($_POST['almacen']));
    

    if(empty($errors))
    {

            if( $SuperUser["sede"]=="9")
            {
                $sql  = "INSERT INTO $tableActi (";
                $sql .=" nameActivity,details,observation,auxiliares,hora_ini,hora_fin,fecha,date,almacen";
                $sql .=") VALUES (";
                $sql .=" '{$act_name}', '{$act_details}', '{$act_observation}', '{$act_aux}', '{$act_ini}', '{$act_fin}', '{$act_fecha}', '{$act_fecha}','{$act_almacen}'";
                $sql .=")";
                $sql .=" ON DUPLICATE KEY UPDATE nameActivity='{$act_name}'";
            }else{

                $sql  = "INSERT INTO $tableActi (";
                $sql .=" nameActivity,details,observation,auxiliares,hora_ini,hora_fin,fecha,date";
                $sql .=") VALUES (";
                $sql .=" '{$act_name}', '{$act_details}', '{$act_observation}', '{$act_aux}', '{$act_ini}', '{$act_fin}', '{$act_fecha}', '{$act_fecha}'";
                $sql .=")";
                $sql .=" ON DUPLICATE KEY UPDATE nameActivity='{$act_name}'";
            }
            

            if($db->query($sql)){
                $session->msg("s", "Actividad agregada exitosamente.");
                redirect('actividad.php',false);
            } else {
                $session->msg("d", "Lo siento, registro falló");
                redirect('actividad.php',false);
            }

    } else {
        $session->msg("d", $errors);
        redirect('actividad.php',false);
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
            <span>Agregar Actividad</span>
        </strong>

    </div>

    <div class="panel-body">
        <div class="col-md-3">
        </div>
        <div class="col-md-12 cont_form">
            <form method="post" action="add_actividad.php">

            
                <div class="col-md-12 cont_select" style="margin:0;padding:0;">
                   
                         <select  class="selectpicker" data-show-subtext="true" data-live-search="true" name="nameActivity">
                       
                            <?php foreach ($actividades as $act ):?>
                                <option value="<?php echo $act['name'];?>"><?php echo ucwords($act['name']);?></option>
                            <?php endforeach;?>
                            
                        </select>
                </div>
                <div class="material-textfield">
                    <input type="text" name="details" placeholder=" " required>
                    <label>Detalle</label>
                </div>

                <div class="material-textfield">
                    <input type="text"  name="observation" placeholder=" " required>
                    <label>Observacion</label> 
                </div>

                <div class="material-textfield">
                    <input type="text" name="auxiliares" placeholder=" " required>  
                    <label>Supervisor</label>
                </div>

                <div class="material-textfield">
                    <label class="select">Hora de Inicio</label>
                    <input type="time"  name="hora_ini" placeholder="Inició" required>
                      

                </div>
                <div class="material-textfield">
                    <label class="select">Hora de Fin</label>
                    <input type="time"  name="hora_fin" placeholder="Terminó">

                </div>
                <div class="material-textfield">
                    <label class="select">Fecha</label>
                    <input type="date"  name="fecha" placeholder="Fecha" required>
                    
                </div>
                
                <?php if( $SuperUser["sede"]=="9"){?>

                    <div class="material-textfield">
                        <label class="select" for="almacen">Nombre de Almacen</label>
                        <select class="form-control" name="almacen">
                            <!-- Opciones de la lista -->
                            <option value="Oslo" selected>Oslo</option><!-- Opción por defecto -->
                            <option value="Blackar">Blackar</option>
                            <option value="Bpo">BPO</option>
                            <option value="Promosa">Promasa</option>
                        </select>
                    </div>
                <?php } ?>
              


                <div class='form-group clearfix'>
                    <button style='width:100%;border-radius: 35px;margin-top:10px' type='submit' name='add_actividad'
                        class='btn btn-info'>Añadir Actividad</button>
                </div>
            </form>
     
        </div>
    </div>
</div>



    <?php include_once('layouts/footer.php'); ?>