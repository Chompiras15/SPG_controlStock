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
 if(isset($_POST['add_ExalTemperature']))
 {
  if( $SuperUser["sede"]=="E-Chicama") $req_field = array('codRuma', 'observacion', 'filter1', 'filter2', 'filter3', 'filter4', 'filter5', 'filter6', 'filter7','filter8','filter9', 'filter10', 'filter11','filter12','filter13','filter14', 'filter15','filter16','filter17','filter18', 'filter19','filter20','filter21','filter22', 'filter23','filter24','filter25','supervisor','f_monitoreo');
   
    validate_fields($req_field);
   
    $tem_ruma = remove_junk($db->escape($_POST['codRuma']));
    $tem_observacion = remove_junk($db->escape($_POST['observacion']));
    $tem_1 = remove_junk($db->escape($_POST['filter1']));
    $tem_2 = remove_junk($db->escape($_POST['filter2']));
    $tem_3 = remove_junk($db->escape($_POST['filter3']));
    $tem_4 = remove_junk($db->escape($_POST['filter4']));
    $tem_5 = remove_junk($db->escape($_POST['filter5']));
    $tem_6 = remove_junk($db->escape($_POST['filter6']));
    $tem_7 = remove_junk($db->escape($_POST['filter7']));
    $tem_8 = remove_junk($db->escape($_POST['filter8']));
    $tem_9 = remove_junk($db->escape($_POST['filter9']));
    $tem_10 = remove_junk($db->escape($_POST['filter10']));
    $tem_11 = remove_junk($db->escape($_POST['filter11']));
    $tem_12 = remove_junk($db->escape($_POST['filter12']));
    $tem_13 = remove_junk($db->escape($_POST['filter13']));
    $tem_14 = remove_junk($db->escape($_POST['filter14']));
    $tem_15 = remove_junk($db->escape($_POST['filter15']));
    $tem_16 = remove_junk($db->escape($_POST['filter16']));
    $tem_17 = remove_junk($db->escape($_POST['filter17']));
    $tem_18 = remove_junk($db->escape($_POST['filter18']));
    $tem_19 = remove_junk($db->escape($_POST['filter19']));
    $tem_20 = remove_junk($db->escape($_POST['filter20']));
    $tem_21 = remove_junk($db->escape($_POST['filter21']));
    $tem_22 = remove_junk($db->escape($_POST['filter22']));
    $tem_23 = remove_junk($db->escape($_POST['filter23']));
    $tem_24 = remove_junk($db->escape($_POST['filter24']));
    $tem_25 = remove_junk($db->escape($_POST['filter25']));
    $tem_supervisor = remove_junk($db->escape($_POST['supervisor']));
    $tem_monitoreo = remove_junk($db->escape($_POST['f_monitoreo']));
  
    //$tem_fecha = remove_junk($db->escape($_POST['fecha']));

    if(empty($errors))
    {

        $findAlmaRuma = find_by_codRuma( $tableSed, $_POST[ 'codRuma' ] );
        $typeR=$findAlmaRuma['tipo'];
        if($findAlmaRuma)
        {
        $promedio=((float)$tem_1+(float)$tem_2+(float)$tem_3+(float)$tem_4+(float)$tem_5+(float)$tem_6+(float)$tem_7+(float)$tem_8+(float)$tem_9+(float)$tem_10+(float)$tem_11+(float)$tem_12+(float)$tem_13+(float)$tem_14+(float)$tem_15+(float)$tem_16+(float)$tem_17+(float)$tem_18+(float)$tem_19+(float)$tem_20+(float)$tem_21+(float)$tem_22+(float)$tem_23+(float)$tem_24+(float)$tem_25)/25;

            if($SuperUser["sede"]=="E-Chicama")
            {
                $sql  = "INSERT INTO $tabletemp (";
                $sql .=" codRuma, observacion, filter1, filter2, filter3, filter4, filter5, filter6, filter7, filter8, filter9, filter10, filter11, filter12, filter13, filter14, filter15, filter16, filter17, filter18, filter19, filter20, filter21, filter22, filter23, filter24, filter25, promedio, supervisor, typeRuma, f_monitoreo";
                $sql .=") VALUES (";
                $sql .=" '{$tem_ruma}','{$tem_observacion}' ,'{$tem_1}', '{$tem_2}', '{$tem_3}', '{$tem_4}', '{$tem_5}', '{$tem_6}', '{$tem_7}', '{$tem_8}', '{$tem_9}', '{$tem_10}', '{$tem_11}', '{$tem_12}', '{$tem_13}', '{$tem_14}', '{$tem_15}', '{$tem_16}', '{$tem_17}', '{$tem_18}', '{$tem_19}', '{$tem_20}', '{$tem_21}', '{$tem_22}', '{$tem_23}', '{$tem_24}', '{$tem_25}','{$promedio}','{$tem_supervisor}','{$typeR}','{$tem_monitoreo}'";
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
                    redirect( 'ExalTemperature.php', false );
                } else {
                    $session->msg( 'd', 'Lo siento, No se añadio la temperatura.' );
                    redirect( 'ExalTemperature.php', false );
                }
              
            } else {

                $session->msg("d", "Lo siento, No se añadio la temperatura.");
                redirect('ExalTemperature.php',false);
            }

        }else{
            $session->msg("d", "Verifique el codigo de la Ruma.");
                redirect('ExalTemperature.php',false);
        }

        

    } else {
        $session->msg("d", $errors);
        redirect('ExalTemperature.php',false);
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
                <form method="post" action="add_ExalTemperature.php">
                    <div class="material-textfield">
                        <input type="text"  name="codRuma"  placeholder=" " required>
                        <label>Código de Ruma</label>
                    </div>
                     
                    <div class="material-textfield">
                        <input type="number" name="filter1" step="any" placeholder=" " required>
                      
                        <label>Temperatura 1</label>
                    </div>

                    <div class="material-textfield">
                        <input type="number" name="filter2" step="any" placeholder=" " required>
                        <label>Temperatura 2</label>
                    </div>
                    <div class="material-textfield">
                        <input type="number" name="filter3" step="any" placeholder=" " required>
                        <label>Temperatura 3</label>

                    </div>
                    <div class="material-textfield">
                        <input type="number" name="filter4"step="any"  placeholder=" " required>
                        <label>Temperatura 4</label>

                    </div>
                    <div class="material-textfield">
                        <input type="number" name="filter5" step="any" placeholder=" " required>
                        <label>Temperatura 5</label>
                    </div>

                    <div class="material-textfield">
                        <input type="number" name="filter6" step="any" placeholder=" " required>
                        <label>Temperatura 6</label>
                    </div>
                    <div class="material-textfield">
                        <input type="number" name="filter7" step="any" placeholder=" " required>
                        <label>Temperatura 7</label>
                    </div>

                    <div class="material-textfield">
                        <input type="number" name="filter8" step="any" placeholder=" " required>
                        <label>Temperatura 8</label>
                    </div>

                    <div class="material-textfield">
                        <input type="number" name="filter9" step="any" placeholder=" " required>
                        <label>Temperatura 9</label>
                    </div>

                    <div class="material-textfield">
                        <input type="number" name="filter10" step="any" placeholder=" " required>
                      
                        <label>Temperatura 10</label>
                    </div>

                    <div class="material-textfield">
                        <input type="number" name="filter11" step="any" placeholder=" " required>
                        <label>Temperatura 11</label>
                    </div>
                    <div class="material-textfield">
                        <input type="number" name="filter12" step="any" placeholder=" " required>
                        <label>Temperatura 12</label>

                    </div>
                    <div class="material-textfield">
                        <input type="number" name="filter13"step="any"  placeholder=" " required>
                        <label>Temperatura 13</label>

                    </div>
                    <div class="material-textfield">
                        <input type="number" name="filter14" step="any" placeholder=" " required>
                        <label>Temperatura 14</label>
                    </div>

                    <div class="material-textfield">
                        <input type="number" name="filter15" step="any" placeholder=" " required>
                        <label>Temperatura 15</label>
                    </div>

                    <div class="material-textfield">
                        <input type="number" name="filter16" step="any" placeholder=" " required>
                        <label>Temperatura 16</label>
                    </div>

                    <div class="material-textfield">
                        <input type="number" name="filter17" step="any" placeholder=" " required>
                        <label>Temperatura 17</label>
                    </div>

                        <div class="material-textfield">
                        <input type="number" name="filter18" step="any" placeholder=" " required>
                        <label>Temperatura 18</label>

                    </div>
                    <div class="material-textfield">
                        <input type="number" name="filter19"step="any"  placeholder=" " required>
                        <label>Temperatura 19</label>

                    </div>
                    <div class="material-textfield">
                        <input type="number" name="filter20" step="any" placeholder=" " required>
                        <label>Temperatura 20</label>
                    </div>

                    <div class="material-textfield">
                        <input type="number" name="filter21" step="any" placeholder=" " required>
                        <label>Temperatura 21</label>
                    </div>
                    <div class="material-textfield">
                        <input type="number" name="filter22" step="any" placeholder=" " required>
                        <label>Temperatura 22</label>
                    </div>

                    <div class="material-textfield">
                        <input type="number" name="filter23" step="any" placeholder=" " required>
                        <label>Temperatura 23</label>
                    </div>

                    <div class="material-textfield">
                        <input type="number" name="filter24" step="any" placeholder=" " required>
                        <label>Temperatura 24</label>
                    </div>

                     <div class="material-textfield">
                        <input type="number" name="filter25" step="any" placeholder=" " required>
                        <label>Temperatura 25</label>
                    </div>
                    <div class="material-textfield">
                        
                        <input type="text" name="observacion" placeholder=" " required>
                        <label> Observación</label>
                    </div>
                    
                    <div class="material-textfield">
                        
                        <input type="date" name="f_monitoreo" placeholder=" " required>
                        <label>Fecha de Monitoreo</label>
                    </div>
                    
                     <div class="material-textfield">
                        
                        <input type="text" name="supervisor" placeholder=" " required>
                        <label> Supervisor</label>
                    </div>
                   

                    <div class='form-group clearfix'>
                        <button style='width:100%;border-radius: 35px;margin-top:10px' type='submit'
                            class='btn btn-info' name="add_ExalTemperature">Agregar Monitoreo</button>

                    </div>
                </form>
         
            </div>
        </div>
    </div>
</div>

    <?php include_once('layouts/footer.php'); ?>