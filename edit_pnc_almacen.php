<!--   
 ====================================================================
        SGP - BUSINESS ( JHONATAN LARA && ABRAHAM VALVERDE)
 Descripción:Edita Categoria
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
  
  if( $SuperUser["sede"]=="T-Callao") $table="sede_pnc_callao";


?>
<?php
  //Display all catgories.
  $categorie = find_by_id($table,(int)$_GET['id']);
  // $dateHistory = find_by_codRumaHistory($table,$_POST['cod_ruma'],$_POST['placa']);
  if(!$categorie){
    $session->msg("d","Missing Almacen id.");
    redirect('pnc_almacen.php');
  }
?>

<?php
if(isset($_POST['edit_cat']))
{

$req_field = array('sector','f_actividad','tipo', 'cant_saco', 'date_producc', 'date_vencimiento', 'calidad', 'nicho','observation');

 
  validate_fields($req_field);

 
  $cat_tipo = remove_junk($db->escape($_POST['tipo']));
  $cat_actividad = remove_junk($db->escape($_POST['f_actividad']));
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
            $sql  .=" sector ='{$cat_sector}',f_actividad ='{$cat_actividad}',tipo ='{$cat_tipo}' ,";
            $sql  .=" cant_saco ='{$cat_saco}',date_producc ='{$cat_producc}', date_vencimiento ='{$cat_caduca}', calidad ='{$cat_calidad}',nicho='{$cat_nicho}',placa='{$cat_placa}',observation='{$cat_observation}',description='{$cat_descripcion}'";
            $sql .= " WHERE id='{$categorie['id']}'";
        }else{
            $sql   = "UPDATE $table SET";
            $sql  .=" sector ='{$cat_sector}',f_actividad ='{$cat_actividad}',tipo ='{$cat_tipo}' ,";
            $sql  .=" cant_saco ='{$cat_saco}',date_producc ='{$cat_producc}', date_vencimiento ='{$cat_caduca}', calidad ='{$cat_calidad}',nicho='{$cat_nicho}',observation='{$cat_observation}'";
            $sql .= " WHERE id='{$categorie['id']}'";
        }
            $result = $db->query($sql);
            
       
            if($result && $db->affected_rows() === 1) 
            {
              $session->msg("s", "Ruma actualizada con éxito.");
              redirect('pnc_almacen.php',false);
            } else {
              $session->msg("d", "Lo siento, actualización falló.");
              redirect('pnc_almacen.php',false);
            }
         
  
      }else{
        $session->msg("d", "Excedió el límite de cantidad.");
        redirect('pnc_almacen.php',false);
      }

    /*}else{
      $session->msg("d", "Ya existe ese Codigo de Ruma.");
        redirect('almacen.php',false);
    }*/
   

  } else {
    $session->msg("d", $errors);
    redirect('pnc_almacen.php',false);
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
                 <span>Editando Ruma: <b style="color: red;"><?php echo remove_junk(ucfirst($categorie['cod_ruma']));?></b></span>
            </strong>

        </div>
        <div class="panel-body">
            <div class="col-md-3">
            </div>
            <div class="col-md-12 edit_form">

                <form method="post" action="edit_pnc_almacen.php?id=<?php echo (int)$categorie['id'];?>">
                    
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
                        <?php  if( $SuperUser["sede"]=="T-Callao"){?> <label for="name" class="control-label">Lote</label>
                        <?php }else {  ?> <label for="name" class="control-label">Codigo Ruma</label>
                        <?php } ?> 
                        <input type="text" class="form-control" name="cod_ruma"
                            value="<?php echo remove_junk(ucfirst($categorie['cod_ruma']));?>" disabled>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Cantidad de Sacos</label>
                        <input type="text" class="form-control" name="cant_saco"
                            value="<?php echo remove_junk(ucfirst($categorie['cant_saco']));?>">
                    </div>

                    <div class="form-group col-md-6">
                        
                        <?php  if( $SuperUser["sede"]=="E-Chicama"){?> <label for="name" class="control-label">Cuartel</label>
                        <?php }else {  ?> <label for="name" class="control-label">Sector</label>
                        <?php } ?>  
                        <input type="text" class="form-control" name="sector" value="<?php echo remove_junk(ucfirst($categorie['sector']));?>">
                        
                    </div>
                    <div class="form-group col-md-6">
                        <?php  if( $SuperUser["sede"]=="T-Callao"){?>  <label for="name" class="control-label">Ubicación</label>
                        <?php }else {  ?>  <label for="name" class="control-label">Carril</label>
                        <?php } ?>  
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
                        <input type="date" class="form-control" name="date_producc" onblur="changeDateVen(this)"
                            value="<?php echo remove_junk(ucfirst($categorie['date_producc']));?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Fecha de Vencimiento</label>
                        <input type="date" class="form-control" name="date_vencimiento" id="dateV"
                            value="<?php echo remove_junk(ucfirst($categorie['date_vencimiento']));?>">
                    </div> 
                      <div class="form-group col-md-6">
                        <label for="name" class="control-label">Fecha_ejecución</label>
                        <input type="date" class="form-control" name="f_actividad" onblur="changeDateVen(this)"
                            value="<?php echo remove_junk(ucfirst($categorie['f_actividad']));?>">
                    </div>     
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Observación</label>
                        <input type="text" class="form-control" name="observation"
                            value="<?php echo remove_junk(ucfirst($categorie['observation']));?>">
                    </div>
                    <?php  if( $SuperUser["sede"]=="T-Callao"){?> 
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Descripcion</label>
                        <input type="text" class="form-control" name="description"
                            value="<?php echo remove_junk(ucfirst($categorie['description']));?>">
                    </div>
                    <?php }?> 
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