
<!--   
 ====================================================================
        SGP - BUSINESS ( JHONATAN LARA && ABRAHAM VALVERDE)
 Descripción:Muestra Todas Las actividades y Agrega adicionalmente
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
  page_require_level(4);
  if( $SuperUser["sede"]=="T-Chimbote") $table="sede_tasachimbote";
  if( $SuperUser["sede"]=="T-Samanco") $table="sede_samanco";
  if( $SuperUser["sede"]=="T-Supe") $table="sede_supe";
  if( $SuperUser["sede"]=="T-Vegueta") $table="sede_vegueta";
  if( $SuperUser["sede"]=="T-Callao") $table="sede_callao";
  if( $SuperUser["sede"]=="T-Pisco") $table="sede_pisco";
  if( $SuperUser["sede"]=="T-Atico") $table="sede_atico";
  if( $SuperUser["sede"]=="T-Matarani") $table="sede_matarani";
  if( $SuperUser["sede"]=="E-Chimbote") $table="sede_exalmar_chim";
  if( $SuperUser["sede"]=="E-Chicama") $table="sede_exalmar_mala";
  
  $all_categories = find_all($table)
?>

<?php include_once('layouts/header.php'); ?>

  <div class="row">
     <div class="col-md-12">
       <?php echo display_msg($msg); ?>
     </div>
  </div>
  
    <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
      <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>Lista de Rumas</span>

       </strong>
       <a href="add_categorie.php" class="btn btn-info pull-right">Agregar Ruma</a>
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
