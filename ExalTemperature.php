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
         <?php if((float)$temp[$filter]>=49.9001)  {?> <td style="background:red;"><?php echo remove_junk(ucfirst($temp[$filter])).' ºC. <br>'; ?></td><?php } ?>
            <?php if((float)$temp[$filter]>=46.9001 && (float)$temp[$filter]<=49.9000) {?> <td style="background:#f58425;"><?php echo remove_junk(ucfirst($temp[$filter])).' ºC. <br>'; ?></td><?php } ?>
            <?php if((float)$temp[$filter]>=37.9001 && (float)$temp[$filter]<=46.9000)  {?> <td style="background: #FAE22E;"><?php echo remove_junk(ucfirst($temp[$filter])).' ºC. <br>'; ?></td><?php } ?>
            <?php if((float)$temp[$filter]<=37.9000)  {?> <td style="background:#78FA37;"><?php echo remove_junk(ucfirst($temp[$filter])).' ºC. <br>'; ?></td><?php } 
          }else{?>
            <?php if((float)$temp[$filter]>=50){?> <td style="background:red;"><?php echo remove_junk(ucfirst($temp[$filter])).' ºC. <br>'; ?></td><?php } ?>
            <?php if((float)$temp[$filter]>=47 && (float)$temp[$filter]<=49.9) {?> <td style="background:#f58425;"><?php echo remove_junk(ucfirst($temp[$filter])).' ºC. <br>'; ?></td><?php } ?>
            <?php if((float)$temp[$filter]>=36 && (float)$temp[$filter]<=46.9)  {?> <td style="background: #FAE22E;"><?php echo remove_junk(ucfirst($temp[$filter])).' ºC. <br>'; ?></td><?php } ?>
            <?php if((float)$temp[$filter]<=35.9) {?> <td style="background:#78FA37;"><?php echo remove_junk(ucfirst($temp[$filter])).' ºC. <br>'; ?></td><?php }   
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

                <a href="add_ExalTemperature.php" class="pull-right contButtonTT" ><i class="iconCat glyphicon glyphicon-plus-sign" title="Nuevo Monitoreo"></i></a>

            </div>
            <div class="panel-body">

                <table style="width:100%;"class="table table-bordered table-striped table-hover" id="tabla">

                    <thead>

                        <tr>
                            <!-- <th class="text-center" style="width: 5px;">Id</th> -->
                            <th class="text-center" style="width: 30px;">Código</th>
                            <th class="text-center" style="width: 10px;">Cañon_1</th>
                            <th class="text-center" style="width: 10px;">Cañon_2</th>
                            <th class="text-center" style="width: 50px;">Cañon_3</th>
                            <th class="text-center" style="width: 10px;">Cañon_4</th>
                            <th class="text-center" style="width: 50px;">Cañon_5</th>
                            <th class="text-center" style="width: 10px;">Cañon_6</th>
                            <th class="text-center" style="width: 10px;">Cañon_7</th>
                            <th class="text-center" style="width: 10px;">Cañon_8</th>
                            <th class="text-center" style="width: 10px;">Cañon_9</th>
                            <th class="text-center" style="width: 10px;">Cañon_10</th>
                            <th class="text-center" style="width: 50px;">Cañon_11</th>
                            <th class="text-center" style="width: 10px;">Cañon_12</th>
                            <th class="text-center" style="width: 50px;">Cañon_13</th>
                            <th class="text-center" style="width: 10px;">Cañon_14</th>
                            <th class="text-center" style="width: 10px;">Cañon_15</th>
                            <th class="text-center" style="width: 10px;">Cañon_16</th>
                            <th class="text-center" style="width: 10px;">Cañon_17</th>
                            <th class="text-center" style="width: 10px;">Cañon_18</th>
                            <th class="text-center" style="width: 50px;">Cañon_19</th>
                            <th class="text-center" style="width: 10px;">Cañon_20</th>
                            <th class="text-center" style="width: 10px;">Cañon_21</th>
                            <th class="text-center" style="width: 10px;">Cañon_22</th>
                            <th class="text-center" style="width: 10px;">Cañon_23</th>
                            <th class="text-center" style="width: 10px;">Cañon_24</th>
                            <th class="text-center" style="width: 10px;">Cañon_25</th>
                            <th class="text-center" style="width: 10px;">Promedio</th>
                            <th class="text-center" style="width: 10px;">Observación</th>
                            <th class="text-center" style="width: 10px;">Fecha de Registro</th>
                            <th class="text-center" style="width: 10px;">Supervisor</th>
                            <th class="text-center" style="width: 10px;">Tipo_Ruma</th>
                            <th class="text-center" style="width: 10px;">Ingreso al sistema</th>
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
                            addFilter($temp,"filter9");
                            addFilter($temp,"filter10");
                            addFilter($temp,"filter11");
                            addFilter($temp,"filter12");
                            addFilter($temp,"filter13");
                            addFilter($temp,"filter14");
                            addFilter($temp,"filter15");
                            addFilter($temp,"filter16");
                            addFilter($temp,"filter17");
                            addFilter($temp,"filter18");
                            addFilter($temp,"filter19");
                            addFilter($temp,"filter20");
                            addFilter($temp,"filter21");
                            addFilter($temp,"filter22");
                            addFilter($temp,"filter23");
                            addFilter($temp,"filter24");
                            addFilter($temp,"filter25");
                            ?>
                             
                             <?php if($temp['typeRuma']=="BHT") {?> 
                                
                                <?php if((float)$temp['promedio']>=50)  {?> <td style="background:red;"><?php echo remove_junk(ucfirst($temp['promedio'])).' ºC.'; ?></td><?php } ?>
                                <?php if((float)$temp['promedio']>=46.9001 && (float)$temp['promedio']<=49.9999) {?> <td style="background:#f58425;"><?php echo remove_junk(ucfirst($temp['promedio'])).' '; ?></td><?php } ?>
                                <?php if((float)$temp['promedio']>=37.9001 && (float)$temp['promedio']<=46.9000)  {?> <td style="background: #FAE22E;"><?php echo remove_junk(ucfirst($temp['promedio'])).' ºC.'; ?></td><?php } ?>
                                <?php if((float)$temp['promedio']<=37.9000)  {?> <td style="background:#78FA37;"><?php echo remove_junk(ucfirst($temp['promedio'])).' ºC.'; ?></td><?php } 
                              }else{?>
                                <?php if((float)$temp['promedio']>=50){?> <td style="background:red;"><?php echo remove_junk(ucfirst($temp['promedio'])).' ºC.'; ?></td><?php } ?>
                                <?php if((float)$temp['promedio']>=47 && (float)$temp['promedio']<=49.9999) {?> <td style="background:#f58425;"><?php echo remove_junk(ucfirst($temp['promedio'])).' ºC.'; ?></td><?php } ?>
                                <?php if((float)$temp['promedio']>=36 && (float)$temp['promedio']<=46.9999)  {?> <td style="background: #FAE22E;"><?php echo remove_junk(ucfirst($temp['promedio'])).' ºC.'; ?></td><?php } ?>
                                <?php if((float)$temp['promedio']<=35.9999) {?> <td style="background:#78FA37;"><?php echo remove_junk(ucfirst($temp['promedio'])).' ºC'; ?></td><?php } 
                            } ?> 
                            
                            <td><?php echo remove_junk(ucfirst($temp['observacion'])); ?></td>
                            <td><?php echo changeFormat_date($temp['f_monitoreo'],'d/m/Y'); ?></td>
                             <td><?php echo remove_junk(ucfirst($temp['supervisor'])); ?></td>
                             <td><?php echo remove_junk(ucfirst($temp['typeRuma'])); ?></td>
                            <td><?php echo read_date($temp['fecha']); ?></td>
                           
                            <td class="text-center">
                                <div class="btn-group">
                                    <a style ="margin-right: 7px;padding: 5px;" href="Edit_ExalTemperature.php?id=<?php echo (int)$temp['id'];?>"
                                        class="btn btn-xs btn-warning" data-toggle="tooltip" title="Editar">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a style ="padding: 5px;"href="delete_temperature.php?id=<?php echo (int)$temp['id'];?>"
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
                        today: true,
                        title: 'SGP - BUSINESS_REPORTE DE TEMPERATURAS  '+t.getDate()+'/'+(parseInt(t.getMonth())+1)+'/'+t.getFullYear()+"  "+t.getHours()+":"+t.getMinutes()+":"+t.getSeconds(),
                        className: 'btn btn-success',
                        exportOptions: {
                    columns: function(column, data, node) {
                        if (column <32) {//Oculta todas lac
                            return true;
                        }
                        return false;
                    }
                },
                        excelStyles:{
                            template:'blue_gray_medium'
                        }
                        
                        // 
                    },
                    {
                        extend: 'pdfHtml5',
                        orientation: 'landscape',
                        pageSize: 'LEGAL',
                        text: '<i class="glyphicon glyphicon-file"></i> ',
                        titleAttr: 'Exportar a PDF',
                        title: 'SGP - BUSINESS_REPORTE DE TEMPERATURAS  '+t.getDate()+'/'+(parseInt(t.getMonth())+1)+'/'+t.getFullYear()+"  "+t.getHours()+":"+t.getMinutes()+":"+t.getSeconds(),
                        className: 'btn btn-danger',
                        exportOptions: {
                    columns: function(column, data, node) {
                        if (column <32) {//Oculta todas lac
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
                        title: 'SGP - BUSINESS_REPORTE DE TEMPERATURAS',
                        className: 'btn btn-info',
                        exportOptions: {
                    columns: function(column, data, node) {
                        if (column <32) {//Oculta todas lac
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
            var tot = table.column(1).data().sum();
            $("#total").text(tot);


            //Creamos una fila en el head de la tabla y lo clonamos para cada columna
            $('#tabla thead tr').clone(true).appendTo('#tabla thead');

            $('#tabla thead tr:eq(1) th').each(function(i) {
                var title = $(this).text(); //es el nombre de la columna
                $(this).html('<input type="text" placeholder="Buscar"/>');

                $('input', this).on('keyup change', function() {
                    if (table.column(i).search() !== this.value) {
                        table
                            .column(i)
                            .search(this.value)
                            .draw();
                    }
                });
            });
        });
        </script>




        <?php include_once('layouts/footer.php'); ?>
        