<!--   
 ====================================================================
        SGP - BUSINESS ( JHONATAN LARA && ABRAHAM VALVERDE)
 Descripción:Edita Actividades
 Creado: 11/03/2022
 Chimbote Peru 
 ====================================================================
  
-->

<?php
  $page_title = 'Editar Actividad';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(4);
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
  //Display all catgories.
  $temperature = find_by_id($tabletemp,(int)$_GET['id']);
  if(!$temperature){
    $session->msg("d","No se encontro el registro id.");
    redirect('temperature.php');
  }
?>

<?php
if(isset($_POST['edit_temperature'])){
  $req_field = array('cod_ruma', 'cañon_1', 'cañon_2', 'cañon_3', 'cañon_4', 'cañon_5', 'cañon_6', 'cañon_7','cañon_8','cañon_9','supervisor','fecha');
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
  /**<var>$cat_name = remove_junk($db->escape($_POST['categorie-name']));
  $cat_name = remove_junk($db->escape($_POST['categorie-name']));</var>*/
  if(empty($errors)){
    $sql   = "UPDATE $tabletemp SET";
    $sql  .=" cod_ruma ='{$tem_ruma}', cañon_1 ='{$tem_1}',";
    $sql  .=" cañon_2 ='{$tem_2}', cañon_3 ='{$tem_3}', cañon_4 ='{$tem_4}', cañon_5 ='{$tem_5}', cañon_6 ='{$tem_6}', cañon_7 ='{$tem_7}', cañon_8 ='{$tem_8}', cañon_9 ='{$tem_9}', supervisor ='{$tem_supervisor}', fecha ='{$tem_fecha}'";
       $sql .= " WHERE id='{$temperature['id']}'";
     $result = $db->query($sql);
     if($result && $db->affected_rows() === 1) {
       $session->msg("s", "Registro actualizado con éxito.");
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

                        <input type="text" class="form-control" name="cod_ruma"
                            value="<?php echo remove_junk(ucfirst($temperature['cod_ruma']));?>">
                        <input type="text" class="form-control" name="cañon_1"
                            value="<?php echo remove_junk(ucfirst($temperature['cañon_1']));?>">
                        <input type="text" class="form-control" name="cañon_2"
                            value="<?php echo remove_junk(ucfirst($temperature['cañon_2']));?>">
                        <input type="text" class="form-control" name="cañon_3"
                            value="<?php echo remove_junk(ucfirst($temperature['cañon_3']));?>">
                        <input type="text" class="form-control" name="cañon_4"
                            value="<?php echo remove_junk(ucfirst($temperature['cañon_4']));?>">
                        <input type="text" class="form-control" name="cañon_5"
                            value="<?php echo remove_junk(ucfirst($temperature['cañon_5']));?>">
                        <input type="text" class="form-control" name="cañon_6"
                            value="<?php echo remove_junk(ucfirst($temperature['cañon_6']));?>">
                        <input type="text" class="form-control" name="cañon_7"
                            value="<?php echo remove_junk(ucfirst($temperature['cañon_7']));?>">
                        <input type="text" class="form-control" name="cañon_8"
                            value="<?php echo remove_junk(ucfirst($temperature['cañon_8']));?>">
                        <input type="text" class="form-control" name="cañon_9"
                            value="<?php echo remove_junk(ucfirst($temperature['cañon_9']));?>">
                        <input type="text" class="form-control" name="supervisor"
                            value="<?php echo remove_junk(ucfirst($temperature['supervisor']));?>">
                        <input type="date" class="form-control" name="fecha"
                            value="<?php echo remove_junk(ucfirst($temperature['fecha']));?>">

                    </div>
                    <button type="submit" name="edit_temperature" class="btn btn-primary">Actualizar
                        Temperatura</button>
                </form>
            </div>
        </div>
    </div>
</div>



<?php include_once('layouts/footer.php'); ?>