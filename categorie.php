<?php
  $page_title = 'Almacen-Chimbote';
  require_once('includes/load.php');
  $table = "";
  //require_once('includes/load.php');
  $SuperUser = current_user();
  // Checkin What level user has permission to view this page
  page_require_level(3);
  if( $SuperUser["sede"]=="Chimbote") $table="sede_tasachimbote";
  if( $SuperUser["sede"]=="Atico") $table="sede_atico";

  $all_categories = find_all($table)
?>
<?php
 if(isset($_POST['add_cat']))
 {
   $findCatRuma = find_by_codRuma($table,$_POST['cod_ruma']);
   $req_field = array('sector', 'cod_ruma', 'cant_saco', 'date_producc', 'date_vencimiento', 'calidad', 'nicho');
    validate_fields($req_field);

    $cat_sector = remove_junk($db->escape($_POST['sector']));
    $cat_ruma = remove_junk($db->escape($_POST['cod_ruma']));
    $cat_sacos = remove_junk($db->escape($_POST['cant_saco']));
    $cat_producc = remove_junk($db->escape($_POST['date_producc']));
    $cat_caduca = remove_junk($db->escape($_POST['date_vencimiento']));
    $cat_calidad = remove_junk($db->escape($_POST['calidad']));
    $cat_nicho = remove_junk($db->escape($_POST['nicho']));
    $date   = make_date();

    $sumaSacos=(int)$cat_sacos+(int)$findCatRuma["cant_saco"];
    
    if($sumaSacos<=1000)
    {
        if(!$findCatRuma)
        {

            if(empty($errors))
            {
              $sql  = "INSERT INTO $table (";
              $sql .=" sector,cod_ruma,cant_saco,date_producc,date_vencimiento,calidad,nicho,date_almacenamiento";
              $sql .=") VALUES (";
              $sql .=" '{$cat_sector}', '{$cat_ruma}', '{$cat_sacos}', '{$cat_producc}', '{$cat_caduca}', '{$cat_calidad}', '{$cat_nicho}', '{$date}'";
              $sql .=")";
              $sql .=" ON DUPLICATE KEY UPDATE cod_ruma='{$cat_ruma}'";
        
              if($db->query($sql)){
                $session->msg("s", "Ruma agregada exitosamente.");
                redirect('categorie.php',false);
              } else {
                $session->msg("d", "Lo siento, registro falló");
                redirect('categorie.php',false);
              }
            } else {
              $session->msg("d", $errors);
              redirect('categorie.php',false);
            }

          
        
            
        }else 
        {
            //UPDATE DATA ALMACEN 
            

            $sql   = "UPDATE $table SET";
            $sql  .=" sector ='{$cat_sector}',cod_ruma ='{$cat_ruma}',";
            $sql  .=" cant_saco ='{$sumaSacos}',date_producc ='{$cat_producc}', date_vencimiento ='{$cat_caduca}', calidad ='{$cat_calidad}',nicho='{$cat_nicho}',date_almacenamiento='{$date}'";
            $sql .= " WHERE cod_ruma='{$findCatRuma['cod_ruma']}'";

            $result = $db->query($sql);
            if($result && $db->affected_rows() === 1) 
            {
              $session->msg("s", "Categoría actualizada con éxito.");
              redirect('categorie.php',false);
            } else 
            {
              $session->msg("d", "Lo siento, actualización falló.");
              redirect('categorie.php',false);
            }
          
        }

    }else{
      $session->msg("d", "La Ruma ".$cat_ruma. " Excede la cantidad limite de sacos");
      redirect('categorie.php',false);
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
            <span>Agregar Ruma</span>
         </strong>
        </div>
        <div class="panel-body">
          <form method="post" action="categorie.php">
            <div class="form-group">
                <input type="text" class="form-control" name="sector" placeholder="Sector" required>
                <input type="text" class="form-control" name="cod_ruma" placeholder="Codigo ruma" required>
                <input type="text" class="form-control" name="cant_saco" placeholder="Cantidad sacos" required>
                <input type="date" class="form-control" name="date_producc" placeholder="Fecha produccion" required>
                <input type="date" class="form-control" name="date_vencimiento" placeholder="Fecha caducidad" required>
                <input type="text" class="form-control" name="calidad" placeholder="Calidad" required>
                <input type="text" class="form-control" name="nicho" placeholder="Nicho" required>
            </div>
            <button type="submit" name="add_cat" class="btn btn-primary">Agregar Ruma</button>
        </form>
        </div>
      </div>
    </div>
    <div class="col-md-9">
    <div class="panel panel-default">
      <div class="panel-heading">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>Lista de Rumas</span>
       </strong>
      </div>
        <div class="panel-body">
          <table class="table table-bordered table-striped table-hover" id="almacen">
            <thead>
                <tr>
                    <th class="text-center" style="width: 50px;">Id</th>
                    <th>Cod.Ruma</th>
                    <th class="text-center" style="width: 50px;">Sector</th>
                    <th>Cant_sacos</th>
                    <th class="text-center" style="width: 50px;">Calidad</th>
                    <th>Nicho</th>
                    <th>Fecha</th>
                    <th class="text-center" style="width: 100px;">Acciones</th>
                </tr>
            </thead>
            <tbody>
              <?php foreach ($all_categories as $cat):?>
                <tr>
                    <td class="text-center"><?php echo count_id();?></td>
                    <td><?php echo remove_junk(ucfirst($cat['cod_ruma'])); ?></td>
                    <td><?php echo remove_junk(ucfirst($cat['sector'])); ?></td>
                    <td><?php echo remove_junk(ucfirst($cat['cant_saco'])); ?></td>
                    <td><?php echo remove_junk(ucfirst($cat['calidad'])); ?></td>
                    <td><?php echo remove_junk(ucfirst($cat['nicho'])); ?></td>
                    <td><?php echo remove_junk(ucfirst($cat['date_almacenamiento'])); ?></td>
                   
                  
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
  </div>
  <script>
  var tablita= document.querySelector("#almacen");
  var dataTable= new DataTable(tablita);
  </script>

  <?php include_once('layouts/footer.php'); ?>
