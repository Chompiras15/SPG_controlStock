<?php $user = current_user(); ?>
     </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
  <script type="text/javascript" src="assets/js/functions.js"></script>
  <script type="text/javascript" src="assets/js/menu.js"></script>
  <link href="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.css" rel="stylesheet" type="text/css">
<script src="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.js" type="text/javascript"></script>
  </body>
</html>
<script>
  console.log(document.getElementsByClassName("img-perfil")[0].getElementsByTagName("img")[0].src=src="uploads/users/<?php echo $user['image'];?>");
</script>
<?php if(isset($db)) { $db->db_disconnect(); } ?>
