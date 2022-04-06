<?php
  $page_title = 'Ventas mensuales';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
   page_require_level(3);
   $tableActi = "";
   $SuperUser = current_user();
   if( $SuperUser["sede"]=="T-Chimbote"){ $tableActi="activity_tasachim";$tabla_sed="sede_tasachimbote";}
   if( $SuperUser["sede"]=="T-Samanco") {$tableActi="activity_samanco";$tabla_sed="sede_samanco";}
   if( $SuperUser["sede"]=="T-Supe") {$tableActi="activity_supe";$tabla_sed="sede_supe";}
   if( $SuperUser["sede"]=="T-Vegueta"){ $tableActi="activity_vegueta";$tabla_sed="sede_vegueta";}
   if( $SuperUser["sede"]=="T-Callao") {$tableActi="activity_callao";$tabla_sed="sede_callao";}
   if( $SuperUser["sede"]=="T-Pisco") {$tableActi="activity_pisco";$tabla_sed="sede_pisco";}
   if( $SuperUser["sede"]=="T-Atico") {$tableActi="activity_atico";$tabla_sed="sede_atico";}
   if( $SuperUser["sede"]=="T-Matarani") {$tableActi="activity_matarani";$tabla_sed="sede_matarani";}
   if( $SuperUser["sede"]=="E-Chimbote") {$tableActi="activity_exalmar_chim";$tabla_sed="sede_exalmar_chim";}
   if( $SuperUser["sede"]=="E-Chicama") {$tableActi="activity_exalmar_mala";$tabla_sed="sede_exalmar_mala";}
?>
<?php
 $year = date('Y');
 $sales = monthlySales($tableActi,$year);
?>
<?php include_once('layouts/header.php'); ?>
<div class="row">
  <div class="col-md-6">
    <?php echo display_msg($msg); ?>
  </div>
</div>
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading clearfix">
          <strong>
            <span class="glyphicon glyphicon-th"></span>
            <span>Actividades Diarias</span>
          </strong>
        </div>
        <div class="panel-body">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th class="text-center" style="width: 50px;">ID</th>
                <th> Actividad </th>
                <th class="text-center" style="width: 15%;"> Detalle</th>
                <th class="text-center" style="width: 15%;"> Observacion</th>
                <th class="text-center" style="width: 15%;"> Auxiliares</th>
                <th class="text-center" style="width: 15%;"> Inició</th>
                <th class="text-center" style="width: 15%;"> Finalizó</th>
                <th class="text-center" style="width: 15%;"> Fecha </th>
                
               
             </tr>
            </thead>
           <tbody>
             <?php foreach ($sales as $sale):?>
             <tr>
               <td class="text-center"><?php echo count_id();?></td>
               <td class="text-center"><?php echo remove_junk($sale['nameActivity']); ?></td>
               <td class="text-center"><?php echo remove_junk($sale['details']); ?></td>
               <td class="text-center"><?php echo remove_junk($sale['observation']); ?></td>
               <td class="text-center"><?php echo remove_junk($sale['auxiliares']); ?></td>
               <td class="text-center"><?php echo remove_junk($sale['hora_ini']); ?></td>
               <td class="text-center"><?php echo remove_junk($sale['hora_fin']); ?></td>
               <td class="text-center"><?php echo date("d/m/Y", strtotime ($sale['fecha'])); ?></td>
             </tr>
             <?php endforeach;?>
           </tbody>
         </table>
        </div>
      </div>
    </div>
  </div>

<?php include_once('layouts/footer.php'); ?>
