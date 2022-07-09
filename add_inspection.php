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
  $table = "";
  //require_once('includes/load.php');
  $SuperUser = current_user();
  // Checkin What level user has permission to view this page
  page_require_level(3);
  if( $SuperUser["sede"]=="T-Chimb") {$tableIns="instachim";}
  if( $SuperUser["sede"]=="T-Samanco") {$tableIns="instasama";}
  if( $SuperUser["sede"]=="T-Supe") {$tableIns="instasupe";}
  if( $SuperUser["sede"]=="T-Vegueta") {$tableIns="instavegu";}
  if( $SuperUser["sede"]=="T-Callao") {$tableIns="instacall";}
  if( $SuperUser["sede"]=="T-Pisco") {$tableIns="instapisc";}
  if( $SuperUser["sede"]=="T-Atico") {$tableIns="instaatic";}
  if( $SuperUser["sede"]=="T-Matarani") {$tableIns="instamata";}
  if( $SuperUser["sede"]=="E-Chimbote") {$tableIns="insexchim";}
  if( $SuperUser["sede"]=="E-Chicama") {$tableIns="insexchic";}
  $tableActi = $tableIns;
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
         
            }else{

                $sql  = "INSERT INTO $tableActi (";
                $sql .=" placa, empresa, conductor, brevete, manta, responsable";
                $sql .=") VALUES (";
                $sql .=" '{$act_placa}', '{$act_empresa}', '{$act_conductor}','{$act_brevete}','{$act_manta}','{$SuperUser['name']}'";
                $sql .=")";
               
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