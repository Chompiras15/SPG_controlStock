<!--   
 ====================================================================
        SGP - BUSINESS ( JHONATAN LARA && ABRAHAM VALVERDE)
 Descripción:Muestra Todas Las actividades y Agrega adicionalmente
 Creado: 11/03/2022
 Chimbote Peru :D
 ====================================================================
  
-->

<?php
  $page_title = 'Agregar Container';
  require_once('includes/load.php');
  $table = "";
  //require_once('includes/load.php');
  $SuperUser = current_user();
  // Checkin What level user has permission to view this page
  page_require_level(5);

  if( $SuperUser["sede"]=="5") {$table="emb_callao"; $tableSed="sede_callao";}
  
  $all_temperature = find_all($table);

  $ruma1=null;$cant1=0;$ruma2=null;$cant2=0;$ruma3=null;$cant3=0;$ruma4=null;$cant4=0;
  
  
?>

<?php 
    //echo count($_POST);
 if(isset($_POST['addContainer']))
 {
    $cod_contrato=remove_junk($db->escape($_POST['contrato']));
    $cod_placa=remove_junk($db->escape($_POST['placa']));
    $cod_container=remove_junk($db->escape($_POST['codContainer']));
    $date_out=remove_junk($db->escape($_POST['dateout']));
    $supervisor=$SuperUser["name"];
  
    if(isset($_POST['codRuma1']) && isset($_POST['cant_out1'])){ $ruma1=remove_junk($db->escape($_POST['codRuma1']));$cant1=remove_junk($db->escape($_POST['cant_out1']));}
    if(isset($_POST['codRuma2']) && isset($_POST['cant_out2'])) { $ruma2=remove_junk($db->escape($_POST['codRuma2']));$cant2=remove_junk($db->escape($_POST['cant_out2']));}
    if(isset($_POST['codRuma3']) && isset($_POST['cant_out3'])) { $ruma3=remove_junk($db->escape($_POST['codRuma3']));$cant3=remove_junk($db->escape($_POST['cant_out3']));}
    if(isset($_POST['codRuma4']) && isset($_POST['cant_out4'])) { $ruma4=remove_junk($db->escape($_POST['codRuma4']));$cant4=remove_junk($db->escape($_POST['cant_out4']));}


    if( $cant1<1001 && $cant2<1001 && $cant3<1001 && $cant4<1001)
    {
        if($ruma1!=null) 
        {
            $findCatRuma1 = find_by_codRuma( $tableSed, $ruma1 );
            $restaSacos1 = ( int )$findCatRuma1[ 'cant_saco' ]-( int )$cant1;
            
            if ( $restaSacos1 < 0 )
            {
                $session->msg( 'd', 'Verificar la Cantidad Sacos en la Ruma1'); //concatenar ruma falta
                redirect( 'embarque.php', false );
            };
           // $sumaTotalSaco=$sumaTotalSaco+ $restaSacos1;
            $sql  = "INSERT INTO $table (";
            $sql .= ' cod_contrato,cant_out,cod_ruma,placa,cod_container,date_out,supervisor';
            $sql .= ') VALUES (';
            $sql .= " '{$cod_contrato}', '{$cant1}', '{$ruma1}','{$cod_placa}','{$cod_container}', '{$date_out}', '{$supervisor}'";
            $sql .= ')';
            $sql .= " ON DUPLICATE KEY UPDATE cod_contrato='{$cod_contrato}'";

            //qui
        };

        if($ruma2!=null) 
        {
            $findCatRuma2 = find_by_codRuma( $tableSed, $ruma2 );
            $restaSacos2 = ( int )$findCatRuma2[ 'cant_saco' ]-( int )$cant2;
            if ( $restaSacos2 < 0 )
            {
                $session->msg( 'd', 'Verificar la Cantidad Sacos en la Ruma2'); //concatenar ruma falta
                redirect( 'embarque.php', false );
            };
           // $sumaTotalSaco=$sumaTotalSaco+ $restaSacos2;
            $sql2  = "INSERT INTO $table (";
            $sql2 .= ' cod_contrato,cant_out,cod_ruma,placa,cod_container,date_out,supervisor';
            $sql2 .= ') VALUES (';
            $sql2 .= " '{$cod_contrato}', '{$cant2}', '{$ruma2}','{$cod_placa}','{$cod_container}', '{$date_out}', '{$supervisor}'";
            $sql2 .= ')';
            $sql2 .= " ON DUPLICATE KEY UPDATE cod_contrato='{$cod_contrato}'";
        };

        if($ruma3!=null) 
        {
            $findCatRuma3 = find_by_codRuma( $tableSed, $ruma3 );
            $restaSacos3 = ( int )$findCatRuma3[ 'cant_saco' ]-( int )$cant3;
            if ( $restaSacos3 < 0 )
            {
                $session->msg( 'd', 'Verificar la Cantidad Sacos en la Ruma'); //concatenar ruma falta
                redirect( 'embarque.php', false );
            };
            $sql3  = "INSERT INTO $table (";
            $sql3 .= ' cod_contrato,cant_out,cod_ruma,placa,cod_container,date_out,supervisor';
            $sql3 .= ') VALUES (';
            $sql3 .= " '{$cod_contrato}', '{$cant3}', '{$ruma3}','{$cod_placa}','{$cod_container}', '{$date_out}', '{$supervisor}'";
            $sql3 .= ')';
            $sql3 .= " ON DUPLICATE KEY UPDATE cod_contrato='{$cod_contrato}'";
        };

        if($ruma4!=null) 
        {
            $findCatRuma4 = find_by_codRuma( $tableSed, $ruma4 );
            $restaSacos4 = ( int )$findCatRuma4[ 'cant_saco' ]-( int )$cant4;
            if ( $restaSacos4 < 0 )
            {
                $session->msg( 'd', 'Verificar la Cantidad Sacos en la Ruma'); //concatenar ruma falta
                redirect( 'embarque.php', false );
            };
            $sql4  = "INSERT INTO $table (";
            $sql4 .= ' cod_contrato,cant_out,cod_ruma,placa,cod_container,date_out,supervisor';
            $sql4 .= ') VALUES (';
            $sql4 .= " '{$cod_contrato}', '{$cant4}', '{$ruma4}','{$cod_placa}','{$cod_container}', '{$date_out}', '{$supervisor}'";
            $sql4 .= ')';
            $sql4 .= " ON DUPLICATE KEY UPDATE cod_contrato='{$cod_contrato}'";
        };

        

        if($ruma1!=null) 
        { 
            if ( $restaSacos1 > 0 )
            {
                if($db->query($sql))
                {
                    $sql5   = "UPDATE $tableSed SET";
                    $sql5  .= " cant_saco ='{$restaSacos1}'";
                    $sql5 .= " WHERE cod_ruma='{$findCatRuma1['cod_ruma']}'";
                    $db->query( $sql5 );

                };

            }else if ( $restaSacos1 == 0 )
            {
                if($db->query($sql)) $delete_cod_ruma = delete_by_id( $tableSed, $findCatRuma1[ 'id' ] );
              
            };
           
        };
        if($ruma2!=null)
        { 
            if ( $restaSacos2 > 0 )
            {
                if($db->query($sql2))
                {
                    $sql6   = "UPDATE $tableSed SET";
                    $sql6  .= " cant_saco ='{$restaSacos2}'";
                    $sql6 .= " WHERE cod_ruma='{$findCatRuma2['cod_ruma']}'";
                    $db->query( $sql6 );

                };

            }else if ( $restaSacos2 == 0 )
            {
                if($db->query($sql2)) $delete_cod_ruma = delete_by_id( $tableSed, $findCatRuma2[ 'id' ] );
            };
           
        };
        if($ruma3!=null)
        { 
            if ( $restaSacos3 > 0 )
            {
                if($db->query($sql3))
                {
                    $sql7   = "UPDATE $tableSed SET";
                    $sql7  .= " cant_saco ='{$restaSacos3}'";
                    $sql7 .= " WHERE cod_ruma='{$findCatRuma3['cod_ruma']}'";
                    $db->query( $sql7 );

                };
            }else if ( $restaSacos3 == 0 )
            {
                if($db->query($sql3)) $delete_cod_ruma = delete_by_id( $tableSed, $findCatRuma3[ 'id' ] );
            };
           
        };
        if($ruma4!=null)
        { 
            if ( $restaSacos4 > 0 )
            {
                if($db->query($sql4))
                {
                    $sql8   = "UPDATE $tableSed SET";
                    $sql8  .= " cant_saco ='{$restaSacos4}'";
                    $sql8 .= " WHERE cod_ruma='{$findCatRuma4['cod_ruma']}'";
                    $db->query( $sql8 );

                };
            }else if ( $restaSacos4 == 0 )
            {
                if($db->query($sql4)) $delete_cod_ruma = delete_by_id( $tableSed, $findCatRuma4[ 'id' ] );
            };
           
        };

        $session->msg( 's', 'Despacho Realizado con éxito' );
        redirect( 'embarque.php', false );


    }else
    {
        $session->msg( 'd', 'Verifique la cantidad que va a Despachar.' );
        redirect( 'embarque.php', false );
    };
};
?>

<script>
    console.log("ola");
    console.log(<?php $ruma1 ?>);
</script>
<html lang="es">

<head>
    <style>
    /*estilos para la tabla sx*/
    table th {
        background-color: #001f3f;
        color: white;
    }
    </style>

</head>

<body>

    <?php include_once('layouts/header.php'); ?>

    <div class="row">
        <div class="col-md-12">
            <?php echo display_msg($msg); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading clearfix contTitleTT">
                    <strong>
                        <span class="glyphicon glyphicon-filter"></span>
                        <span>Añadir Container</span>

                    </strong>

                </div>

                <div style="margin-top:15px;text-align: center;">
                    <div class="material-textfield contAddCont">
                        <input type="number" id="cantRumaRepro"  placeholder=" " required min="1" max="4">
                        <label>Nº de Rumas</label>
                    </div>
                    <div class="material-textfield" style="width:20%;margin-left:30px;">
                        <button id="btnAddInpRep"  onclick="addBtnInpRepro(this)"; class="btn btn-primary">Agregar</button>
                    </div>
                </div>
                <div class="panel-body" id="contFormRepro">

               

            </div>

        </div>

    </div>

    <?php include_once('layouts/footer.php'); ?>

    <!-- Busqueda por columna -->

    <script>
     function addBtnInpRepro(dom)
    {
      //console.log("presioneeee");
      var parent = document.getElementById("contFormRepro");
      var inputCant=document.getElementById("cantRumaRepro").value;
      if(inputCant==" " || inputCant=="" || inputCant==null)
      {
        return 0;
      }else
      {
        if(inputCant>0 && inputCant<5 ) 
        {
            createFormRepro(parent,inputCant);
            dom.disabled=true;
            dom.style.cursor="not-allowed";
            dom.style.opacity="0.5";
        };
      };         
    };

    // Create a break line element
    var br = document.createElement("br");
    function createFormRepro(parent,cant) 
    {
       // console.log("creando el form");
        var form = document.createElement("form");
        form.setAttribute("method", "post");
        form.setAttribute("action", "add_container.php");          
        // Create a form dynamically
        var contrato = document.createElement("input");
        contrato.setAttribute("type", "text");
        contrato.setAttribute("name", "contrato");
        contrato.setAttribute("placeholder", "Numero Contrato ");
        contrato.required=true;
        //contrato.setAttribute("class", "inpContainer");
        form.appendChild(contrato);
        for(var i=0;i<cant;i++)
        {
            var codRuma = document.createElement("input");
            codRuma.setAttribute("type", "text");
            codRuma.setAttribute("name", "codRuma"+(i+1));
            codRuma.setAttribute("placeholder", "Codigo de Ruma "+(i+1));
            codRuma.setAttribute("class", "inpContainer");
            codRuma.required=true;
            var cant_out = document.createElement("input");
            cant_out.setAttribute("type", "number");
            cant_out.setAttribute("name", "cant_out"+(i+1));
            cant_out.setAttribute("placeholder", "Cantidad de Sacos"+(i+1));
            cant_out.setAttribute("class", "inpContainer  m-l");
            cant_out.required=true;
               
            // Append the full name input to the form
            form.appendChild(codRuma);
            form.appendChild(cant_out);
        };

        var placa = document.createElement("input");
        placa.setAttribute("type", "text");
        placa.setAttribute("name", "placa");
        placa.setAttribute("placeholder", "Numero Placa ");
        placa.setAttribute("class", "inpContainer");
        placa.required=true;
        form.appendChild(placa);

        var codContainer = document.createElement("input");
        codContainer.setAttribute("type", "text");
        codContainer.setAttribute("name", "codContainer");
        codContainer.setAttribute("placeholder", "Cod. Cointainer ");
        codContainer.setAttribute("class", "inpContainer  m-l");
        codContainer.required=true;
        form.appendChild(codContainer);

        var dateout = document.createElement("input");
        dateout.setAttribute("type", "date");
        dateout.setAttribute("name", "dateout");
        dateout.setAttribute("placeholder", "Salida ->");
        dateout.setAttribute("class", "inpContainer m-t contAddDateOut");
        dateout.required=true;
        form.appendChild(dateout);
    
        // create a submit button
        var s = document.createElement("input");
        s.setAttribute("type", "submit");
        s.setAttribute("value", "Guardar");
        s.setAttribute("name", "addContainer");
        s.setAttribute("class", "btn btn-primary");
 
        // Inserting a line break
        form.appendChild(br.cloneNode());
        
        // Append the submit button to the form
        form.appendChild(s);
        parent.appendChild(form);
    }
</script>



