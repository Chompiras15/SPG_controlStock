<?php
  $page_title = 'Almacen-Chimbote';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(4);
 
  $table = "";
  $tabla_sed="";
  //require_once('includes/load.php');
  $SuperUser = current_user();
  if( $SuperUser["sede"]=="T-Chimbote"){ $table="emb_tasachim";$tabla_sed="sede_tasachimbote";}
  if( $SuperUser["sede"]=="T-Samanco") {$table="emb_samanco";$tabla_sed="sede_samanco";}
  if( $SuperUser["sede"]=="T-Supe") {$table="emb_supe";$tabla_sed="sede_supe";}
  if( $SuperUser["sede"]=="T-Vegueta"){ $table="emb_vegueta";$tabla_sed="sede_vegueta";}
  if( $SuperUser["sede"]=="T-Callao") {$table="emb_callao";$tabla_sed="sede_callao";}
  if( $SuperUser["sede"]=="T-Pisco") {$table="emb_pisco";$tabla_sed="sede_pisco";}
  if( $SuperUser["sede"]=="T-Atico") {$table="emb_atico";$tabla_sed="sede_atico";}
  if( $SuperUser["sede"]=="T-Matarani") {$table="emb_matarani";$tabla_sed="sede_matarani";}
  if( $SuperUser["sede"]=="E-Chimbote") {$table="emb_exalmar_chim";$tabla_sed="sede_exalmar_chim";}
  if( $SuperUser["sede"]=="E-Chicama") {$table="emb_exalmar_mala";$tabla_sed="sede_exalmar_mala";}
  
  $all_embarques = find_all($table)
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Despachos</title>
  <!-- Script para exportar a excel -->
  <!-- <script src="https://unpkg.com/xlsx@0.16.9/dist/xlsx.full.min.js"></script>
    <script src="https://unpkg.com/file-saverjs@latest/FileSaver.min.js"></script>
    <script src="https://unpkg.com/tableexport@latest/dist/js/tableexport.min.js"></script> -->
    <style>
/*estilos para la tabla*/
table th {
background-color: #001f3f;;
color: white;   
}
</style>
</head>
<body>



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

          <span>Lista de Despachos</span>

          <!-- <button id="btnExportar" class="btn btn-success">
                <i class="fas fa-file-excel"></i> Exportar datos a Excel
            </button> -->
          <a href="add_media.php" class="btn btn-info pull-right">Agregar Despacho</a>
          
          <!-- <button   class="btn btn-primary" onclick="ImprimirPagina();" > Imprimir</button> -->

          <a href="add_media.php" class="btn btn-info pull-right">Agregar Despacho</a>

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

 
  <?php include_once('layouts/footer.php'); ?>
