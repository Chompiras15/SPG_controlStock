<!--   
 ====================================================================
        SGP - BUSINESS ( JHONATAN LARA && ABRAHAM VALVERDE)
 Descripción:Muestra Todas Las actividades y Agrega adicionalmente
 Creado: 11/03/2022
 Chimbote Peru 
 ====================================================================   -->



<?php
    $page_title = 'Almacen';
    require_once('includes/load.php');
    $table = "";
    //require_once('includes/load.php');
    $SuperUser = current_user();
    // Checkin What level user has permission to view this page
    page_require_level(5);
    if( $SuperUser["sede"]=="1") $table="sede_tasachimbote";
    if( $SuperUser["sede"]=="2") $table="sede_samanco";
    if( $SuperUser["sede"]=="3") $table="sede_supe";
    if( $SuperUser["sede"]=="4") $table="sede_vegueta";
    if( $SuperUser["sede"]=="5") $table="sede_callao";
    if( $SuperUser["sede"]=="6") $table="sede_pisco";
    if( $SuperUser["sede"]=="7") $table="sede_atico";
    if( $SuperUser["sede"]=="8") $table="sede_matarani";
    if( $SuperUser["sede"]=="9") $table="sede_exalmar_chim";
    if( $SuperUser["sede"]=="10") $table="sede_exalmar_mala";
    
        $all_categories= orden_asc_almacen($table);
    
   

    if(!empty ($_GET["numSector"])){
        $sector=$_GET["numSector"];
        $all_categories= consultaSector($table,$sector);
      }else{
        $all_categories= orden_asc_almacen($table);
      }
    //   $result = $db->query($sql);
    include_once('layouts/header.php'); 
?>

<style>
    /*estilos para la tabla*/
    table th 
    {
        background-color: #001f3f;
        color: white;
    }
    .searchSector{
        background-color: #001f3f;
        color: white;
    }
    .searchSector:hover{
        background-color: #03c4eb;
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
                <strong class="titleA">
                    <span class="glyphicon glyphicon-indent-left"></span>
                    <span>Lista de Rumas</span>
                    
                </strong>
                <!-- <button><a href="plano.php" style="text-decoration:none;" target="_blanck">Plano</a></button> -->
                <a href="add_almacen.php" class="pull-right contButtonTT">
                    <i class="iconCat glyphicon glyphicon-plus-sign" title="Nueva Ruma"></i>
                </a>

                <a href="history.php" class="pull-right historialicon">
                    <i class="iconCat glyphicon glyphicon-list-alt" title="Historial"></i>
                </a>
                
                <?php  if( $SuperUser["sede"]=="5")
                {?> 
                    <a href="pnc_almacen.php" class="pull-right pnc_btnAlmacen">
                        <i class="iconCat glyphicon glyphicon glyphicon-ban-circle" title="No Conforme"></i>
                    </a>
                    <!-- <a href="add_MultAlmacen.php" style="padding-top: 5px;right: 250px;position: absolute;"class="pull-right"><i class="iconCat glyphicon glyphicon-list-alt" title="Historial"></i></a>-->
                <?php } ?>
            </div>
            <?php if($SuperUser['sede']!=="9"){?>
            <div style="margin-left: 30%;">
                        <form class="form-inline" method="GET" action="">
                            <div style="display: flex;">
                                <div class=""  style="display:flex;height: 50px;margin-top:3px;">
                                    <label for="" style="color: black;margin-top:20px;margin-right:5px;">Sector:</label>
                                     <input style="padding: 3px;" type="number"  placeholder="Numero de Sector"  name="numSector"/>
                                </div>
                                <div class="" style="margin-left: 10px;margin-top:22px;">
                                    <input src="" class="searchSector" type="submit" value="Buscar" style="margin: 0; padding: 3px;border-radius: 5px; width: 60px;border:none;"> 
                                </div>
                                <div class="" style="margin-left: 10px;margin-top:22px;">
                                    <button style="margin: 0; padding: 0; border-radius: 5px;width: 60px;border: none; padding: 3px;" class="searchSector"><a href="almacen.php" style="color: white;text-decoration:none;">Limpiar</a></button>
                               </div>                            
                            </div>
                        </form>
                    </div>
                    <?php }?>
            <div class="panel-body">
                <table class="table table-bordered table-striped table-hover" id="tabla">
                    <thead>
                        <tr>
                            <?php  if( $SuperUser["sede"]=="5"){?> <th class="text-center" style="width: 30px;">Lote</th>
                            <?php }else { ?><th class="text-center" style="width: 30px;">Codigo</th>
                            <?php } ?>

                            <th class="text-center" style="width: 10px;">Sacos</th>

                            <?php if($SuperUser["sede"]!=="9"){?>

                                   <th class="text-center" style="width: 10px;">Sector</th>   
                                    
                            <?php } ?>

                          <?php if($SuperUser["sede"]!=="9"){?>
                            <?php  if( $SuperUser["sede"]=="5"){?> <th class="text-center" style="width: 30px;">Ubicación</th>
                            
                            <?php }else{ ?><th class="text-center" style="width: 30px;">Carril</th>
                            <?php } ?>
                            <?php } ?>

                            <th class="text-center" style="width: 10px;">Placa</th>
                            <th class="text-center" style="width: 10px;">F.Produccion</th>
                            <th class="text-center" style="width: 10px;">F.Vencimiento</th>
                             <th class="text-center" style="width: 10px;">Fecha_Ejecución</th>
                            <th class="text-center" style="width: 10px;">Responsable</th>

                            <?php if( $SuperUser["sede"]=="9") {?><th class="text-center"
                                style="width: 100px;">Almacen</th> <?php } ?>
                            <th class="text-center" style="width: 100px;">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($all_categories as $cat):?>
                            <tr>
                            
                                <td><?php echo remove_junk(ucfirst($cat['cod_ruma'])); ?></td>
                                <td><?php echo remove_junk(ucfirst($cat['cant_saco'])); ?></td>
                                <?php if($SuperUser['sede']!=="9"){?>
                                    <td><?php echo remove_junk(ucfirst($cat['sector'])); ?></td>
                               <?php }?>
                               <?php if($SuperUser['sede']!=="9"){?>
                                <td><?php echo remove_junk(ucfirst($cat['nicho'])); ?></td>  
                                <?php }?>                            
                                <td><?php echo remove_junk(ucfirst($cat['placa'])); ?></td>
                                <td><?php echo changeFormat_date($cat['date_producc'],'d/m/Y'); ?></td>
                                <td><?php echo changeFormat_date($cat['date_vencimiento'],'d/m/Y'); ?></td>
                                <td><?php echo changeFormat_date($cat['f_actividad'],'d/m/Y'); ?></td>
                                <td><?php echo $cat['responsable']; ?></td>
                                <?php if( $SuperUser["sede"]=="9") {?><td>
                                    <?php echo remove_junk(ucfirst($cat['almacen'])); ?></td> <?php } ?>

                                <td class="text-center">
                                    <div class="btn-group">
                                        <a style ="margin-right: 7px;padding: 5px;" href="edit_almacen.php?id=<?php echo (int)$cat['id'];?>"
                                            class="btn btn-xs btn-warning" data-toggle="tooltip" title="Editar">
                                            <span class="glyphicon glyphicon-edit" ></span>
                                        </a>
                                        <a style ="padding: 5px;" href="delete_almacen.php?id=<?php echo (int)$cat['id'];?>"
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


<?php include_once('layouts/footer.php'); ?>

<script>
    
    var today=Date.now();
    var t=new Date(today);
    
    $(document).ready(function() 
    {
        var table = $('#tabla').DataTable(
        {
            responsive: true,
            dom: 'B<"clear">lfrtp',
            fixedColumns: true,
            fixedHeader: true,
            ordering: false,
            autoWidth: true,
            scrollCollapse: true,
            lengthMenu: 
            [
                [10, 25, 50, -1],
                [10, 25, 50, "Todo"]
            ],

            columnDefs: 
            [
                {
                    targets: "_all",
                    sortable: false,
                    className: "text-center"
                }
            ],
                    // cambiamos el lenguaje
            language: 
            {
                "lengthMenu": "_MENU_",
                "zeroRecords": "No se encontraron resultados",
                "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sSearch": "",
                "searchPlaceholder": "Buscar",
                "oPaginate": 
                {
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
            buttons: 
            [
                {
                    extend: 'excelHtml5',
                    text: '<i class="glyphicon glyphicon-cloud-download"></i> ',
                    titleAttr: 'Exportar a Excel', 
                    today: true,
                    title: 'SGP - BUSINESS_REPORTE DE ALMACEN  '+t.getDate()+'/'+(parseInt(t.getMonth())+1)+'/'+t.getFullYear()+"  "+t.getHours()+":"+t.getMinutes()+":"+t.getSeconds(),
                    className: 'btn btn-success',
                    exportOptions: 
                    {
                        columns: function(column, data, node) 
                        {
                            if (column <6) 
                            {//Oculta todas lac
                                return true;
                            }
                            return false;
                        }
                    },
                    excelStyles:
                    {
                        template:'blue_gray_medium'
                    }
                },
                {
                    extend: 'pdfHtml5',
                            text: '<i class="glyphicon glyphicon-file"></i> ',
                            titleAttr: 'Exportar a PDF',
                            title: 'SGP - BUSINESS_REPORTE DE ALMACEN  '+t.getDate()+'/'+(parseInt(t.getMonth())+1)+'/'+t.getFullYear()+"  "+t.getHours()+":"+t.getMinutes()+":"+t.getSeconds(),
                            className: 'btn btn-danger',
                            exportOptions: {
                        columns: function(column, data, node) {
                            if (column <6) {//Oculta todas lac
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
                    title: 'SGP - BUSINESS_REPORTE DE ALMACEN',
                    className: 'btn btn-info',
                    exportOptions: 
                    {
                        columns: function(column, data, node) 
                        {
                            if (column <6) {//Oculta todas lac
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

            "drawCallback": function() 
            {
                //alert("La tabla se está recargando");

                var api = this.api();
                $(api.column(3).footer()).html('Total: ' + api.column(3, {
                    page: 'current'}).data().sum())
            }


        });
            // sumamos y mostramos el total
        var tot = table.column(1).data().sum();
        $("#total").text(tot);

        //Creamos una fila en el head de la tabla y lo clonamos para cada columna
        // $('#tabla thead tr').clone(true).appendTo('#tabla thead');

        // $('#tabla thead tr:eq(1) th').each(function(i) 
        // {
        //     var title = $(this).text(); //es el nombre de la columna
        //     $(this).html('<input type="text" placeholder="Buscar"/>');

        //     $('input', this).on('keyup change', function() 
        //     {
        //         if (table.column(i).search() !== this.value) 
        //         {
        //             table
        //                 .column(i)
        //                 .search(this.value)
        //                 .draw();
        //         }
        //     });
        // });
    });
</script>
   