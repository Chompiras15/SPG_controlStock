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
    redirect('temperature.php');
  }
?>

<?php
if(isset($_POST['edit_temperature']))
{
  if( $SuperUser["sede"]=="E-Chimbote") $req_field = array('codRuma', 'filter1', 'filter2', 'filter3', 'filter4', 'filter5', 'filter6', 'filter7','filter8','filter9','supervisor');
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


  if(empty($errors))
  {

    $promedio=((float)$tem_1+(float)$tem_2+(float)$tem_3+(float)$tem_4+(float)$tem_5+(float)$tem_6+(float)$tem_7+(float)$tem_8+(float)$tem_9)/9;
    $findAlmaRuma = find_by_codRuma( $tableSed,$_POST[ 'codRuma' ]);
    
    if($findAlmaRuma)
    {
        $sql   = "UPDATE $tabletemp SET";
        $sql  .=" codRuma ='{$tem_ruma}', filter1 ='{$tem_1}',";
        $sql  .=" filter2 ='{$tem_2}', filter3 ='{$tem_3}', filter4 ='{$tem_4}', filter5 ='{$tem_5}', filter6 ='{$tem_6}', filter7 ='{$tem_7}', filter8 ='{$tem_8}', filter9 ='{$tem_9}', promedio ='{$promedio}' , supervisor ='{$tem_supervisor}'";
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
              redirect( 'temperature.php', false );
          } else {
              $session->msg( 'd', 'Lo siento, No se añadio la temperatura.' );
              redirect( 'temperature.php', false );
          }
        } else {
          $session->msg("d", "Lo siento, actualización falló.");
          redirect('temperature.php',false);
        }
    
    }else{
      $session->msg("d", "NO SE ENCONTRO EL CODIGO DE RUMA");
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
                <form method="post" action="edit_temperature.php?id=<?php echo (int)$temperature['id'];?>">
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Código de Ruma</label>
                        <input type="text" class="form-control" name="codRuma"
                            value="<?php echo remove_junk(ucfirst($temperature['codRuma']));?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Cañon 1</label>
                        <input type="text" class="form-control" name="filter1"
                            value="<?php echo remove_junk(ucfirst($temperature['filter1']));?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Cañon 2</label>
                        <input type="text" class="form-control" name="filter2"
                            value="<?php echo remove_junk(ucfirst($temperature['filter2']));?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Cañon 3</label>
                        <input type="text" class="form-control" name="filter3"
                            value="<?php echo remove_junk(ucfirst($temperature['filter3']));?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Cañon 4</label>
                        <input type="text" class="form-control" name="filter4"
                            value="<?php echo remove_junk(ucfirst($temperature['filter4']));?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Cañon 5</label>
                        <input type="text" class="form-control" name="filter5"
                            value="<?php echo remove_junk(ucfirst($temperature['filter5']));?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Cañon 6</label>
                        <input type="text" class="form-control" name="filter6"
                            value="<?php echo remove_junk(ucfirst($temperature['filter6']));?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Cañon 7</label>
                        <input type="text" class="form-control" name="filter7"
                            value="<?php echo remove_junk(ucfirst($temperature['filter7']));?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Cañon 8</label>
                        <input type="text" class="form-control" name="filter8"
                            value="<?php echo remove_junk(ucfirst($temperature['filter8']));?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Cañon 9</label>
                        <input type="text" class="form-control" name="filter9"
                            value="<?php echo remove_junk(ucfirst($temperature['filter9']));?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Supervisor</label>
                        <input type="text" class="form-control" name="supervisor"
                            value="<?php echo remove_junk(ucfirst($temperature['supervisor']));?>">
                    </div>
                    <div class='form-group clearfix'>
                        <button style='width:100%;border-radius: 35px;margin-top:10px' type="submit"
                            name="edit_temperature" class="btn btn-primary">Actualizar
                            Temperatura</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</div>



<?php include_once('layouts/footer.php'); ?>