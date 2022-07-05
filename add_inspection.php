<!--   
 ====================================================================
        SGP - BUSINESS ( JHONATAN LARA && ABRAHAM VALVERDE)
 Descripción:Agrega Actividades
 Creado: 11/03/2022
 Chimbote Peru 
 ====================================================================
  
-->

<?php
  $page_title = 'Almacen-Chimbote';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  $SuperUser = current_user();
  $tableActi = "inspection";
  $all_actividades = find_all($tableActi)
?>

<?php
 if(isset($_POST['add_inspection']))
 {

    $req_field = array('placa','empresa', 'conductor', 'brevete', 'manta');
    
    validate_fields($req_field);
    $act_placa = remove_junk($db->escape($_POST['placa']));
    $act_empresa = remove_junk($db->escape($_POST['empresa']));
    $act_conductor = remove_junk($db->escape($_POST['conductor']));
    $act_brevete = remove_junk($db->escape($_POST['brevete']));
    $act_manta = remove_junk($db->escape($_POST['manta']));
    if(empty($errors))
    {

            if( $SuperUser["sede"]=="E-Chimbote")
            {
                $sql  = "INSERT INTO $tableActi (";
                $sql .=" placa, empresa, conductor, brevete, manta, responsable";
                $sql .=") VALUES (";
                $sql .="'{$act_placa}', '{$act_empresa}', '{$act_conductor}','{$act_brevete}','{$act_manta}','{$SuperUser['name']}'";
                $sql .=")";
                $sql .=" ON DUPLICATE KEY UPDATE placa='{$act_name}'";
            }else{

                $sql  = "INSERT INTO $tableActi (";
                $sql .=" placa, empresa, conductor, brevete, manta, responsable";
                $sql .=") VALUES (";
                $sql .=" '{$act_placa}', '{$act_empresa}', '{$act_conductor}','{$act_brevete}','{$act_manta}','{$SuperUser['name']}'";
                $sql .=")";
                $sql .=" ON DUPLICATE KEY UPDATE placa='{$act_name}'";
            }
            

            if($db->query($sql)){
                $session->msg("s", "Inspección agregada exitosamente.");
                redirect('inspection.php',false);
            } else {
                $session->msg("d", "Lo siento, registro falló");
                redirect('inspection.php',false);
            }

    } else {
        $session->msg("d", $errors);
        redirect('inspection.php',false);
    }
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/main2.css">
    <title>Document</title>
</head>
<body>
    
 <!-- SideBar -->
	<section class="full-box cover dashboard-sideBar">
		<div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
		<div class="full-box dashboard-sideBar-ct">
			<!--SideBar Title -->
			<div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
				company <i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
			</div>
			<!-- SideBar User info -->
			<div class="full-box dashboard-sideBar-UserInfo">
				<figure class="full-box">
					<img src="./assets/avatars/AdminMaleAvatar.png" alt="UserIcon">
					<figcaption class="text-center text-titles">User Name</figcaption>
				</figure>
				<ul class="full-box list-unstyled text-center">
					<li>
						<a href="my-data.html" title="Mis datos">
							<i class="zmdi zmdi-account-circle"></i>
						</a>
					</li>
					<li>
						<a href="my-account.html" title="Mi cuenta">
							<i class="zmdi zmdi-settings"></i>
						</a>
					</li>
					<li>
						<a href="#!" title="Salir del sistema" class="btn-exit-system">
							<i class="zmdi zmdi-power"></i>
						</a>
					</li>
				</ul>
			</div>
			<!-- SideBar Menu -->
			<ul class="list-unstyled full-box dashboard-sideBar-Menu">
				<li>
					<a href="home.html">
						<i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> Dashboard
					</a>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-case zmdi-hc-fw"></i> Administración <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="company.html"><i class="zmdi zmdi-balance zmdi-hc-fw"></i> Empresa</a>
						</li>
						<li>
							<a href="category.html"><i class="zmdi zmdi-labels zmdi-hc-fw"></i> Categorías</a>
						</li>
						<li>
							<a href="provider.php"><i class="zmdi zmdi-truck zmdi-hc-fw"></i> RCA</a>
						</li>
						<li>
							<a href="employees.php"><i class="zmdi zmdi-truck zmdi-hc-fw"></i> Empleados</a>
						</li>
						<li>
							<a href="book.html"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Nuevo libro</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-account-add zmdi-hc-fw"></i> Usuarios <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="admin.html"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Administradores</a>
						</li>
						<li>
							<a href="client.html"><i class="zmdi zmdi-male-female zmdi-hc-fw"></i> Clientes</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="catalog.html">
						<i class="zmdi zmdi-book-image zmdi-hc-fw"></i> Catalogo
					</a>
				</li>
			</ul>
		</div>
	</section>
<!-- Content page-->
	<section class="full-box dashboard-contentPage">
		<!-- NavBar -->
		<nav class="full-box dashboard-Navbar">
			<ul class="full-box list-unstyled text-right">
				<li class="pull-left">
					<a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert"></i></a>
				</li>
				<li>
					<a href="search.html" class="btn-search">
						<i class="zmdi zmdi-search"></i>
					</a>
				</li>
			</ul>
		</nav>
		<!-- Content page -->

<?php include_once('layouts/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <?php echo display_msg($msg); ?>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <strong>
            <span class="glyphicon glyphicon-calendar"></span>
            <span>Agregar Inspeción</span>
        </strong>

    </div>

    <div class="panel-body">
        <div class="col-md-3">
        </div>
        <div class="col-md-12 cont_form">
            <form method="post" action="add_inspection.php"> 
                <div class="material-textfield" style="width:100%;">
                    <input type="text" name="placa" placeholder=" " required>
                    <label>Placa</label>
                </div>
                <div class="col-md-6 cont_select">
                    <label for="">Seleciona el trasportista</label>
                    <select name="empresa" id="">
                        <option value="Agersa">Agersa</option>
                        <option value="Anticona">Anticona</option>
						 <option value="Figueroa">Figueroa</option>
                        <option value="Gemeva">Gemeva</option>
                        <option value="Naranjo">Naranjo</option>
                        <option value="Pepe el Toro">Pepe el Toro</option>
                        <option value="Port Logistic">Port Logistic</option>
                        <option value="Rov Sac">Rov Sac</option>
                        <option value="Uceda">Uceda</option>
                    </select>
                </div>
                <div class="material-textfield" style="width:100%;">
                    <input type="text" name="conductor" placeholder=" " required>
                    <label>Conductor</label>
                </div>
                 <div class="col-md-6 cont_select">
                    <label for="">¿Tiene Manta tipo Pañuelo?</label>
                    <select name="manta" id="">
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <div class="material-textfield" style="width:100%;">
                    <input type="text" name="brevete" placeholder=" " required>
                    <label>Brevete</label>
                </div>

               

                <div class='form-group clearfix'>
                    <button style='width:100%;border-radius: 35px;margin-top:10px' type='submit' name='add_inspection'
                        class='btn btn-info'>Añadir Inspección</button>
                </div>
            </form>
     
        </div>
    </div>
</div>

</body>
</html>
<!--====== Scripts -->
	<script src="./js/jquery-3.1.1.min.js"></script>
	<script src="./js/sweetalert2.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/material.min.js"></script>
	<script src="./js/ripples.min.js"></script>
	<script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="./js/main.js"></script>
	<script>
		$.material.init();
	</script>

    <?php include_once('layouts/footer.php'); ?>