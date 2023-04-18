<?php
    $page_title = 'Almacen-Chimbote';
    require_once('includes/load.php');
    // Checkin What level user has permission to view this page
    page_require_level(5);
    
    $table = "";
    $tabla_sed="";
    //require_once('includes/load.php');
    $SuperUser = current_user();
    if( $SuperUser["sede"]=="1"){ $table="emb_tasachim";$tabla_sed="sede_tasachimbote";}
    if( $SuperUser["sede"]=="2") {$table="emb_samanco";$tabla_sed="sede_samanco";}
    if( $SuperUser["sede"]=="3") {$table="emb_supe";$tabla_sed="sede_supe";}
    if( $SuperUser["sede"]=="4"){ $table="emb_vegueta";$tabla_sed="sede_vegueta";}
    if( $SuperUser["sede"]=="5") {$table="emb_callao";$tabla_sed="sede_callao";}
    if( $SuperUser["sede"]=="6") {$table="emb_pisco";$tabla_sed="sede_pisco";}
    if( $SuperUser["sede"]=="7") {$table="emb_atico";$tabla_sed="sede_atico";}
    if( $SuperUser["sede"]=="8") {$table="emb_matarani";$tabla_sed="sede_matarani";}
    if( $SuperUser["sede"]=="9") {$table="emb_exalmar_chim";$tabla_sed="sede_exalmar_chim";}
    if( $SuperUser["sede"]=="10") {$table="emb_exalmar_mala";$tabla_sed="sede_exalmar_mala";}
    
    $all_embarques = find_all($table);

    include_once('layouts/header.php');
?>

<style>
    /*estilos para la tabla*/
    table th 
    {
        background-color: #001f3f;
        color: white;
    }
</style>

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
                <?php if( $SuperUser["sede"]=="5")  
                {?> 
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
                            <?php  if( $SuperUser["sede"]=="5"|| $SuperUser["sede"]=="1" || $SuperUser["sede"]=="4"){?>  <th class="text-center" style="width: 50px;">Placa</th> <?php } ?>
                            <?php  if( $SuperUser["sede"]=="5"){?>  <th class="text-center" style="width: 50px;">Container</th> <?php } ?>
                            <th class="text-center" style="width: 100px;">Fecha</th>
                            <th>Supervisor</th>
                            <?php if( $SuperUser["sede"]=="9") {?><th class="text-center"
                                style="width: 100px;">Almacen</th> <?php } ?>
                            
                             <?php if( $SuperUser["sede"]=="5") {?>
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
                            <?php if( $SuperUser["sede"]=="5"|| $SuperUser["sede"]=="1" || $SuperUser["sede"]=="4") 
                            {?>
                                <td><?php echo remove_junk(ucfirst($embar['placa'])); ?></td><?php } ?>
                            <?php if( $SuperUser["sede"]=="5") {?>
                                <td><?php echo remove_junk(ucfirst($embar['cod_container'])); ?></td><?php } ?>
                            <td><?php echo read_onlyDate($embar['date_out']); ?></td>
                            <td><?php echo remove_junk(ucfirst($embar['supervisor'])); ?></td>
                            <?php if( $SuperUser["sede"]=="9") {?><td>
                                <?php echo remove_junk(ucfirst($act['almacen'])); ?></td> <?php } ?>
                            <?php if( $SuperUser["sede"]=="5") {?>
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
<?php include_once('layouts/footer.php'); ?>

<script>
    var today=Date.now();
    var t=new Date(today);
    $(document).ready(function() 
    {
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
