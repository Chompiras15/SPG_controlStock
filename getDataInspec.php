<?php
require_once('includes/loadBD.php');
// $tabl= "inspection";
$data=$_POST["id"]; 
$json=json_decode($data,true);
$resultado= find_all($json["t"]);
// $data="";
$data=array();


// echo $resultado;

foreach ($resultado as $valor) {
    //  $data=$valor['placa'].$data;
//    array.push($data,$valor['placa']); 
    $data[sizeof($data)]='{"empresa":"'.$valor['empresa'].'","manta":"'.$valor['manta'].'"}';  

    }
echo json_encode($data);
// echo sizeof($data);

function find_all( $table ) {
    global $db;
    if ( tableExists( $table ) )
 {
        return find_by_sql( 'SELECT * FROM '.$db->escape( $table ) );
    }
}
   /*--------------------------------------------------------------*/
/* Determine if database table exists
/*--------------------------------------------------------------*/

    function tableExists( $table ) {
        global $db;
        $table_exit = $db->query( 'SHOW TABLES FROM '.DB_NAME.' LIKE "'.$db->escape( $table ).'"' );
        if ( $table_exit ) {
            if ( $db->num_rows( $table_exit ) > 0 )
            return true;
            else
            return false;
        }
    };

    function find_by_sql( $sql )
 {
    global $db;
    $result = $db->query( $sql );
    $result_set = $db->while_loop( $result );
    return $result_set;
}
?>

