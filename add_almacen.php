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
if( $SuperUser["sede"]=="1"){ $table="sede_tasachimbote";$tableHistory="history_tasachimb";};
  if( $SuperUser["sede"]=="2") $table="sede_samanco";
  if( $SuperUser["sede"]=="3") $table="sede_supe";
  if( $SuperUser["sede"]=="4") {$table="sede_vegueta";$tableHistory="history_vegueta";};
  if( $SuperUser["sede"]=="5") {$table="sede_callao"; $tableHistory="history_callao";};
  if( $SuperUser["sede"]=="6") $table="sede_pisco";
  if( $SuperUser["sede"]=="7") $table="sede_atico";
  if( $SuperUser["sede"]=="8") $table="sede_matarani";
  if( $SuperUser["sede"]=="9") {$table="sede_exalmar_chim"; $tableHistory="history_exalchim";};
  if( $SuperUser["sede"]=="10") {$table="sede_exalmar_mala"; $tableHistory="history_exalmal";};
  
  $all_categories = find_all($table)
?>

<?php
 if(isset($_POST['add_cat']))
 {
   $findCatRuma = find_by_codRuma($table,$_POST['cod_ruma']);
   
//    if( $SuperUser["sede"]=="E-Chimbote") = array('sector','f_actividad','tipo','cod_ruma', 'cant_saco', 'date_producc', 'date_vencimiento', 'calidad', 'nicho','observation','almacen');
//    else  = array('sector','f_actividad','tipo','cod_ruma', 'cant_saco', 'date_producc', 'date_vencimiento', 'calidad','nicho','observation');
   
  
   
    $cat_sector = remove_junk($db->escape($_POST['sector']));
    $cat_nicho = remove_junk($db->escape($_POST['nicho']));
    $cat_actividad = remove_junk($db->escape($_POST['f_actividad']));
    $cat_tipo = remove_junk($db->escape($_POST['tipo']));
    $cat_ruma = remove_junk($db->escape($_POST['cod_ruma']));
    $cat_sacos = remove_junk($db->escape($_POST['cant_saco']));
    $cat_producc = remove_junk($db->escape($_POST['date_producc']));
    $cat_caduca = remove_junk($db->escape($_POST['date_vencimiento']));
    $cat_calidad = remove_junk($db->escape($_POST['calidad']));
    
    if($SuperUser["sede"]=="5")  
    {
        $cat_placa = remove_junk($db->escape($_POST['placa']));
        $cat_descripcion = remove_junk($db->escape($_POST['descripcion']));
    };
    
    if($SuperUser["sede"]=="4" || $SuperUser["sede"]=="9" || $SuperUser["sede"]=="1")  
    {
        $cat_placa = remove_junk($db->escape($_POST['placa']));
    };
    $cat_observation = remove_junk($db->escape($_POST['observation']));
 
    if( $SuperUser["sede"]=="9")  $cat_almacen =remove_junk($db->escape($_POST['almacen']));
   
    //$date   = make_date();
   // var_dump($findCatRuma["cant_saco"]);
    if(!$findCatRuma) $sumador=0;
    else $sumador=$findCatRuma["cant_saco"];
    
    $sumaSacos=(int)$cat_sacos+(int)$sumador;

  //return;
    if($sumaSacos<=1000)
    {
        if(!$findCatRuma)
        {

            if(empty($errors))
            {
              if( $SuperUser["sede"]=="9") 
              {
                $sql  = "INSERT INTO $table (";
                $sql .=" sector,f_actividad,tipo,cod_ruma,cant_saco,date_producc,date_vencimiento,calidad,nicho,observation,almacen,placa,responsable";
                $sql .=") VALUES (";
                $sql .=" '{$cat_sector}','{$cat_actividad}', '{$cat_tipo}','{$cat_ruma}', '{$cat_sacos}', '{$cat_producc}', '{$cat_caduca}', '{$cat_calidad}','{$cat_nicho}','{$cat_observation}','{$cat_almacen}', '{$cat_placa}','{$SuperUser['name']}'";
                $sql .=")";
                $sql .=" ON DUPLICATE KEY UPDATE cod_ruma='{$cat_ruma}'";
                //var_dump()
                //return;
              }else if($SuperUser["sede"]=="5") 
              {
                $sql= "INSERT INTO $table (";
                $sql.=" sector,f_actividad,tipo,cod_ruma,cant_saco,date_producc,date_vencimiento,calidad,nicho,placa,description,observation,responsable";
                $sql.=") VALUES (";
                $sql.=" '{$cat_sector}','{$cat_actividad}','{$cat_tipo}','{$cat_ruma}', '{$cat_sacos}', '{$cat_producc}', '{$cat_caduca}', '{$cat_calidad}', '{$cat_nicho}', '{$cat_placa}','{$cat_descripcion}', '{$cat_observation}','{$SuperUser['name']}'";
                $sql.=")";

              }else if($SuperUser["sede"]=="1"||$SuperUser["sede"]=="4")
              {
                $sql= "INSERT INTO $table (";
                $sql.=" sector,f_actividad,tipo,cod_ruma,cant_saco,date_producc,date_vencimiento,calidad,nicho,placa,observation,responsable";
                $sql.=") VALUES (";
                $sql.=" '{$cat_sector}','{$cat_actividad}','{$cat_tipo}','{$cat_ruma}', '{$cat_sacos}', '{$cat_producc}', '{$cat_caduca}', '{$cat_calidad}', '{$cat_nicho}', '{$cat_placa}','{$cat_observation}','{$SuperUser['name']}'";
                $sql.=")";
              }else
              {
                $sql  = "INSERT INTO $table (";
                $sql .=" sector,f_actividad,tipo,cod_ruma,cant_saco,date_producc,date_vencimiento,calidad,nicho,observation,responsable";
                $sql .=") VALUES (";
                $sql .=" '{$cat_sector}','{$cat_actividad}','{$cat_tipo}','{$cat_ruma}', '{$cat_sacos}', '{$cat_producc}', '{$cat_caduca}', '{$cat_calidad}', '{$cat_nicho}', '{$cat_observation}','{$SuperUser['name']}'";
                $sql .=")";
                $sql .=" ON DUPLICATE KEY UPDATE cod_ruma='{$cat_ruma}'";
              }

              if($db->query($sql))
              {

                if( $SuperUser["sede"]=="5")
                {
                    $sql2= "INSERT INTO $tableHistory (";
                    $sql2.=" sector,f_actividad,tipo,cod_ruma,cant_saco,date_producc,date_vencimiento,calidad,nicho,placa,observation,descripcion,responsable";
                    $sql2.=") VALUES (";
                    $sql2.=" '{$cat_sector}','{$cat_actividad}','{$cat_tipo}','{$cat_ruma}', '{$cat_sacos}', '{$cat_producc}', '{$cat_caduca}', '{$cat_calidad}', '{$cat_nicho}', '{$cat_placa}', '{$cat_observation}','{$cat_descripcion}','{$SuperUser['name']}'";
                    $sql2.=")";
                }else if($SuperUser["sede"]=="4" ||$SuperUser["sede"]=="1")
                {
                    $sql2= "INSERT INTO $tableHistory (";
                    $sql2.=" sector,f_actividad,tipo,cod_ruma,cant_saco,date_producc,date_vencimiento,calidad,nicho,placa,observation,responsable";
                    $sql2.=") VALUES (";
                    $sql2.=" '{$cat_sector}','{$cat_actividad}','{$cat_tipo}','{$cat_ruma}', '{$cat_sacos}', '{$cat_producc}', '{$cat_caduca}', '{$cat_calidad}', '{$cat_nicho}', '{$cat_placa}', '{$cat_observation}','{$SuperUser['name']}'";
                    $sql2.=")";
                }else if($SuperUser["sede"]=="9"){
                    $sql2= "INSERT INTO $tableHistory (";
                    $sql2.=" sector,f_actividad,tipo,cod_ruma,cant_saco,date_producc,date_vencimiento,calidad,nicho,observation,almacen,placa,responsable";
                    $sql2.=") VALUES (";
                    $sql2.=" '{$cat_sector}','{$cat_actividad}','{$cat_tipo}','{$cat_ruma}', '{$cat_sacos}', '{$cat_producc}', '{$cat_caduca}', '{$cat_calidad}','{$cat_nicho}','{$cat_observation}','{$cat_almacen}', '{$cat_placa}','{$SuperUser['name']}'";
                    $sql2.=")";
                }else
                {
                    $sql2= "INSERT INTO $tableHistory (";
                    $sql2.=" sector,f_actividad,tipo,cod_ruma,cant_saco,date_producc,date_vencimiento,calidad,nicho,observation,responsable,placa";
                    $sql2.=") VALUES (";
                    $sql2.=" '{$cat_sector}','{$cat_actividad}','{$cat_tipo}','{$cat_ruma}', '{$cat_sacos}', '{$cat_producc}', '{$cat_caduca}', '{$cat_calidad}', '{$cat_nicho}', '{$cat_observation}','{$SuperUser['name']}', '{$cat_placa}'";
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
            
            if( $SuperUser["sede"]=="9") 
            {

                $sql   = "UPDATE $table SET";
                $sql  .=" sector='{$cat_sector}',f_actividad ='{$cat_actividad}',tipo ='{$cat_tipo}', cod_ruma ='{$cat_ruma}',";
                $sql  .=" cant_saco ='{$sumaSacos}',date_producc ='{$cat_producc}', date_vencimiento ='{$cat_caduca}', calidad ='{$cat_calidad}',nicho='{$cat_nicho}',placa='{$cat_placa}',observation='{$cat_observation}',almacen='{$cat_almacen}'";
                //$sql  .=" cant_saco ='{$sumaSacos}',date_producc ='{$cat_producc}', date_vencimiento ='{$cat_caduca}', calidad ='{$cat_calidad}',nicho='{$cat_nicho}',observation='{$cat_observation}',almacen='{$cat_almacen}'";
                $sql .= " WHERE cod_ruma='{$findCatRuma['cod_ruma']}'";
                

            }else if( $SuperUser["sede"]=="5") {

                $sql   = "UPDATE $table SET";
                $sql  .=" sector ='{$cat_sector}', f_actividad = '{$cat_actividad}',tipo ='{$cat_tipo}',cod_ruma ='{$cat_ruma}',";
                $sql  .=" cant_saco ='{$sumaSacos}',date_producc ='{$cat_producc}', date_vencimiento ='{$cat_caduca}', calidad ='{$cat_calidad}',nicho='{$cat_nicho}',observation='{$cat_observation}',responsable='{$SuperUser['name']}'";
                $sql .= " WHERE cod_ruma='{$findCatRuma['cod_ruma']}'";
                
            }else if($SuperUser["sede"]=="4"||$SuperUser["sede"]=="1"){
                $sql   = "UPDATE $table SET";
                $sql  .=" sector ='{$cat_sector}', f_actividad = '{$cat_actividad}',tipo ='{$cat_tipo}',cod_ruma ='{$cat_ruma}',";
                $sql  .=" cant_saco ='{$sumaSacos}',date_producc ='{$cat_producc}', date_vencimiento ='{$cat_caduca}', calidad ='{$cat_calidad}',nicho='{$cat_nicho}',observation='{$cat_observation}',responsable='{$SuperUser['name']}'";
                $sql .= " WHERE cod_ruma='{$findCatRuma['cod_ruma']}'";
    
            }else
            {
                $sql   = "UPDATE $table SET";
                $sql  .=" sector ='{$cat_sector}', f_actividad = '{$cat_actividad}',tipo ='{$cat_tipo}',cod_ruma ='{$cat_ruma}',";
                $sql  .=" cant_saco ='{$sumaSacos}',date_producc ='{$cat_producc}', date_vencimiento ='{$cat_caduca}', calidad ='{$cat_calidad}',nicho='{$cat_nicho}',observation='{$cat_observation}',responsable='{$SuperUser['name']}'";
                $sql .= " WHERE cod_ruma='{$findCatRuma['cod_ruma']}'";
            };

            $result = $db->query($sql);
           
            if($result && $db->affected_rows() === 1) 
            {
                if( $SuperUser["sede"]=="5")
                {
                    $sql2= "INSERT INTO $tableHistory (";
                    $sql2.=" sector,f_actividad,tipo,cod_ruma,cant_saco,date_producc,date_vencimiento,calidad,nicho,placa,observation,descripcion,responsable";
                    $sql2.=") VALUES (";
                    $sql2.=" '{$cat_sector}', '{$cat_actividad}','{$cat_tipo}','{$cat_ruma}', '{$cat_sacos}', '{$cat_producc}', '{$cat_caduca}', '{$cat_calidad}', '{$cat_nicho}', '{$cat_placa}', '{$cat_observation}','{$cat_descripcion}','{$SuperUser['name']}'";
                    $sql2.=")";
                }else if($SuperUser["sede"]=="4" ||$SuperUser["sede"]=="1"){
                    $sql2= "INSERT INTO $tableHistory (";
                    $sql2.=" sector,f_actividad,tipo,cod_ruma,cant_saco,date_producc,date_vencimiento,calidad,nicho,placa,observation,responsable";
                    $sql2.=") VALUES (";
                    $sql2.=" '{$cat_sector}', '{$cat_actividad}','{$cat_tipo}','{$cat_ruma}', '{$cat_sacos}', '{$cat_producc}', '{$cat_caduca}', '{$cat_calidad}', '{$cat_nicho}', '{$cat_placa}', '{$cat_observation}','{$SuperUser['name']}'";
                    $sql2.=")";
                }else if($SuperUser["sede"]=="9"){
                    $sql2= "INSERT INTO $tableHistory (";
                    $sql2.=" sector,f_actividad,tipo,cod_ruma,cant_saco,date_producc,date_vencimiento,calidad,nicho,observation,almacen,placa,responsable";
                    $sql2.=") VALUES (";
                    $sql2.=" '{$cat_sector}','{$cat_actividad}','{$cat_tipo}','{$cat_ruma}', '{$cat_sacos}', '{$cat_producc}', '{$cat_caduca}', '{$cat_calidad}','{$cat_nicho}','{$cat_observation}','{$cat_almacen}', '{$cat_placa}','{$SuperUser['name']}'";
                    $sql2.=")";
                }else
                {
                    $sql2= "INSERT INTO $tableHistory (";
                    $sql2.=" sector,f_actividad,tipo,cod_ruma,cant_saco,date_producc,date_vencimiento,calidad,nicho,observation,responsable";
                    $sql2.=") VALUES (";
                    $sql2.=" '{$cat_sector}', '{$cat_actividad}','{$cat_tipo}','{$cat_ruma}', '{$cat_sacos}', '{$cat_producc}', '{$cat_caduca}', '{$cat_calidad}', '{$cat_nicho}', '{$cat_observation}','{$SuperUser['name']}'";
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
                    
                    <?php  if( $SuperUser["sede"]=="5"||$SuperUser["sede"]=="4"||$SuperUser["sede"]=="9"||$SuperUser["sede"]=="1"){?> 
                        <div class="material-textfield">
                            <input placeholder=" " type="text" name="placa" required>
                            <label>Placa Vehicular</label>
                        </div>
                    <?php } ?>

                    <!-- CONDICIONAR SECTOR Y CARRIL PARA EXALMAR CHIMBOTE -->
                    <div class="material-textfield">
                        <input placeholder=" " type="text" name="cod_ruma" required>
                        <label>Cod.Ruma</label>
                    </div>
                    <div class="material-textfield">
                        <input placeholder=" " type="number" name="cant_saco" required>
                        <label>Cantidad sacos</label>
                    </div>
                     <?php if($SuperUser['sede']!=="9") {?>
                            <div class="material-textfield">
                            <input placeholder=" " type="number" name="sector">
                            <label>Sector</label>
                            </div>
                            <div class="material-textfield">
                            <input placeholder=" " type="number" name="nicho">
                            <label>Carril</label>
                            </div>
                            <?php }?> 
                    
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
                        <label class="select">Fecha Ejecucion</label>
                        <input placeholder=" " type="date" name="f_actividad" required>
                        
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
                    <?php  if( $SuperUser["sede"]=="5"){?> 
                     <div class="material-textfield">
                        <input placeholder=" " type="text" name="descripcion" >
                        <label>Descripcion</label>
                    </div>
                    <?php }?> 

                    <?php if( $SuperUser["sede"]=="9") {?>

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
        //console.log(fecha)
        
        
        var currentDateObj = new Date(fecha);
        var numberOfMlSeconds = currentDateObj.getTime();
        var addMlSeconds = 60 * 60000 *5;
        var start = new Date(numberOfMlSeconds + addMlSeconds);
        //console.log(newDateObj)
        
        var domDateV= document.getElementById("dateV");
        //var start=new Date(fecha);
        //var start2=new Date(fecha+"T00:00:00+0000");
        //console.log("fecha")
        //console.log(start2);
        if((start.getMonth()+1)<10) mes="0"+(start.getMonth()+1);
        else mes=start.getMonth()+1;
        //console.log(start.getDay())
        if((start.getDate()+1)<10) dia="0"+(start.getDate());
        else dia=start.getDate();
        
        console.log(start.getFullYear()+1+"-"+mes+"-"+dia);
        domDateV.value=start.getFullYear()+1+"-"+mes+"-"+dia;
        
    }
</script>