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
  page_require_level(5);
  if( $SuperUser["sede"]=="T-Chimb") $table="temp_tasachimbote";
  if( $SuperUser["sede"]=="T-Samanco") $table="temp_samanco";
  if( $SuperUser["sede"]=="T-Supe") $table="temp_supe";
  if( $SuperUser["sede"]=="T-Vegueta") $table="temp_vegueta";
  if( $SuperUser["sede"]=="T-Callao") $table="temp_callao";
  if( $SuperUser["sede"]=="T-Pisco") $table="temp_pisco";
  if( $SuperUser["sede"]=="T-Atico") $table="temp_atico";
  if( $SuperUser["sede"]=="T-Matarani") $table="temp_matarani";
  if( $SuperUser["sede"]=="E-Chimbote") $table="temp_exalmar_chim";
  if( $SuperUser["sede"]=="E-Chicama") $table="temp_exalmar_mala";
  
  $all_categories = find_all($table)
?>


<html lang="en">

<head>
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

    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <strong>
                    <span class="glyphicon glyphicon-th"></span>
                    <span>Lista de Rumas</span>

                </strong>

                <a href="add_temperature.php" class="btn btn-info pull-right">Agregar</a>

            </div>
            <div class="panel-body">

                <table class="table table-bordered table-striped table-hover" id="tabla">

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
                            <th class="text-center" style="width: 10px;">Supervisor</th>
                            <th class="text-center" style="width: 10px;">Fecha</th>


                            <?php if( $SuperUser["sede"]=="E-Chimbote") {?><th class="text-center"
                                style="width: 100px;">Almacen</th> <?php } ?>
                            <th class="text-center" style="width: 100px;">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($all_categories as $cat):?>
                        <tr>
                            <!-- <td class="text-center"><?php echo count_id();?></td> -->
                            <td><?php echo remove_junk(ucfirst($cat['cod_ruma'])); ?></td>
                            <td><?php echo remove_junk(ucfirst($cat['cañon_1'])); ?></td>
                            <td><?php echo remove_junk(ucfirst($cat['cañon_2'])); ?></td>
                            <td><?php echo remove_junk(ucfirst($cat['cañon_3'])); ?></td>
                            <td><?php echo remove_junk(ucfirst($cat['cañon_4'])); ?></td>
                            <td><?php echo remove_junk(ucfirst($cat['cañon_5'])); ?></td>
                            <td><?php echo remove_junk(ucfirst($cat['cañon_6'])); ?></td>
                            <td><?php echo remove_junk(ucfirst($cat['cañon_7'])); ?></td>
                            <td><?php echo remove_junk(ucfirst($cat['cañon_8'])); ?></td>
                            <td><?php echo remove_junk(ucfirst($cat['cañon_9'])); ?></td>
                            <td><?php echo remove_junk(ucfirst($cat['supervisor'])); ?></td>
                            <td><?php echo remove_junk(ucfirst($cat['fecha'])); ?></td>
                            <?php if( $SuperUser["sede"]=="E-Chimbote") {?><td>
                                <?php echo remove_junk(ucfirst($cat['almacen'])); ?></td> <?php } ?>




                            <td class="text-center">
                                <div class="btn-group">
                                    <a href="edit_temperature.php?id=<?php echo (int)$cat['id'];?>"
                                        class="btn btn-xs btn-warning" data-toggle="tooltip" title="Editar">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="delete_temperature.php?id=<?php echo (int)$cat['id'];?>"
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
    $(document).ready(function() {
        var table = $('#tabla').DataTable({
            responsive: true,
            dom: 'B<"clear">lfrtp',
            fixedColumns: true,
            fixedHeader: true,

            autoWidth: true,
            scrollCollapse: true,
            lengthMenu: [
                [5, 10, 25, 50, -1],
                [5, 10, 25, 50, "Todo"]
            ],

            columnDefs: [{
                targets: "_all",
                sortable: false
            }],
            // cambiamos el lenguaje
            language: {
                "lengthMenu": "Mostrar _MENU_ registros",
                "zeroRecords": "No se encontraron resultados",
                "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sSearch": "Buscar: ",
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
                    title: 'SGP - Business',
                    className: 'btn btn-success'
                },
                {
                    extend: 'pdfHtml5',
                    text: '<i class="glyphicon glyphicon-file"></i> ',
                    titleAttr: 'Exportar a PDF',
                    title: 'SGP - Business',
                    className: 'btn btn-danger'
                },
                {
                    extend: 'print',
                    text: '<i class="glyphicon glyphicon-print"></i> ',
                    titleAttr: 'Imprimir',
                    title: 'SGP - Business',
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




    <?php include_once('layouts/footer.php'); ?>