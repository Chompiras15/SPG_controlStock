<!--   
 ====================================================================
        SGP - BUSINESS ( JHONATAN LARA && ABRAHAM VALVERDE)
 Descripción:Muestra Todas Las actividades y Agrega adicionalmente
 Creado: 11/03/2022
 Chimbote Peru 
 ====================================================================
  
-->

<?php
  $page_title = 'Temperatura';
  require_once('includes/load.php');
  $tabletemp = "";
  //require_once('includes/load.php');
  $SuperUser = current_user();
  // Checkin What level user has permission to view this page
  page_require_level(4);
  if( $SuperUser["sede"]=="T-Chimb") {$tabletemp="temp_tasachimbote";$tableSed="sede_tasachimbote";}
  if( $SuperUser["sede"]=="T-Samanco") {$tabletemp="temp_samanco";$tableSed="sede_samanco";}
  if( $SuperUser["sede"]=="T-Supe") {$tabletemp="temp_supe";$tableSed="sede_supe";}
  if( $SuperUser["sede"]=="T-Vegueta") {$tabletemp="temp_vegueta";$tableSed="sede_vegueta";}
  if( $SuperUser["sede"]=="T-Callao") {$tabletemp="temp_callao"; $tableSed="sede_callao";}
  if( $SuperUser["sede"]=="T-Pisco") {$tabletemp="temp_pisco";$tableSed="sede_pisco";}
  if( $SuperUser["sede"]=="T-Atico") {$tabletemp="temp_atico";$tableSed="sede_atico";}
  if( $SuperUser["sede"]=="T-Matarani") {$tabletemp="temp_matarani"; $tableSed="sede_matarani";}
  if( $SuperUser["sede"]=="E-Chimbote") {$tabletemp="exalmar_temp_chim";$tableSed="sede_exalmar_chim";}
  if( $SuperUser["sede"]=="E-Chicama") {$tabletemp="temp_exalmar_mala";$tableSed="sede_exalmar_mala";}
  

  $all_temperaturas = find_all($tabletemp)
?>
<?php
 if(isset($_POST['add_temperature']))
 {
     if( $SuperUser["sede"]=="E-Chimbote")  $req_field = array('codRuma', 'filter1', 'filter2', 'filter3', 'filter4', 'filter5', 'filter6', 'filter7','filter8','filter9','almacen','supervisor');
     else $req_field = array('codRuma', 'filter1', 'filter2', 'filter3', 'filter4', 'filter5', 'filter6', 'filter7','filter8','filter9','supervisor');
   
    validate_fields($req_field);
   
    $tem_ruma = remove_junk($db->escape($_POST['codRuma']));
    $tem_1 = remove_junk($db->escape($_POST['filter1']));
    $tem_2 = remove_junk($db->escape($_POST['filter2']));
    $tem_3 = remove_junk($db->escape($_POST['filter3']));
    $tem_4 = remove_junk($db->escape($_POST['filter4']));
    $tem_5 = remove_junk($db->escape($_POST['filter5']));
    $tem_6 = remove_junk($db->escape($_POST['filter6']));
    $tem_7 = remove_junk($db->escape($_POST['filter7']));
    $tem_8 = remove_junk($db->escape($_POST['filter8']));
    $tem_9 = remove_junk($db->escape($_POST['filter9']));
    $tem_supervisor = remove_junk($db->escape($_POST['supervisor']));
    //$tem_fecha = remove_junk($db->escape($_POST['fecha']));
    if( $SuperUser["sede"]=="E-Chimbote")  $tem_almacen =remove_junk($db->escape($_POST['almacen']));

    if(empty($errors))
    {

        $findAlmaRuma = find_by_codRuma( $tableSed, $_POST[ 'codRuma' ] );
        $typeR=$findAlmaRuma['tipo'];

        if($findAlmaRuma)
        {
            $promedio=((float)$tem_1+(float)$tem_2+(float)$tem_3+(float)$tem_4+(float)$tem_5+(float)$tem_6+(float)$tem_7+(float)$tem_8+(float)$tem_9)/9;

            if($SuperUser["sede"]=="E-Chimbote")
            {
                $sql  = "INSERT INTO $tabletemp (";
                $sql .=" codRuma, filter1, filter2, filter3, filter4, filter5, filter6, filter7,filter8,filter9,supervisor,promedio,almacen";
                $sql .=") VALUES (";
                $sql .=" '{$tem_ruma}', '{$tem_1}', '{$tem_2}', '{$tem_3}', '{$tem_4}', '{$tem_5}', '{$tem_6}', '{$tem_7}', '{$tem_8}', '{$tem_9}', '{$tem_supervisor}','{$promedio}'";
                $sql .=")";
                $sql .=" ON DUPLICATE KEY UPDATE codRuma='{$tem_ruma}'";

            }else{

                $sql  = "INSERT INTO $tabletemp (";
                $sql .=" codRuma, filter1, filter2, filter3, filter4, filter5, filter6, filter7,filter8,filter9,supervisor,promedio,typeRuma";
                $sql .=") VALUES (";
                $sql .=" '{$tem_ruma}', '{$tem_1}', '{$tem_2}', '{$tem_3}', '{$tem_4}', '{$tem_5}', '{$tem_6}', '{$tem_7}', '{$tem_8}', '{$tem_9}', '{$tem_supervisor}','{$promedio}','{$typeR}'";
                $sql .=")";
                $sql .=" ON DUPLICATE KEY UPDATE codRuma='{$tem_ruma}'";
            }
                
            if($db->query($sql))
            {   
                $sql   = "UPDATE $tableSed SET";
                $sql  .= " temperatura ='{$promedio}'";
                $sql .= " WHERE cod_ruma='{$findAlmaRuma['cod_ruma']}'";
                
                $result = $db->query( $sql );
                if ( $result && $db->affected_rows() == 1 ) 
                {
                    $session->msg( 's', 'Temperatura agregado con Exito' );
                    redirect( 'temperature.php', false );
                } else {
                    $session->msg( 'd', 'Lo siento, No se añadio la temperatura.' );
                    redirect( 'temperature.php', false );
                }
              
            } else {

                $session->msg("d", "Lo siento, No se añadio la temperatura.");
                redirect('temperature.php',false);
            }

        }else{
            $session->msg("d", "Verifique el codigo de la Ruma.");
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

    <div class="panel panel-default">
        <div class="panel-heading">
            <strong>
                <span class="glyphicon glyphicon-filter"></span>
                <span>Agregar Monitoreo</span>
            </strong>

        </div>

        <div class="panel-body">
            <div class="col-md-3">
            </div>
            <div class="col-md-12 cont_form">
                <form method="post" action="add_temperature.php">
                    <div class="material-textfield">
                        <input type="text"  name="codRuma"  placeholder=" " required>
                        <label>Cod_Ruma</label>
                    </div>

                    <div class="material-textfield">
                        <input type="number" name="filter1" step="any" placeholder=" " required>
                      
                        <label>Cañon 1</label>
                    </div>

                    <div class="material-textfield">
                        <input type="number" name="filter2" step="any" placeholder=" " required>
                        <label>Cañon 2</label>
                    </div>
                    <div class="material-textfield">
                        <input type="number" name="filter3" step="any" placeholder=" " required>
                        <label>Cañon 3</label>

                    </div>
                    <div class="material-textfield">
                        <input type="number" name="filter4"step="any"  placeholder=" " required>
                        <label>Cañon 4</label>

                    </div>
                    <div class="material-textfield">
                        <input type="number" name="filter5" step="any" placeholder=" " required>
                        <label>Cañon 5</label>
                    </div>

                    <div class="material-textfield">
                        <input type="number" name="filter6" step="any" placeholder=" " required>
                        <label>Cañon 6</label>
                    </div>
                    <div class="material-textfield">
                        <input type="number" name="filter7" step="any" placeholder=" " required>
                        <label>Cañon 7</label>
                    </div>

                    <div class="material-textfield">
                        <input type="number" name="filter8" step="any" placeholder=" " required>
                        <label>Cañon 8</label>
                    </div>

                    <div class="material-textfield">
                        <input type="number" name="filter9" step="any" placeholder=" " required>
                        <label>Cañon 9</label>
                    </div>
                     <div class="material-textfield">
                        
                        <input type="text" name="supervisor" placeholder=" " required>
                        <label> Supervisor</label>
                    </div>
                    

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


                    <div class='form-group clearfix'>
                        <button style='width:100%;border-radius: 35px;margin-top:10px' type='submit'
                            class='btn btn-info' name="add_temperature">Agregar Monitoreo</button>

                    </div>
                </form>
         
            </div>
        </div>
    </div>
</div>

    <?php include_once('layouts/footer.php'); ?>