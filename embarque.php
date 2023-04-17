<?php
  $page_title = 'Almacen-Chimbote';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(5);
 
  $table = "";
  $tabla_sed="";
  //require_once('includes/load.php');
  $SuperUser = current_user();
  if( $SuperUser["sede"]=="T-Chimb"){ $table="emb_tasachim";$tabla_sed="sede_tasachimbote";}
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
<html lang="es">

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
        background-color: #001f3f;
        ;
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
            <div class="panel-heading clearfix contTitleTT">
                <strong>
                    <span class="glyphicon glyphicon-sort"></span>

                    <span>Lista de Despachos</span>
                  </strong>
                  <a href="add_embarque.php?option=0" class="pull-right contButtonTT"><i class="iconCat glyphicon glyphicon-plus-sign" title="Nuevo Despacho"></i></a>
                  <?php if( $SuperUser["sede"]=="T-Callao")  {?> 
                    <a href="add_container.php" style="right: 90px !important;"class="pull-right contButtonTT"><i class="iconCat glyphicon glyphicon-inbox" title="Nuevo Container"></i></a>
                    <a href="add_embarque.php?option=1" style="right: 155px !important;"class="pull-right contButtonTT"><i class="iconCat glyphicon glyphicon-ban-circle" title="Despacho Producto no Conforme"></i></a>
          
                <?php } ?>
             
            </div>
            <div class="panel-body">
                <table class="table table-bordered table-striped table-hover" id="tabla">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 50px;">Id</th>
                            <th>Contrato</th>
                            <th class="text-center" style="width: 50px;">Cantidad</th>
                            <th>Cod.Ruma</th>
                            <?php  if( $SuperUser["sede"]=="T-Callao"|| $SuperUser["sede"]=="T-Chimb" || $SuperUser["sede"]=="T-Vegueta"){?>  <th class="text-center" style="width: 50px;">Placa</th> <?php } ?>
                            <?php  if( $SuperUser["sede"]=="T-Callao"){?>  <th class="text-center" style="width: 50px;">Container</th> <?php } ?>
                            <th class="text-center" style="width: 100px;">Fecha</th>
                            <th>Supervisor</th>
                            <?php if( $SuperUser["sede"]=="E-Chimbote") {?><th class="text-center"
                                style="width: 100px;">Almacen</th> <?php } ?>
                            
                             <?php if( $SuperUser["sede"]=="T-Callao") {?>
                                <th class="text-center" style="width: 100px;">Tipo</th> <?php } ?>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($all_embarques as $embar):?>
                        <tr>
                            <td class="text-center"><?php echo count_id();?></td>
                            <td><?php echo remove_junk(ucfirst($embar['cod_contrato'])); ?></td>
                            <td><?php echo remove_junk(ucfirst($embar['cant_out'])); ?></td>
                            <td><?php echo remove_junk(ucfirst($embar['cod_ruma'])); ?></td>
                            <?php if( $SuperUser["sede"]=="T-Callao"|| $SuperUser["sede"]=="T-Chimb" || $SuperUser["sede"]=="T-Vegueta") {?>
                                <td><?php echo remove_junk(ucfirst($embar['placa'])); ?></td><?php } ?>
                            <?php if( $SuperUser["sede"]=="T-Callao") {?>
                                <td><?php echo remove_junk(ucfirst($embar['cod_container'])); ?></td><?php } ?>
                            <td><?php echo read_onlyDate($embar['date_out']); ?></td>
                            <td><?php echo remove_junk(ucfirst($embar['supervisor'])); ?></td>
                            <?php if( $SuperUser["sede"]=="E-Chimbote") {?><td>
                                <?php echo remove_junk(ucfirst($act['almacen'])); ?></td> <?php } ?>
                             <?php if( $SuperUser["sede"]=="T-Callao") {?>
                                <td><?php echo remove_junk(ucfirst($embar['type'])); ?></td><?php } ?>

                            <td class="text-center">
                                <div class="btn-group">
                                    <a style ="margin-right: 7px;padding: 5px;" href="edit_embarcaciones.php?id=<?php echo (int)$embar['id'];?>"
                                        class="btn btn-xs btn-warning" data-toggle="tooltip" title="Editar">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a style ="padding: 5px;" href="delete_embarque.php?id=<?php echo (int)$embar['id'];?>"
                                        class="btn btn-xs btn-danger" data-toggle="tooltip" title="Eliminar">
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

    <!-- Busqueda por columna -->

    <script>
        var today=Date.now();
            var t=new Date(today);
    $(document).ready(function() {
        var table = $('#tabla').DataTable({
            responsive: true,
            dom: 'B<"clear">lfrtp',
            fixedColumns: true,
            fixedHeader: true,
            scrollCollapse: true,
            autoWidth: true,
            ordering: false,
            scrollCollapse: true,
            lengthMenu: [
                [5, 10, 25, 50, -1],
                [5, 10, 25, 50, "All"]
            ],
            info: true,
            columnDefs: [{
                targets: "_all",
                sortable: false,
                className: "text-center"
            }],
            // cambiamos el lenguaje
            language: {
                "lengthMenu": "_MENU_",
                "zeroRecords": "No se encontraron resultados",
                "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sSearch": "",
                "searchPlaceholder": "Buscar",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast": "Último",
                    "sNext": "Siguiente",
                    "sPrevious": "Anterior"
                },
                "sProcessing": "Procesando...",

            },
            //para usar los botones de excel, imprimir y pdf  
            responsive: "true",
            dom: 'Bfrtlp',

            buttons: [{
                    extend: 'excelHtml5',
                    text: '<i class="glyphicon glyphicon-cloud-download"></i> ',
                    titleAttr: 'Exportar a Excel',
                    title: 'SGP - BUSINESS_REPORTE DE DESPACHOS  '+t.getDate()+'/'+(parseInt(t.getMonth())+1)+'/'+t.getFullYear()+"  "+t.getHours()+":"+t.getMinutes()+":"+t.getSeconds(),
                    className: 'btn btn-success',
                       exportOptions: {
                 columns: function(column, data, node) {
                        if (column < 8) {//Oculta todas las columnas
                            return true;
                        }
                        return false;
                    }
                },
                     excelStyles:{
                            template:'blue_gray_medium'
                        }
                },
                {
                    extend: 'pdfHtml5',
                    text: '<i class="glyphicon glyphicon-file"></i> ',
                    titleAttr: 'Exportar a PDF',
                    title: 'SGP - BUSINESS_REPORTE DE DESPACHOS  '+t.getDate()+'/'+(parseInt(t.getMonth())+1)+'/'+t.getFullYear()+"  "+t.getHours()+":"+t.getMinutes()+":"+t.getSeconds(),
                    className: 'btn btn-danger',
                       exportOptions: {
                 columns: function(column, data, node) {
                        if (column < 8) {//Oculta todas las columnas
                            return true;
                        }
                        return false;
                    }
                },
                },
                {
                    extend: 'print',
                    text: '<i class="glyphicon glyphicon-print"></i> ',
                    titleAttr: 'Imprimir',
                    title: 'SGP - BUSINESS_REPORTE DE DESPACHOS',
                    className: 'btn btn-info',
                       exportOptions: {
                 columns: function(column, data, node) {
                        if (column < 8) {//Oculta todas las columnas
                            return true;
                        }
                        return false;
                    }
                },
                },
            ],

            "createdRow": function(row, data, index) {
                // elegimos la columna para sumae
            },
            "drawCallback": function() {
                //alert("La tabla se está recargando");
                var api = this.api();
                $(api.column(3).footer()).html(
                    'Total: ' + api.column(3, {
                        page: 'current'
                    }).data().sum()
                )
            }


        });
        // sumamos y mostramos el total
        var tot = table.column(3).data().sum();
        $("#total").text(tot);


    });
    </script>


    <?php include_once('layouts/footer.php'); ?>
</body>
</html>