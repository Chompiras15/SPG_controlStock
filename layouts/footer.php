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

<!-- links para exportar a excel -->
   <script src="https://unpkg.com/xlsx@0.16.9/dist/xlsx.full.min.js"></script>
    <script src="https://unpkg.com/file-saverjs@latest/FileSaver.min.js"></script>
    <script src="https://unpkg.com/tableexport@latest/dist/js/tableexport.min.js"></script>

     <!-- por celdas -->
     <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
          <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
          <script src="https://cdn.datatables.net/fixedheader/3.1.6/js/dataTables.fixedHeader.min.js"></script>


<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    



</body>

  

</html>
<script>
function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}
async function putPhoto()
{
  await sleep(50);
  //console.log(document.getElementsByClassName("img-perfil")[0]);
  document.getElementsByClassName("img-perfil")[0].getElementsByTagName("img")[0].src="uploads/users/<?php echo $user['image'];?>"
}
  
putPhoto();
  //console.log(document.getElementsByClassName("img-perfil")[0].getElementsByTagName("img")[0].src="uploads/users/<?php echo $user['image'];?>");
</script> -->
<?php if(isset($db)) { $db->db_disconnect(); } ?>
