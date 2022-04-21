<?php $SuperUser = current_user(); ?>
<ul>
  <div class="img-perfil"><img/></div>
  <li><a href="admin.php"><i class="glyphicon glyphicon-home"></i><span>Panel de control</span></a></li>
  <li><a href="#" class="submenu-toggle"><i class="glyphicon glyphicon-user"></i><span>Accesos</span></a>
    <ul class="nav submenu"><li><a href="group.php">Administrar grupos</a> </li><li><a href="users.php">Administrar usuarios</a></li></ul>
  </li>
  <li><a href="categorie.php"><i class="glyphicon glyphicon-indent-left"></i><span>Almacen</span></a></li>  
  <li><a href="media.php"><i class="glyphicon glyphicon-picture"></i><span>Despachos</span></a></li>
  <li><a href="#" class="submenu-toggle"><i class="glyphicon glyphicon-th-large"></i><span>Actividades</span></a>
    <ul class="nav submenu"><li><a href="actividad.php">Administrar Actividades</a> </li><li><a href="monthly_sales.php">Reporte Diario</a></li><li><a href="daily_sales.php">Reporte Mensual</a></li><li><a href="sales_report.php">Reporte Rangos </a></li></ul>
  </li>
  <?php if( $SuperUser["sede"]=="T-Callao" || $SuperUser["sede"]=="T-Chimb") {?><li><a href="temperature.php"><i class="glyphicon glyphicon-filter"></i><span>Temperaturas</span></a></li><?php } ?>
    <?php if( $SuperUser["sede"]=="E-Chicama") {?><li><a href="ExalTemperature.php"><i class="glyphicon glyphicon-filter"></i><span>Temperaturas</span></a></li><?php } ?>
</ul>