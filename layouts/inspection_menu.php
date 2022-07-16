<?php $SuperUser = current_user(); ?>
<ul>
  <div class="img-perfil" id="imgPerfil"><a href="edit_account.php"><img/></a></div>
  <?php if( $SuperUser["sede"]=="T-Atico" || $SuperUser["sede"]=="T-Supe" || $SuperUser["sede"]=="T-Samanco") {?><li><a href="home.php"><i class="glyphicon glyphicon-signal"></i><span>Estadisticas</span></a></li><?php } ?>
   <?php if( $SuperUser["sede"]=="T-Atico" || $SuperUser["sede"]=="T-Supe" || $SuperUser["sede"]=="T-Samanco") {?><li><a href="inspection.php"><i class="glyphicon glyphicon-eye-open"></i><span>Inspeccion</span></a></li><?php } ?>
</ul>