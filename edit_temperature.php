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
  page_require_level(5);
  $tabletemp = "";
  $SuperUser = current_user();
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

    $promedio=((int)$tem_1+(int)$tem_2+(int)$tem_3+(int)$tem_4+(int)$tem_5+(int)$tem_6+(int)$tem_7+(int)$tem_8+(int)$tem_9)/9;


   
      $sql   = "UPDATE $tabletemp SET";
      $sql  .=" codRuma ='{$tem_ruma}', filter1 ='{$tem_1}',";
      $sql  .=" filter2 ='{$tem_2}', filter3 ='{$tem_3}', filter4 ='{$tem_4}', filter5 ='{$tem_5}', filter6 ='{$tem_6}', filter7 ='{$tem_7}', filter8 ='{$tem_8}', filter9 ='{$tem_9}', promedio ='{$promedio}' , supervisor ='{$tem_supervisor}'";
      $sql .= " WHERE id='{$temperature['id']}'";
   
     $result = $db->query($sql);
     if($result && $db->affected_rows() === 1) {
       $session->msg("s", "Temperatura actualizada con éxito.");
       redirect('temperature.php',false);
     } else {
       $session->msg("d", "Lo siento, actualización falló.");
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
    <div class="col-md-5">
        <div class="panel panel-default">

            <div class="panel-body">
                <form method="post" action="edit_temperature.php?id=<?php echo (int)$temperature['id'];?>">
                    <div class="form-group">

                        <input type="text" class="form-control" name="codRuma"
                            value="<?php echo remove_junk(ucfirst($temperature['codRuma']));?>">
                        <input type="text" class="form-control" name="filter1"
                            value="<?php echo remove_junk(ucfirst($temperature['filter1']));?>">
                        <input type="text" class="form-control" name="filter2"
                            value="<?php echo remove_junk(ucfirst($temperature['filter2']));?>">
                        <input type="text" class="form-control" name="filter3"
                            value="<?php echo remove_junk(ucfirst($temperature['filter3']));?>">
                        <input type="text" class="form-control" name="filter4"
                            value="<?php echo remove_junk(ucfirst($temperature['filter4']));?>">
                        <input type="text" class="form-control" name="filter5"
                            value="<?php echo remove_junk(ucfirst($temperature['filter5']));?>">
                        <input type="text" class="form-control" name="filter6"
                            value="<?php echo remove_junk(ucfirst($temperature['filter6']));?>">
                        <input type="text" class="form-control" name="filter7"
                            value="<?php echo remove_junk(ucfirst($temperature['filter7']));?>">
                        <input type="text" class="form-control" name="filter8"
                            value="<?php echo remove_junk(ucfirst($temperature['filter8']));?>">
                        <input type="text" class="form-control" name="filter9"
                            value="<?php echo remove_junk(ucfirst($temperature['filter9']));?>">
                        <input type="text" class="form-control" name="supervisor"
                            value="<?php echo remove_junk(ucfirst($temperature['supervisor']));?>">
                        
                    </div>
                    <button type="submit" name="edit_temperature" class="btn btn-primary">Actualizar
                        Temperatura</button>
                </form>
            </div>
        </div>
    </div>
</div>



<?php include_once('layouts/footer.php'); ?>