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
          <form method="post" action="add_categorie.php">
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

          
            <div class="form-group clearfix">
            <button style="width:100%;border-radius: 50px;    margin-top: 15px;" type="submit" name="add_cat" class="btn btn-primary">Agregar Ruma</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <?php include_once('layouts/footer.php'); ?>