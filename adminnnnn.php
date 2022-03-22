<?php
  $page_title = 'Admin página de inicio';
  
  require_once('includes/load.php');
  $SuperUser = current_user();
  // Checkin What level user has permission to view this page
   page_require_level(1);
?>
<?php

 $c_user=count_by_id('users');
 $all_user = find_all('users');
 
 $findUser = find_by_user('users',"admin");

?>
<?php include_once('layouts/header.php'); ?>

<div class="row">
   <div class="col-md-6">
     <?php echo display_msg($msg); ?>
   </div>
</div>

<?php
   if(isset($_POST['sede_Chim']))
   {
      $var = updateSedeSuperUser($SuperUser['username'],"Atico");

      if($var==true) 
      {
         $session->msg("s", "Categoría actualizada con éxito.");
         redirect('admin.php',false);
      } else {
         $session->msg("d", "Lo siento, actualización falló.");
         redirect('admin.php',false);
       }
   }
   

   if(isset($_POST['sede_Atico']))
   {
      $var2 = updateSedeSuperUser($SuperUser['username'],"Chimbote");

      if($var2==true) 
      {
         $session->msg("s", "Categoría actualizada con éxito.");
         redirect('admin.php',false);
      } else {
         $session->msg("d", "Lo siento, actualización falló.");
         redirect('admin.php',false);
       }
   }
?>

<style>
  .titleSedes
  {
    border-radius: 5px;
    background: #0a146e;
    text-align: center;
  }

  .cont_sede:hover
  {
     transform:scale(1.1);
  }
  .titleClients
  {
   margin-bottom: 15px;
   margin-left: auto;
    margin-right: auto;
    border-radius: 5px;
    background: #00427a;
    text-align: center;
  }
  .p_clientes
  {
   color: white;
    font-size: 17px;
    font-family: fangsong;
    font-weight: bold;
    margin: 10px;
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
          <p class="text-muted">Clientes</p>
        </div>
       </div>
    </div>

    <div class="col-md-4">
       <div class="panel panel-box clearfix">
         <div class="panel-icon pull-left bg-red">
            <i class="glyphicon glyphicon-list"></i>
        </div>
        <div class="panel-value pull-right">
          <h2 class="margin-top"> <?php  echo $SuperUser['sede']; ?> </h2>
          <p class="text-muted">Categorías</p>
        </div>
       </div>
    </div>


</div>

<div class="row titleSedes">
  <p class="p_sedes">SEDES</p>
</div>

<div class="row" style="margin-top:20px;">
    <div class="col-md-6">
         <div class="row titleClients">
            <p class="p_clientes"> CLIENTES TASA</p>
         </div>


         <form method="post" action="admin.php?id=<?php echo (int)$SuperUser['id'];?>">
        
               <button type="submit" name="sede_Chim" class="col-md-6 cont_sede">

                  <div class="panel panel-box clearfix">
                     <div class="panel-icon pull-left bg-navy">
                        <i class="glyphicon glyphicon-user"></i>
                     </div>

                     <div class="panel-value pull-right">
                        <h4 class="margin-top" style="margin-top: 50px;"> Atico </h4>
                     </div>
                  </div>
               </button>
         </form>

        <form method="post" action="admin.php?id=<?php echo (int)$SuperUser['id'];?>">
               <button type="submit"name="sede_Atico"  class="col-md-6 cont_sede">
                  <div class="panel panel-box clearfix">
                     <div class="panel-icon pull-left bg-red">
                        <i class="glyphicon glyphicon-list"></i>
                  </div>
                  <div class="panel-value pull-right">
                  <h4 class="margin-top" style="margin-top: 50px;"> Supe </h4>
                  </div>
                  </div>
               </button>
         </form>

         <div class="col-md-6 cont_sede">
            <div class="panel panel-box clearfix">
               <div class="panel-icon pull-left bg-red">
                  <i class="glyphicon glyphicon-list"></i>
            </div>
            <div class="panel-value pull-right">
            <h4 class="margin-top" style="margin-top: 50px;"> Végeta </h4>
            </div>
            </div>
         </div>

         <div class="col-md-6 cont_sede">
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

      <div class="col-md-6">
         <div class="row titleClients">
            <p class="p_clientes">CLIENTES EXALMAR</p>
         </div>



      <div class="col-md-6 cont_sede">
         <div class="panel panel-box clearfix">
            <div class="panel-icon pull-left bg-green">
               <i class="glyphicon glyphicon-user"></i>
            </div>
         
            <div class="panel-value pull-right">
               <h4 class="margin-top" style="margin-top: 50px;"> Atico </h4>
            </div>
         </div>
      </div>

      <div class="col-md-6 cont_sede">
         <div class="panel panel-box clearfix">
            <div class="panel-icon pull-left bg-red">
               <i class="glyphicon glyphicon-list"></i>
         </div>
         <div class="panel-value pull-right">
         <h4 class="margin-top" style="margin-top: 50px;"> Supe </h4>
         </div>
         </div>
      </div>

      <div class="col-md-6 cont_sede">
         <div class="panel panel-box clearfix">
            <div class="panel-icon pull-left bg-red">
               <i class="glyphicon glyphicon-list"></i>
         </div>
         <div class="panel-value pull-right">
         <h4 class="margin-top" style="margin-top: 50px;"> Végeta </h4>
         </div>
         </div>
      </div>

      <div class="col-md-6 cont_sede">
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
</div>

<?php include_once('layouts/footer.php'); ?>








