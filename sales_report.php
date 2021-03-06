<?php
$page_title = 'Reporte de Actividades';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
   page_require_level(3);
?>
<?php include_once('layouts/header.php'); ?>
<div class="row">
  <div class="col-md-6">
    <?php echo display_msg($msg); ?>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="panel">
      <div class="panel-heading">

      </div>
      <div class="panel-body">
          <form class="clearfix" method="post" action="sale_report_process.php">
            <div class="form-group" style="text-align:center">
              <label class="form-label" style="font-size: 25px;margin-bottom: 15px;">Rango de fechas</label>
                <div class="input-group">
                  <input id="fecha1" type="date" class="deR" name="start-date">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-menu-right"></i></span>
                  <input id="fecha2" type="date" class="hastaR" name="end-date" >
                </div>
            </div>
            <div class="form-group">
                 <button style="width:100%;" type="submit" name="submit" class="btn btn-primary">Generar Reporte</button>
            </div>
          </form>
      </div>

    </div>
  </div>

</div>
<?php include_once('layouts/footer.php'); ?>
