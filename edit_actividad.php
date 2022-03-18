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
  page_require_level(1);
  $tableActi = "";
  $SuperUser = current_user();
  if( $SuperUser["sede"]=="T-Chimbote"){ $tableActi="activity_tasachim";$tabla_sed="sede_tasachimbote";}
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
  $req_field = array('nameActivity', 'details', 'observation', 'auxiliares','hora_ini','hora_fin');
  validate_fields($req_field);
  $act_name = remove_junk($db->escape($_POST['nameActivity']));
  $act_details = remove_junk($db->escape($_POST['details']));
  $act_observation = remove_junk($db->escape($_POST['observation']));
  $act_aux = remove_junk($db->escape($_POST['auxiliares']));
  $act_ini = remove_junk($db->escape($_POST['hora_ini']));
  $act_fin = remove_junk($db->escape($_POST['hora_fin']));
  $date=make_date();
  /**<var>$cat_name = remove_junk($db->escape($_POST['categorie-name']));
  $cat_name = remove_junk($db->escape($_POST['categorie-name']));</var>*/
  if(empty($errors)){
    $sql   = "UPDATE $tableActi SET";
    $sql  .=" nameActivity ='{$act_name}', details ='{$act_details}',";
    $sql  .=" observation ='{$act_observation}', auxiliares ='{$act_aux}', hora_ini ='{$act_ini}', hora_fin ='{$act_fin}', date ='{$date}'";
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
   <div class="col-md-5">
     <div class="panel panel-default">
       <div class="panel-heading">
         <strong>
           <span class="glyphicon glyphicon-th"></span>
           <span>Editando <?php echo remove_junk(ucfirst($activity['nameActivity']));?></span>
           <span>Editando <?php echo remove_junk(ucfirst($activity['details']));?></span>
           <span>Editando <?php echo remove_junk(ucfirst($activity['observation']));?></span>
           <span>Editando <?php echo remove_junk(ucfirst($activity['auxiliares']));?></span>
           <span>Editando <?php echo remove_junk(ucfirst($activity['hora_ini']));?></span>
           <span>Editando <?php echo remove_junk(ucfirst($activity['hora_fin']));?></span>
           
           
        </strong>
       </div>
       <div class="panel-body">
         <form method="post" action="edit_actividad.php?id=<?php echo (int)$activity['id'];?>">
           <div class="form-group">
           Selecciona la Actividad:
              <select name="nameActivity" <?php echo (int)$activity['id'];?>>
         <!-- Opciones de la lista -->
               <option value="Embarque" selected>Descarga/Carga eslinga</option>
               <option value="Etiquetado de sacos" >Etiquetado de sacos</option> <!-- Opción por defecto -->
               <option value="Monitoreo de Temperatura">Monitoreo de Temperatura</option>
               <option value="Seleccion y armado eslinga">Seleccion y armado eslinga</option>
               <option value="Ventilacion de sacos con HP">Ventilacion de sacos con HP</option>
               <option value="Corte y vaceado jumbo">Corte y vaceado jumbo</option>
               <option value="Seleccion y armado eslinga">Seleccion y armado eslinga</option>
               <option value="Reproceso por Homogenizado">Reproceso por Homogenizado</option>
               <option value="Manteado de plataformas">Manteado de plataformas</option>
               <option value="Limpieza de tanques de aceite">Limpieza de tanques de aceite</option>
               <option value="Limpieza de mantas">Limpieza de mantas</option>
               <option value="Embarque">Embarque</option>
               <option value="Manteniminto">Manteniminto</option>
               </select>
               <input type="text" class="form-control" name="details" value="<?php echo remove_junk(ucfirst($activity['details']));?>">
               <input type="text" class="form-control" name="observation" value="<?php echo remove_junk(ucfirst($activity['observation']));?>">
               <input type="text" class="form-control" name="auxiliares" value="<?php echo remove_junk(ucfirst($activity['auxiliares']));?>">
               <input type="time" class="form-control" name="hora_ini" value="<?php echo remove_junk(ucfirst($activity['hora_ini']));?>">
               <input type="time" class="form-control" name="hora_fin" value="<?php echo remove_junk(ucfirst($activity['hora_fin']));?>">

           </div>
           <button type="submit" name="edit_actividad" class="btn btn-primary">Actualizar Actividad</button>
       </form>
       </div>
     </div>
   </div>
</div>



<?php include_once('layouts/footer.php'); ?>
