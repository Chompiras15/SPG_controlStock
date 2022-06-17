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

  $tableEmployees = "employees";
  $SuperUser = current_user();
  $all_employees = find_all_sale();
  $all_employees = find_all($tableEmployees)
?>

</div>
<?php include_once('layouts/footer.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados</title>



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
                        <span>Lista de Empleados</span>

                    </strong>
                    <a href="add_employees.php" class="pull-right btn-sm contButtonTT"><i class="iconCat glyphicon glyphicon-plus-sign" title="Nuevo Empleado"></i></a>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered " id="tabla">

                        <thead>
                            <tr>
                              
                                <th class="text-center" style="width: 50px;">Tipo Documento</th>
                                <th class="text-center" style="width: 50px;">Numero</th>
                                <th class="text-center" style="width: 50px;">Nombre</th>
                                <th class="text-center" style="width: 50px;">Genero</th>
                                <th class="text-center" style="width: 10px;">F.Nacimiento</th>
                                <th class="text-center" style="width: 100px;">Cargo</th>
                                <th class="text-center" style="width: 50px;">Sede</th>
                                <th class="text-center" style="width: 10px;">Banco</th>
                                <th class="text-center" style="width: 100px;">Cuenta</th>
                                <th class="text-center" style="width: 10px;">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($all_employees as $emplo):?>
                            <tr>
                                
                                <td><?php echo remove_junk(ucfirst($emplo['tipo_doc'])); ?></td>
                                <td><?php echo remove_junk(ucfirst($emplo['numero'])); ?></td>
                                <td><?php echo remove_junk(ucfirst($emplo['nombre'])); ?></td>
                                <td><?php echo remove_junk(ucfirst($emplo['genero'])); ?></td>
                                <td><?php echo remove_junk(ucfirst($emplo['f_nacimiento'])); ?></td>
                                <td><?php echo remove_junk(ucfirst($emplo['cargo'])); ?></td>
                                <td><?php echo remove_junk(ucfirst($emplo['sede'])); ?></td>
                                <td><?php echo remove_junk(ucfirst($emplo['banco'])); ?></td>
                                <td><?php echo remove_junk(ucfirst($emplo['cuenta'])); ?></td>                     

                                  <td class="text-center">
                                    <div class="btn-group">
                                        <a style ="margin-right: 7px;padding: 5px;" href="edit_employees.php?id=<?php echo (int)$emplo['id'];?>"
                                            class="btn btn-xs btn-warning" data-toggle="tooltip" title="Editar">
                                            <span class="glyphicon glyphicon-edit"></span>
                                        </a>
                                        <a style ="padding: 5px;" href="delete_employees.php?id=<?php echo (int)$emplo['id'];?>"
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
                    title: 'SGP - BUSINESS_REPORTE DE EMPLEADOS  '+t.getDate()+'/'+(parseInt(t.getMonth())+1)+'/'+t.getFullYear()+"  "+t.getHours()+":"+t.getMinutes()+":"+t.getSeconds(),
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
                    title: 'SGP - BUSINESS_REPORTE DE EMPLEADOS  '+t.getDate()+'/'+(parseInt(t.getMonth())+1)+'/'+t.getFullYear()+"  "+t.getHours()+":"+t.getMinutes()+":"+t.getSeconds(),
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
                    title: 'SGP - BUSINESS_REPORTE DE EMPLEADOS ',
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