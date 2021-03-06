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
  page_require_level(5); // verifica el nivel de usuario 

  $tableActi = "";
  $SuperUser = current_user();
  if( $SuperUser["sede"]=="T-Chimb"){ $tableActi="activity_tasachim";$tabla_sed="sede_tasachimbote";}
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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad</title>



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
                        <span class="glyphicon glyphicon-calendar"></span>
                        <span>Lista de Actividades</span>

                    </strong>
                    <a href="add_actividad.php" class="pull-right btn-sm contButtonTT"><i class="iconCat glyphicon glyphicon-plus-sign" title="Nueva Actividad"></i></a>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered " id="tabla">

                        <thead>
                            <tr>
                              
                                <th class="text-center" style="width: 50px;">Actividad</th>
                                <th class="text-center" style="width: 50px;">Detalle</th>
                                <th class="text-center" style="width: 50px;">Observacion</th>
                                <th class="text-center" style="width: 50px;">auxiliares</th>
                                <th class="text-center" style="width: 10px;">Inició</th>
                                <th class="text-center" style="width: 100px;">Terminó</th>
                                <th class="text-center" style="width: 10px;">&nbsp&nbsp&nbspFecha&nbsp&nbsp&nbsp  </th>
                                <?php if( $SuperUser["sede"]=="E-Chimbote") {?><th class="text-center"
                                    style="width: 100px;">Almacen</th> <?php } ?>
                                <th class="text-center" style="width: 10px;">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($all_actividades as $act):?>
                            <tr>
                                
                                <td><?php echo remove_junk(ucfirst($act['nameActivity'])); ?></td>
                                <td><?php echo remove_junk(ucfirst($act['details'])); ?></td>
                                <td><?php echo remove_junk(ucfirst($act['observation'])); ?></td>
                                <td><?php echo remove_junk(ucfirst($act['auxiliares'])); ?></td>
                                <td><?php echo remove_junk(ucfirst($act['hora_ini'])); ?></td>
                                <td><?php echo remove_junk(ucfirst($act['hora_fin'])); ?></td>
                                <td><?php echo read_onlyDate($act['fecha']); ?></td>
                                <?php if( $SuperUser["sede"]=="E-Chimbote") {?><td>
                                    <?php echo remove_junk(ucfirst($act['almacen'])); ?></td> <?php } ?>



                                <td class="text-center">
                                    <div class="btn-group">
                                        <a style ="margin-right: 7px;padding: 5px;" href="edit_actividad.php?id=<?php echo (int)$act['id'];?>"
                                            class="btn btn-xs btn-warning" data-toggle="tooltip" title="Editar">
                                            <span class="glyphicon glyphicon-edit"></span>
                                        </a>
                                        <a style ="padding: 5px;" href="delete_actividad.php?id=<?php echo (int)$act['id'];?>"
                                            class="btn btn-xs btn-danger" data-toggle="tooltip" title="Eliminar">
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
                    title: 'SGP - BUSINESS_REPORTE DE ACTIVIDADES  '+t.getDate()+'/'+(parseInt(t.getMonth())+1)+'/'+t.getFullYear()+"  "+t.getHours()+":"+t.getMinutes()+":"+t.getSeconds(),
                    className: 'btn btn-success',
                     exportOptions: {
                 columns: function(column, data, node) {
                        if (column < 7) {//Oculta todas las columnas
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
                    title: 'SGP - BUSINESS_REPORTE DE ACTIVIDADES  '+t.getDate()+'/'+(parseInt(t.getMonth())+1)+'/'+t.getFullYear()+"  "+t.getHours()+":"+t.getMinutes()+":"+t.getSeconds(),
                    className: 'btn btn-danger',
                      exportOptions: {
                 columns: function(column, data, node) {
                        if (column <7) {//Oculta todas las columnas
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
                    title: 'SGP - BUSINESS_REPORTE DE ACTIVIDADESs ',
                    className: 'btn btn-info',
                      exportOptions: {
                         columns: function(column, data, node) {
                        if (column <7) {//Oculta todas las columnas
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