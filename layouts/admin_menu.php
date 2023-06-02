<?php $SuperUser = current_user(); ?>
<ul>
  <div class="img-perfil" id="imgPerfil"><a href="edit_account.php"><img/></a></div>
  <li><a href="admin.php"><i class="glyphicon glyphicon-home"></i><span>Panel de control</span></a></li>
  <li><a href="#" class="submenu-toggle"><i class="glyphicon glyphicon-user"></i><span>Accesos</span></a>
    <ul class="nav submenu"><li><a href="group.php">Administrar grupos</a> </li><li><a href="users.php">Administrar usuarios</a></li></ul>
  </li>
  <?php if( $SuperUser["sede"]=="5" || $SuperUser["sede"]=="1" || $SuperUser["sede"]=="4"|| $SuperUser["sede"]=="10"|| $SuperUser["sede"]=="9") {?><li><a href="almacen.php"><i class="glyphicon glyphicon-indent-left"></i><span>Almacen</span></a></li><?php } ?>
  <?php if( $SuperUser["sede"]=="5" || $SuperUser["sede"]=="1" || $SuperUser["sede"]=="4"|| $SuperUser["sede"]=="10"|| $SuperUser["sede"]=="9") {?><li><a href="embarque.php"><i class="glyphicon glyphicon-sort"></i><span>Despachos</span></a></li><?php } ?>
  <?php if( $SuperUser["sede"]=="5" || $SuperUser["sede"]=="1" || $SuperUser["sede"]=="4"|| $SuperUser["sede"]=="10" || $SuperUser["sede"]=="9") {?><li><a href="#" class="submenu-toggle"><i class="glyphicon glyphicon-calendar"></i><span>Actividades</span></a>
    <ul class="nav submenu"><li><a href="actividad.php">Administrar Actividades</a> </li><li><a href="monthly_sales.php">Reporte Diario</a></li><li><a href="daily_sales.php">Reporte Mensual</a></li><li><a href="sales_report.php">Reporte Rangos </a></li></ul>
  </li><?php } ?>
  <?php if( $SuperUser["sede"]=="5" || $SuperUser["sede"]=="1" ) {?><li><a href="temperature.php"><i class="glyphicon glyphicon-filter"></i><span>Temperaturas</span></a></li><?php } ?>
  <?php if( $SuperUser["sede"]=="10" || $SuperUser["sede"]=="9") {?><li><a href="ExalTemperature.php"><i class="glyphicon glyphicon-filter"></i><span>Temperaturas</span></a></li><?php } ?>
   <?php if( $SuperUser["sede"]=="7" || $SuperUser["sede"]=="3" || $SuperUser["sede"]=="2") {?><li><a href="inspection.php"><i class="glyphicon glyphicon-eye-open"></i><span>Inspeccion</span></a></li><?php } ?>
</ul>