<?php $user = current_user();
?>
</div>
</div>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js'></script>
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
< <!-- datatables JS -->
    <script type='text/javascript' src='datatables/datatables.min.js'></script>

    <!-- para usar botones en datatables JS -->
    <script src='datatables/dataTables.buttons.min.js'></script>
    <script src='datatables/jszip.min.js'></script>
    <script src='datatables/pdfmake.min.js'></script>
    <script src='datatables/vfs_fonts.js'></script>
    <script src='datatables/js/buttons.html5.min.js'></script>

    <!-- --------------------------------------------------------------------------------- -->
    <!-- SUM()  Datatables-->
    <script src='https://cdn.datatables.net/plug-ins/1.10.20/api/sum().js'></script>
    </body>

    </html>
    <script>
    function sleep(ms) {
        return new Promise(resolve => setTimeout(resolve, ms));
    }
    async function putPhoto() {
        await sleep(20);
        //console.log( document.getElementsByClassName( 'img-perfil' )[ 0 ] );
        document.getElementsByClassName('img-perfil')[0].getElementsByTagName('img')[0].src =
            "uploads/users/<?php echo $user['image'];?>"
    }

    putPhoto();
    //console.log( document.getElementsByClassName( 'img-perfil' )[ 0 ].getElementsByTagName( 'img' )[ 0 ].src = "uploads/users/<?php echo $user['image'];?>" );
    </script>
    <?php if ( isset( $db ) ) {
    $db->db_disconnect();
}
?>