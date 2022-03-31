<!--   
 ====================================================================
        SGP - BUSINESS ( JHONATAN LARA && ABRAHAM VALVERDE)
 Descripción:Muestra Todas Las actividades
 Creado: 11/03/2022
 Chimbote Peru 
 ====================================================================
  
-->

<?php
  $page_title = 'SGP - ACTIVIDADES';
  require_once('includes/load.php');

  // Checkin What level user has permission to view this page
  page_require_level(4); // verifica el nivel de usuario 

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

 
  $all_actividades = find_all_sale();
  $all_actividades = find_all($tableActi)
?>

</div>
<?php include_once('layouts/footer.php'); ?>
<?php
 if(isset($_POST['add_actividad'])){
   $req_field = array('nameActivity', 'details', 'observation','auxiliares','hora_ini','hora_fin','fecha','date');
   validate_fields($req_field);
   $act_name = remove_junk($db->escape($_POST['nameActivity']));
   $act_details = remove_junk($db->escape($_POST['details']));
   $act_observation = remove_junk($db->escape($_POST['observation']));
   $act_aux = remove_junk($db->escape($_POST['auxiliares']));
   $act_ini = remove_junk($db->escape($_POST['hora_ini']));
   $act_fin = remove_junk($db->escape($_POST['hora_fin']));
   $act_fecha = remove_junk($db->escape($_POST['fecha']));
   $date   = make_date();

   if(empty($errors)){
      $sql  = "INSERT INTO $tableActi (";
     $sql .=" nameActivity,details,observation,auxiliares,hora_ini,hora_fin,fecha,date";
     $sql .=") VALUES (";
     $sql .=" '{$act_name}', '{$act_details}', '{$act_observation}','{$act_aux}','{$act_ini}','{$act_fin}', '{$act_fecha}', '{$date}'";
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
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Actividad</title>
     <!-- links para exportar a excel -->
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
   <div class="row">
    <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>Lista de Actividades</span>

       </strong>
       <!-- <button id="btnExportar" class="btn btn-success">
                <i class="fas fa-file-excel"></i> Exportar datos a Excel
            </button> -->
       <a href="add_actividad.php" class="btn btn-info pull-right">Agregar Actividad</a>
           <!-- <button   class="btn btn-primary" onclick="ImprimirPagina();" > Imprimir</button> -->
      </div>
        <div class="panel-body">
          <table class="table table-bordered table-striped table-hover " id="tabla" >
          
            <thead >
                <tr>
                    <th class="text-center" style="width: 50px;">Id</th>
                    <th class="text-center" style="width: 100px;">Actividad</th>
                    <th class="text-center" style="width: 100px;">Detalle</th>
                    <th class="text-center" style="width: 100px;">Observacion</th>
                    <th class="text-center" style="width: 100px;">auxiliares</th>
                    <th class="text-center" style="width: 100px;">Inició</th>
                    <th class="text-center" style="width: 100px;">Terminó</th>
                    <th class="text-center" style="width: 100px;">Fecha</th>
                    <th class="text-center" style="width: 100px;">Acciones</th>
                </tr>
            </thead>
            <tbody >
              <?php foreach ($all_actividades as $act):?>
                <tr>
                    <td class="text-center"><?php echo count_id();?></td>
                    <td><?php echo remove_junk(ucfirst($act['nameActivity'])); ?></td>
                    <td><?php echo remove_junk(ucfirst($act['details'])); ?></td>
                    <td><?php echo remove_junk(ucfirst($act['observation'])); ?></td>
                    <td><?php echo remove_junk(ucfirst($act['auxiliares'])); ?></td>
                    <td><?php echo remove_junk(ucfirst($act['hora_ini'])); ?></td>
                    <td><?php echo remove_junk(ucfirst($act['hora_fin'])); ?></td>
                    <td><?php echo remove_junk(ucfirst($act['fecha'])); ?></td>
                    
                    <td class="text-center">
                      <div class="btn-group">
                        <a href="edit_actividad.php?id=<?php echo (int)$act['id'];?>"  class="btn btn-xs btn-warning" data-toggle="tooltip" title="Editar">
                          <span class="glyphicon glyphicon-edit"></span>
                        </a>
                        <a href="delete_actividad.php?id=<?php echo (int)$act['id'];?>"  class="btn btn-xs btn-danger" data-toggle="tooltip" title="Eliminar">
                          <span class="glyphicon glyphicon-trash"></span>
                        </a>
                      </div>
                    </td>

                </tr>
                <!----------------------------------------------->
              
                <!----------------------------------------------->
                
              <?php endforeach; ?>
            </tbody>
     
          </table>
       </div>
      
    </div>
    
    </div>
   
   </div>
  
  </div>
  
  <!-- script para busqueda por celda -->
 <!-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.1.6/js/dataTables.fixedHeader.min.js"></script> 

 <script>
$(document).ready(function(){
    var table = $('#tabla').DataTable({
       orderCellsTop: true,
       fixedHeader: true 
    });

    //Creamos una fila en el head de la tabla y lo clonamos para cada columna
    $('#tabla thead tr').clone(true).appendTo( '#tabla thead' );

    $('#tabla thead tr:eq(1) th').each( function (i) {
        var title = $(this).text(); //es el nombre de la columna
        $(this).html( '<input type="text" placeholder="Buscar..." />' );
 
        $( 'input', this ).on( 'keyup change', function () {
            if ( table.column(i).search() !== this.value ) {
                table
                    .column(i)
                    .search( this.value )
                    .draw();
            }
        } );
    } );   
});

</script> -->
 
 
   <!-- script para exportar a excel -->
   <script>
    const $btnExportar = document.querySelector("#btnExportar"),
        $tabla = document.querySelector("#tabla");

    $btnExportar.addEventListener("click", function() {
        let tableExport = new TableExport($tabla, {
            exportButtons: false, // No queremos botones
            filename: "Reporte de prueba", //Nombre del archivo de Excel
            sheetname: "Reporte de Actividades", //Título de la hoja
        });
        let datos = tableExport.getExportData();
        let preferenciasDocumento = datos.tabla.xlsx;
        tableExport.export2file(preferenciasDocumento.data, preferenciasDocumento.mimeType, preferenciasDocumento.filename, preferenciasDocumento.fileExtension, preferenciasDocumento.merges, preferenciasDocumento.RTL, preferenciasDocumento.sheetname);
    });
</script>
  <script>
  function ImprimirPagina(){
    window.print();
    }
  </script>
  <?php include_once('layouts/footer.php'); ?>
  </body>
</html>            