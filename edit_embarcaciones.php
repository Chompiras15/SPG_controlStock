<!--   
 ====================================================================
        SGP - BUSINESS ( JHONATAN LARA && ABRAHAM VALVERDE)
 Descripción:Edita Despachos
 Creado: 11/03/2022
 Chimbote Peru 
 ====================================================================
  
-->

<?php
  $page_title = 'Editar Embarcaciones';
  require_once('includes/load.php');
  
  //require_once('includes/load.php');
  $SuperUser = current_user();
  // Checkin What level user has permission to view this page
  page_require_level(2);
  $table = "";
  $tabla_sed="";
  //require_once('includes/load.php');
  $SuperUser = current_user();
  if( $SuperUser["sede"]=="T-Chimb"){ $table="emb_tasachim";$tabla_sed="sede_tasachimbote";}
  if( $SuperUser["sede"]=="T-Samanco") {$table="emb_samanco";$tabla_sed="sede_samanco";}
  if( $SuperUser["sede"]=="T-Supe") {$table="emb_supe";$tabla_sed="sede_supe";}
  if( $SuperUser["sede"]=="T-Vegueta"){ $table="emb_vegueta";$tabla_sed="sede_vegueta";}
  if( $SuperUser["sede"]=="T-Callao") 
  {
    $table="emb_callao"; 
   
  }
  if( $SuperUser["sede"]=="T-Pisco") {$table="emb_pisco";$tabla_sed="sede_pisco";}
  if( $SuperUser["sede"]=="T-Atico") {$table="emb_atico";$tabla_sed="sede_atico";}
  if( $SuperUser["sede"]=="T-Matarani") {$table="emb_matarani";$tabla_sed="sede_matarani";}
  if( $SuperUser["sede"]=="E-Chimbote") {$table="emb_exalmar_chim";$tabla_sed="sede_exalmar_chim";}
  if( $SuperUser["sede"]=="E-Chicama") {$table="emb_exalmar_mala";$tabla_sed="sede_exalmar_mala";}
  
?>
<?php
  //Display all catgories.
  $categorie = find_by_id($table,(int)$_GET['id']);
  if(!$categorie){
    $session->msg("d","Missing Embarcaciones id.");
    redirect('embarque.php');
  }

  if( $SuperUser["sede"]=="T-Callao") 
  {
    if($categorie['type']=="" || $categorie['type']=="pc")  $tabla_sed = 'sede_callao';
    else $tabla_sed = 'sede_pnc_callao';
  };
?>

<?php
if(isset($_POST['edit_emb']))
{
    $req_field = array('cod_contrato', 'cant_out', 'cod_ruma', 'supervisor');
    validate_fields($req_field);
    $cod_contrato = remove_junk($db->escape($_POST['cod_contrato']));
    $cant_out = remove_junk($db->escape($_POST['cant_out']));
    $cod_ruma = remove_junk($db->escape($_POST['cod_ruma']));
    $supervisor = remove_junk($db->escape($_POST['supervisor']));

    if( $SuperUser["sede"]=="T-Callao" || $SuperUser["sede"]=="T-Chimb") {
      $placa = remove_junk($db->escape($_POST['placa']));
      
    };
    if($SuperUser["sede"]=="T-Callao"){
    $cod_container = remove_junk($db->escape($_POST['cod_container']));
    };
    $date=make_date();
  /**<var>$cat_name = remove_junk($db->escape($_POST['categorie-name']));
  $cat_name = remove_junk($db->escape($_POST['categorie-name']));</var>*/
  if(empty($errors))
  {
    $findCatRuma = find_by_codRuma($tabla_sed,$_POST['cod_ruma']);
    if($findCatRuma)
    {
      if($cant_out<1001)
      {
     
          //CAMBIO LA CNTIDAD DE SEDE
          $newCant=(int)$findCatRuma["cant_saco"]+(int)$categorie["cant_out"]-(int)$_POST['cant_out'];
          //$session->msg("d", $newCant);
          //redirect('embarque.php',false);
          $sq   = "UPDATE $tabla_sed SET";
          $sq  .=" cant_saco ='{$newCant}'";
          $sq .= " WHERE cod_ruma='{$findCatRuma['cod_ruma']}'";

          $result = $db->query($sq);

          if($result || $db->affected_rows() === 1) 
          {

            if( $SuperUser["sede"]=="T-Callao") {
              $sql   = "UPDATE $table SET";
              $sql  .=" cod_contrato ='{$cod_contrato}', cant_out ='{$cant_out}',";
              $sql  .=" cod_ruma ='{$cod_ruma}',placa ='{$placa}',cod_container ='{$cod_container}',date_out ='{$date}', supervisor ='{$supervisor}'";
              $sql .= " WHERE id='{$categorie['id']}'";
            }else if($SuperUser["sede"]=="T-Chimb"){
              $sql   = "UPDATE $table SET";
              $sql  .=" cod_contrato ='{$cod_contrato}', cant_out ='{$cant_out}',";
              $sql  .=" cod_ruma ='{$cod_ruma}', placa ='{$placa}',date_out ='{$date}', supervisor ='{$supervisor}'";
              $sql .= " WHERE id='{$categorie['id']}'";
            }else{
              $sql   = "UPDATE $table SET";
              $sql  .=" cod_contrato ='{$cod_contrato}', cant_out ='{$cant_out}',";
              $sql  .=" cod_ruma ='{$cod_ruma}',date_out ='{$date}', supervisor ='{$supervisor}'";
              $sql .= " WHERE id='{$categorie['id']}'";
            }
              $result = $db->query($sql);

              if($result && $db->affected_rows() === 1) 
              {

                $session->msg("s", "Despacho actualizado con éxito");
                redirect('embarque.php',false);
              } else {
                $session->msg("d", "Lo siento, actualización falló.");
                 redirect('embarque.php',false);
              }
 
          }
      }else{
        $session->msg("d", "Excedió la cantidad Límite.");
        redirect('embarque.php',false);
      }

    }else
    {
      $session->msg("d", "La Ruma no Existe.");
      redirect('embarque.php',false);
    }
     

  } else {
    $session->msg("d", $errors);
    redirect('embarque.php',false);
  }
}
?>
<?php include_once('layouts/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <?php echo display_msg($msg); ?>
    </div>


    <div class="panel panel-default">
        <div class="panel-heading">
            <strong>
                <span class="glyphicon glyphicon-sort"></span>
                <span>Editar Despacho</span>
            </strong>

        </div>
        <div class="panel-body">
            <div class="col-md-3">
            </div>
            <div class="col-md-12 edit_form">
               
                <form method="post"action="edit_embarcaciones.php?id=<?php echo (int)$categorie['id'];?>">
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Código de Contrato</label>
                        <input type="text" class="form-control" name="cod_contrato" placeholder="Cod_Contrato"
                            value="<?php echo remove_junk(ucfirst($categorie['cod_contrato']));?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Cantidad de sacos</label>
                        <input type="text" class="form-control" name="cant_out" placeholder="Cantidad "
                            value="<?php echo remove_junk(ucfirst($categorie['cant_out']));?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Código de Ruma</label>
                        <input type="text" class="form-control" name="cod_ruma" placeholder="Codigo Ruma"
                            value="<?php echo remove_junk(ucfirst($categorie['cod_ruma']));?>">
                    </div>
                    <?php  if( $SuperUser["sede"]=="T-Callao" || $SuperUser["sede"]=="T-Chimb"){?>
                      <div class="form-group col-md-6">
                        <label for="name" class="control-label">Placa</label>
                        <input type="text" class="form-control" name="placa" placeholder="Placa"
                            value="<?php echo remove_junk(ucfirst($categorie['placa']));?>">
                      </div>
                    <?php } ?>

                    <?php  if( $SuperUser["sede"]=="T-Callao"){?>
                        <div class="form-group col-md-6">
                          <label for="name" class="control-label">Código Contenedor</label>
                          <input type="text" class="form-control" name="cod_container" placeholder="Codigo Container"
                            value="<?php echo remove_junk(ucfirst($categorie['cod_container']));?>">
                      </div>
                     <?php } ?> 

                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Supervisor</label>
                        <input type="text" class="form-control" name="supervisor" placeholder="Supervisor"
                            value="<?php echo remove_junk(ucfirst($categorie['supervisor']));?>">

                    </div>
                    <div class='form-group clearfix'>
                        <button style='width:100%;border-radius: 35px;margin-top:10px' type="submit" name="edit_emb"
                            class="btn btn-primary">Actualizar
                            Embarcaciones</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
</div>



<?php include_once('layouts/footer.php'); ?>