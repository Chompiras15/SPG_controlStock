<!--   
 ====================================================================
        SGP - BUSINESS ( JHONATAN LARA && ABRAHAM VALVERDE)
 Descripción:Muestra Todas Las actividades y Agrega adicionalmente
 Creado: 11/03/2022
 Chimbote Peru :D
 ====================================================================
  
-->

<?php
  $page_title = 'Almacen-Chimbote';
  require_once('includes/load.php');
  $table = "";
  //require_once('includes/load.php');
  $SuperUser = current_user();
  // Checkin What level user has permission to view this page
  page_require_level(5);
  if( $SuperUser["sede"]=="T-Chimb") {$table="temp_tasachimbote";$tableSed="sede_tasachimbote";}
  if( $SuperUser["sede"]=="T-Samanco") {$table="temp_samanco";$tableSed="sede_samanco";}
  if( $SuperUser["sede"]=="T-Supe") {$table="temp_supe";$tableSed="sede_supe";}
  if( $SuperUser["sede"]=="T-Vegueta") {$table="temp_vegueta";$tableSed="sede_vegueta";}
  if( $SuperUser["sede"]=="T-Callao") {$table="temp_callao"; $tableSed="sede_callao";}
  if( $SuperUser["sede"]=="T-Pisco") {$table="temp_pisco";$tableSed="sede_pisco";}
  if( $SuperUser["sede"]=="T-Atico") {$table="temp_atico";$tableSed="sede_atico";}
  if( $SuperUser["sede"]=="T-Matarani") {$table="temp_matarani"; $tableSed="sede_matarani";}
  if( $SuperUser["sede"]=="E-Chimbote") {$table="exalmar_temp_chim";$tableSed="sede_exalmar_chim";}
  if( $SuperUser["sede"]=="E-Chicama") {$table="temp_exalmar_mala";$tableSed="sede_exalmar_mala";}
  
  $all_temperature = find_all($table)
?>


<html lang="en">

<head>
    <style>
    /*estilos para la tabla sx*/
    table th {
        background-color: #001f3f;
        color: white;
    }
    </style>

</head>

<body>

    <?php include_once('layouts/header.php'); 
    
    function addFilter($temp,$filter)
    {
        if($temp['typeRuma']=="BHT") {?> 
            <?php if((float)$temp[$filter]>=50)  {?> <td style="background: #FF5252;"><?php echo remove_junk(ucfirst($temp[$filter])).' ºC. <br><b> CACHACO </b>'; ?></td><?php } ?>
            <?php if((float)$temp[$filter]>=47 && (float)$temp[$filter]<=49.9) {?> <td style="background:#f58425;"><?php echo remove_junk(ucfirst($temp[$filter])).' ºC. <br> <b> Eslinga Piso </b>'; ?></td><?php } ?>
            <?php if((float)$temp[$filter]>=38 && (float)$temp[$filter]<=46.9)  {?> <td style="background: #FAE22E;"><?php echo remove_junk(ucfirst($temp[$filter])).' ºC. <br> <b> Ventilación de Ruma </b> '; ?></td><?php } ?>
            <?php if((float)$temp[$filter]<=37.9)  {?> <td style="background:#78FA37;"><?php echo remove_junk(ucfirst($temp[$filter])).' ºC. <br>  <b> Ruma Tapada </b> '; ?></td><?php } 
          }else{?>
            <?php if((float)$temp[$filter]>=50){?> <td style="background:#FF5252;"><?php echo remove_junk(ucfirst($temp[$filter])).' ºC. <br> <b> CACHACO </b> '; ?></td><?php } ?>
            <?php if((float)$temp[$filter]>=47 && (float)$temp[$filter]<=49.9) {?> <td style="background:#f58425;"><?php echo remove_junk(ucfirst($temp[$filter])).' ºC. <br> <b>  Eslinga Piso </b> '; ?></td><?php } ?>
            <?php if((float)$temp[$filter]>=36 && (float)$temp[$filter]<=46.9)  {?> <td style="background: #FAE22E;"><?php echo remove_junk(ucfirst($temp[$filter])).' ºC. <br> <b>  Ventilación de Ruma </b> '; ?></td><?php } ?>
            <?php if((float)$temp[$filter]<=35.9) {?> <td style="background:#78FA37;"><?php echo remove_junk(ucfirst($temp[$filter])).' ºC. <br>  <b> Ruma Tapada </b> '; ?></td><?php } 
        } 
    }
    ?>

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
                    <span class="glyphicon glyphicon-filter"></span>
                    <span>Monitoreo de Temperaturas</span>

                </strong>

                <a href="add_temperature.php" class="pull-right contButtonTT" ><i class="iconCat glyphicon glyphicon-plus-sign" title="Nuevo Usuario"></i></a>

            </div>
            <div class="panel-body">

                <table style="width:100%;"class="table table-bordered table-striped table-hover" id="tabla">

                    <thead>

                        <tr>
                            <!-- <th class="text-center" style="width: 5px;">Id</th> -->
                            <th class="text-center" style="width: 30px;">Codigo</th>
                            <th class="text-center" style="width: 10px;">Cañon_1</th>
                            <th class="text-center" style="width: 10px;">Cañon_2</th>
                            <th class="text-center" style="width: 50px;">Cañon_3</th>
                            <th class="text-center" style="width: 10px;">Cañon_4</th>
                            <th class="text-center" style="width: 50px;">Cañon_5</th>
                            <th class="text-center" style="width: 10px;">Cañon_6</th>
                            <th class="text-center" style="width: 10px;">Cañon_7</th>
                            <th class="text-center" style="width: 10px;">Cañon_8</th>
                            <th class="text-center" style="width: 10px;">Cañon_9</th>
                            <th class="text-center" style="width: 10px;">Promedio</th>
                            <th class="text-center" style="width: 10px;">tipo_Ruma</th>
                            <?php if( $SuperUser["sede"]=="E-Chimbote") {?><th class="text-center" style="width: 10px;">Almacen</th><?php } ?>
                           
                         
                            <th class="text-center" style="width: 10px;">Supervisor</th>
                            <th class="text-center" style="width: 10px;">Fecha</th>


                            
                            <th class="text-center" style="width: 100px;">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($all_temperature as $temp):?>
                        <tr>
                            <!-- <td class="text-center"><?php echo count_id();?></td> -->
                            <td><?php echo remove_junk(ucfirst($temp['codRuma'])); ?></td>
                           
                            <?php addFilter($temp,"filter1");
                            addFilter($temp,"filter2");
                            addFilter($temp,"filter3");
                            addFilter($temp,"filter4");
                            addFilter($temp,"filter5");
                            addFilter($temp,"filter6");
                            addFilter($temp,"filter7");
                            addFilter($temp,"filter8");
                            addFilter($temp,"filter9");?>
                           
                           <?php if($temp['typeRuma']=="HBT") {?> 
                                <?php if((float)$temp['promedio']>=50)  {?> <td style="background: #FF5252;"><?php echo remove_junk(ucfirst($temp['promedio'])).' ºC.'; ?></td><?php } ?>
                                <?php if((float)$temp['promedio']>=47 && (float)$temp['promedio']<=49.9) {?> <td style="background:#f58425;"><?php echo remove_junk(ucfirst($temp['promedio'])).' '; ?></td><?php } ?>
                                <?php if((float)$temp['promedio']>=38 && (float)$temp['promedio']<=46.9)  {?> <td style="background: #FAE22E;"><?php echo remove_junk(ucfirst($temp['promedio'])).' ºC.'; ?></td><?php } ?>
                                <?php if((float)$temp['promedio']<=37.9)  {?> <td style="background:#78FA37;"><?php echo remove_junk(ucfirst($temp['promedio'])).' ºC.'; ?></td><?php } 
                              }else{?>
                                <?php if((float)$temp['promedio']>=50){?> <td style="background: #FF5252;"><?php echo remove_junk(ucfirst($temp['promedio'])).' ºC.'; ?></td><?php } ?>
                                <?php if((float)$temp['promedio']>=47 && (float)$temp['promedio']<=49.9) {?> <td style="background:#f58425;"><?php echo remove_junk(ucfirst($temp['promedio'])).' ºC.'; ?></td><?php } ?>
                                <?php if((float)$temp['promedio']>=36 && (float)$temp['promedio']<=46.9)  {?> <td style="background: #FAE22E;"><?php echo remove_junk(ucfirst($temp['promedio'])).' ºC.'; ?></td><?php } ?>
                                <?php if((float)$temp['promedio']<=35.9) {?> <td style="background:#78FA37;"><?php echo remove_junk(ucfirst($temp['promedio'])).' ºC'; ?></td><?php } 
                            } ?> 

                            <td><?php echo remove_junk(ucfirst($temp['typeRuma'])); ?></td>
                            <?php if( $SuperUser["sede"]=="E-Chimbote") {?><td><?php echo remove_junk(ucfirst($temp['almacen'])); ?></td> <?php } ?>
                            <td><?php echo remove_junk(ucfirst($temp['supervisor'])); ?></td>
                            <td><?php echo read_date($temp['fecha']); ?></td>
                           
                            <td class="text-center">
                                <div class="btn-group">
                                    <a href="edit_temperature.php?id=<?php echo (int)$temp['id'];?>"
                                        class="btn btn-xs btn-warning"  style ="margin-right: 7px;padding: 5px;" data-toggle="tooltip" title="Editar">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="delete_temperature.php?id=<?php echo (int)$temp['id'];?>"
                                        class="btn btn-xs btn-danger"  style ="padding: 5px;" data-toggle="tooltip" title="Eliminar">
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
    $(document).ready(function() {
        var table = $('#tabla').DataTable({
            responsive: true,
            dom: 'B<"clear">lfrtp',
            fixedColumns: true,
            fixedHeader: true,
            ordering: false,
            autoWidth: true,
            scrollCollapse: true,
            lengthMenu: [
                [5, 10, 25, 50, -1],
                [5, 10, 25, 50, "Todo"]
            ],

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
                    title: 'SGP BUSINESS-REPORTE DE TEMPERATURA',
                    className: 'btn btn-success',
                     excelStyles:{
                            template:'blue_gray_medium'
                        }
                },
                {
                    extend: 'pdfHtml5',
                    text: '<i class="glyphicon glyphicon-file"></i> ',
                    titleAttr: 'Exportar a PDF',
                    title: 'SGP BUSINESS-REPORTE DE TEMPERATURA',
                    className: 'btn btn-danger'
                },
                {
                    extend: 'print',
                    text: '<i class="glyphicon glyphicon-print"></i> ',
                    titleAttr: 'Imprimir',
                    title: 'SGP BUSINESS-REPORTE DE TEMPERATURA',
                    className: 'btn btn-info'
                },
            ],
        });
        //Creamos una fila en el head de la tabla y lo clonamos para cada columna
        // $('#tabla thead tr').clone(true).appendTo('#tabla thead');

        // $('#tabla thead tr:eq(1) th').each(function(i) {
        //     var title = $(this).text(); //es el nombre de la columna
        //     $(this).html('<input type="text" placeholder="Buscar"/>');

        //     $('input', this).on('keyup change', function() {
        //         if (table.column(i).search() !== this.value) {
        //             table
        //                 .column(i)
        //                 .search(this.value)
        //                 .draw();
        //         }
        //     });
        // });
    });
    </script>



