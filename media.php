<?php
  $page_title = 'Almacen-Chimbote';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(3);
 
  $table = "";
  //require_once('includes/load.php');
  $SuperUser = current_user();
  if( $SuperUser["sede"]=="T-Chimbote") $table="emb_tasachim";
  if( $SuperUser["sede"]=="T-Samanco") $table="emb_samanco";
  if( $SuperUser["sede"]=="T-Supe") $table="emb_supe";
  if( $SuperUser["sede"]=="T-Vegueta") $table="emb_vegueta";
  if( $SuperUser["sede"]=="T-Callao") $table="emb_callao";
  if( $SuperUser["sede"]=="T-Pisco") $table="emb_pisco";
  if( $SuperUser["sede"]=="T-Atico") $table="emb_atico";
  if( $SuperUser["sede"]=="T-Matarani") $table="emb_matarani";
  if( $SuperUser["sede"]=="E-Chimbote") $table="emb_exalmar_chim";
  if( $SuperUser["sede"]=="E-Chicama") $table="emb_exalmar_mala";
  
  $all_embarques = find_all($table)
?>
<?php
 if(isset($_POST['add_emb']))
 {
   $req_field = array('cod_contrato', 'cant_out', 'cod_ruma', 'date_out', 'supervisor');
   validate_fields($req_field);
   $cod_contrato = remove_junk($db->escape($_POST['cod_contrato']));
   $cant_out = remove_junk($db->escape($_POST['cant_out']));
   $cod_ruma = remove_junk($db->escape($_POST['cod_ruma']));
   $date_out = remove_junk($db->escape($_POST['date_out']));
   $supervisor = remove_junk($db->escape($_POST['supervisor']));
 

   if(empty($errors))
   {
      $sql  = "INSERT INTO $table (";
     $sql .=" cod_contrato,cant_out,cod_ruma,date_out,supervisor";
     $sql .=") VALUES (";
     $sql .=" '{$cod_contrato}', '{$cant_out}', '{$cod_ruma}', '{$date_out}', '{$supervisor}'";
     $sql .=")";
     $sql .=" ON DUPLICATE KEY UPDATE cod_contrato='{$cod_contrato}'";

      if($db->query($sql))
      
      {

        $findCatRuma = find_by_codRuma($table,$_POST['cod_ruma']);
        $restaSacos=(int)$findCatRuma["cant_saco"]-(int)$cant_out;

        if($restaSacos == 0)
        {
          $delete_cod_ruma= delete_by_id($table,$findCatRuma['id']);
            //$delete_id = delete_by_id('sede_tasachimbote',(int)$categorie['id']);
          if($delete_cod_ruma){
              $session->msg("s","Ruma despachada totalmente");
              redirect('media.php');
          } else {
              $delete_cod_ruma->msg("d","Eliminación falló");
              redirect('media.php');
          }

        }elseif($restaSacos > 0)
        {
          $sql   = "UPDATE $table SET";
          $sql  .=" cant_saco ='{$restaSacos}'";
          $sql .= " WHERE cod_ruma='{$findCatRuma['cod_ruma']}'";

          $result = $db->query($sql);
          if($result && $db->affected_rows() === 1) 
          {
            $session->msg("s", "Despacho actualizado con éxito");
            redirect('media.php',false);
          } else 
          {
            $session->msg("d", "Lo siento, actualización falló.");
            redirect('media.php',false);
          }

          $session->msg("s", "Ruma agregada exitosamente.");
          redirect('media.php',false);

        }elseif($restaSacos < 0)
        {
          $session->msg("d", "Verificar la Cantidad Sacos");
          redirect('media.php',false);
        }

        

      } else {
        $session->msg("d", "Lo siento, registro falló");
        redirect('media.php',false);
      }
   } else {
     $session->msg("d", $errors);
     redirect('media.php',false);
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
    <div class="col-md-3">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <span class="glyphicon glyphicon-th"></span>

            <span>Agregar Despacho</span>

           

         </strong>
        </div>
        <div class="panel-body">
          <form method="post" action="media.php">
            <div class="form-group">

               

                <input type="text" class="form-control" name="cod_contrato" placeholder="Contrato" required>

                <input type="text" class="form-control" name="cant_out" placeholder="Cantidad " required>
                <input type="text" class="form-control" name="cod_ruma" placeholder="Codigo Ruma" required>
                <input type="date" class="form-control" name="date_out" placeholder="Fecha de Salida" required>
                <input type="text" class="form-control" name="supervisor" placeholder="Supervisor" required>
      
            </div>

            <button type="submit" name="add_emb" class="btn btn-primary">Agregar Despacho</button>

   

        </form>
        </div>
      </div>
    </div>
    <div class="col-md-9">
    <div class="panel panel-default">
      <div class="panel-heading">
        <strong>
          <span class="glyphicon glyphicon-th"></span>

          <span>Lista de Despachos</span>

       </strong>
      </div>
        <div class="panel-body">
          <table class="table table-bordered table-striped table-hover" id="despacho">
            <thead>
                <tr>
                    <th class="text-center" style="width: 50px;">Id</th>
                    <th>CONTRATO</th>
                    <th class="text-center" style="width: 50px;">CANTIDAD</th>
                    <th>COD.RUMA</th>
                    <th class="text-center" style="width: 100px;">FECHA</th>
                    <th>SUPERVISOR</th>
                  
                </tr>
            </thead>
            <tbody>
              <?php foreach ($all_embarques as $embar):?>
                <tr>
                    <td class="text-center"><?php echo count_id();?></td>
                    <td><?php echo remove_junk(ucfirst($embar['cod_contrato'])); ?></td>
                    <td><?php echo remove_junk(ucfirst($embar['cant_out'])); ?></td>
                    <td><?php echo remove_junk(ucfirst($embar['cod_ruma'])); ?></td>
                    <td><?php echo remove_junk(ucfirst($embar['date_out'])); ?></td>
                    <td><?php echo remove_junk(ucfirst($embar['supervisor'])); ?></td>
                   
                  
                    <td class="text-center">
                      <div class="btn-group">
                        <a href="edit_embarcaciones.php?id=<?php echo (int)$embar['id'];?>"  class="btn btn-xs btn-warning" data-toggle="tooltip" title="Editar">
                          <span class="glyphicon glyphicon-edit"></span>
                        </a>
                        <a href="delete_media.php?id=<?php echo (int)$embar['id'];?>"  class="btn btn-xs btn-danger" data-toggle="tooltip" title="Eliminar">
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
  </div>
  <script>
  var tablita= document.querySelector("#despacho");
  var dataTable= new DataTable(tablita);
  </script>
  <?php include_once('layouts/footer.php'); ?>
