<?php
  $page_title = 'Admin página de inicio';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
   page_require_level(1);
?>
<?php

 $c_user          = count_by_id('users');

?>
<?php include_once('layouts/header.php'); ?>

<div class="row">
   <div class="col-md-6">
     <?php echo display_msg($msg); ?>
   </div>
</div>

<style>
  .titleSedes
  {
    border-radius: 5px;
    background: #03C4EB;
    text-align: center;
  }


  .p_sedes
  {
    color: white;
    font-size: 20px;
    font-family: cursive;
    font-weight: bold;
    margin: 10px;
  }
</style>

<div class="row">
    <div class="col-md-4">
       <div class="panel panel-box clearfix">
         <div class="panel-icon pull-left bg-green">
            <i class="glyphicon glyphicon-user"></i>
        </div>
        <div class="panel-value pull-right">
          <h2 class="margin-top"> <?php  echo $c_user['total']; ?> </h2>
          <p class="text-muted">Usuarios</p>
        </div>
       </div>
    </div>

    <div class="col-md-4">
       <div class="panel panel-box clearfix">
         <div class="panel-icon pull-left bg-red">
            <i class="glyphicon glyphicon-list"></i>
        </div>
        <div class="panel-value pull-right">
          <h2 class="margin-top"> <?php  echo $c_user['total']; ?> </h2>
          <p class="text-muted">Categorías</p>
        </div>
       </div>
    </div>

    <div class="col-md-4">
       <div class="panel panel-box clearfix">
         <div class="panel-icon pull-left bg-red">
            <i class="glyphicon glyphicon-list"></i>
        </div>
        <div class="panel-value pull-right">
          <h2 class="margin-top"> <?php  echo $c_user['total']; ?> </h2>
          <p class="text-muted">Categorías</p>
        </div>
       </div>
    </div>


</div>

<div class="row titleSedes">
  <p class="p_sedes">SEDES</p>
</div>

<div class="row" style="margin-top:20px;">
    <div class="col-md-3">
       <div class="panel panel-box clearfix">
         <div class="panel-icon pull-left bg-green">
            <i class="glyphicon glyphicon-user"></i>
        </div>
        <div class="panel-value pull-right">
          <h4 class="margin-top" style="margin-top: 50px;"> Atico </h4>
        </div>
       </div>
    </div>

    <div class="col-md-3">
       <div class="panel panel-box clearfix">
         <div class="panel-icon pull-left bg-red">
            <i class="glyphicon glyphicon-list"></i>
        </div>
        <div class="panel-value pull-right">
        <h4 class="margin-top" style="margin-top: 50px;"> Supe </h4>
        </div>
       </div>
    </div>

    <div class="col-md-3">
       <div class="panel panel-box clearfix">
         <div class="panel-icon pull-left bg-red">
            <i class="glyphicon glyphicon-list"></i>
        </div>
        <div class="panel-value pull-right">
        <h4 class="margin-top" style="margin-top: 50px;"> Végeta </h4>
        </div>
       </div>
    </div>

    <div class="col-md-3">
       <div class="panel panel-box clearfix">
         <div class="panel-icon pull-left bg-red">
            <i class="glyphicon glyphicon-list"></i>
        </div>
        <div class="panel-value pull-right">
        <h4 class="margin-top" style="margin-top: 50px;"> Matarani </h4>
        </div>
       </div>
    </div>

</div>

<div class="row" style="margin-top:20px;">
    <div class="col-md-3">
       <div class="panel panel-box clearfix">
         <div class="panel-icon pull-left bg-green">
            <i class="glyphicon glyphicon-user"></i>
        </div>
        <div class="panel-value pull-right">
          <h4 class="margin-top" style="margin-top: 50px;"> Tasa Chimbote </h4>
        </div>
       </div>
    </div>

    <div class="col-md-3">
       <div class="panel panel-box clearfix">
         <div class="panel-icon pull-left bg-red">
            <i class="glyphicon glyphicon-list"></i>
        </div>
        <div class="panel-value pull-right">
        <h4 class="margin-top" style="margin-top: 50px;"> Chimbote Exalmar </h4>
        </div>
       </div>
    </div>

    <div class="col-md-3">
       <div class="panel panel-box clearfix">
         <div class="panel-icon pull-left bg-red">
            <i class="glyphicon glyphicon-list"></i>
        </div>
        <div class="panel-value pull-right">
        <h4 class="margin-top" style="margin-top: 50px;"> Samanco </h4>
        </div>
       </div>
    </div>

    <div class="col-md-3">
       <div class="panel panel-box clearfix">
         <div class="panel-icon pull-left bg-red">
            <i class="glyphicon glyphicon-list"></i>
        </div>
        <div class="panel-value pull-right">
          <h4 class="margin-top" style="margin-top: 50px;"> Tasa Callao </h4>
        </div>
       </div>
    </div>


    


</div>

<div class="row" style="margin-top:20px;">
    <div class="col-md-6">
       <div class="panel panel-box clearfix">
         <div class="panel-icon pull-left bg-green">
            <i class="glyphicon glyphicon-user"></i>
        </div>
        <div class="panel-value pull-right">
          <h4 class="margin-top" style="margin-top: 50px;"> Malabrigo Exalmar </h4>
        </div>
       </div>
    </div>

    <div class="col-md-6">
       <div class="panel panel-box clearfix">
         <div class="panel-icon pull-left bg-red">
            <i class="glyphicon glyphicon-list"></i>
        </div>
        <div class="panel-value pull-right">
        <h4 class="margin-top" style="margin-top: 50px;"> Pisco </h4>
        </div>
       </div>
    </div>

</div>

 


<?php include_once('layouts/footer.php'); ?>
