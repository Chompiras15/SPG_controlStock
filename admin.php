<?php
  $page_title = 'Admin página de inicio';
  
  require_once('includes/load.php');
  $SuperUser = current_user();
  // Checkin What level user has permission to view this page
   page_require_level(1);
?>
<?php

 $c_userTotals=count_by_id('users');
 $c_userSedes=count_by_id_sede('users',$SuperUser["sede"]);
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
   if(isset($_POST['sede_TChim']))
   {
      $var = updateSedeSuperUser($SuperUser['username'],"T-Chimbote");

      if($var==true) 
      {
         $session->msg("s", "Se encuentra en la Sede de TASA-CHIMBOTE.");
         redirect('admin.php',false);
      } else {
         $session->msg("d", "Ya se encuentra ubicado en la sede de TASA-CHIMBOTE");
         redirect('admin.php',false);
       }
   }
   
   
   if(isset($_POST['sede_tSamanco']))
   {
      $var2 = updateSedeSuperUser($SuperUser['username'],"T-Samanco");

      if($var2==true) 
      {
         $session->msg("s", "Se encuentra en la Sede de TASA-SAMANCO.");
         redirect('admin.php',false);
      } else {
         $session->msg("d", "Ya se encuentra ubicado en la sede de TASA-SAMANCO");
         redirect('admin.php',false);
       }
   }

   if(isset($_POST['sede_tSupe']))
   {
      $var2 = updateSedeSuperUser($SuperUser['username'],"T-Supe");

      if($var2==true) 
      {
         $session->msg("s", "Se encuentra en la Sede de TASA-SUPE.");
         redirect('admin.php',false);
      } else {
         $session->msg("d", "Ya se encuentra ubicado en la sede de TASA-SUPE");
         redirect('admin.php',false);
       }
   }
   
   if(isset($_POST['sede_tVegeta']))
   {
      $var2 = updateSedeSuperUser($SuperUser['username'],"T-Vegueta");

      if($var2==true) 
      {
         $session->msg("s", "Se encuentra en la Sede de TASA-VÉGUETA.");
         redirect('admin.php',false);
      } else {
         $session->msg("d", "Ya se encuentra ubicado en la sede de TASA-VÉGUETA");
         redirect('admin.php',false);
       }
   }

   if(isset($_POST['sede_tCallao']))
   {
      $var2 = updateSedeSuperUser($SuperUser['username'],"T-Callao");

      if($var2==true) 
      {
         $session->msg("s", "Se encuentra en la Sede de TASA-CALLAO.");
         redirect('admin.php',false);
      } else {
         $session->msg("d", "Ya se encuentra ubicado en la sede de TASA-CALLAO");
         redirect('admin.php',false);
       }
   }


   if(isset($_POST['sede_tPisco']))
   {
      $var2 = updateSedeSuperUser($SuperUser['username'],"T-Pisco");

      if($var2==true) 
      {
         $session->msg("s", "Se encuentra en la Sede de TASA-PISCO.");
         redirect('admin.php',false);
      } else {
         $session->msg("d", "Ya se encuentra ubicado en la sede de TASA-PISCO");
         redirect('admin.php',false);
       }
   }

   if(isset($_POST['sede_tAtico']))
   {
      $var2 = updateSedeSuperUser($SuperUser['username'],"T-Atico");

      if($var2==true) 
      {
         $session->msg("s", "Se encuentra en la Sede de TASA-ATICO.");
         redirect('admin.php',false);
      } else {
         $session->msg("d", "Ya se encuentra ubicado en la sede de TASA-ATICO");
         redirect('admin.php',false);
       }
   }

   if(isset($_POST['sede_tMatarani']))
   {
      $var2 = updateSedeSuperUser($SuperUser['username'],"T-Matarani");

      if($var2==true) 
      {
         $session->msg("s", "Se encuentra en la Sede de TASA-MATARANI.");
         redirect('admin.php',false);
      } else {
         $session->msg("d", "Ya se encuentra ubicado en la sede de TASA-MATARANI");
         redirect('admin.php',false);
       }
   }

   if(isset($_POST['sede_eChimbote']))
   {
      $var2 = updateSedeSuperUser($SuperUser['username'],"E-Chimbote");

      if($var2==true) 
      {
         $session->msg("s", "Se encuentra en la Sede de EXALMAR-CHIMBOTE.");
         redirect('admin.php',false);
      } else {
         $session->msg("d", "Ya se encuentra ubicado en la sede de EXALMAR-CHIMBOTE");
         redirect('admin.php',false);
       }
   }


   if(isset($_POST['sede_eChicama']))
   {
      $var2 = updateSedeSuperUser($SuperUser['username'],"E-Chicama");

      if($var2==true) 
      {
         $session->msg("s", "Se encuentra en la Sede de EXALMAR-CHICAMA.");
         redirect('admin.php',false);
      } else {
         $session->msg("d", "Ya se encuentra ubicado en la sede de EXALMAR-CHICAMA");
         redirect('admin.php',false);
       }
   }
?>

<style>
   .panel h4
   {
      margin: revert;
    margin-bottom: 0;
   }
  .titleSedes
  {
    border-radius: 5px;
    background: #0a146e;
    text-align: center;
  }

  .cont_sede
  {
   padding: 0;
   margin: 20px;
   background:white;
   border: 1px solid gray;
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

  .cont_init
  {
      height: 80px;
      margin-bottom: 15px;
  }
</style>
<i class=""></i>
<div class="row">
    <div class="col-md-4 cont_init" id="usersT">
         <a href="users.php">
            <div class="panel panel-box clearfix">
               <div class="panel-icon pull-left bg-green">
                  <i class="glyphicon glyphicon-user"></i>
               </div>
               <div class="panel-value pull-right">
                  <h2 class="margin-top"> <?php  echo $c_userTotals['total']; ?> </h2>
                  <p class="text-muted">Usuarios Totales</p>
               </div>
            </div>
         </a>
    </div>

    <div class="col-md-4">
   </div>

    <div class="col-md-4 cont_init" id="usersS">
         <a href="users.php">
            <div class="panel panel-box clearfix">
               <div class="panel-icon pull-left bg-red">
                  <i class="glyphicon glyphicon-user"></i>
            </div>
            <div class="panel-value pull-right">
               <h2 class="margin-top"> <?php  echo $c_userSedes['total']-1; ?> </h2>
               <p class="text-muted">Usuarios por Sede</p>
            </div>
            </div>
         </a>
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
        
               <button type="submit" name="sede_TChim" class="col-md-5 col-sm-12 cont_sede">

                  <div class="panel panel-box clearfix">
                     <div class="panel-icon pull-left bg-green">
                        <i class="glyphicon glyphicon-user"></i>
                     </div>

                     <div class="panel-value pull-right">
                        <h4 class="margin-top"> Chimbote </h4>
                     </div>
                  </div>
               </button>
         </form>

        <form method="post" action="admin.php?id=<?php echo (int)$SuperUser['id'];?>">
               <button type="submit"name="sede_tSamanco"  class="col-md-5 col-sm-12 cont_sede">
                  <div class="panel panel-box clearfix">
                     <div class="panel-icon pull-left bg-red">
                        <i class="glyphicon glyphicon-list"></i>
                  </div>
                  <div class="panel-value pull-right">
                  <h4 class="margin-top"> Samanco </h4>
                  </div>
                  </div>
               </button>
         </form>

         <form method="post" action="admin.php?id=<?php echo (int)$SuperUser['id'];?>">
               <button type="submit"name="sede_tSupe"  class="col-md-5 col-sm-12 cont_sede">
                  <div class="panel panel-box clearfix">
                     <div class="panel-icon pull-left bg-red">
                        <i class="glyphicon glyphicon-list"></i>
                  </div>
                  <div class="panel-value pull-right">
                  <h4 class="margin-top"> Supe </h4>
                  </div>
                  </div>
               </button>
         </form>

         <form method="post" action="admin.php?id=<?php echo (int)$SuperUser['id'];?>">
               <button type="submit"name="sede_tVegeta"  class="col-md-5 col-sm-12 cont_sede">
                  <div class="panel panel-box clearfix">
                     <div class="panel-icon pull-left bg-red">
                        <i class="glyphicon glyphicon-list"></i>
                  </div>
                  <div class="panel-value pull-right">
                  <h4 class="margin-top"> Végueta </h4>
                  </div>
                  </div>
               </button>
         </form>

         <form method="post" action="admin.php?id=<?php echo (int)$SuperUser['id'];?>">
               <button type="submit"name="sede_tCallao"  class="col-md-5 col-sm-12 cont_sede">
                  <div class="panel panel-box clearfix">
                     <div class="panel-icon pull-left bg-red">
                        <i class="glyphicon glyphicon-list"></i>
                  </div>
                  <div class="panel-value pull-right">
                  <h4 class="margin-top"> Callao </h4>
                  </div>
                  </div>
               </button>
         </form>

         <form method="post" action="admin.php?id=<?php echo (int)$SuperUser['id'];?>">
               <button type="submit"name="sede_tPisco"  class="col-md-5 col-sm-12 cont_sede">
                  <div class="panel panel-box clearfix">
                     <div class="panel-icon pull-left bg-red">
                        <i class="glyphicon glyphicon-list"></i>
                  </div>
                  <div class="panel-value pull-right">
                  <h4 class="margin-top" > Pisco </h4>
                  </div>
                  </div>
               </button>
         </form>

         <form method="post" action="admin.php?id=<?php echo (int)$SuperUser['id'];?>">
               <button type="submit"name="sede_tAtico"  class="col-md-5 col-sm-12 cont_sede">
                  <div class="panel panel-box clearfix">
                     <div class="panel-icon pull-left bg-red">
                        <i class="glyphicon glyphicon-list"></i>
                  </div>
                  <div class="panel-value pull-right">
                  <h4 class="margin-top"> Atico </h4>
                  </div>
                  </div>
               </button>
         </form>
         <form method="post" action="admin.php?id=<?php echo (int)$SuperUser['id'];?>">
               <button type="submit"name="sede_tMatarani"  class="col-md-5 col-sm-12 cont_sede">
                  <div class="panel panel-box clearfix">
                     <div class="panel-icon pull-left bg-red">
                        <i class="glyphicon glyphicon-list"></i>
                  </div>
                  <div class="panel-value pull-right">
                  <h4 class="margin-top" > Matarani </h4>
                  </div>
                  </div>
               </button>
         </form>


      </div>

      <div class="col-md-6 col-sm-12">
         <div class="row titleClients">
            <p class="p_clientes">CLIENTES EXALMAR</p>
         </div>



         <form method="post" action="admin.php?id=<?php echo (int)$SuperUser['id'];?>">
               <button type="submit"name="sede_eChimbote"  class="col-md-5  col-sm-12 cont_sede">
                  <div class="panel panel-box clearfix">
                     <div class="panel-icon pull-left bg-red">
                        <i class="glyphicon glyphicon-list"></i>
                  </div>
                  <div class="panel-value pull-right">
                  <h4 class="margin-top"> Chimbote </h4>
                  </div>
                  </div>
               </button>
         </form>

         <form method="post" action="admin.php?id=<?php echo (int)$SuperUser['id'];?>">
               <button type="submit"name="sede_eChicama"  class="col-md-5 col-sm-12 cont_sede">
                  <div class="panel panel-box clearfix">
                     <div class="panel-icon pull-left bg-red">
                        <i class="glyphicon glyphicon-list"></i>
                  </div>
                  <div class="panel-value pull-right">
                  <h4 class="margin-top"> Chicama (Malabrigo) </h4>
                  </div>
                  </div>
               </button>
         </form>
      </div>
</div>



<?php include_once('layouts/footer.php'); ?>




