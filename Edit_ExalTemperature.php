<!--   
 ====================================================================
        SGP - BUSINESS ( JHONATAN LARA && ABRAHAM VALVERDE)
 Descripción:Edita Actividades
 Creado: 11/03/2022
 Chimbote Peru 
 ====================================================================
  
-->

<?php
  $page_title = 'Editar Temperatura';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(4);
  $tabletemp = "";
  $SuperUser = current_user();
  if( $SuperUser["sede"]=="T-Chimb") {$tabletemp="temp_tasachimbote";$tableSed="sede_tasachimbote";}
  if( $SuperUser["sede"]=="T-Samanco") {$tabletemp="temp_samanco";$tableSed="sede_samanco";}
  if( $SuperUser["sede"]=="T-Supe") {$tabletemp="temp_supe";$tableSed="sede_supe";}
  if( $SuperUser["sede"]=="T-Vegueta") {$tabletemp="temp_vegueta";$tableSed="sede_vegueta";}
  if( $SuperUser["sede"]=="T-Callao") {$tabletemp="temp_callao"; $tableSed="sede_callao";}
  if( $SuperUser["sede"]=="T-Pisco") {$tabletemp="temp_pisco";$tableSed="sede_pisco";}
  if( $SuperUser["sede"]=="T-Atico") {$tabletemp="temp_atico";$tableSed="sede_atico";}
  if( $SuperUser["sede"]=="T-Matarani") {$tabletemp="temp_matarani"; $tableSed="sede_matarani";}
  if( $SuperUser["sede"]=="E-Chimbote") {$tabletemp="temp_exalmar_chim";$tableSed="sede_exalmar_chim";}
  if( $SuperUser["sede"]=="E-Chicama") {$tabletemp="temp_exalmar_mala";$tableSed="sede_exalmar_mala";}
  
?>
<?php
  //Display all temperature.
  $temperature = find_by_id($tabletemp,(int)$_GET['id']);
  if(!$temperature){
    $session->msg("d","No se encontro el registro id.");
    redirect('ExalTemperature.php.php');
  }
?>

<?php
if(isset($_POST['Edit_ExalTemperature']))
{
  if( $SuperUser["sede"]=="E-Chicama") $req_field = array('codRuma', 'observacion','filter1', 'filter2', 'filter3', 'filter4', 'filter5', 'filter6', 'filter7','filter8','filter9', 'filter10', 'filter11','filter12','filter13','filter14', 'filter15','filter16','filter17','filter18', 'filter19','filter20','filter21','filter22', 'filter23','filter24','filter25','supervisor');
  
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


  if(empty($errors))
  {

    $promedio=((float)$tem_1+(float)$tem_2+(float)$tem_3+(float)$tem_4+(float)$tem_5+(float)$tem_6+(float)$tem_7+(float)$tem_8+(float)$tem_9+(float)$tem_10+(float)$tem_11+(float)$tem_12+(float)$tem_13+(float)$tem_14+(float)$tem_15+(float)$tem_16+(float)$tem_17+(float)$tem_18+(float)$tem_19+(float)$tem_20+(float)$tem_21+(float)$tem_22+(float)$tem_23+(float)$tem_24+(float)$tem_25)/25;
    $findAlmaRuma = find_by_codRuma( $tableSed,$_POST[ 'codRuma' ]);
    
    if($findAlmaRuma)
    {
        $sql   = "UPDATE $tabletemp SET";
        $sql  .=" codRuma ='{$tem_ruma}', observacion ='{$tem_observacion}', filter1 ='{$tem_1}',";
        $sql  .=" filter2 ='{$tem_2}', filter3 ='{$tem_3}', filter4 ='{$tem_4}', filter5 ='{$tem_5}', filter6 ='{$tem_6}', filter7 ='{$tem_7}', filter8 ='{$tem_8}', filter9 ='{$tem_9}', filter10 ='{$tem_10}', filter11 ='{$tem_11}', filter12 ='{$tem_12}', filter13 ='{$tem_13}', filter14 ='{$tem_14}', filter15 = '{$tem_15}', filter16 ='{$tem_16}', filter17 ='{$tem_17}', filter18 ='{$tem_18}', filter19 ='{$tem_19}', filter20 ='{$tem_20}', filter21 ='{$tem_21}', filter22 ='{$tem_22}', filter23 = '{$tem_23}',filter24 ='{$tem_24}', filter25 ='{$tem_25}', promedio ='{$promedio}', supervisor ='{$tem_supervisor}'";
        $sql .= " WHERE id='{$temperature['id']}'";

        if($db->query($sql))
        {
          $sql   = "UPDATE $tableSed SET";
          $sql  .= " temperatura ='{$promedio}'";
          $sql .= " WHERE cod_ruma='{$findAlmaRuma['cod_ruma']}'";
          
          $result = $db->query( $sql );

          if ( $result && $db->affected_rows() == 1 ) 
          {
              $session->msg( 's', 'Temperatura actualizada con éxito.' );
              redirect( 'ExalTemperature.php', false );
          } else {
              $session->msg( 'd', 'Lo siento, No se añadio la temperatura.' );
              redirect( 'ExalTemperature.php', false );
          }
        } else {
          $session->msg("d", "Lo siento, actualización falló.");
          redirect('ExalTemperature.php',false);
        }
    
    }else{
      $session->msg("d", "NO SE ENCONTRO EL CODIGO DE RUMA");
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

    <div class="panel panel-default">
        <div class="panel-heading">
            <strong>
                <span class="glyphicon glyphicon-filter"></span>
                <span>Editar Monitoreo</span>
            </strong>

        </div>
        <div class="panel-body">
            <div class="col-md-3">
            </div>
            <div class="col-md-12 edit_form">
                <form method="post" action="Edit_ExalTemperature.php?id=<?php echo (int)$temperature['id'];?>">
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Código de Ruma</label>
                        <input type="text" class="form-control" name="codRuma"
                            value="<?php echo remove_junk(ucfirst($temperature['codRuma']));?>">
                    </div>
                   
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Temperatura 1</label>
                        <input type="text" class="form-control" name="filter1"
                            value="<?php echo remove_junk(ucfirst($temperature['filter1']));?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Temperatura 2</label>
                        <input type="text" class="form-control" name="filter2"
                            value="<?php echo remove_junk(ucfirst($temperature['filter2']));?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Temperatura 3</label>
                        <input type="text" class="form-control" name="filter3"
                            value="<?php echo remove_junk(ucfirst($temperature['filter3']));?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Temperatura 4</label>
                        <input type="text" class="form-control" name="filter4"
                            value="<?php echo remove_junk(ucfirst($temperature['filter4']));?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Temperatura 5</label>
                        <input type="text" class="form-control" name="filter5"
                            value="<?php echo remove_junk(ucfirst($temperature['filter5']));?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Temperatura 6</label>
                        <input type="text" class="form-control" name="filter6"
                            value="<?php echo remove_junk(ucfirst($temperature['filter6']));?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Temperatura 7</label>
                        <input type="text" class="form-control" name="filter7"
                            value="<?php echo remove_junk(ucfirst($temperature['filter7']));?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Temperatura 8</label>
                        <input type="text" class="form-control" name="filter8"
                            value="<?php echo remove_junk(ucfirst($temperature['filter8']));?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Temperatura 9</label>
                        <input type="text" class="form-control" name="filter9"
                            value="<?php echo remove_junk(ucfirst($temperature['filter9']));?>">
                    </div>
                    <div class="form-group col-md-6"> 
                        <label for="name" class="control-label">Temperatura 10</label>
                        <input type="text" class="form-control" name="filter10"
                            value="<?php echo remove_junk(ucfirst($temperature['filter10']));?>">
                    </div>
                    <div class="form-group col-md-6"> 
                        <label for="name" class="control-label">Temperatura 11</label>
                        <input type="text" class="form-control" name="filter11"
                            value="<?php echo remove_junk(ucfirst($temperature['filter11']));?>">
                    </div>
                    <div class="form-group col-md-6"> 
                        <label for="name" class="control-label">Temperatura 12</label>
                        <input type="text" class="form-control" name="filter12"
                            value="<?php echo remove_junk(ucfirst($temperature['filter12']));?>">
                    </div>
                    <div class="form-group col-md-6"> 
                        <label for="name" class="control-label">Temperatura 13</label>
                        <input type="text" class="form-control" name="filter13"
                            value="<?php echo remove_junk(ucfirst($temperature['filter13']));?>">
                    </div>
                    <div class="form-group col-md-6"> 
                        <label for="name" class="control-label">Temperatura 14</label>
                        <input type="text" class="form-control" name="filter14"
                            value="<?php echo remove_junk(ucfirst($temperature['filter14']));?>">
                    </div>
                    <div class="form-group col-md-6"> 
                        <label for="name" class="control-label">Temperatura 15</label>
                        <input type="text" class="form-control" name="filter15"
                            value="<?php echo remove_junk(ucfirst($temperature['filter15']));?>">
                    </div>
                    <div class="form-group col-md-6"> 
                        <label for="name" class="control-label">Temperatura 16</label>
                        <input type="text" class="form-control" name="filter16"
                            value="<?php echo remove_junk(ucfirst($temperature['filter16']));?>">
                    </div>
                    <div class="form-group col-md-6"> 
                        <label for="name" class="control-label">Temperatura 17</label>
                        <input type="text" class="form-control" name="filter17"
                            value="<?php echo remove_junk(ucfirst($temperature['filter17']));?>">
                    </div>
                    <div class="form-group col-md-6"> 
                        <label for="name" class="control-label">Temperatura 18</label>
                        <input type="text" class="form-control" name="filter18"
                            value="<?php echo remove_junk(ucfirst($temperature['filter18']));?>">
                    </div>
                    <div class="form-group col-md-6"> 
                        <label for="name" class="control-label">Temperatura 19</label>
                        <input type="text" class="form-control" name="filter19"
                            value="<?php echo remove_junk(ucfirst($temperature['filter19']));?>">
                    </div>
                    <div class="form-group col-md-6"> 
                        <label for="name" class="control-label">Temperatura 20</label>
                        <input type="text" class="form-control" name="filter20"
                            value="<?php echo remove_junk(ucfirst($temperature['filter20']));?>">
                    </div>
                    <div class="form-group col-md-6"> 
                        <label for="name" class="control-label">Temperatura 21</label>
                        <input type="text" class="form-control" name="filter21"
                            value="<?php echo remove_junk(ucfirst($temperature['filter21']));?>">
                    </div>
                    <div class="form-group col-md-6"> 
                        <label for="name" class="control-label">Temperatura 22</label>
                        <input type="text" class="form-control" name="filter22"
                            value="<?php echo remove_junk(ucfirst($temperature['filter22']));?>">
                    </div>
                    <div class="form-group col-md-6"> 
                        <label for="name" class="control-label">Temperatura 23</label>
                        <input type="text" class="form-control" name="filter23"
                            value="<?php echo remove_junk(ucfirst($temperature['filter23']));?>">
                    </div>
                    <div class="form-group col-md-6"> 
                        <label for="name" class="control-label">Temperatura 24</label>
                        <input type="text" class="form-control" name="filter24"
                            value="<?php echo remove_junk(ucfirst($temperature['filter24']));?>">
                    </div>
                    <div class="form-group col-md-6"> 
                        <label for="name" class="control-label">Temperatura 25</label>
                        <input type="text" class="form-control" name="filter25"
                            value="<?php echo remove_junk(ucfirst($temperature['filter25']));?>">
                    </div>

                     <div class="form-group col-md-6"> 
                        <label for="name" class="control-label">Observación</label>
                        <input type="text" class="form-control" name="observacion"
                            value="<?php echo remove_junk(ucfirst($temperature['observacion']));?>">
                    </div>

                    <div class="form-group col-md-6"> 
                        <label for="name" class="control-label">Supervisor</label>
                        <input type="text" class="form-control" name="supervisor"
                            value="<?php echo remove_junk(ucfirst($temperature['supervisor']));?>">
                    </div>
                    
                    <div class='form-group clearfix'>
                        <button style='width:100%;border-radius: 35px;margin-top:10px' type="submit"
                            name="Edit_ExalTemperature" class="btn btn-primary">Actualizar
                            Temperatura</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>



<?php include_once('layouts/footer.php'); ?>