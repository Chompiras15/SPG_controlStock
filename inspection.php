<!--   
 ====================================================================
        SGP - BUSINESS ( JHONATAN LARA && ABRAHAM VALVERDE)
 Descripción:Muestra Todas Las actividades
 Creado: 11/03/2022
 Chimbote Peru 
 ====================================================================
  
-->

<?php
  $page_title = 'Home Page';
  require_once('includes/load.php');
  if (!$session->isUserLoggedIn(true)) { redirect('index.php', false);}
  
  $SuperUser = current_user();
  if( $SuperUser["sede"]=="T-Chimb") {$tableIns="instachim";}
  if( $SuperUser["sede"]=="T-Samanco") {$tableIns="instasama";}
  if( $SuperUser["sede"]=="T-Supe") {$tableIns="instasupe";}
  if( $SuperUser["sede"]=="T-Vegueta") {$tableIns="instavegu";}
  if( $SuperUser["sede"]=="T-Callao") {$tableIns="instacall";}
  if( $SuperUser["sede"]=="T-Pisco") {$tableIns="instapisc";}
  if( $SuperUser["sede"]=="T-Atico") {$tableIns="instaastic";}
  if( $SuperUser["sede"]=="T-Matarani") {$tableIns="instamata";}
  if( $SuperUser["sede"]=="E-Chimbote") {$tableIns="insexchim";}
  if( $SuperUser["sede"]=="E-Chicama") {$tableIns="insexchic";}
  $tableInspec = $tableIns;
  $SuperUser = current_user();
  $all_inspections = find_all($tableInspec)
?>

</div>
<?php include_once('layouts/footer.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/main2.css">
    <title>Inspecciones</title>



    <style>
    /*estilos para la tabla*/
    table th {
        background-color: #001f3f;
        
        color: white;
    }
    .estaticButton{
        margin:10px;
        color: #001f3f;
        border: solid 2px #001f3f;
        font-weight:bolder;                  
    }
    .estaticButton:hover{
    color: white;
    font-weight: bolder;
    background: #001f3f;
    }
    .contButtonT{
        display: inline-flex;
         right: 30px;
          position: absolute;
         color: #2a2d34;
         margin: -10px 20px 0px 0px;
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
                        <span>Lista de Inspecciones</span>

                    </strong>
                    <!-- <a href="add_inspection.php" class="pull-right btn-sm contButtonTT"><i class="iconCat glyphicon glyphicon-plus-sign" title="Nueva inspeccion"></i></a> -->
                    <!-- <a href="company.php" class="pull-right btn-sm"><i class="iconCat glyphicon glyphicon-arrow-left" title="Ver Estadisticas"></i></a> -->
                    <a href="add_inspection.php"> <button class="pull-right btn-sm estaticButton contButtonT" >NUEVO</button></a>
                    <a href="home.php"> <button class="pull-right btn-sm estaticButton" >VER ESTADISTICAS</button></a>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered " id="tabla">

                        <thead>
                            <tr>
                                <th class="text-center" style="width: 50px;">Placa</th>
                                <th class="text-center" style="width: 50px;">Empresa</th>
                                <th class="text-center" style="width: 50px;">Conductor</th>
                                 <th class="text-center" style="width: 50px;">Brevete</th>
                                <th class="text-center" style="width: 50px;">¿Tiene Manta tipo Pañuelo?</th>
                                <th class="text-center" style="width: 50px;">¿Estado de la Manta?</th>
                                <th class="text-center" style="width: 50px;">¿Estado de la soga?</th>
                                <th class="text-center" style="width: 50px;">Observaciones</th>
                                <th class="text-center" style="width: 50px;">Responsable</th>
                                <th class="text-center" style="width: 50px;">Fecha</th>
                                <th class="text-center" style="width: 10px;">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($all_inspections as $act):?>
                            <tr>
                                
                                <td><?php echo remove_junk(ucfirst($act['placa'])); ?></td>
                                <td><?php echo remove_junk(ucfirst($act['empresa'])); ?></td>
                                 <td><?php echo remove_junk(ucfirst($act['conductor'])); ?></td>
                                <td><?php echo remove_junk(ucfirst($act['brevete'])); ?></td>
                                <td><?php echo remove_junk(ucfirst($act['manta'])); ?></td>
                                <td><?php echo remove_junk(ucfirst($act['e_manta'])); ?></td>
                                <td><?php echo remove_junk(ucfirst($act['soga'])); ?></td>
                                <td><?php echo remove_junk(ucfirst($act['observaciones'])); ?></td>
                                 <td><?php echo $act['responsable']; ?></td>
                                 <td><?php echo remove_junk(ucfirst($act['fecha'])); ?></td>

                                <td class="text-center">
                                    <div class="btn-group">
                                        <a style ="margin-right: 7px;padding: 5px;" href="edit_inspection.php?id=<?php echo (int)$act['id'];?>"
                                            class="btn btn-xs btn-warning" data-toggle="tooltip" title="Editar">
                                            <span class="glyphicon glyphicon-edit"></span>
                                        </a>
                                        <a style ="padding: 5px;" href="delete_inspection.php?id=<?php echo (int)$act['id'];?>"
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


<!-- ChartJS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>

    <!-- Styles for charts -->
    <script src="js/chartStyles.js"></script>

    <!-- DCharts development -->
    <script src="js/script.js"></script>
   </body>
    </html>
</script>
<!-- --------------------------------------------- -->



<!--====== Scripts -->
	<!-- <script src="./js/jquery-3.1.1.min.js"></script> -->
	<script src="./js/sweetalert2.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/material.min.js"></script>
	<script src="./js/ripples.min.js"></script>
	<script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="./js/main.js"></script>
	<script>
		$.material.init();
	</script>

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
                    title: 'SGP - BUSINESS_REPORTE DE INSPECCIONES  '+t.getDate()+'/'+(parseInt(t.getMonth())+1)+'/'+t.getFullYear()+"  "+t.getHours()+":"+t.getMinutes()+":"+t.getSeconds(),
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
                    title: 'SGP - BUSINESS_REPORTE DE INSPECCIONES  '+t.getDate()+'/'+(parseInt(t.getMonth())+1)+'/'+t.getFullYear()+"  "+t.getHours()+":"+t.getMinutes()+":"+t.getSeconds(),
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
                    title: 'SGP - BUSINESS_REPORTE DE INPECCIONES ',
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