<?php
$page_title = 'Venta diaria';
require_once( 'includes/load.php' );
// Checkin What level user has permission to view this page
page_require_level( 3 );
$tableActi = '';
$SuperUser = current_user();
if ( $SuperUser[ 'sede' ] == 'T-Chimb' ) {
    $tableActi = 'activity_tasachim';
    $tabla_sed = 'sede_tasachimbote';
}
if ( $SuperUser[ 'sede' ] == 'T-Samanco' ) {
    $tableActi = 'activity_samanco';
    $tabla_sed = 'sede_samanco';
}
if ( $SuperUser[ 'sede' ] == 'T-Supe' ) {
    $tableActi = 'activity_supe';
    $tabla_sed = 'sede_supe';
}
if ( $SuperUser[ 'sede' ] == 'T-Vegueta' ) {
    $tableActi = 'activity_vegueta';
    $tabla_sed = 'sede_vegueta';
}
if ( $SuperUser[ 'sede' ] == 'T-Callao' ) {
    $tableActi = 'activity_callao';
    $tabla_sed = 'sede_callao';
}
if ( $SuperUser[ 'sede' ] == 'T-Pisco' ) {
    $tableActi = 'activity_pisco';
    $tabla_sed = 'sede_pisco';
}
if ( $SuperUser[ 'sede' ] == 'T-Atico' ) {
    $tableActi = 'activity_atico';
    $tabla_sed = 'sede_atico';
}
if ( $SuperUser[ 'sede' ] == 'T-Matarani' ) {
    $tableActi = 'activity_matarani';
    $tabla_sed = 'sede_matarani';
}
if ( $SuperUser[ 'sede' ] == 'E-Chimbote' ) {
    $tableActi = 'activity_exalmar_chim';
    $tabla_sed = 'sede_exalmar_chim';
}
if ( $SuperUser[ 'sede' ] == 'E-Chicama' ) {
    $tableActi = 'activity_exalmar_mala';
    $tabla_sed = 'sede_exalmar_mala';
}

?>

<?php
$year  = date( 'Y' );
$month = date( 'm' );
$sales = dailySales( $tableActi, $year, $month );
?>
<?php include_once( 'layouts/header.php' );
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


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


    <div class='row'>
        <div class='col-md-6'>
            <?php echo display_msg( $msg );
?>
        </div>
    </div>
    <div class='row'>
        <div class='col-md-12'>
            <div class='panel panel-default'>
                <div class='panel-heading clearfix'>
                    <strong>
                        <span class='glyphicon glyphicon-th'></span>
                        <span>Actividades Diarias</span>
                    </strong>
                </div>
                <div class='panel-body'>
                    <table id="tabla" class='table table-bordered table-striped'>
                        <thead>
                            <tr>
                                <th class='text-center' style='width: 20px;'>ID</th>
                                <th class='text-center' style='width: 20px;'> Actividad</th>
                                <th class='text-center' style='width: 20px;'> Detalle </th>
                                <th class='text-center' style='width: 20px;'> Observacion </th>
                                <th class='text-center' style='width: 20px;'> Auxiliares </th>
                                <th class='text-center' style='width: 20px;'> Inició </th>
                                <th class='text-center' style='width: 20px;'> Finalizó </th>
                                <th class='text-center' style='width: 40px;'> Fecha </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ( $sales as $sale ):?>
                            <tr>
                                <td class='text-center'><?php echo count_id();
?></td>
                                <td><?php echo remove_junk( $sale[ 'nameActivity' ] );
?></td>
                                <td><?php echo remove_junk( $sale[ 'details' ] );
?></td>
                                <td><?php echo remove_junk( $sale[ 'observation' ] );
?></td>
                                <td><?php echo remove_junk( $sale[ 'auxiliares' ] );
?></td>
                                <td><?php echo remove_junk( $sale[ 'hora_ini' ] );
?></td>
                                <td><?php echo remove_junk( $sale[ 'hora_fin' ] );
?></td>
                                <td class='text-center'><?php echo date( 'd/m/Y', strtotime ( $sale[ 'fecha' ] ) );
?></td>
                            </tr>
                            <?php endforeach;
?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <?php include_once('layouts/footer.php'); ?>

    <!-- Busqueda por columna -->

    <script>
    $(document).ready(function() {
        var table = $('#tabla').DataTable({
            responsive: false,
            dom: 'B<"clear">lfrtp',
            fixedColumns: true,
            fixedHeader: true,
            scrollCollapse: true,
            autoWidth: true,
            scrollCollapse: true,
            lengthMenu: [
                [5, 10, 25, 50, -1],
                [5, 10, 25, 50, "todo"]
            ],
            info: true,
            // cambiamos el lenguaje
            columnDefs: [{
                targets: "_all",
                sortable: false
            }],
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
    <?php include_once( 'layouts/footer.php' );
?>
</body>

</html>