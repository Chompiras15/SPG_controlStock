<!--   
 ====================================================================
        SGP - BUSINESS ( JHONATAN LARA && ABRAHAM VALVERDE)
 Descripción:Añade Almacen
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
if( $SuperUser["sede"]=="T-Chimb"){ $table="sede_tasachimbote";$tableHistory="history_tasachimb";};
  if( $SuperUser["sede"]=="T-Samanco") $table="sede_samanco";
  if( $SuperUser["sede"]=="T-Supe") $table="sede_supe";
  if( $SuperUser["sede"]=="T-Vegueta") $table="sede_vegueta";
  if( $SuperUser["sede"]=="T-Callao") {$table="sede_callao"; $tableHistory="history_callao";};
  if( $SuperUser["sede"]=="T-Pisco") $table="sede_pisco";
  if( $SuperUser["sede"]=="T-Atico") $table="sede_atico";
  if( $SuperUser["sede"]=="T-Matarani") $table="sede_matarani";
  if( $SuperUser["sede"]=="E-Chimbote") $table="sede_exalmar_chim";
  if( $SuperUser["sede"]=="E-Chicama") {$table="sede_exalmar_mala"; $tableHistory="history_exalmal";};
  
  $all_categories = find_all($table)
?>

<?php
 if(isset($_POST['add_cat']))
 {
   $findCatRuma = find_by_codRuma($table,$_POST['cod_ruma']);
   
   if( $SuperUser["sede"]=="E-Chimbote")  $req_field = array('sector', 'tipo','cod_ruma', 'cant_saco', 'date_producc', 'date_vencimiento', 'calidad', 'nicho', 'observation','almacen');
   else $req_field = array('sector', 'tipo','cod_ruma', 'cant_saco', 'date_producc', 'date_vencimiento', 'calidad', 'nicho','observation');
   
   validate_fields($req_field);

    $cat_sector = remove_junk($db->escape($_POST['sector']));
    $cat_tipo = remove_junk($db->escape($_POST['tipo']));
    $cat_ruma = remove_junk($db->escape($_POST['cod_ruma']));
    $cat_sacos = remove_junk($db->escape($_POST['cant_saco']));
    $cat_producc = remove_junk($db->escape($_POST['date_producc']));
    $cat_caduca = remove_junk($db->escape($_POST['date_vencimiento']));
    $cat_calidad = remove_junk($db->escape($_POST['calidad']));
    $cat_nicho = remove_junk($db->escape($_POST['nicho']));
    if($SuperUser["sede"]=="T-Callao")  
    {
        $cat_placa = remove_junk($db->escape($_POST['placa']));
        $cat_descripcion = remove_junk($db->escape($_POST['descripcion']));
    };
    $cat_observation = remove_junk($db->escape($_POST['observation']));
 
    if( $SuperUser["sede"]=="E-Chimbote")  $cat_almacen =remove_junk($db->escape($_POST['almacen']));
   
    //$date   = make_date();

    $sumaSacos=(int)$cat_sacos+(int)$findCatRuma["cant_saco"];
    
    if($sumaSacos<=1000)
    {
        if(!$findCatRuma)
        {

            if(empty($errors))
            {
              if( $SuperUser["sede"]=="E-Chimbote") 
              {
                $sql  = "INSERT INTO $table (";
                $sql .=" sector,tipo,cod_ruma,cant_saco,date_producc,date_vencimiento,calidad,nicho,observation,almacen";
                $sql .=") VALUES (";
                $sql .=" '{$cat_sector}', '{$cat_tipo}','{$cat_ruma}', '{$cat_sacos}', '{$cat_producc}', '{$cat_caduca}', '{$cat_calidad}', '{$cat_nicho}', '{$cat_observation}','{$cat_almacen}'";
                $sql .=")";
                $sql .=" ON DUPLICATE KEY UPDATE cod_ruma='{$cat_ruma}'";
               
              }else if($SuperUser["sede"]=="T-Callao") 
              {
                $sql= "INSERT INTO $table (";
                $sql.=" sector,tipo,cod_ruma,cant_saco,date_producc,date_vencimiento,calidad,nicho,placa,description,observation,responsable";
                $sql.=") VALUES (";
                $sql.=" '{$cat_sector}', '{$cat_tipo}','{$cat_ruma}', '{$cat_sacos}', '{$cat_producc}', '{$cat_caduca}', '{$cat_calidad}', '{$cat_nicho}', '{$cat_placa}','{$cat_descripcion}', '{$cat_observation}','{$SuperUser['name']}'";
                $sql.=")";

                
              }else
              {
                $sql  = "INSERT INTO $table (";
                $sql .=" sector,tipo,cod_ruma,cant_saco,date_producc,date_vencimiento,calidad,nicho,observation,responsable";
                $sql .=") VALUES (";
                $sql .=" '{$cat_sector}', '{$cat_tipo}','{$cat_ruma}', '{$cat_sacos}', '{$cat_producc}', '{$cat_caduca}', '{$cat_calidad}', '{$cat_nicho}', '{$cat_observation}','{$SuperUser['name']}'";
                $sql .=")";
                $sql .=" ON DUPLICATE KEY UPDATE cod_ruma='{$cat_ruma}'";
              }

              if($db->query($sql))
              {

                if( $SuperUser["sede"]=="T-Callao")
                {
                    $sql2= "INSERT INTO $tableHistory (";
                    $sql2.=" sector,tipo,cod_ruma,cant_saco,date_producc,date_vencimiento,calidad,nicho,placa,observation,descripcion,responsable";
                    $sql2.=") VALUES (";
                    $sql2.=" '{$cat_sector}', '{$cat_tipo}','{$cat_ruma}', '{$cat_sacos}', '{$cat_producc}', '{$cat_caduca}', '{$cat_calidad}', '{$cat_nicho}', '{$cat_placa}', '{$cat_observation}','{$cat_descripcion}','{$SuperUser['name']}'";
                    $sql2.=")";

                }else 
                {
                    $sql2= "INSERT INTO $tableHistory (";
                    $sql2.=" sector,tipo,cod_ruma,cant_saco,date_producc,date_vencimiento,calidad,nicho,observation,responsable";
                    $sql2.=") VALUES (";
                    $sql2.=" '{$cat_sector}', '{$cat_tipo}','{$cat_ruma}', '{$cat_sacos}', '{$cat_producc}', '{$cat_caduca}', '{$cat_calidad}', '{$cat_nicho}', '{$cat_observation}','{$SuperUser['name']}'";
                    $sql2.=")";
                };
                
                if($db->query($sql2))
                {
                    $session->msg("s", "RUMA AGREGADO CON EXITO.");
                    redirect('almacen.php',false);
                }else{
                    $session->msg("d", "Lo siento, Registro falló");
                    redirect('almacen.php',false);
                }
                //$session->msg("s", "Ruma agregada exitosamente.");
                //redirect('almacen.php',false);
              } else {
                $session->msg("d", "Lo siento, Registro falló");
                redirect('almacen.php',false);
              }
              

            } else {
              $session->msg("d", $errors);
              redirect('almacen.php',false);
            }

        }else 
        {
            //UPDATE DATA ALMACEN 
            
            if( $SuperUser["sede"]=="E-Chimbote") 
            {

                $sql   = "UPDATE $table SET";
                $sql  .=" sector ='{$cat_sector}',tipo ='{$cat_tipo}', cod_ruma ='{$cat_ruma}',";
                $sql  .=" cant_saco ='{$sumaSacos}',date_producc ='{$cat_producc}', date_vencimiento ='{$cat_caduca}', calidad ='{$cat_calidad}',nicho='{$cat_nicho}',placa='{$cat_placa}',observation='{$cat_observation}',almacen='{$cat_almacen}'";
                $sql .= " WHERE cod_ruma='{$findCatRuma['cod_ruma']}'";

            }else if( $SuperUser["sede"]=="T-Callao") {

                $sql   = "UPDATE $table SET";
                $sql  .=" sector ='{$cat_sector}', tipo ='{$cat_tipo}',cod_ruma ='{$cat_ruma}',";
                $sql  .=" cant_saco ='{$sumaSacos}',date_producc ='{$cat_producc}', date_vencimiento ='{$cat_caduca}', calidad ='{$cat_calidad}',nicho='{$cat_nicho}',observation='{$cat_observation}',responsable='{$SuperUser['name']}'";
                $sql .= " WHERE cod_ruma='{$findCatRuma['cod_ruma']}'";
    
            }else
            {
                $sql   = "UPDATE $table SET";
                $sql  .=" sector ='{$cat_sector}', tipo ='{$cat_tipo}',cod_ruma ='{$cat_ruma}',";
                $sql  .=" cant_saco ='{$sumaSacos}',date_producc ='{$cat_producc}', date_vencimiento ='{$cat_caduca}', calidad ='{$cat_calidad}',nicho='{$cat_nicho}',observation='{$cat_observation}',responsable='{$SuperUser['name']}'";
                $sql .= " WHERE cod_ruma='{$findCatRuma['cod_ruma']}'";
            };

            $result = $db->query($sql);

            if($result && $db->affected_rows() === 1) 
            {
                if( $SuperUser["sede"]=="T-Callao")
                {
                    $sql2= "INSERT INTO $tableHistory (";
                    $sql2.=" sector,tipo,cod_ruma,cant_saco,date_producc,date_vencimiento,calidad,nicho,placa,observation,descripcion,responsable";
                    $sql2.=") VALUES (";
                    $sql2.=" '{$cat_sector}', '{$cat_tipo}','{$cat_ruma}', '{$cat_sacos}', '{$cat_producc}', '{$cat_caduca}', '{$cat_calidad}', '{$cat_nicho}', '{$cat_placa}', '{$cat_observation}','{$cat_descripcion}','{$SuperUser['name']}'";
                    $sql2.=")";

                }else 
                {
                    $sql2= "INSERT INTO $tableHistory (";
                    $sql2.=" sector,tipo,cod_ruma,cant_saco,date_producc,date_vencimiento,calidad,nicho,observation,responsable";
                    $sql2.=") VALUES (";
                    $sql2.=" '{$cat_sector}', '{$cat_tipo}','{$cat_ruma}', '{$cat_sacos}', '{$cat_producc}', '{$cat_caduca}', '{$cat_calidad}', '{$cat_nicho}', '{$cat_observation}','{$SuperUser['name']}'";
                    $sql2.=")";
                };

                $history = $db->query($sql2);

                if($history)
                {
                    $session->msg("s", "Almacen actualizada con éxito.");
                    redirect('almacen.php',false);
                 } else {
                    $session->msg("d", "no se guardo.");
                    redirect('almacen.php',false);
                } 
            
            } 

        }

    }else{
      $session->msg("d", "Verifique la cantidad que va Almacenar");
      redirect('almacen.php',false);
    }
}
?>
<?php include_once('layouts/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <?php echo display_msg($msg); ?>
    </div>
</div>
<div class="row">

    <div class="panel panel-default">
        <div class="panel-heading">
            <strong>
                <span class="glyphicon glyphicon-indent-left"></span>
                <span>AÑADIR RUMA</span>
            </strong>

        </div>

        <div class="panel-body">
            <div class="col-md-3">
            </div>
            <div class="col-md-12 cont_form">
                <form method="post" action="add_almacen.php">
                    
                    <?php  if( $SuperUser["sede"]=="T-Callao"){?> 
                        <div class="material-textfield">
                            <input placeholder=" " type="text" name="placa" required>
                            <label>Placa Vehicular</label>
                        </div>
                    <?php } ?>
                    <div class="material-textfield">
                        <input placeholder=" " type="text" name="cod_ruma" required>
                        <label>Cod.Ruma</label>
                    </div>
                    <div class="material-textfield">
                        <input placeholder=" " type="number" name="cant_saco" required>
                        <label>Cantidad sacos</label>
                    </div>
                    <div class="material-textfield">
                        <input placeholder=" " type="number" name="sector" required>
                        <label>Sector</label>
                    </div>
                    <div class="material-textfield">
                        <input placeholder=" " type="number" name="nicho" required>
                        <label>Carril</label>
                    </div>
                    <div class="material-textfield">
                        <input placeholder=" " type="text" name="calidad" required>
                        <label>Calidad</label>
                    </div>

                    <div class="material-textfield">
                        <label class="select">Fecha Produccion</label>
                        <input placeholder=" " type="date" name="date_producc" onblur="changeDateVen(this)" required>

                    </div>
                    <div class="material-textfield">
                        <label class="select">Fecha Vencimiento</label>
                        <input placeholder=" " type="date" name="date_vencimiento" id="dateV" required>

                    </div>
                    
                    <div class="material-textfield">
                        <label class="select" for="tipo">Selecciona Antioxidante:</label>
                         <select class="form-control" name="tipo">
                        <!-- Opciones de la lista -->
                            <option value="BHT" selected>BHT</option>
                            <option value="Etoxiquina">Etoxiquina</option> <!-- Opción por defecto -->
                           
                        </select>
                    </div>
                   
                    <div class="material-textfield">
                        <input placeholder=" " type="text" name="observation" required>
                        <label>Observacion</label>
                    </div>
                    <?php  if( $SuperUser["sede"]=="T-Callao"){?> 
                     <div class="material-textfield">
                        <input placeholder=" " type="text" name="descripcion" >
                        <label>Descripcion</label>
                    </div>
                    <?php }?> 

                    <?php if( $SuperUser["sede"]=="E-Chimbote") {?>

                    <div class="material-textfield">
                        <label class="select" for="almacen">Nombre de Almacen</label>
                        <select class="form-control" name="almacen">
                            <!-- Opciones de la lista -->
                            <option value="Oslo" selected>Almacen de Oslo</option><!-- Opción por defecto -->
                            <option value="Blackar">Almacen de Blackar</option>
                            <option value="Bpo">Almacen de Bpo</option>
                            <option value="Promosa">Almacen de Promasa</option>
                        </select>
                    </div>


                    <?php } ?>
                    <div class='form-group clearfix'>
                        <button style='width:100%;border-radius: 35px;margin-top:10px' type='submit' name='add_cat'
                            class='btn btn-info'>Guardar</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<?php include_once('layouts/footer.php'); ?>
<script>
    function changeDateVen(data){
        var fecha =data.value;
        var domDateV= document.getElementById("dateV");
        var start=new Date(fecha);
        if((start.getMonth()+1)<10) mes="0"+(start.getMonth()+1);
        else mes=start.getMonth()+1;

        if((start.getDate()+1)<10) dia="0"+(start.getDate()+1);
        else dia=start.getDate()+1;
        domDateV.value=start.getFullYear()+1+"-"+mes+"-"+dia;
        
    }
</script>