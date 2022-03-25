<?php
  $page_title = 'Almacen-Chimbote';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(3);
 
  $table = "";
  $tabla_sed="";
  //require_once('includes/load.php');
  $SuperUser = current_user();
  if( $SuperUser["sede"]=="T-Chimbote"){ $table="emb_tasachim";$tabla_sed="sede_tasachimbote";}
  if( $SuperUser["sede"]=="T-Samanco") {$table="emb_samanco";$tabla_sed="sede_samanco";}
  if( $SuperUser["sede"]=="T-Supe") {$table="emb_supe";$tabla_sed="sede_supe";}
  if( $SuperUser["sede"]=="T-Vegueta"){ $table="emb_vegueta";$tabla_sed="sede_vegueta";}
  if( $SuperUser["sede"]=="T-Callao") {$table="emb_callao";$tabla_sed="sede_callao";}
  if( $SuperUser["sede"]=="T-Pisco") {$table="emb_pisco";$tabla_sed="sede_pisco";}
  if( $SuperUser["sede"]=="T-Atico") {$table="emb_atico";$tabla_sed="sede_atico";}
  if( $SuperUser["sede"]=="T-Matarani") {$table="emb_matarani";$tabla_sed="sede_matarani";}
  if( $SuperUser["sede"]=="E-Chimbote") {$table="emb_exalmar_chim";$tabla_sed="sede_exalmar_chim";}
  if( $SuperUser["sede"]=="E-Chicama") {$table="emb_exalmar_mala";$tabla_sed="sede_exalmar_mala";}
  
  $all_embarques = find_all($table)
?>
<?php
 if(isset($_POST['add_emb']))
 {
   $req_field = array('cod_contrato', 'cant_out', 'cod_ruma', 'date_out', 'supervisor');
   validate_fields($req_field);
   $cod_contrato = remove_junk($db->escape($_POST['cod_contrato']));
   $cant_out = remove_junk($db->escape($_POST['cant_out']));
   $cod_ruma = remove_junk($db->escape($_POST['cod_ruma']));
   $date_out = remove_junk($db->escape($_POST['date_out']));
   $supervisor = remove_junk($db->escape($_POST['supervisor']));
 

   if(empty($errors))
   {
      if($cant_out<1001)
      {

          $sql  = "INSERT INTO $table (";
          $sql .=" cod_contrato,cant_out,cod_ruma,date_out,supervisor";
          $sql .=") VALUES (";
          $sql .=" '{$cod_contrato}', '{$cant_out}', '{$cod_ruma}', '{$date_out}', '{$supervisor}'";
          $sql .=")";
          $sql .=" ON DUPLICATE KEY UPDATE cod_contrato='{$cod_contrato}'";

          if($db->query($sql))
          {

            $findCatRuma = find_by_codRuma($tabla_sed,$_POST['cod_ruma']);
            $restaSacos=(int)$findCatRuma["cant_saco"]-(int)$cant_out;

            if($restaSacos == 0)
            {
              $delete_cod_ruma= delete_by_id($tabla_sed,$findCatRuma['id']);
                //$delete_id = delete_by_id('sede_tasachimbote',(int)$categorie['id']);
              if($delete_cod_ruma){
                  $session->msg("s","Ruma despachada totalmente");
                  redirect('media.php');
              } else {
                  $delete_cod_ruma->msg("d","Eliminación falló");
                  redirect('media.php');
              }

            }elseif($restaSacos > 0)
            {
              $sql   = "UPDATE $tabla_sed SET";
              $sql  .=" cant_saco ='{$restaSacos}'";
              $sql .= " WHERE cod_ruma='{$findCatRuma['cod_ruma']}'";

              $result = $db->query($sql);
              if($result && $db->affected_rows() === 1) 
              {
                $session->msg("s", "Despacho actualizado con éxito");
                redirect('media.php',false);
              } else 
              {
                $session->msg("d", "Lo siento, actualización falló.");
                redirect('media.php',false);
              }

              $session->msg("s", "Ruma agregada exitosamente.");
              redirect('media.php',false);

            }elseif($restaSacos < 0)
            {
              $session->msg("d", "Verificar la Cantidad Sacos");
              redirect('media.php',false);
            }

            

          } else {
            $session->msg("d", "Lo siento, registro falló");
            redirect('media.php',false);
          }
      }else
      {
        $session->msg("d", "Excedio la Capacitad Límite, Verifique la cantidad que va Despachar");
        redirect('media.php',false);
      }
    } else {
       $session->msg("d", $errors);
      redirect('media.php',false);
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
    <div class="panel panel-default ">
        <div class="panel-heading">
          <strong>
            <span class="glyphicon glyphicon-th"></span>
            <span>Agregar Despacho</span>
          </strong>
        </div>
        <div class="panel-body" style="height: 400px;margin-top: 5%;">
            <div class="col-md-3">
            </div>
            <div class="col-md-6 cont_form">
              <form method="post" action="media.php">
                  <div class="material-textfield">
                      <input placeholder=" " type="text" name="cod_contrato" required>
                      <label>Contrato</label>
                  </div>

                  <div class="material-textfield">
                      <input placeholder=" " type="number" name="cant_out" required>
                      <label>Cantidad</label>
                  </div>

                  <div class="material-textfield">
                      <input placeholder=" " type="text" name="cod_ruma" required>
                      <label>Codigo Ruma</label>
                  </div>

                  <div class="material-textfield">
                      <label class="select">Fecha de Salida</label>
                      <input placeholder=" " type="date" name="date_out" required>
                     
                  </div>

                  <div class="material-textfield">
                      <input placeholder=" " type="text" name="supervisor" required>
                      <label>Supervisor</label>
                  </div>

                  <div class="form-group clearfix">
                        <button style="width:100%;border-radius: 35px;margin-top:10px" type="submit" name="add_emb" class="btn btn-info">Guardar</button>
                  </div> 
              </form>

            </div>
        </div>

      </div>
</div>







    <?php include_once('layouts/footer.php'); ?>