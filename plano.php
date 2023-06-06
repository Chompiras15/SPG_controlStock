<?php 
$page_title = 'Editar Almacen';
require_once('includes/load.php');
$SuperUser = current_user();

page_require_level(5);
if( $SuperUser["sede"]=="1") $table="sede_tasachimbote";
if( $SuperUser["sede"]=="2") $table="sede_samanco";
if( $SuperUser["sede"]=="3") $table="sede_supe";
if( $SuperUser["sede"]=="4") $table="sede_vegueta";
if( $SuperUser["sede"]=="5") $table="sede_callao";
if( $SuperUser["sede"]=="6") $table="sede_pisco";
if( $SuperUser["sede"]=="7") $table="sede_atico";
if( $SuperUser["sede"]=="8") $table="sede_matarani";
if( $SuperUser["sede"]=="9") $table="sede_exalmar_chim";
if( $SuperUser["sede"]=="10") $table="sede_exalmar_mala";

$all_rumas = find_all($table);
// include_once('layouts/header.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PLANO DE TASA - CHIMBOTE</title>
    <style>
        .contenedorGen{
            text-align: center;
            border: 2px solid black;
        }
        .titulo{
            width: 100%;
            border-bottom: 2px solid black;
            
           
        }
        .container{
            display: -ms-flex;
            display: -webkit-flex;
            display: flex;
            background: #fff;
        }
       .sector{
        text-align:center;
        margin: 5px;
        display: block;
       }
       .container > div {
        width: 100%;
        padding: 10px;
}
     .num{
        width:30px;
        /* background:#ecd855; */
        text-align:center;
        border: 1px solid black;
       }
       .codRum{
        width: 100px;
        border: 1px solid black;

       }
       
       @media print{
        .btnImprimir{
            display:none;
        }
        .contButon{
            display:none;
        }
       
       }
    </style>
</head>
<body>
<!-- <div class="contenedorGen"> -->
    <div class="contButon" style="width:100%;text-align:center;">
        <button class="btnImprimir" style="background: #040575; color:white;padding: 5px;border-radius: 4px;border: none;cursor: pointer;" onclick = "window.print()"> Imprimir</button>
    </div>

    <div class="titulo" style="display:flex;">
        <div class="imagen-logo" style="width:40%;text-align:left;">
            <img src="./assets/img/newsgp.png" alt="" style="width:150px;">
        </div>
        <div class="encabezado" style="text-align:center;width: 40%; ">
            <h3>Almacén Tasa - Chimbote</h3>
        </div>
        <div class="dateFecha" style="text-align: right;center;width: 40%;margin-right:10px; ">
            <?php 
            date_default_timezone_set('America/Lima');?>
           <h5><?php echo $fecha_actual = date("d-m-Y h:i:s");?></h5> 
        </div>
    
    </div>

<div class="container">
        <!-- <div class="col-sm-12" style="display:flex;"> -->
            <div class="col-sm-3 sector" >
                <h5>SECTOR 5</h5>
                
                    <input type="text" class="num" value="1">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="5" && $ruma['nicho']=="1"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="5" && $ruma['nicho']=="1"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="2">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="5" && $ruma['nicho']=="2"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="5" && $ruma['nicho']=="2"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="3">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="5" && $ruma['nicho']=="3"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="5" && $ruma['nicho']=="3"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="4">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="5" && $ruma['nicho']=="4"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="5" && $ruma['nicho']=="4"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>


                    <input type="text" class="num" value="5">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="5" && $ruma['nicho']=="5"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="5" && $ruma['nicho']=="5"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="6">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="5" && $ruma['nicho']=="6"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="5" && $ruma['nicho']=="6"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="7">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="5" && $ruma['nicho']=="7"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="5" && $ruma['nicho']=="7"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="8">
                  <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="5" && $ruma['nicho']=="8"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="5" && $ruma['nicho']=="8"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="9">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="5" && $ruma['nicho']=="9"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="5" && $ruma['nicho']=="9"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="10">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="5" && $ruma['nicho']=="10"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="5" && $ruma['nicho']=="10"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="11">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="5" && $ruma['nicho']=="11"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="5" && $ruma['nicho']=="11"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num"value="12">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="5" && $ruma['nicho']=="12"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="5" && $ruma['nicho']=="12"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="13">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="5" && $ruma['nicho']=="13"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="5" && $ruma['nicho']=="13"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="14">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="5" && $ruma['nicho']=="14"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="5" && $ruma['nicho']=="14"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="15">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="5" && $ruma['nicho']=="15"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="5" && $ruma['nicho']=="15"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="16">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="5" && $ruma['nicho']=="16"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="5" && $ruma['nicho']=="16"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="17">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="5" && $ruma['nicho']=="17"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="5" && $ruma['nicho']=="17"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="18">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="5" && $ruma['nicho']=="18"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="5" && $ruma['nicho']=="18"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="19">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="5" && $ruma['nicho']=="19"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="5" && $ruma['nicho']=="19"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="20">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="5" && $ruma['nicho']=="20"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="5" && $ruma['nicho']=="20"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="21">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="5" && $ruma['nicho']=="21"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="5" && $ruma['nicho']=="21"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="22">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="5" && $ruma['nicho']=="22"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="5" && $ruma['nicho']=="22"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="23">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="5" && $ruma['nicho']=="23"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="5" && $ruma['nicho']=="23"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="24">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="5" && $ruma['nicho']=="24"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="5" && $ruma['nicho']=="24"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="25">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="5" && $ruma['nicho']=="25"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="5" && $ruma['nicho']=="25"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="26">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="5" && $ruma['nicho']=="26"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="5" && $ruma['nicho']=="26"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="27">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="5" && $ruma['nicho']=="27"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="5" && $ruma['nicho']=="27"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="28">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="5" && $ruma['nicho']=="28"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="5" && $ruma['nicho']=="28"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="29">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="5" && $ruma['nicho']=="29"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="5" && $ruma['nicho']=="29"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="30">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="5" && $ruma['nicho']=="30"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="5" && $ruma['nicho']=="30"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="31">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="5" && $ruma['nicho']=="31"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="5" && $ruma['nicho']=="31"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="32">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="5" && $ruma['nicho']=="32"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="5" && $ruma['nicho']=="32"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="33">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="5" && $ruma['nicho']=="33"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="5" && $ruma['nicho']=="33"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="34">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="5" && $ruma['nicho']=="34"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="5" && $ruma['nicho']=="34"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num"value="35">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="5" && $ruma['nicho']=="35"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="5" && $ruma['nicho']=="35"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="36">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="5" && $ruma['nicho']=="36"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="5" && $ruma['nicho']=="36"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="37">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="5" && $ruma['nicho']=="37"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="5" && $ruma['nicho']=="37"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="38">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="5" && $ruma['nicho']=="38"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="5" && $ruma['nicho']=="38"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    
                    
            </div>
            <div class="col-sm-3 sector">
                <h5 >SECTOR 4</h5>
                <input type="text" class="num" value="1">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="1"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="1"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="2">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="2"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="2"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="3">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="3"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="3"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="4">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="4"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="4"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>


                    <input type="text" class="num" value="5">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="5"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="5"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="6">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="6"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="6"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="7">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="7"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="7"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="8">
                  <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="8"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="8"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="9">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="9"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="9"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="10">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="10"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="10"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="11">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="11"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="11"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num"value="12">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="12"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="12"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="13">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="13"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="13"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="14">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="14"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="14"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="15">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="15"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="15"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="16">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="16"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="16"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="17">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="17"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="17"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="18">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="18"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="18"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="19">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="19"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="19"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="20">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="20"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="20"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="21">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="21"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="21"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="22">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="22"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="22"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="23">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="23"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="23"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="24">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="24"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="24"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="25">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="25"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="25"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="26">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="26"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="26"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="27">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="27"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="27"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="28">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="28"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="28"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="29">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="29"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="29"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="30">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="30"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="30"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="31">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="31"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="31"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="32">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="32"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="32"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="33">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="33"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="33"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="34">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="34"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="34"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num"value="35">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="35"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="35"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="36">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="36"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="36"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="37">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="37"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="37"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="38">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="38"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="38"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="39">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="39"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="39"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="40">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="40"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="40"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="41">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="41"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="40"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="42">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="42"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="42"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="43">
                  <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="43"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="43"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="44">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="44"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="44"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="45">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="45"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="45"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="46">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="46"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="46"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="47">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="47"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="47"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="48">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="48"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="48"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="49">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="49"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="49"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="50">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="50"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="50"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="51">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="51"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="51"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="52">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="52"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="52"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="53">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="53"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="53"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" value="54">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="54"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="54"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="55">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="55"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="55"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="56">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="56"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="56"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="57">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="57"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="57"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="58">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="58"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="58"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="59">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="59"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="59"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="60">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="60"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="60"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="61">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="61"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="61"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="62">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="62"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="62"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="63">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="63"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="63"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="64">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="64"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="64"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="65">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="65"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="65"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="66">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="66"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="66"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="67">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="67"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="67"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" value="68">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="68"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="68"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="69">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="69"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="69"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="70">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="4" && $ruma['nicho']=="70"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="4" && $ruma['nicho']=="70"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    
            </div>
            <div class="col-sm-3 sector">
                <h5>SECTOR 3</h5>
                <input type="text" class="num" value="1">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="1"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="1"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="2">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="2"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="2"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="3">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="3"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="3"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="4">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="4"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="4"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>


                    <input type="text" class="num" value="5">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="5"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="5"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="6">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="6"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="6"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="7">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="7"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="7"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="8">
                  <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="8"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="8"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="9">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="9"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="9"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="10">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="10"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="10"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="11">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="11"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="11"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num"value="12">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="12"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="12"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="13">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="13"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="13"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="14">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="14"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="14"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="15">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="15"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="15"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="16">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="16"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="16"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="17">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="17"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="17"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="18">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="18"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="18"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="19">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="19"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="19"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="20">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="20"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="20"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="21">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="21"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="21"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="22">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="22"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="22"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="23">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="23"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="23"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="24">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="24"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="24"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="25">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="25"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="25"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="26">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="26"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="26"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="27">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="27"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="27"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="28">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="28"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="28"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="29">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="29"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="29"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="30">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="30"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="30"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="31">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="31"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="31"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="32">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="32"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="32"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="33">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="33"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="33"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="34">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="34"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="34"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num"value="35">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="35"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="35"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="36">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="36"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="36"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="37">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="37"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="37"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="38">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="38"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="38"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="39">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="39"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="39"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="40">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="40"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="40"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="41">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="41"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="40"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="42">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="42"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="42"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="43">
                  <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="43"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="43"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="44">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="44"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="44"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="45">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="45"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="45"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="46">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="46"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="46"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="47">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="47"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="47"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="48">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="48"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="48"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="49">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="49"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="49"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="50">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="50"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="50"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="51">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="51"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="51"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="52">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="52"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="52"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="53">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="53"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="53"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" value="54">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="54"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="54"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="55">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="55"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="55"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="56">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="56"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="56"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="57">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="57"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="57"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="58">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="58"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="58"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="59">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="59"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="59"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="60">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="60"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="60"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="61">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="61"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="61"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="62">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="62"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="62"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="63">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="63"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="63"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="64">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="64"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="64"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="65">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="65"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="65"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="66">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="66"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="66"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="67">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="67"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="67"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" value="68">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="68"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="68"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="69">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="69"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="69"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="70">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="70"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="70"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="71">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="71"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="71"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="72">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="72"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="72"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="73">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="73"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="73"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="74">
                   <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="74"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="74"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="75">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="75"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="75"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="76">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="76"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="76"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="77">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="77"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="77"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="78">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="78"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="78"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="79">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="79"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="79"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="80">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="80"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="80"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="81">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="81"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="81"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="82">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="82"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="82"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="83">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="83"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="83"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="84">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="84"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="84"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="85">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="85"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="85"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="86">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="86"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="86"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="87">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="87"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="87"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="88">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="88"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="88"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="89">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="89"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="89"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="90">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="90"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="90"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="91">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="91"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="91"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="92">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="92"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="92"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="93">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="93"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="93"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="94">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="94"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="94"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="95">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="95"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="95"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="96">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="96"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="96"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="97">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="97"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="97"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="98">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="98"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="98"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="99">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="99"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="99"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="100">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="100"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="100"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="101">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="101"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="101"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="102">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="102"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="102"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="103">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="103"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="103"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="104">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="3" && $ruma['nicho']=="104"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="3" && $ruma['nicho']=="104"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    
            </div>
            <div class="col-sm-3 sector">
                <h5>SECTOR 2</h5>
                <input type="text" class="num" value="1">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="1"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="1"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="2">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="2"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="2"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="3">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="3"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="3"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="4">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="4"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="4"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>


                    <input type="text" class="num" value="5">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="5"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="5"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="6">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="6"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="6"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="7">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="7"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="7"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="8">
                  <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="8"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="8"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="9">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="9"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="9"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="10">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="10"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="10"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="11">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="11"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="11"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num"value="12">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="12"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="12"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="13">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="13"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="13"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="14">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="14"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="14"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="15">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="15"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="15"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="16">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="16"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="16"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="17">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="17"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="17"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="18">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="18"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="18"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="19">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="19"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="19"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="20">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="20"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="20"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="21">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="21"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="21"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="22">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="22"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="22"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="23">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="23"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="23"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="24">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="24"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="24"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="25">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="25"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="25"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="26">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="26"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="26"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="27">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="27"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="27"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="28">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="28"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="28"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="29">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="29"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="29"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="30">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="30"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="30"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="31">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="31"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="31"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="32">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="32"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="32"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="33">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="33"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="33"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="34">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="34"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="34"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num"value="35">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="35"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="35"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="36">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="36"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="36"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="37">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="37"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="37"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="38">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="38"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="38"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="39">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="39"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="39"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="40">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="40"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="40"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="41">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="41"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="40"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="42">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="42"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="42"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="43">
                  <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="43"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="43"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="44">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="44"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="44"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="45">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="45"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="45"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="46">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="46"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="46"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="47">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="47"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="47"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="48">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="48"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="48"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="49">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="49"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="49"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="50">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="50"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="50"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="51">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="51"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="51"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="52">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="52"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="52"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="53">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="53"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="53"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" value="54">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="54"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="54"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="55">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="55"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="55"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="56">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="56"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="56"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="57">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="57"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="57"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="58">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="58"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="58"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="59">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="59"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="59"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="60">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="60"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="60"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="61">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="61"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="61"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="62">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="62"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="62"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="63">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="63"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="63"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="64">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="64"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="64"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="65">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="65"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="65"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="66">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="66"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="66"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="67">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="67"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="67"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" value="68">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="68"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="68"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="69">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="69"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="69"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="70">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="70"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="70"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="71">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="71"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="71"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="72">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="72"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="72"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="73">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="73"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="73"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="74">
                   <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="74"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="74"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="75">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="75"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="75"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="76">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="76"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="76"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="77">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="77"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="77"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="78">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="78"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="78"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="79">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="79"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="79"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="80">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="80"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="80"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="81">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="81"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="81"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="82">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="82"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="82"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="83">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="83"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="83"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="84">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="84"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="84"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="85">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="85"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="85"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="86">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="86"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="86"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="87">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="87"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="87"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="88">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="88"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="88"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="89">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="89"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="89"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="90">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="90"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="90"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="91">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="91"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="91"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="92">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="92"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="92"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="93">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="93"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="93"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="94">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="94"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="94"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="95">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="95"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="95"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="96">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="96"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="96"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="97">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="97"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="97"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="98">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="98"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="98"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="99">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="99"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="99"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="100">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="100"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="100"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="101">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="101"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="101"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="102">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="102"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="102"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="103">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="103"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="103"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="104">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="2" && $ruma['nicho']=="104"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="2" && $ruma['nicho']=="104"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>
            </div>
            <div class="col-sm-3 sector">
                <h5>SECTOR 1</h5>
                <input type="text" class="num" value="1">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="1"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="1"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="2">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="2"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="2"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="3">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="3"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="3"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="4">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="4"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="4"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>


                    <input type="text" class="num" value="5">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="5"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="5"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="6">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="6"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="6"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="7">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="7"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="7"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="8">
                  <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="8"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="8"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="9">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="9"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="9"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="10">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="10"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="10"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="11">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="11"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="11"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num"value="12">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="12"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="12"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="13">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="13"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="13"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="14">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="14"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="14"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="15">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="15"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="15"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="16">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="16"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="16"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="17">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="17"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="17"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="18">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="18"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="18"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="19">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="19"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="19"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="20">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="20"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="20"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="21">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="21"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="21"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="22">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="22"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="22"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="23">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="23"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="23"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="24">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="24"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="24"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="25">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="25"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="25"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="26">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="26"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="26"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="27">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="27"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="27"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="28">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="28"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="28"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="29">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="29"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="29"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="30">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="30"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="30"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="31">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="31"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="31"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="32">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="32"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="32"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="33">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="33"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="33"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="34">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="34"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="34"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num"value="35">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="35"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="35"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="36">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="36"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="36"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="37">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="37"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="37"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="38">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="38"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="38"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="39">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="39"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="39"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="40">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="40"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="40"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="41">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="41"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="40"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="42">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="42"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="42"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="43">
                  <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="43"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="43"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="44">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="44"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="44"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="45">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="45"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="45"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="46">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="46"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="46"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="47">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="47"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="47"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="48">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="48"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="48"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="49">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="49"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="49"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="50">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="50"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="50"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="51">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="51"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="51"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="52">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="52"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="52"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="53">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="53"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="53"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" value="54">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="54"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="54"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="55">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="55"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="55"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="56">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="56"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="56"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="57">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="57"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="57"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="58">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="58"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="58"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="59">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="59"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="59"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="60">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="60"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="60"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="61">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="61"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="61"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="62">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="62"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="62"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="63">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="63"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="63"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="64">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="64"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="64"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="65">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="65"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="65"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="66">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="66"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="66"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="67">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="67"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="67"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" value="68">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="68"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="68"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="69">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="69"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="69"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="70">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="70"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="70"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="71">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="71"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="71"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="72">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="72"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="72"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="73">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="73"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="73"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="74">
                   <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="74"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="74"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="75">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="75"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="75"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="76">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="76"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="76"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="77">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="77"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="77"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="78">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="78"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="78"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="79">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="79"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="79"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="80">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="80"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="80"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="81">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="81"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="81"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="82">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="82"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="82"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="83">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="83"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="83"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="84">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="84"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="84"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="85">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="85"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="85"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="86">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="86"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="86"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="87">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="87"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="87"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="88">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="88"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="88"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="89">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="89"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="89"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="90">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="90"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="90"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="91">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="91"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="91"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="92">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="92"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="92"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="93">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="93"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="93"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="94">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="94"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="94"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="95">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="95"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="95"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="96">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="96"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="96"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="97">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="97"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="97"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="98">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="98"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="98"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="99">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="99"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="99"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="100">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="100"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="100"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="101">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="101"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="101"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="102">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="102"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="102"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="103">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="103"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="103"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>

                    <input type="text" class="num" value="104">
                    <input type="text" class="codRum" <?php foreach ($all_rumas as $ruma): 
                        if($ruma['sector']=="1" && $ruma['nicho']=="104"){?> 
                        value='<?php echo $ruma['cod_ruma']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    <input type="text" class="num" <?php foreach ($all_rumas as $ruma): if($ruma['sector']=="1" && $ruma['nicho']=="104"){?> 
                        value='<?php echo $ruma['cant_saco']?>'
                        <?php }?>
                        <?php endforeach; ?>>
                    
            </div>
        
  <!-- </div> -->
</div>
<!-- </div> -->

</body>
</html>
