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
    <title>PLANO TASA - CHIMBOTE</title>
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
                    <div id="contSector5">
                       
                    </div>
                    <div class="col-sm-3 sector" style="text-align:center;">
                    <label for="" style="font-weight:bold;">Total S. 5</label>
                    <input type="text"class="codRum" style="background: yellow;text-align:center;font-weight:bold;" id="sec5">
                    </div> 
            </div>
            <div class="col-sm-3 sector">
                <h5 >SECTOR 4</h5>
                <div id="contSector4">
                       
                </div>
                <div class="col-sm-3 sector" style="text-align:center;">
                    <label for=""  style="font-weight:bold;">Total S. 4</label>
                    <input type="text"class="codRum" style="background: yellow;text-align:center;font-weight:bold;" id="sec4">
                    </div> 

                    
            </div>
            <div class="col-sm-3 sector">
                <h5>SECTOR 3</h5>
                <div id="contSector3">
                       
                </div>
                <div class="col-sm-3 sector" style="text-align:center;">
                    <label for=""  style="font-weight:bold;">Total S. 3</label>
                    <input type="text"class="codRum" style="background: yellow;text-align:center;font-weight:bold;" id="sec3">
                    </div> 

                    
            </div>
            <div class="col-sm-3 sector">
                <h5>SECTOR 2</h5>
                <div id="contSector2">
                       
                </div>
                <div class="col-sm-3 sector" style="text-align:center;">
                    <label for=""  style="font-weight:bold;">Total S. 2</label>
                    <input type="text"class="codRum" style="background: yellow;text-align:center;font-weight:bold;" id="sec2">
                    </div> 
                
            </div>
            <div class="col-sm-3 sector">
                <h5>SECTOR 1</h5>
                <div id="contSector1">
                       
                </div>
                <div class="col-sm-3 sector" style="text-align:center;">
                    <label for=""  style="font-weight:bold;">Total S. 1</label>
                    <input type="text"class="codRum" style="background: yellow;text-align:center;font-weight:bold;" id="sec1">
                    </div> 
                    
            </div>
        
  <!-- </div> -->
</div>
<!-- </div> -->

</body>
</html>
<script>
      // Crear un div
    var jsVariable = <?php echo json_encode($all_rumas); ?>;
   var sec5=document.getElementById("sec5");
   var sec4=document.getElementById("sec4");
   var sec3=document.getElementById("sec3");
   var sec2=document.getElementById("sec2");
   var sec1=document.getElementById("sec1");
   var sum5=0;
   var sum4=0;
   var sum3=0;
   var sum2=0;
   var sum1=0;
    function sgp_createSector(parent,cantidadNicho,sectorpertenece,data)
    {
        
       //var array=JSON.parse(data);
       var dataTmp=[];
       array=data;
        
        for (var j = 0; j < cantidadNicho; j++) 
        {
            var div = document.createElement('div');

            // Crear tres inputs
            for (var i = 0; i < 3; i++) 
            {
                var input = document.createElement('input');
                input.type = 'text';
                if(i==0) input.value=j+1;
                if(i==1) 
                {
                    input.classList.add('codRum');
     
                    for (var k = 0; k < array.length; k++) 
                    {
                        /*console.log("entre al forrrr222")
                        console.log("sector")
                        console.log(array[k]["sector"])
                        console.log("nicho")
                        console.log(array[k]["nicho"])
                        console.log("'"+(j+1)+"'")*/
                        if(array[k]["sector"]==sectorpertenece && array[k]["nicho"]==(j+1))
                        {   
                            dataTmp[dataTmp.length]={"sector":array[k]["sector"],"nicho":array[k]["nicho"],"cant_saco":array[k]["cant_saco"],"cod_ruma":array[k]["cod_ruma"]}
                            input.value= array[k]["cod_ruma"];
                           
                        }
                        if( input.value!=""){
                            input.style.background = 'yellow';
                            
                            }
                    }
                }else input.classList.add('num');

                if(i==2) 
                {
                    
     
                    for (var k = 0; k < array.length; k++) 
                    {
                        /*console.log("entre al forrrr222")
                        console.log("sector")
                        console.log(array[k]["sector"])
                        console.log("nicho")
                        console.log(array[k]["nicho"])
                        console.log("'"+(j+1)+"'")*/
                        if(array[k]["sector"]==sectorpertenece && array[k]["nicho"]==(j+1)) 
                        {   
                            //console.log("si entre")
                            input.value= array[k]["cant_saco"]; 
                           if(sectorpertenece=="5"){
                            sum5+=parseInt(input.value= array[k]["cant_saco"]);
                           }
                           if(sectorpertenece=="4"){
                            sum4+=parseInt(input.value= array[k]["cant_saco"]);
                           }
                           if(sectorpertenece=="3"){
                            sum3+=parseInt(input.value= array[k]["cant_saco"]);
                           }
                           if(sectorpertenece=="2"){
                            sum2+=parseInt(input.value= array[k]["cant_saco"]);
                            
                           }
                           if(sectorpertenece=="1"){
                            sum1+=parseInt(input.value= array[k]["cant_saco"]);
                           }
                        }
                        
                    }
                }
                div.appendChild(input);
                if(i==2)
                {
                    div2=null;
                    if(dataTmp.length>0)
                    {
                       
                        console.log("Esperoooooo")
                        console.log(dataTmp);
                        console.log(dataTmp.length);
                        for(var m=0;m<dataTmp.length-1;m++)
                        {
                            
                            var div2 = document.createElement('div');
                            console.log(m)
                            console.log("tegngo 2")
                            var input2 = document.createElement('input');
                            input2.type = 'text';
                            input2.value=dataTmp[m].nicho;
                            input2.classList.add('num');
                            div2.appendChild(input2);

                            var input2 = document.createElement('input');
                            input2.type = 'text';
                            input2.value=dataTmp[m]["cod_ruma"];
                            input2.classList.add('codRum');
                            
                            div2.appendChild(input2);

                            var input2 = document.createElement('input');
                            input2.type = 'text';
                            input2.value=dataTmp[m]["cant_saco"]
                            input2.classList.add('num');
                            div2.appendChild(input2);
                            div.appendChild(div2);
                            
                        }
                        dataTmp=[];
                   
                    }

                }
             
            }

            // Agregar el div al cuerpo del documento
            document.getElementById(parent).appendChild(div);

            
        };
        sec5.value=sum5;
        sec4.value=sum4;
        sec3.value=sum3;
        sec2.value=sum2;
        sec1.value=sum1;
      };
    sgp_createSector("contSector1",104,"1",jsVariable);
    sgp_createSector("contSector2",104,"2",jsVariable);
    sgp_createSector("contSector3",104,"3",jsVariable);
    sgp_createSector("contSector4",75,"4",jsVariable);
    sgp_createSector("contSector5",38,"5",jsVariable)/* ;*/
    

      </script>