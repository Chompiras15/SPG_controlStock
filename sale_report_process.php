<?php
$page_title = 'Reporte de ventas';
$results = '';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
   page_require_level(3);
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
?>
<?php
  if(isset($_POST['submit']))
  {
    $req_dates = array('start-date','end-date');
    validate_fields($req_dates);

    $init = $_POST['start-date'];
    $end = $_POST['end-date'];
    $newInit = date("d-m-Y", strtotime($init));
    $newEnd = date("d-m-Y", strtotime($end));

    if(empty($errors)):
      $start_date   = $init;
      $end_date     = $end;
      $results      = find_sale_by_dates($tableActi,$start_date,$end_date);
    else:
      $session->msg("d", $errors);
      redirect('sales_report.php', false);
    endif;

  } else {
    $session->msg("d", "Select dates");
    redirect('sales_report.php', false);
  }
?>
<!doctype html>
<html lang="en-US">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Reporte de Actividades</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" />
    <style>
    @media print {

        html,
        body {
            font-size: 9.5pt;
            margin: 0;
            padding: 0;

        }

        .page-break {
            page-break-before: always;
            width: auto;
            margin: auto;

        }
    }

    .page-break {
        width: 980px;
        margin: 0 auto;
    }

    .sale-head {
        margin: 40px 0;
        text-align: center;
    }

    .sale-head h1,
    .sale-head strong {
        padding: 10px 20px;
        display: block;
    }

    .sale-head h1 {
        margin: 0;
        border-bottom: 1px solid #212121;
    }

    .table>thead:first-child>tr:first-child>th {
        border-top: 2px solid #000;
    }

    table thead tr th {
        text-align: center;
        border: 2px solid #ededed;
    }

    table tbody tr td {
        vertical-align: middle;
    }

    .sale-head,
    table.table thead tr th,
    table tbody tr td,
    table tfoot tr td {
        border: 2px solid #212121;
        white-space: normal;
    }

    .sale-head h1,
    table thead tr th,
    table tfoot tr td {
        background-color: #71aaf7;
        ;
    }

    tfoot {
        color: #000;
        text-transform: uppercase;
        font-weight: 500;
    }

    .page-break img {
        width: 150px;
        margin: auto;
        border-radius: 50%;
        padding-top: 35px;

    }
    </style>
    <!-- links para exportar a excel -->
    <script src="https://unpkg.com/xlsx@0.16.9/dist/xlsx.full.min.js"></script>
    <script src="https://unpkg.com/file-saverjs@latest/FileSaver.min.js"></script>
    <script src="https://unpkg.com/tableexport@latest/dist/js/tableexport.min.js"></script>


</head>

<body>

    <?php if($results): ?>
    <div class="page-break">
        <img src="assets/img/logobussiness.png">
        <div class="sale-head pull-right">
            <h1>Reporte de Actividades</h1>
            <strong><?php if(isset($newInit)){ echo $newInit;}?> a <?php if(isset($newEnd)){echo $newEnd;}?>
            </strong>
        </div>
        <button id="btnExportar" class="btn btn-success">
            <i class="fas fa-file-excel"></i> Exportar datos a Excel
        </button>
        <button class="btn btn-primary" onclick="ImprimirPagina();"> Imprimir</button>

        <table id="tabla" class="table table-border">
            <thead>
                <tr>
                    <th>Actividad</th>
                    <th>Detalle</th>
                    <th>Observacion</th>
                    <th>Auxiliares</th>
                    <th>Inició</th>
                    <th>Terminó</th>
                    <th class="text-center" style="width: 10%;">Fecha</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach($results as $result): ?>
                <tr>

                    <td class="text-left"><?php echo remove_junk($result['nameActivity']);?></td>
                    <td class="text-left"><?php echo remove_junk($result['details']);?></td>
                    <td class="text-left"><?php echo remove_junk($result['observation']);?></td>
                    <td class="text-justify"><?php echo remove_junk($result['auxiliares']);?></td>
                    <td class="text-left"><?php echo remove_junk($result['hora_ini']);?></td>
                    <td class="text-left"><?php echo remove_junk($result['hora_fin']);?></td>
                    <td class="text-justify"><?php echo changeFormat_date($result['fecha'],'d/m/Y');?></td>

                </tr>
                <?php endforeach; ?>
            </tbody>

            <?php
    else:
        $session->msg("d", "No se encontraron Actividades. ");
        redirect('sales_report.php', false);
     endif;
  ?>

            <!-- script para exportar a excel -->
            <script>
            const $btnExportar = document.querySelector("#btnExportar"),
                $tabla = document.querySelector("#tabla");

            $btnExportar.addEventListener("click", function() {
                let tableExport = new TableExport($tabla, {
                    exportButtons: false, // No queremos botones
                    filename: "Reporte de prueba", //Nombre del archivo de Excel
                    sheetname: "Reporte de Actividades", //Título de la hoja
                });
                let datos = tableExport.getExportData();
                let preferenciasDocumento = datos.tabla.xlsx;
                tableExport.export2file(preferenciasDocumento.data, preferenciasDocumento.mimeType,
                    preferenciasDocumento.filename, preferenciasDocumento.fileExtension,
                    preferenciasDocumento.merges, preferenciasDocumento.RTL, preferenciasDocumento.sheetname
                );
            });
            </script>
            <script>
            function ImprimirPagina() {
                window.print();
            }
            </script>
</body>

</html>
<?php if(isset($db)) { $db->db_disconnect(); } ?>