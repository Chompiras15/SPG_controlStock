<?php $user = current_user(); 
//$dadaName="".$user["name"];
//$resultado = explode(" ",$resultado);?>
<!DOCTYPE html>
  <html lang="es">
    <head>
      <meta charset="UTF-8">
      <title>
        <?php 
          if (!empty($page_title)) echo remove_junk($page_title);
          elseif(!empty($user)) echo ucfirst($user['name']);
          else echo "Sistema simple de inventario";
        ?>
      </title>

      <link href="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"/>
      <link rel="stylesheet" href="assets/css/main.css" />
      
      <link rel="stylesheet" href="assets/css/bootstrap-select.min.css"/>  
      <link rel="icon" href="logobussiness1.ico" style= "border-radius: 50%" type="image/x-icon"/>
    
    </head>

  <body>
    <?php  
        $sql  = "SELECT name FROM sedes WHERE id='{$user['sede']}'";
        $result = $db->query( $sql );
        $dataUser = $db->fetch_assoc( $result );
        //if ( $result = $db->fetch_assoc( $sql ) )

        //return $result;
      
        if ($session->isUserLoggedIn(true)): ?>

          <header id="header">
            <div class="nav_menu"> 
              <div></div>
            </div>
            <div class="logo pull-left"> SGP - BUSINESS </div>
            <div class="header-content">

              <div class="header-date pull-left">
                <strong id=time></strong>
              </div>
              
              <div class="header_user">
                <ul class="info-menu list-inline list-unstyled">
                  <li class="profile">
                    <a href="#" data-toggle="dropdown" class="toggle" aria-expanded="false">
                      <?php if($user['image'] =="no_image.jpg"  || empty($user['image'])) {?> <img src="uploads/users/default.png" class="img-circle img-inline">
                      <?php }else{?><img src="uploads/users/<?php echo $user['image'];?>"  class="img-circle img-inline">
                      <?php } ?>
                      <span><?php echo $user['username']; ?> <i class="caret"></i></span>
                    </a>

                    <ul class="dropdown-menu">
                      <li>
                        <a href="profile.php?id=<?php echo (int)$user['id'];?>">
                          <i class="glyphicon glyphicon-user"></i>
                            Perfil
                        </a>
                      </li>

                      <li>
                        <a href="edit_account.php" title="edit account">
                          <i class="glyphicon glyphicon-cog"></i>
                            Configuración
                        </a>
                      </li>

                      <li class="last">
                        <a href="logout.php">
                          <i class="glyphicon glyphicon-off"></i>
                            Salir
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
                  
              <div class="header_sede">
                <span class="sedes"><?php echo remove_junk(ucfirst($dataUser['name'])); ?> </span>
              </div>
            </div>
          </header>

          <div class="sidebar">
            <?php if($user['user_level'] === '1'): ?>  
              <!-- admin menu -->
            <?php include_once('admin_menu.php');?>

            <?php elseif($user['user_level'] === '2'): ?>
              <!-- Special user -->
            <?php include_once('special_menu.php');?>

            <?php elseif($user['user_level'] === '3'): ?>
              <!-- User menu -->
            <?php include_once('user_menu.php');?>

            <?php elseif($user['user_level'] === '4'): ?>
              <!-- Calidad menu -->
            <?php include_once('calidad_menu.php');?>

            <?php elseif($user['user_level'] === '5'): ?>
              <!-- Cliente menu -->
            <?php include_once('cliente_menu.php');?>

            <?php elseif($user['user_level'] === '6'): ?>
              <!-- Menu Momentaneo-->
            <?php include_once('inspection_menu.php');?>
            
            <?php endif;?>

          </div>

        <?php endif;?>

        <div class="page">
          <div class="container-fluid">
