<?php $user = current_user();
?>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>

<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>
<script src='//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js'></script>
<script type='text/javascript' src='assets/js/functions.js'></script>
<script type='text/javascript' src='assets/js/menu.js'></script>
<link href='https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.css' rel='stylesheet'
    type='text/css'>
<script src='https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.js' type='text/javascript'>
</script>

<!-- script para busqueda por celda -->
<script src='https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js'></script>
<link rel='stylesheet' href='https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css'>
 <!-- datatables JS -->
    <script type='text/javascript' src='datatables/datatables.min.js'></script>

    <!-- para usar botones en datatables JS -->
    <script src='datatables/dataTables.buttons.min.js'></script>
    <script src='datatables/jszip.min.js'></script>
    <script src='datatables/pdfmake.min.js'></script>
    <script src='datatables/vfs_fonts.js'></script>
    <script src='datatables/js/buttons.html5.min.js'></script>
<!-- para funcion de estilos de exportacion de excel -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/datatables-buttons-excel-styles@1.2.0/js/buttons.html5.styles.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/datatables-buttons-excel-styles@1.2.0/js/buttons.html5.styles.templates.min.js"></script> -->

    <!-- --------------------------------------------------------------------------------- -->
    <!-- SUM()  Datatables-->
    <script src='https://cdn.datatables.net/plug-ins/1.10.20/api/sum().js'></script>
    <!--  extension responsive  -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
    
      
    <!-- extension responsive -->
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script></body>
  
    </html>
    <script>
    function sleep(ms) {
        return new Promise(resolve => setTimeout(resolve, ms));
    }

    
 
    async function putPhoto() 
    {
        await sleep(50);
        //console.log( document.getElementsByClassName( 'img-perfil' )[ 0 ] );
        <?php if($user['image'] =="no_image.jpg"  || empty($user['image'])) {?>
            document.getElementsByClassName('img-perfil')[0].getElementsByTagName('img')[0].src ="uploads/users/default.png";
        <?php }else{?>
            document.getElementsByClassName('img-perfil')[0].getElementsByTagName('img')[0].src ="uploads/users/<?php echo $user['image'];?>"
        <?php }?>

        
    }

    function showTime()
    {
        //var dia=new Array(7);
        var dia=["Lunes","Martes","Miércoles","Jueves","Viernes","Sábado","Domingo"];
        myDate=new Date();
        day=myDate.getDay();
        numDay=myDate.getDate();
        mes=myDate.getMonth();
        year=myDate.getFullYear();
        hours=myDate.getHours();
        minutes=myDate.getMinutes();
        seconds=myDate.getSeconds();
        
        if(numDay<10) numDay=0+numDay;
        if(mes<10) mes="0"+(mes+1);
        if(hours<10) hours=0+hours;
        if(minutes<10) minutes="0"+minutes;
        if(seconds<10) seconds="0"+seconds;
        $("#time").text(dia[day-1]+" "+numDay+"/"+mes+"/"+year+"  "+hours+ ":" + minutes+ ":"+seconds);
        setTimeout("showTime()",1000);

    }

    putPhoto();
    showTime();

    $(function(){  
  $('input').change(function(){
    var label = $(this).parent().find('span'); 
    if(typeof(this.files) !='undefined'){ // fucking IE      
      if(this.files.length == 0){
        label.removeClass('withFile').text(label.data('default'));
      }
      else{
        var file = this.files[0]; 
        var name = file.name;
        var size = (file.size / 1048576).toFixed(3); //size in mb 
        label.addClass('withFile').text(name + ' (' + size + 'mb)');
      }
    }
    else{
      var name = this.value.split("\\");
	      label.addClass('withFile').text(name[name.length-1]);
    }
    return false;
  });  
});
    //console.log( document.getElementsByClassName( 'img-perfil' )[ 0 ].getElementsByTagName( 'img' )[ 0 ].src = "uploads/users/<?php echo $user['image'];?>" );
    </script>
    <?php if ( isset( $db ) ) {
    $db->db_disconnect();
}
?>