<?php
$page_title = 'Almacen-Chimbote';
require_once( 'includes/load.php' );
// Checkin What level user has permission to view this page
page_require_level( 3 );

$table = '';
$tabla_sed = '';
//require_once( 'includes/load.php' );
$SuperUser = current_user();
if ( $SuperUser[ 'sede' ] == 'T-Chimb' ) {
    $table = 'emb_tasachim';
    $tabla_sed = 'sede_tasachimbote';
}
if ( $SuperUser[ 'sede' ] == 'T-Samanco' ) {
    $table = 'emb_samanco';
    $tabla_sed = 'sede_samanco';
}
if ( $SuperUser[ 'sede' ] == 'T-Supe' ) {
    $table = 'emb_supe';
    $tabla_sed = 'sede_supe';
}
if ( $SuperUser[ 'sede' ] == 'T-Vegueta' ) {
    $table = 'emb_vegueta';
    $tabla_sed = 'sede_vegueta';
}
if ( $SuperUser[ 'sede' ] == 'T-Callao' ) {
    $table = 'emb_callao';
    $tabla_sed = 'sede_callao';
}
if ( $SuperUser[ 'sede' ] == 'T-Pisco' ) {
    $table = 'emb_pisco';
    $tabla_sed = 'sede_pisco';
}
if ( $SuperUser[ 'sede' ] == 'T-Atico' ) {
    $table = 'emb_atico';
    $tabla_sed = 'sede_atico';
}
if ( $SuperUser[ 'sede' ] == 'T-Matarani' ) {
    $table = 'emb_matarani';
    $tabla_sed = 'sede_matarani';
}
if ( $SuperUser[ 'sede' ] == 'E-Chimbote' ) {
    $table = 'emb_exalmar_chim';
    $tabla_sed = 'sede_exalmar_chim';
}
if ( $SuperUser[ 'sede' ] == 'E-Chicama' ) {
    $table = 'emb_exalmar_mala';
    $tabla_sed = 'sede_exalmar_mala';
}

$all_embarques = find_all( $table )
?>
<?php
if ( isset( $_POST[ 'add_emb' ] ) )
 {
    if ( $SuperUser[ 'sede' ] == 'E-Chimbote' )  $req_field = array( 'cod_contrato', 'cant_out', 'cod_ruma', 'date_out', 'supervisor', 'almacen' );
    else  $req_field = array( 'cod_contrato', 'cant_out', 'cod_ruma', 'date_out', 'supervisor' );

    validate_fields( $req_field );
    $cod_contrato = remove_junk( $db->escape( $_POST[ 'cod_contrato' ] ) );
    $cant_out = remove_junk( $db->escape( $_POST[ 'cant_out' ] ) );
    $cod_ruma = remove_junk( $db->escape( $_POST[ 'cod_ruma' ] ) );
    if( $SuperUser["sede"]=="T-Callao" || $SuperUser["sede"]=="T-Chimb" ) $cod_placa = remove_junk( $db->escape( $_POST[ 'placa' ] ) );
    if( $SuperUser["sede"]=="T-Callao") $cod_container = remove_junk( $db->escape( $_POST[ 'cod_container' ] ) );
    $date_out = remove_junk( $db->escape( $_POST[ 'date_out' ] ) );
    $supervisor = remove_junk( $db->escape( $_POST[ 'supervisor' ] ) );
    if ( $SuperUser[ 'sede' ] == 'E-Chimbote' )  $almacen = remove_junk( $db->escape( $_POST[ 'almacen' ] ) );

    if ( empty( $errors ) )
 {
        if ( $cant_out<1001 )
 {

            // if ( $db->query( $sql ) )
            // {

            $findCatRuma = find_by_codRuma( $tabla_sed, $_POST[ 'cod_ruma' ] );
            $restaSacos = ( int )$findCatRuma[ 'cant_saco' ]-( int )$cant_out;

            if ( $restaSacos == 0 )
            {

                if ( $SuperUser[ 'sede' ] == 'E-Chimbote' ) 
                {
                    $sql  = "INSERT INTO $table (";
                    $sql .= ' cod_contrato,cant_out,cod_ruma,date_out,supervisor,almacen';
                    $sql .= ') VALUES (';
                    $sql .= " '{$cod_contrato}', '{$cant_out}', '{$cod_ruma}', '{$date_out}', '{$supervisor}', '{$almacen}'";
                    $sql .= ')';
                    $sql .= " ON DUPLICATE KEY UPDATE cod_contrato='{$cod_contrato}'";

                   

                } else  if( $SuperUser["sede"]=="T-Callao")
                {
                    $sql  = "INSERT INTO $table (";
                    $sql .= ' cod_contrato,cant_out,cod_ruma,placa,cod_container,date_out,supervisor';
                    $sql .= ') VALUES (';
                    $sql .= " '{$cod_contrato}', '{$cant_out}', '{$cod_ruma}','{$cod_placa}','{$cod_container}', '{$date_out}', '{$supervisor}'";
                    $sql .= ')';
                    $sql .= " ON DUPLICATE KEY UPDATE cod_contrato='{$cod_contrato}'";
                }else if( $SuperUser["sede"]=="T-Chimb")
                {
                     $sql  = "INSERT INTO $table (";
                    $sql .= ' cod_contrato,cant_out,cod_ruma,placa,date_out,supervisor';
                    $sql .= ') VALUES (';
                    $sql .= " '{$cod_contrato}', '{$cant_out}', '{$cod_ruma}', '{$cod_placa}','{$date_out}', '{$supervisor}'";
                    $sql .= ')';
                    $sql .= " ON DUPLICATE KEY UPDATE cod_contrato='{$cod_contrato}'";
                }else{
                    $sql  = "INSERT INTO $table (";
                    $sql .= ' cod_contrato,cant_out,cod_ruma,date_out,supervisor';
                    $sql .= ') VALUES (';
                    $sql .= " '{$cod_contrato}', '{$cant_out}', '{$cod_ruma}','{$date_out}', '{$supervisor}'";
                    $sql .= ')';
                    $sql .= " ON DUPLICATE KEY UPDATE cod_contrato='{$cod_contrato}'";

                }
                $db->query( $sql );

                $delete_cod_ruma = delete_by_id( $tabla_sed, $findCatRuma[ 'id' ] );
                //$delete_id = delete_by_id( 'sede_tasachimbote', ( int )$categorie[ 'id' ] );
                if ( $delete_cod_ruma ) {
                    $session->msg( 's', 'Ruma despachada totalmente' );
                    redirect( 'embarque.php' );
                } else {
                    $delete_cod_ruma->msg( 'd', 'Eliminación falló' );
                    redirect( 'embarque.php' );
                }

            } elseif ( $restaSacos > 0 )
            {

                if ( $SuperUser[ 'sede' ] == 'E-Chimbote' ) 
                {
                    $sql  = "INSERT INTO $table (";
                    $sql .= ' cod_contrato,cant_out,cod_ruma,date_out,supervisor,almacen';
                    $sql .= ') VALUES (';
                    $sql .= " '{$cod_contrato}', '{$cant_out}', '{$cod_ruma}', '{$date_out}', '{$supervisor}', '{$almacen}'";
                    $sql .= ')';
                    $sql .= " ON DUPLICATE KEY UPDATE cod_contrato='{$cod_contrato}'";

                    

                } else if ( $SuperUser[ 'sede' ] == 'T-Callao' ) {
                    $sql  = "INSERT INTO $table (";
                    $sql .= ' cod_contrato,cant_out,cod_ruma,placa,cod_container,date_out,supervisor';
                    $sql .= ') VALUES (';
                    $sql .= " '{$cod_contrato}', '{$cant_out}', '{$cod_ruma}','{$cod_placa}','{$cod_container}', '{$date_out}', '{$supervisor}'";
                    $sql .= ')';
                    $sql .= " ON DUPLICATE KEY UPDATE cod_contrato='{$cod_contrato}'";

                }else if( $SuperUser['sede' ] =="T-Chimb")
                {
                    $sql  = "INSERT INTO $table (";
                    $sql .= ' cod_contrato,cant_out,cod_ruma,placa,date_out,supervisor';
                    $sql .= ') VALUES (';
                    $sql .= " '{$cod_contrato}', '{$cant_out}', '{$cod_ruma}', '{$cod_placa}','{$date_out}', '{$supervisor}'";
                    $sql .= ')';
                    $sql .= " ON DUPLICATE KEY UPDATE cod_contrato='{$cod_contrato}'";
                }else{
                     $sql  = "INSERT INTO $table (";
                    $sql .= ' cod_contrato,cant_out,cod_ruma,date_out,supervisor';
                    $sql .= ') VALUES (';
                    $sql .= " '{$cod_contrato}', '{$cant_out}', '{$cod_ruma}','{$date_out}', '{$supervisor}'";
                    $sql .= ')';
                    $sql .= " ON DUPLICATE KEY UPDATE cod_contrato='{$cod_contrato}'";
                }
                $db->query( $sql );

                $sql   = "UPDATE $tabla_sed SET";
                $sql  .= " cant_saco ='{$restaSacos}'";
                $sql .= " WHERE cod_ruma='{$findCatRuma['cod_ruma']}'";

                $result = $db->query( $sql );
                if ( $result && $db->affected_rows() == 1 ) 
                {
                    $session->msg( 's', 'Despacho actualizado con éxito' );
                    redirect( 'embarque.php', false );
                } else {
                    $session->msg( 'd', 'Lo siento, actualización falló.' );
                    redirect( 'embarque.php', false );
                }

                $session->msg( 's', 'Ruma agregada exitosamente.' );
                redirect( 'embarque.php', false );

            } elseif ( $restaSacos < 0 )
            {
                $session->msg( 'd', 'Verificar la Cantidad Sacos' );
                redirect( 'embarque.php', false );
            }

            // } else {
            //  $session->msg( 'd', 'Lo siento, registro falló' );
            //  redirect( 'embarque.php', false );
            // }

            //} else {
            //   $session->msg( 'd', 'Excedio la Capacitad Límite, Verifique la cantidad que va Despachar' );
            // redirect( 'embarque.php', false );
            // }
        } else {
            $session->msg( 'd', $errors );
            redirect( 'embarque.php', false );
        }

    }
}
?>
<?php include_once( 'layouts/header.php' );
?>

<div class='row'>
    <div class='col-md-12'>
        <?php echo display_msg( $msg );
?>
    </div>
</div>

<div class='row'>
    <div class='panel panel-default '>
        <div class='panel-heading'>
            <strong>
                <span class='glyphicon glyphicon-sort'></span>
                <span>Agregar Despacho</span>
            </strong>
        </div>
        <div class='panel-body' style='margin-top: 5%;'>
            <div class='col-md-3'>
            </div>
            <div class='col-md-12 cont_form'>
                <form method='post' action='add_embarque.php'>
                    <div class='material-textfield'>
                        <input placeholder=' ' type='text' name='cod_contrato' required>
                        <label>Contrato</label>
                    </div>

                    <div class='material-textfield'>
                        <input placeholder=' ' type='number' name='cant_out' required>
                        <label>Cantidad</label>
                    </div>

                    <div class='material-textfield'>
                        <input placeholder=' ' type='text' name='cod_ruma' required>
                        <label>Codigo Ruma</label>
                    </div>

                    <?php  if( $SuperUser["sede"]=="T-Callao" || $SuperUser["sede"]=="T-Chimb"){?>
                        <div class='material-textfield'>
                            <input placeholder=' ' type='text' name='placa' required>
                            <label>Placa</label>
                        </div>
                    <?php } ?>

                    <?php  if( $SuperUser["sede"]=="T-Callao"){?>
                        <div class='material-textfield'>
                            <input placeholder=' ' type='text' name='cod_container' required>
                            <label>Codigo Container</label>
                        </div>
                        <?php } ?>
                    

                    <div class='material-textfield'>
                        <label class='select'>Fecha de Salida</label>
                        <input placeholder=' ' type='date' name='date_out' required>

                    </div>

                    <div class='material-textfield'>
                        <input placeholder=' ' type='text' name='supervisor' required>
                        <label>Supervisor</label>
                    </div>

                    <?php if ( $SuperUser[ 'sede' ] == 'E-Chimbote' ) {?>

                    <div class='material-textfield'>
                        <label class='select' for='almacen'>Nombre de Almacen</label>
                        <select class='form-control' name='almacen'>
                            <!-- Opciones de la lista -->
                            <option value='Oslo' selected>Almacen de Oslo</option><!-- Opción por defecto -->
                            <option value='Blackar'>Almacen de Blackar</option>
                            <option value='Bpo'>Almacen de Bpo</option>
                            <option value='Promosa'>Almacen de Promasa</option>
                        </select>
                    </div>

                    <?php }?>

                    <div class='form-group clearfix'>
                        <button style='width:100%;border-radius: 35px;margin-top:10px' type='submit' name='add_emb'
                            class='btn btn-info'>Guardar</button>
                    </div>
                </form>

            </div>
        </div>

    </div>
</div>

<?php include_once( 'layouts/footer.php' );
    ?>