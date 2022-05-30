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
  page_require_level(2);
  $tableActi = "";
  $SuperUser = current_user();
  if( $SuperUser["sede"]=="T-Chimb"){ $tableActi="activity_tasachim";$tabla_sed="sede_tasachimbote";}
  if( $SuperUser["sede"]=="T-Samanco") {$tableActi="activity_samanco";$tabla_sed="sede_samanco";}
  if( $SuperUser["sede"]=="T-Supe") {$tableActi="activity_supe";$tabla_sed="sede_supe";}
  if( $SuperUser["sede"]=="T-Vegueta"){ $tableActi="activity_vegueta";$tabla_sed="sede_vegueta";}
  if( $SuperUser["sede"]=="T-Callao") {$tableActi="activity_callao";$tabla_sed="sede_callao";}
  if( $SuperUser["sede"]=="T-Pisco") {$tableActi="activity_pisco";$tabla_sed="sede_pisco";}
  if( $SuperUser["sede"]=="T-Atico") {$tableActi="activity_atico";$tabla_sed="sede_atico";}
  if( $SuperUser["sede"]=="T-Matarani") {$tableActi="activity_matarani";$tabla_sed="sede_matarani";}
  if( $SuperUser["sede"]=="E-Chimbote") {$tableActi="activity_exalmar_chim";$tabla_sed="sede_exalmar_chim";}
  if( $SuperUser["sede"]=="E-Chicama") {$tableActi="activity_exalmar_mala";$tabla_sed="sede_exalmar_mala";}
?>
<?php
  //Display all catgories.
  $activity = find_by_id($tableActi,(int)$_GET['id']);
  if(!$activity){
    $session->msg("d","No se encontro Actividad id.");
    redirect('actividad.php');
  }
?>

<?php
if(isset($_POST['edit_actividad'])){
  $req_field = array('nameActivity', 'details', 'observation', 'auxiliares','hora_ini','hora_fin','fecha');
  validate_fields($req_field);
  $act_name = remove_junk($db->escape($_POST['nameActivity']));
  $act_details = remove_junk($db->escape($_POST['details']));
  $act_observation = remove_junk($db->escape($_POST['observation']));
  $act_aux = remove_junk($db->escape($_POST['auxiliares']));
  $act_ini = remove_junk($db->escape($_POST['hora_ini']));
  $act_fin = remove_junk($db->escape($_POST['hora_fin']));
  $act_fecha = remove_junk($db->escape($_POST['fecha']));
  $date=make_date();
  /**<var>$cat_name = remove_junk($db->escape($_POST['categorie-name']));
  $cat_name = remove_junk($db->escape($_POST['categorie-name']));</var>*/
  if(empty($errors)){
    $sql   = "UPDATE $tableActi SET";
    $sql  .=" nameActivity ='{$act_name}', details ='{$act_details}',";
    $sql  .=" observation ='{$act_observation}', auxiliares ='{$act_aux}', hora_ini ='{$act_ini}', hora_fin ='{$act_fin}', fecha ='{$act_fecha}', date ='{$date}'";
       $sql .= " WHERE id='{$activity['id']}'";
     $result = $db->query($sql);
     if($result && $db->affected_rows() === 1) {
       $session->msg("s", "Actividad actualizada con éxito.");
       redirect('actividad.php',false);
     } else {
       $session->msg("d", "Lo siento, actualización falló.");
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

    <div class="panel panel-default">
        <div class="panel-heading">
            <strong>
                <span class="glyphicon glyphicon-calendar"></span>
                <span>Editar Actividad</span>
            </strong>

        </div>

        <div class="panel-body">
            <div class="col-md-3">
            </div>
            <div class="col-md-12 edit_form">
                <form method="post" action="edit_actividad.php?id=<?php echo (int)$activity['id'];?>">
                    <div class="col-md-12 cont_selectEdit">
                        <select name="nameActivity" class="selectpicker" data-show-subtext="true" data-live-search="true" <?php echo (int)$activity['id'];?> style="width:100%;">
                            <!-- Opciones de la lista -->
                            <option value="Armado de eslingas"
                                <?php if($activity['nameActivity']=="Armado de eslingas"){;?>selected <?php } ?>>
                                Armado de eslingas</option>
								
							<option value="Descarga Provincia"
                                <?php if($activity['nameActivity']=="Descarga Provincia"){;?>selected <?php } ?>>
								
                            <option value="Recepcion de Producción"
                                <?php if($activity['nameActivity']=="Recepcion de Producción"){;?>selected <?php } ?>>
                                Recepcion de Producción</option> <!-- Opción por defecto -->
                            <option value="Monitoreo de Temperatura"
                                <?php if($activity['nameActivity']=="Monitoreo de Temperatura"){;?>selected <?php } ?>>
                                Monitoreo de Temperatura</option>
                                
                            <option value="Movimiento Interno"
                                <?php if($activity['nameActivity']=="Movimiento Interno"){;?>selected
                                <?php } ?>>Movimiento Interno</option>
                                
                            <option value="Corte y Vaceado a Dino"
                                <?php if($activity['nameActivity']=="Corte y Vaceado a Dino"){;?>selected
                                <?php } ?>>Corte y Vaceado a Dino</option>
                            
                                <option value="Eslinga a Piso"
                                <?php if($activity['nameActivity']=="Eslinga a Piso"){;?>selected
                                <?php } ?>>Eslinga a Piso</option>

                            <option value="Ventilación de sacos (Cachaquitos)"
                                <?php if($activity['nameActivity']=="Ventilación de sacos (Cachaquitos)"){;?>selected
                                <?php } ?>>Ventilación de sacos (Cachaquitos)</option>

                            <option value="Descarga/Carga eslinga"
                                <?php if($activity['nameActivity']=="Descarga/Carga eslinga"){;?>selected <?php } ?>>
                                Descarga/Carga eslinga</option>

                            <option value="Muestreo de rumas"
                                <?php if($activity['nameActivity']=="Muestreo de rumas"){;?>selected
                                <?php } ?>>Muestreo de rumas</option>

                            <option value="Borrado y codificado de código"
                                <?php if($activity['nameActivity']=="Borrado y codificado de código"){;?>selected
                                <?php } ?>>Borrado y codificado de código</option>

                            <option value="Manteado de plataformas"
                                <?php if($activity['nameActivity']=="Manteado de plataformas"){;?>selected <?php } ?>>
                                Manteado de plataformas</option>

                            <option value="Etiquetado de sacos"
                                <?php if($activity['nameActivity']=="Etiquetado de sacos"){;?>selected
                                <?php } ?>>Etiquetado de sacos</option>

                            <option value="Corte y vaceado en jumbo"
                                <?php if($activity['nameActivity']=="Corte y vaceado en jumbo"){;?>selected <?php } ?>>
                                Corte y vaceado en jumbo</option>

                            <option value="Seleccion y armado eslinga" <?php if($activity['nameActivity']=="Seleccion y armado eslinga"){;?>selected
                                <?php } ?>>Seleccion y armado eslinga</option>
                            <option value="Ventilación de sacos con HP" <?php if($activity['nameActivity']=="Ventilación de sacos con HP"){;?>selected
                                <?php } ?>>
                                Ventilación de sacos con HP</option>

                                 <option value="Embarque"
                                <?php if($activity['nameActivity']=="Embarque"){;?>selected <?php } ?>>
                                Embarque</option>

                                <option value="Trasiego de sacos"
                                <?php if($activity['nameActivity']=="Trasiego de sacos"){;?>selected <?php } ?>>
                                Trasiego de sacos</option>
                                
                                 <option value="Encintado y serrado de contenedores"
                                <?php if($activity['nameActivity']=="Encintado y serrado de contenedores"){;?>selected <?php } ?>>
                                Encintado y serrado de contenedores</option>

                                 <option value="Reproceso"
                                <?php if($activity['nameActivity']=="Reproceso"){;?>selected <?php } ?>>
                                Reproceso</option>

                                 <option value="Homogenizado"
                                <?php if($activity['nameActivity']=="Homogenizado"){;?>selected <?php } ?>>
                                Homogenizado</option>

                                 <option value="Mantenimiento"
                                <?php if($activity['nameActivity']=="Mantenimiento"){;?>selected <?php } ?>>
                                Mantenimiento</option>

                                 <option value="Corte de Drizas"
                                <?php if($activity['nameActivity']=="Corte de Drizas"){;?>selected <?php } ?>>
                                Corte de Drizas</option>

                                <option value="Control de Calidad"
                                <?php if($activity['nameActivity']=="Control de Calidad"){;?>selected <?php } ?>>
                                Control de Calidad</option>

                                <option value="Manteado de plataformas"
                                <?php if($activity['nameActivity']=="Manteado de plataformas"){;?>selected <?php } ?>>
                                Manteado de plataformas</option>

                                <option value="Limpieza de tanques de aceite"
                                <?php if($activity['nameActivity']=="Limpieza de tanques de aceite"){;?>selected <?php } ?>>
                                Limpieza de tanques de aceite</option>

                                <option value="Limpieza de mantas"
                                <?php if($activity['nameActivity']=="Limpieza de mantas"){;?>selected <?php } ?>>
                                Limpieza de mantas</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Detalles</label>
                        <input type="text" class="form-control" name="details"
                            value="<?php echo remove_junk(ucfirst($activity['details']));?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Observación</label>
                        <input type="text" class="form-control" name="observation"
                            value="<?php echo remove_junk(ucfirst($activity['observation']));?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Auxiliares</label>
                        <input type="text" class="form-control" name="auxiliares"
                            value="<?php echo remove_junk(ucfirst($activity['auxiliares']));?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Hora Inicial</label>
                        <input type="time" class="form-control" name="hora_ini"
                            value="<?php echo remove_junk(ucfirst($activity['hora_ini']));?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Hora Final</label>
                        <input type="time" class="form-control" name="hora_fin"
                            value="<?php echo remove_junk(ucfirst($activity['hora_fin']));?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Fecha</label>
                        <input type="date" class="form-control" name="fecha"
                            value="<?php echo remove_junk(ucfirst($activity['fecha']));?>">
                    </div>

            
                    <div class='form-group clearfix'>
                        <button style='width:100%;border-radius: 35px;margin-top:10px' type="submit" name="edit_actividad"
                            class="btn btn-primary">Actualizar
                            Actividad</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>




<?php include_once('layouts/footer.php'); ?>