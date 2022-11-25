<?php $SuperUser = current_user(); ?>
<ul>
  <div class="img-perfil" id="imgPerfil"><a href="edit_account.php"><img/></a></div>
  <li><a href="admin.php"><i class="glyphicon glyphicon-home"></i><span>Panel de control</span></a></li>
  <li><a href="#" class="submenu-toggle"><i class="glyphicon glyphicon-user"></i><span>Accesos</span></a>
    <ul class="nav submenu"><li><a href="group.php">Administrar grupos</a> </li><li><a href="users.php">Administrar usuarios</a></li></ul>
  </li>
  <?php if( $SuperUser["sede"]=="T-Callao" || $SuperUser["sede"]=="T-Chimb" || $SuperUser["sede"]=="T-Vegueta"|| $SuperUser["sede"]=="E-Chicama") {?><li><a href="almacen.php"><i class="glyphicon glyphicon-indent-left"></i><span>Almacen</span></a></li><?php } ?>
  <?php if( $SuperUser["sede"]=="T-Callao" || $SuperUser["sede"]=="T-Chimb" || $SuperUser["sede"]=="T-Vegueta"|| $SuperUser["sede"]=="E-Chicama") {?><li><a href="embarque.php"><i class="glyphicon glyphicon-sort"></i><span>Despachos</span></a></li><?php } ?>
  <?php if( $SuperUser["sede"]=="T-Callao" || $SuperUser["sede"]=="T-Chimb" || $SuperUser["sede"]=="T-Vegueta"|| $SuperUser["sede"]=="E-Chicama") {?><li><a href="#" class="submenu-toggle"><i class="glyphicon glyphicon-calendar"></i><span>Actividades</span></a>
    <ul class="nav submenu"><li><a href="actividad.php">Administrar Actividades</a> </li><li><a href="monthly_sales.php">Reporte Diario</a></li><li><a href="daily_sales.php">Reporte Mensual</a></li><li><a href="sales_report.php">Reporte Rangos </a></li></ul>
  </li><?php } ?>
  <?php if( $SuperUser["sede"]=="T-Callao" || $SuperUser["sede"]=="T-Chimb") {?><li><a href="temperature.php"><i class="glyphicon glyphicon-filter"></i><span>Temperaturas</span></a></li><?php } ?>
  <?php if( $SuperUser["sede"]=="E-Chicama") {?><li><a href="ExalTemperature.php"><i class="glyphicon glyphicon-filter"></i><span>Temperaturas</span></a></li><?php } ?>
   <?php if( $SuperUser["sede"]=="T-Atico" || $SuperUser["sede"]=="T-Supe" || $SuperUser["sede"]=="T-Samanco") {?><li><a href="inspection.php"><i class="glyphicon glyphicon-eye-open"></i><span>Inspeccion</span></a></li><?php } ?>
</ul>