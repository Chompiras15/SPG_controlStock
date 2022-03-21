<!--   
 ====================================================================
        SGP - BUSINESS ( JHONATAN LARA && ABRAHAM VALVERDE)
 Descripción:Agrega Actividades
 Creado: 11/03/2022
 Chimbote Peru 
 ====================================================================
  
-->

<?php
  $page_title = 'Almacen-Chimbote';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(1,3);
  
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

  $all_actividades = find_all($tableActi)
?>
<?php
 if(isset($_POST['add_actividad'])){
   $req_field = array('nameActivity', 'details','observation','auxiliares','hora_ini','hora_fin','fecha');
   validate_fields($req_field);
   $act_name = remove_junk($db->escape($_POST['nameActivity']));
   $act_details = remove_junk($db->escape($_POST['details']));
   $act_observation = remove_junk($db->escape($_POST['observation']));
   $act_aux = remove_junk($db->escape($_POST['auxiliares']));
   $act_ini = remove_junk($db->escape($_POST['hora_ini']));
   $act_fin = remove_junk($db->escape($_POST['hora_fin']));
   $act_fecha = remove_junk($db->escape($_POST['fecha']));

   $dates   = make_date();

   if(empty($errors)){
      $sql  = "INSERT INTO $tableActi (";
     $sql .=" nameActivity,details,observation,auxiliares,hora_ini,hora_fin,fecha,date";
     $sql .=") VALUES (";
     $sql .=" '{$act_name}', '{$act_details}', '{$act_observation}', '{$act_aux}', '{$act_ini}', '{$act_fin}', '{$act_fecha}', '{$dates}'";
     $sql .=")";
     $sql .=" ON DUPLICATE KEY UPDATE nameActivity='{$act_name}'";

      if($db->query($sql)){
        $session->msg("s", "Actividad agregada exitosamente.");
        redirect('actividad.php',false);
      } else {
        $session->msg("d", "Lo siento, registro falló");
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
  </div>
   <div class="row">
     
   <div class="col-md-5">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <span class="glyphicon glyphicon-th"></span>
            <span>Agregar Actividad</span>
         </strong>
        </div>
        <?php  
        date_default_timezone_set("America/Lima");
        $fecha_actual=date("Y-m-s H:i:s");   
         ?>
        <div class="panel-body">
          <form method="post" action="add_actividad.php">
            <div class="form-group">
            <label for="nameActivity">Selecciona Actividad:</label>
              <select class="form-control" name="nameActivity">
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
                <input type="text" class="form-control" name="details" placeholder="Detalle" required>
                <input type="text" class="form-control" name="observation" placeholder="Observacion" required>
                <input type="text" class="form-control" name="auxiliares" placeholder="Auxiliares" required>
                <label for="hora_ini">Hora de inicio</label>
                <input  type="time" class="form-control" name="hora_ini"  placeholder="Inició" required>
                <label for="hora_fin">Hora de fin:</label>
                <input  type="time" class="form-control" name="hora_fin"  placeholder="Terminó" required>
                <input  type="date" class="form-control" name="fecha"  placeholder="Fecha" required>
                
                
              </div>
            
            <button  type="submit" name="add_actividad" class="btn btn-primary">Agregar Actividad</button>
        
          </form>
        </div>
      </div>
    </div>
    
   <!-- <div class="col-md-10">
    <div class="panel panel-default">
      <div class="panel-heading">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>Lista de Actividades</span>

       </strong>
       <a href="add_actividad.php" class="btn btn-info pull-right">Agregar Actividad</a>
      </div>
        <div class="panel-body">
          <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th class="text-center" style="width: 50px;">Id</th>
                    <th class="text-center" style="width: 100px;">Actividad</th>
                    <th class="text-center" style="width: 100px;">Detalle</th>
                    <th class="text-center" style="width: 100px;">Fecha</th>
                    <th class="text-center" style="width: 100px;">Acciones</th>
                </tr>
            </thead>
            <tbody>
              <?php foreach ($all_actividades as $act):?>
                <tr>
                    <td class="text-center"><?php echo count_id();?></td>
                    <td><?php echo remove_junk(ucfirst($act['nameActivity'])); ?></td>
                    <td><?php echo remove_junk(ucfirst($act['details'])); ?></td>
                    <td><?php echo remove_junk(ucfirst($act['fecha'])); ?></td>
                    <td class="text-center">
                      <div class="btn-group">
                        <a href="edit_categorie.php?id=<?php echo (int)$cat['id'];?>"  class="btn btn-xs btn-warning" data-toggle="tooltip" title="Editar">
                          <span class="glyphicon glyphicon-edit"></span>
                        </a>
                        <a href="delete_categorie.php?id=<?php echo (int)$cat['id'];?>"  class="btn btn-xs btn-danger" data-toggle="tooltip" title="Eliminar">
                          <span class="glyphicon glyphicon-trash"></span>
                        </a>
                      </div>
                    </td>

                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
       </div>
    </div>
    </div>
   </div>
  </div>-->
  <?php include_once('layouts/footer.php'); ?>
