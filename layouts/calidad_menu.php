<?php $SuperUser = current_user(); ?>
<ul>
    <div class="img-perfil" id="imgPerfil"><a href="edit_account.php"><img/></a></div>
    <li> <a href="home.php"> <i class="glyphicon glyphicon-home"></i> <span>Panel de control</span> </a> </li>
    <li> <a href="almacen.php"> <i class="glyphicon glyphicon-indent-left"></i> <span>Almacen</span> </a> </li>
    <li> <a href="embarque.php"> <i class="glyphicon glyphicon-picture"></i> <span>Despachos</span> </a> </li>
    <?php if( $SuperUser["sede"]=="T-Callao" || $SuperUser["sede"]=="T-Chimb") {?><li><a href="temperature.php"><i class="glyphicon glyphicon-filter"></i><span>Temperaturas</span></a></li><?php } ?>
    <?php if( $SuperUser["sede"]=="E-Chicama") {?><li><a href="ExalTemperature.php"><i class="glyphicon glyphicon-filter"></i><span>Temperaturas</span></a></li><?php } ?></ul>