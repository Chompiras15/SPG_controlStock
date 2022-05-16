<!--   
 ====================================================================
        SGP - BUSINESS ( JHONATAN LARA && ABRAHAM VALVERDE)
 Descripción:Edita Historial
 Creado: 11/03/2022
 Chimbote Peru 
 ====================================================================
  
-->

<?php
  $page_title = 'Editar Almacen';
  require_once('includes/load.php');
  $SuperUser = current_user();
  // Checkin What level user has permission to view this page
  page_require_level(2);
  if( $SuperUser["sede"]=="T-Chimb") $table="sede_tasachimbote";
  if( $SuperUser["sede"]=="T-Samanco") $table="sede_samanco";
  if( $SuperUser["sede"]=="T-Supe") $table="sede_supe";
  if( $SuperUser["sede"]=="T-Vegueta") $table="sede_vegueta";
  if( $SuperUser["sede"]=="T-Callao") $table="history_callao";
  if( $SuperUser["sede"]=="T-Pisco") $table="sede_pisco";
  if( $SuperUser["sede"]=="T-Atico") $table="sede_atico";
  if( $SuperUser["sede"]=="T-Matarani") $table="sede_matarani";
  if( $SuperUser["sede"]=="E-Chimbote") $table="sede_exalmar_chim";
  if( $SuperUser["sede"]=="E-Chicama") $table="history_exalmal";

?>
<?php
  //Display all catgories.
  $categorie = find_by_id($table,(int)$_GET['id']);
  // $dateHistory = find_by_codRumaHistory($table,$_POST['cod_ruma'],$_POST['placa']);
  if(!$categorie){
    $session->msg("d","Missing categorie id.");
    redirect('history.php');
  }
?>

<?php
if(isset($_POST['edit_cat']))
{

$req_field = array('sector','tipo', 'cant_saco', 'date_producc', 'date_vencimiento', 'calidad', 'nicho','observation');

 
  validate_fields($req_field);

  $cat_sector = remove_junk($db->escape($_POST['sector']));
  $cat_tipo = remove_junk($db->escape($_POST['tipo']));
  $cat_ruma = remove_junk($db->escape($_POST['cod_ruma']));
  $cat_saco = remove_junk($db->escape($_POST['cant_saco']));
  $cat_producc = remove_junk($db->escape($_POST['date_producc']));
  $cat_caduca = remove_junk($db->escape($_POST['date_vencimiento']));
  $cat_calidad = remove_junk($db->escape($_POST['calidad']));
  $cat_nicho = remove_junk($db->escape($_POST['nicho']));
  if($SuperUser["sede"]=="T-Callao")  $cat_placa = remove_junk($db->escape($_POST['placa']));
  $cat_observation = remove_junk($db->escape($_POST['observation']));
  $cat_descripcion = remove_junk($db->escape($_POST['description']));

  //if( $SuperUser["sede"]=="E-Chimbote")  $cat_almacen = remove_junk($db->escape($_POST['almacen']));
  
  if(empty($errors))
  {
    //$findCatRuma = find_by_codRuma( $table, $_POST[ 'cod_ruma']);
    //if(!$findCatRuma)
    //{
      if($cat_saco<1001)
      {   
        if($SuperUser["sede"]=="T-Callao") 
        {
            $sql   = "UPDATE $table SET";
            $sql  .=" sector ='{$cat_sector}',tipo ='{$cat_tipo}' ,";
            $sql  .=" cant_saco ='{$cat_saco}',date_producc ='{$cat_producc}', date_vencimiento ='{$cat_caduca}', calidad ='{$cat_calidad}',nicho='{$cat_nicho}',placa='{$cat_placa}',observation='{$cat_observation}',descripcion='{$cat_descripcion}'";
            $sql .= " WHERE id='{$categorie['id']}'";
        }else{
            $sql   = "UPDATE $table SET";
            $sql  .=" sector ='{$cat_sector}',tipo ='{$cat_tipo}' ,";
            $sql  .=" cant_saco ='{$cat_saco}',date_producc ='{$cat_producc}', date_vencimiento ='{$cat_caduca}', calidad ='{$cat_calidad}',nicho='{$cat_nicho}',observation='{$cat_observation}'";
            $sql .= " WHERE id='{$categorie['id']}'";
        }
            $result = $db->query($sql);
            
       
            if($result && $db->affected_rows() === 1) 
            {
              $session->msg("s", "Ruma actualizada con éxito.");
              redirect('history.php',false);
            } else {
              $session->msg("d", "Lo siento, actualización falló.");
              redirect('history.php',false);
            }
         
  
      }else{
        $session->msg("d", "Excedió el límite de cantidad.");
        redirect('history.php',false);
      }

   

  } else {
    $session->msg("d", $errors);
    redirect('history.php',false);
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
                <span class="glyphicon glyphicon-indent-left"></span>
                 <span>Editando Historial Ruma: <b style="color: red;"><?php echo remove_junk(ucfirst($categorie['cod_ruma']));?></b></span>

            </strong>

        </div>
        <div class="panel-body">
            <div class="col-md-3">
            </div>
            <div class="col-md-12 edit_form">

                <form method="post" action="edit_history.php?id=<?php echo (int)$categorie['id'];?>">
                    
                     <div class="form-group col-md-12">
                      <label for="name" class="control-label">Selecione Antioxidante</label>
                        <select name="tipo" <?php echo (int)$categorie['id'];?> style="width:100%;">
                            <!-- Opciones de la lista -->
                            <option value="BHT"
                                <?php if($categorie['tipo']=="BHT"){;?>selected <?php } ?>>
                                BHT</option>
                            <option value="Etoxiquina"
                                <?php if($categorie['tipo']=="Etoxiquina"){;?>selected <?php } ?>>
                                Etoxiquina</option> <!-- Opción por defecto -->
                         
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Lote</label>
                        <input type="text" class="form-control" name="cod_ruma"
                            value="<?php echo remove_junk(ucfirst($categorie['cod_ruma']));?>" disabled>
                    </div>

                    <div class="form-group col-md-6">
                        
                        <label for="name" class="control-label">Sector</label>
                        <input type="text" class="form-control" name="sector"
                            value="<?php echo remove_junk(ucfirst($categorie['sector']));?>">
                        
                    </div>

                      <div class="form-group col-md-6">
                        <label for="name" class="control-label">Cantidad de Sacos</label>
                        <input type="text" class="form-control" name="cant_saco"
                            value="<?php echo remove_junk(ucfirst($categorie['cant_saco']));?>">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Ubicación</label>
                        <input type="text" class="form-control" name="nicho"
                            value="<?php echo remove_junk(ucfirst($categorie['nicho']));?>">
                    </div>
                    <?php  if( $SuperUser["sede"]=="T-Callao"){?> 
                      <div class="form-group col-md-6">
                          <label for="name" class="control-label">Placa</label>
                          <input type="text" class="form-control" name="placa"
                              value="<?php echo remove_junk(ucfirst($categorie['placa']));?>">
                      </div>
                    <?php }?> 
                   
                     <div class="form-group col-md-6">
                        <label for="name" class="control-label">Calidad</label>
                        <input type="text" class="form-control" name="calidad"
                            value="<?php echo remove_junk(ucfirst($categorie['calidad']));?>">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Fecha de Producción</label>
                        <input type="date" class="form-control" name="date_producc"
                            value="<?php echo remove_junk(ucfirst($categorie['date_producc']));?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Fecha de Vencimiento</label>
                        <input type="date" class="form-control" name="date_vencimiento"
                            value="<?php echo remove_junk(ucfirst($categorie['date_vencimiento']));?>">
                    </div>
                   
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Observación</label>
                        <input type="text" class="form-control" name="observation"
                            value="<?php echo remove_junk(ucfirst($categorie['observation']));?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Descripcion</label>
                        <input type="text" class="form-control" name="description"
                            value="<?php echo remove_junk(ucfirst($categorie['descripcion']));?>">
                    </div>



                    <div class='form-group clearfix'>
                        <button style='width:100%;border-radius: 35px;margin-top:10px' type="submit" name="edit_cat"
                            class="btn btn-primary">Actualizar Ruma</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>



<?php include_once('layouts/footer.php'); ?>