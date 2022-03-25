<!--   
 ====================================================================
        SGP - BUSINESS ( JHONATAN LARA && ABRAHAM VALVERDE)
 Descripción:Muestra Todas Las actividades y Agrega adicionalmente
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
  if( $SuperUser["sede"]=="T-Chimbote") $table="sede_tasachimbote";
  if( $SuperUser["sede"]=="T-Samanco") $table="sede_samanco";
  if( $SuperUser["sede"]=="T-Supe") $table="sede_supe";
  if( $SuperUser["sede"]=="T-Vegueta") $table="sede_vegueta";
  if( $SuperUser["sede"]=="T-Callao") $table="sede_callao";
  if( $SuperUser["sede"]=="T-Pisco") $table="sede_pisco";
  if( $SuperUser["sede"]=="T-Atico") $table="sede_atico";
  if( $SuperUser["sede"]=="T-Matarani") $table="sede_matarani";
  if( $SuperUser["sede"]=="E-Chimbote") $table="sede_exalmar_chim";
  if( $SuperUser["sede"]=="E-Chicama") $table="sede_exalmar_mala";
  
  $all_categories = find_all($table)
?>
<?php
 if(isset($_POST['add_cat']))
 {
   $findCatRuma = find_by_codRuma($table,$_POST['cod_ruma']);
   $req_field = array('sector', 'cod_ruma', 'cant_saco', 'date_producc', 'date_vencimiento', 'calidad', 'nicho');
    validate_fields($req_field);

    $cat_sector = remove_junk($db->escape($_POST['sector']));
    $cat_ruma = remove_junk($db->escape($_POST['cod_ruma']));
    $cat_sacos = remove_junk($db->escape($_POST['cant_saco']));
    $cat_producc = remove_junk($db->escape($_POST['date_producc']));
    $cat_caduca = remove_junk($db->escape($_POST['date_vencimiento']));
    $cat_calidad = remove_junk($db->escape($_POST['calidad']));
    $cat_nicho = remove_junk($db->escape($_POST['nicho']));
    $date   = make_date();

    $sumaSacos=(int)$cat_sacos+(int)$findCatRuma["cant_saco"];
    
    if($sumaSacos<=1000)
    {
        if(!$findCatRuma)
        {

            if(empty($errors))
            {
              $sql  = "INSERT INTO $table (";
              $sql .=" sector,cod_ruma,cant_saco,date_producc,date_vencimiento,calidad,nicho,date_almacenamiento";
              $sql .=") VALUES (";
              $sql .=" '{$cat_sector}', '{$cat_ruma}', '{$cat_sacos}', '{$cat_producc}', '{$cat_caduca}', '{$cat_calidad}', '{$cat_nicho}', '{$date}'";
              $sql .=")";
              $sql .=" ON DUPLICATE KEY UPDATE cod_ruma='{$cat_ruma}'";
        
              if($db->query($sql)){
                $session->msg("s", "Ruma agregada exitosamente.");
                redirect('categorie.php',false);
              } else {
                $session->msg("d", "Lo siento, registro falló");
                redirect('categorie.php',false);
              }
            } else {
              $session->msg("d", $errors);
              redirect('categorie.php',false);
            }

          
        
            
        }else 
        {
            //UPDATE DATA ALMACEN 
            

            $sql   = "UPDATE $table SET";
            $sql  .=" sector ='{$cat_sector}',cod_ruma ='{$cat_ruma}',";
            $sql  .=" cant_saco ='{$sumaSacos}',date_producc ='{$cat_producc}', date_vencimiento ='{$cat_caduca}', calidad ='{$cat_calidad}',nicho='{$cat_nicho}',date_almacenamiento='{$date}'";
            $sql .= " WHERE cod_ruma='{$findCatRuma['cod_ruma']}'";

            $result = $db->query($sql);
            if($result && $db->affected_rows() === 1) 
            {
              $session->msg("s", "Categoría actualizada con éxito.");
              redirect('categorie.php',false);
            } else 
            {
              $session->msg("d", "Lo siento, actualización falló.");
              redirect('categorie.php',false);
            }
          
        }

    }else{
      $session->msg("d", "La Ruma ".$cat_ruma. " Excede la cantidad limite de sacos");
      redirect('categorie.php',false);
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
          <span class="glyphicon glyphicon-th"></span>
          <span>Lista de Actividades</span>

       </strong>
 
      </div>
        <div class="panel-body">
        <div class="col-md-3">
        </div>
        <div class="col-md-6 cont_form">
          <form method="post" action="categorie.php">
          <div class="material-textfield">
              <input placeholder=" " type="text" name="sector" required>
              <label>Sector</label>
          </div>

          <div class="material-textfield">
              <input placeholder=" " type="text" name="cod_ruma" required>
              <label>Cod.Ruma</label>
          </div>

          <div class="material-textfield">
              <input placeholder=" " type="text" name="cant_saco" required>
              <label>Cantidad sacos</label>
          </div>
          <div class="material-textfield">
          <label class="select">Fecha Vencimiento</label>
              <input  placeholder=" " type="date" name="date_producc" required>
              
          </div>

          <div class="material-textfield">
          <label class="select" >Fecha Produccion</label>
              <input  placeholder=" " type="date" name="date_vencimiento" required>
              
          </div>
          <div class="material-textfield">
              <input placeholder=" " type="text" name="calidad" required>
              <label>Calidad</label>
          </div>

          <div class="material-textfield">
              <input placeholder=" " type="text" name="nicho" required>
              <label>Carril</label>
          </div>

            <!-- <div class="form-group">
                <input type="text" class="form-control" name="sector" placeholder="Sector" required>
                <input type="text" class="form-control" name="cod_ruma" placeholder="Codigo ruma" required>
                <input type="text" class="form-control" name="cant_saco" placeholder="Cantidad sacos" required>
                <input type="date" class="form-control" name="date_producc" placeholder="Fecha produccion" required>
                <input type="date" class="form-control" name="date_vencimiento" placeholder="Fecha caducidad" required>
                <input type="text" class="form-control" name="calidad" placeholder="Calidad" required>
                <input type="text" class="form-control" name="nicho" placeholder="Nicho" required>
            </div> -->
            <div class="form-group clearfix">
            <button style="width:100%;border-radius: 50px;    margin-top: 15px;" type="submit" name="add_cat" class="btn btn-primary">Agregar Ruma</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <?php include_once('layouts/footer.php'); ?>