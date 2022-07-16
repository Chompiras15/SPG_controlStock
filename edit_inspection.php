<!--   
 ====================================================================
        SGP - BUSINESS ( JHONATAN LARA && ABRAHAM VALVERDE)
 Descripción:Edita Actividades
 Creado: 11/03/2022
 Chimbote Peru 
 ====================================================================
  
-->

<?php
  $page_title = 'Almacen-Chimbote';
  require_once('includes/load.php');
  $table = "";
  //require_once('includes/load.php');
  $SuperUser = current_user();
  // Checkin What level user has permission to view this page
  page_require_level(6);
  if( $SuperUser["sede"]=="T-Chimb") {$tableIns="instachim";}
  if( $SuperUser["sede"]=="T-Samanco") {$tableIns="instasama";}
  if( $SuperUser["sede"]=="T-Supe") {$tableIns="instasupe";}
  if( $SuperUser["sede"]=="T-Vegueta") {$tableIns="instavegu";}
  if( $SuperUser["sede"]=="T-Callao") {$tableIns="instacall";}
  if( $SuperUser["sede"]=="T-Pisco") {$tableIns="instapisc";}
  if( $SuperUser["sede"]=="T-Atico") {$tableIns="instaastic";}
  if( $SuperUser["sede"]=="T-Matarani") {$tableIns="instamata";}
  if( $SuperUser["sede"]=="E-Chimbote") {$tableIns="insexchim";}
  if( $SuperUser["sede"]=="E-Chicama") {$tableIns="insexchic";}
  $tableActi = $tableIns;
  $all_actividades = find_all($tableActi)
?>
<?php
  //Display all catgories.
  $activity = find_by_id($tableActi,(int)$_GET['id']);
  if(!$activity){
    $session->msg("d","No se encontro Inspección.");
    redirect('inspection.php');
  }
?>

<?php
if(isset($_POST['edit_inspection'])){
  $req_field = array('placa','empresa','conductor','brevete','manta','soga','e_manta','observaciones');
  validate_fields($req_field);
  $act_placa = remove_junk($db->escape($_POST['placa']));
  $act_empresa = remove_junk($db->escape($_POST['empresa']));
  $act_conductor = remove_junk($db->escape($_POST['conductor']));
  $act_brevete = remove_junk($db->escape($_POST['brevete']));
  $act_manta = remove_junk($db->escape($_POST['manta']));
  $act_soga = remove_junk($db->escape($_POST['soga']));
  $act_eManta = remove_junk($db->escape($_POST['e_manta']));
  $act_observaciones = remove_junk($db->escape($_POST['observaciones']));
  $date=make_date();
  /**<var>$cat_name = remove_junk($db->escape($_POST['categorie-name']));
  $cat_name = remove_junk($db->escape($_POST['categorie-name']));</var>*/
  if(empty($errors)){
    $sql   = "UPDATE $tableActi SET";
    $sql  .=" placa ='{$act_placa}', empresa ='{$act_empresa}', conductor ='{$act_conductor}', brevete ='{$act_brevete}', manta ='{$act_manta}', soga='{$act_soga}', e_manta='{$act_eManta}', observaciones='{$act_observaciones}',";
    $sql  .=" responsable ='{$SuperUser['name']}'";
    $sql .= " WHERE id='{$activity['id']}'";
     $result = $db->query($sql);
     if($result && $db->affected_rows() === 1) {
       $session->msg("s", "Inspección actualizada con éxito.");
       redirect('inspection.php',false);
     } else {
       $session->msg("d", "Lo siento, actualización falló.");
       redirect('inspection.php',false);
     }
  } else {
    $session->msg("d", $errors);
    redirect('inspection.php',false);
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/main2.css">
    <title>Document</title>
</head>
<body>

<?php include_once('layouts/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <?php echo display_msg($msg); ?>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <strong>
                <span class="glyphicon glyphicon-calendar"></span>
                <span>Editar Inspección</span>
            </strong>
    <a href="inspection.php"> <button class="pull-right btn-sm estaticButton contButtonT back">ATRAS</button></a>

        </div>

        <div class="panel-body">
            <div class="col-md-3">
            </div>
            <div class="col-md-12 edit_form">
                <form method="post" action="edit_inspection.php?id=<?php echo (int)$activity['id'];?>">
                  
                    <div class="col-md-6 cont_selectEdit" style="width:100%;">
                        <label for="name" class="control-label">Placa</label>
                        <input type="text" name="placa"
                            value="<?php echo remove_junk(ucfirst($activity['placa']));?>">
                    </div>
                    <div class="col-md-6 cont_selectEdit" style="width:100%;">
                        <label for="name" class="control-label">Conductor</label>
                        <input type="text" name="conductor"
                            value="<?php echo remove_junk(ucfirst($activity['conductor']));?>">
                    </div>

					 <div class="col-md-6 cont_selectEdit" style="width:100%;">
                        <label for="name" class="control-label">Brevete</label>
                        <input type="text" name="brevete"
                            value="<?php echo remove_junk(ucfirst($activity['brevete']));?>">
                    </div>
					 <div class="col-md-6 cont_ cont_selectEdit">
                           <label for="name" class="control-label">Seleccionar Empresa</label>
                        <select name="empresa"  data-show-subtext="true" data-live-search="true" <?php echo (int)$activity['id'];?> style="width:100%; border-radius:5px;">
                            <!-- Opciones de la lista -->
                            <option value="Agersa"
                                <?php if($activity['empresa']=="Agersa"){;?>selected <?php } ?>>
                                Agersa</option>
								
							<option value="Anticona"
                                <?php if($activity['empresa']=="Anticona"){;?>selected <?php } ?>>
                                Anticona</option>

                            <option value="Gemeva"
                                <?php if($activity['empresa']=="Gemeva"){;?>selected <?php } ?>>
                                Gemeva</option>

							<option value="Naranjo"
                                <?php if($activity['empresa']=="Naranjo"){;?>selected <?php } ?>>
                                Naranjo</option>
								
							<option value="Pepe el Toro"
                                <?php if($activity['empresa']=="Pepe el Toro"){;?>selected <?php } ?>>
                                Pepe el Toro</option>

                            <option value="Port Logistic"
                                <?php if($activity['empresa']=="Port Logistic"){;?>selected <?php } ?>>
                                Port Logistic</option>

							<option value="Rov Sac"
                                <?php if($activity['empresa']=="Rov Sac"){;?>selected <?php } ?>>
                                Rov Sac</option>

                            <option value="Uceda"
                                <?php if($activity['empresa']=="Uceda"){;?>selected <?php } ?>>
                                Uceda</option>
                        </select>
                    </div>
					 

					 <div class="col-md-6 cont_ cont_selectEdit">
                           <label for="name" class="control-label">¿Tiene manta tipo pañuelo?</label>
                        <select name="manta"  data-show-subtext="true" data-live-search="true" <?php echo (int)$activity['id'];?> style="width:100%;border-radius:5px;">
                            <!-- Opciones de la lista -->
                            <option value="Si"
                                <?php if($activity['manta']=="Si"){;?>selected <?php } ?>>
                                Si</option>
								
							<option value="No"
                                <?php if($activity['manta']=="No"){;?>selected <?php } ?>>
                                No</option>
                        </select>
                    </div>
                    <div class="col-md-6 cont_ cont_selectEdit">
                           <label for="name" class="control-label">¿Estado de la Manta?</label>
                        <select name="e_manta"  data-show-subtext="true" data-live-search="true" <?php echo (int)$activity['id'];?> style="width:100%;border-radius:5px;">
                            <!-- Opciones de la lista -->
                            <option value="Buena"
                                <?php if($activity['e_manta']=="Buena"){;?>selected <?php } ?>>
                                Buena</option>
								
							<option value="Sucia"
                                <?php if($activity['e_manta']=="Sucia"){;?>selected <?php } ?>>
                                Sucia</option>

                            <option value="Rota"
                                <?php if($activity['e_manta']=="Rota"){;?>selected <?php } ?>>
                                Rota</option>
                        </select>
                    </div>
                     <div class="col-md-6 cont_ cont_selectEdit">
                           <label for="name" class="control-label">¿Estado de la Soga?</label>
                        <select name="soga"  data-show-subtext="true" data-live-search="true" <?php echo (int)$activity['id'];?> style="width:100%;border-radius:5px;">
                            <!-- Opciones de la lista -->
                            <option value="Buena"
                                <?php if($activity['soga']=="Buena"){;?>selected <?php } ?>>
                                Buena</option>
								
							<option value="Mala"
                                <?php if($activity['soga']=="Mala"){;?>selected <?php } ?>>
                                Mala</option>
                        </select>
                    </div>
                    <div class="col-md-6 cont_selectEdit" style="width:100%;">
                        <label for="name" class="control-label">Observaciones</label>
                        <input type="text" name="observaciones"
                            value="<?php echo remove_junk(ucfirst($activity['observaciones']));?>">
                    </div>
                    <div class='clearfix'>
                        <button style='width:100%;border-radius: 35px;margin-top:10px' type="submit" name="edit_inspection"
                            class="btn btn-info blanco">Actualizar
                            Inspección</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



</body>
</html>
<!--====== Scripts -->
	<script src="./js/jquery-3.1.1.min.js"></script>
	<script src="./js/sweetalert2.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/material.min.js"></script>
	<script src="./js/ripples.min.js"></script>
	<script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="./js/main.js"></script>
	<script>
		$.material.init();
	</script>
<?php include_once('layouts/footer.php'); ?>