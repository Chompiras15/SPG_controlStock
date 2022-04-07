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
  if( $SuperUser["sede"]=="T-Chimb") $table="sede_tasachimbote";
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

                <a href="add_categorie.php" class="btn btn-info pull-right">Agregar Ruma</a>
            </div>
            <div class="panel-body">
                <!-- tablaaaaaa -->
                <table class="table table-bordered table-striped table-hover" id="tabla">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 5px;">Id</th>
                            <th class="text-center" style="width: 30px;">Codigo</th>
                            <th class="text-center" style="width: 10px;">Sector</th>
                            <th class="text-center" style="width: 10px;">Sacos</th>
                            <th class="text-center" style="width: 50px;">Calidad</th>
                            <th class="text-center" style="width: 10px;">Carril</th>
                            <th class="text-center" style="width: 50px;">Observacion</th>
                            <th class="text-center" style="width: 50px;">Fecha</th>


                            <?php if( $SuperUser["sede"]=="E-Chimbote") {?><th class="text-center"
                                style="width: 100px;">Almacen</th> <?php } ?>
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
                            <td><?php echo remove_junk(ucfirst($cat['observation'])); ?></td>
                            <td><?php echo remove_junk(ucfirst($cat['date_almacenamiento'])); ?></td>
                            <?php if( $SuperUser["sede"]=="E-Chimbote") {?><td>
                                <?php echo remove_junk(ucfirst($cat['almacen'])); ?></td> <?php } ?>




                            <td class="text-center">
                                <div class="btn-group">
                                    <a href="edit_categorie.php?id=<?php echo (int)$cat['id'];?>"
                                        class="btn btn-xs btn-warning" data-toggle="tooltip" title="Editar">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="delete_categorie.php?id=<?php echo (int)$cat['id'];?>"
                                        class="btn btn-xs btn-danger" data-toggle="tooltip" title="Eliminar">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                </div>
                            </td>

                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <div class="col">
                    <button type="button" class="btn btn-primary">
                        Total de sacos: <span id="total" class="badge badge-light"></span>
                    </button>
                </div>

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
            // cambiamos el lenguaje
            language: {
                "lengthMenu": "Mostrar _MENU_ registros",
                "zeroRecords": "No se encontraron resultados",
                "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sSearch": "Buscar:",
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
            dom: 'Bfrtlpi',
            buttons: [{
                    extend: 'excelHtml5',
                    text: '<i class="glyphicon glyphicon-cloud-download"></i> ',
                    titleAttr: 'Exportar a Excel',
                    className: 'btn btn-success'
                },
                {
                    extend: 'pdfHtml5',
                    text: '<i class="glyphicon glyphicon-file"></i> ',
                    titleAttr: 'Exportar a PDF',
                    className: 'btn btn-danger'
                },
                {
                    extend: 'print',
                    text: '<i class="glyphicon glyphicon-print"></i> ',
                    titleAttr: 'Imprimir',
                    className: 'btn btn-info'
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


        //Creamos una fila en el head de la tabla y lo clonamos para cada columna
        $('#tabla thead tr').clone(true).appendTo('#tabla thead');

        $('#tabla thead tr:eq(1) th').each(function(i) {
            var title = $(this).text(); //es el nombre de la columna
            $(this).html('<input type="text" placeholder="Buscar..." />');

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