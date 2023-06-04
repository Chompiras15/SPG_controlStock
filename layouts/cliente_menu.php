<?php $SuperUser = current_user(); ?>
<ul>
  <div class="img-perfil" id="imgPerfil"><a href="edit_account.php"><img/></a></div>
  <li> <a href="home.php"> <i class="glyphicon glyphicon-home"></i> <span>Panel de control</span> </a> </li>
  <li> <a href="almacen.php" > <i class="glyphicon glyphicon-indent-left"></i> <span>Almacen</span> </a> </li>
  <li> <a href="embarque.php" > <i class="glyphicon glyphicon-picture"></i> <span>Despachos</span> </a> </li>
  <li> <a href="#" class="submenu-toggle"> <i class="glyphicon glyphicon-th-large"></i> <span>Actividades</span> </a>
    <ul class="nav submenu"> <li><a href="actividad.php">Administrar Actividades</a> </li> </ul>
  </li>
<?php if( $SuperUser["sede"]=="5" || $SuperUser["sede"]=="1") {?><li><a href="temperature.php"><i class="glyphicon glyphicon-filter"></i><span>Temperaturas</span></a></li><?php } ?>
    <?php if( $SuperUser["sede"]=="10"||$SuperUser["sede"]=="9") {?><li><a href="ExalTemperature.php"><i class="glyphicon glyphicon-filter"></i><span>Temperaturas</span></a></li><?php } ?>
</ul>