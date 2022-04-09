<!--   
 ====================================================================
        SGP - BUSINESS ( JHONATAN LARA && ABRAHAM VALVERDE)
 Descripción:Muestra Todas Las actividades y Agrega adicionalmente
 Creado: 11/03/2022
 Chimbote Peru 
 ====================================================================
  
-->

<?php
  $page_title = 'Almacen-Chimbote';
  require_once('includes/load.php');
  $tabletemp = "";
  //require_once('includes/load.php');
  $SuperUser = current_user();
  // Checkin What level user has permission to view this page
  page_require_level(4);
  if( $SuperUser["sede"]=="T-Chimb") $tabletemp="temp_tasachimbote";
  if( $SuperUser["sede"]=="T-Samanco") $tabletemp="temp_samanco";
  if( $SuperUser["sede"]=="T-Supe") $tabletemp="temp_supe";
  if( $SuperUser["sede"]=="T-Vegueta") $tabletemp="temp_vegueta";
  if( $SuperUser["sede"]=="T-Callao") $tabletemp="temp_callao";
  if( $SuperUser["sede"]=="T-Pisco") $tabletemp="temp_pisco";
  if( $SuperUser["sede"]=="T-Atico") $tabletemp="temp_atico";
  if( $SuperUser["sede"]=="T-Matarani") $tabletemp="temp_matarani";
  if( $SuperUser["sede"]=="E-Chimbote") $tabletemp="temp_exalmar_chim";
  if( $SuperUser["sede"]=="E-Chicama") $tabletemp="temp_exalmar_mala";
  $all_temperaturas = find_all($tabletemp)
?>
<?php
 if(isset($_POST['add_temperature']))
 {

     if( $SuperUser["sede"]=="E-Chimbote")  $req_field = array('cod_ruma', 'cañon_1', 'cañon_2', 'cañon_3', 'cañon_4', 'cañon_5', 'cañon_6', 'cañon_7','cañon_8','cañon_9','supervisor','fecha','almacen');
   else $req_field = array('cod_ruma', 'cañon_1', 'cañon_2', 'cañon_3', 'cañon_4', 'cañon_5', 'cañon_6', 'cañon_7','cañon_8','cañon_9','supervisor','fecha');
   
    validate_fields($req_field);
   
      $tem_ruma = remove_junk($db->escape($_POST['cod_ruma']));
    $tem_1 = remove_junk($db->escape($_POST['cañon_1']));
    $tem_2 = remove_junk($db->escape($_POST['cañon_2']));
    $tem_3 = remove_junk($db->escape($_POST['cañon_3']));
    $tem_4 = remove_junk($db->escape($_POST['cañon_4']));
    $tem_5 = remove_junk($db->escape($_POST['cañon_5']));
    $tem_6 = remove_junk($db->escape($_POST['cañon_6']));
     $tem_7 = remove_junk($db->escape($_POST['cañon_7']));
    $tem_8 = remove_junk($db->escape($_POST['cañon_8']));
    $tem_9 = remove_junk($db->escape($_POST['cañon_9']));
    $tem_supervisor = remove_junk($db->escape($_POST['supervisor']));
    $tem_fecha = remove_junk($db->escape($_POST['fecha']));
    if( $SuperUser["sede"]=="E-Chimbote")  $tem_almacen =remove_junk($db->escape($_POST['almacen']));

    if(empty($errors))
    {

            if( $SuperUser["sede"]=="E-Chimbote")
            {
                $sql  = "INSERT INTO $tabletemp (";
                $sql .="cod_ruma, cañon_1, cañon_2, cañon_3, cañon_4, cañon_5, cañon_6, cañon_7,cañon_8,cañon_9,supervisor,fecha,almacen";
                $sql .=") VALUES (";
                $sql .=" '{$tem_ruma}', '{$tem_1}', '{$tem_2}', '{$tem_3}', '{$tem_4}', '{$tem_5}', '{$tem_6}', '{$tem_7}', '{$tem_8}', '{$tem_9}', '{$tem_supervisor}','{$tem_fecha}','{$tem_almacen}'";
                $sql .=")";
                $sql .=" ON DUPLICATE KEY UPDATE cod_ruma='{$tem_ruma}'";
            }else{

                $sql  = "INSERT INTO $tabletemp (";
                $sql .=" cod_ruma, cañon_1, cañon_2, cañon_3, cañon_4, cañon_5, cañon_6, cañon_7,cañon_8,cañon_9,supervisor,fecha";
                $sql .=") VALUES (";
                $sql .=" '{$tem_ruma}', '{$tem_1}', '{$tem_2}', '{$tem_3}', '{$tem_4}', '{$tem_5}', '{$tem_6}', '{$tem_7}', '{$tem_8}', '{$tem_9}', '{$tem_supervisor}','{$tem_fecha}'";
                $sql .=")";
                $sql .=" ON DUPLICATE KEY UPDATE cod_ruma='{$tem_ruma}'";
            }
            

            if($db->query($sql)){
                $session->msg("s", "Monitoreo agregado exitosamente.");
                redirect('temperature.php',false);
            } else {
                $session->msg("d", "Lo siento, registro falló");
                redirect('temperature.php',false);
            }

    } else {
        $session->msg("d", $errors);
        redirect('temperature.php',false);
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

    <div class="col-md-5">
        <div class="panel panel-default">
            <div class="panel-heading">
                <strong>
                    <span class="glyphicon glyphicon-th"></span>
                    <span>Agregar Monitoreo</span>
                </strong>
            </div>
            <?php  
        date_default_timezone_set("America/Lima");
        $fecha_actual=date("Y-m-s H:i:s");   
         ?>
            <div class="panel-body">
                <form method="post" action="add_temperature.php">
                    <div class="form-group">
                        <input type="text" class="form-control" name="cod_ruma" placeholder="Codigo" required>
                        <input type="text" class="form-control" name="cañon_1" placeholder="Cañon 1" required>
                        <input type="text" class="form-control" name="cañon_2" placeholder="Cañon 2" required>
                        <input type="text" class="form-control" name="cañon_3" placeholder="Cañon 3" required>
                        <input type="text" class="form-control" name="cañon_4" placeholder="Cañon 4" required>
                        <input type="text" class="form-control" name="cañon_5" placeholder="Cañon 5" required>
                        <input type="text" class="form-control" name="cañon_6" placeholder="Cañon 6" required>
                        <input type="text" class="form-control" name="cañon_7" placeholder="Cañon 7" required>
                        <input type="text" class="form-control" name="cañon_8" placeholder="Cañon 8" required>
                        <input type="text" class="form-control" name="cañon_9" placeholder="Cañon 9" required>
                        <input type="text" class="form-control" name="supervisor" placeholder="Supervisor" required>
                        <input type="date" class="form-control" name="fecha" placeholder="Fecha" required>
                        <?php if( $SuperUser["sede"]=="E-Chimbote") {?>

                        <div class="material-textfield">
                            <label class="select" for="almacen">Nombre de Almacen</label>
                            <select class="form-control" name="almacen">
                                <!-- Opciones de la lista -->
                                <option value="Oslo" selected>Almacen de Oslo</option><!-- Opción por defecto -->
                                <option value="Blackar">Almacen de Blackar</option>
                                <option value="Bpo">Almacen de Bpo</option>
                                <option value="Promosa">Almacen de Promasa</option>
                            </select>
                        </div>

                        <?php } ?>

                    </div>

                    <button type="submit" name="add_temperature" class="btn btn-primary">Agregar Monitoreo</button>

                </form>
            </div>


        </div>
    </div>



    <?php include_once('layouts/footer.php'); ?>