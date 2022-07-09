<?php
  $page_title = 'Home Page';
  require_once('includes/load.php');
  if (!$session->isUserLoggedIn(true)) { redirect('index.php', false);}
  
  $SuperUser = current_user();

  if( $SuperUser["sede"]=="T-Chimb") {$tableIns="instachim";}
  if( $SuperUser["sede"]=="T-Samanco") {$tableIns="instasama";}
  if( $SuperUser["sede"]=="T-Supe") {$tableIns="instasupe";}
  if( $SuperUser["sede"]=="T-Vegueta") {$tableIns="instavegu";}
  if( $SuperUser["sede"]=="T-Callao") {$tableIns="instacall";}
  if( $SuperUser["sede"]=="T-Pisco") {$tableIns="instapisc";}
  if( $SuperUser["sede"]=="T-Atico") {$tableIns="instaatic";}
  if( $SuperUser["sede"]=="T-Matarani") {$tableIns="instamata";}
  if( $SuperUser["sede"]=="E-Chimbote") {$tableIns="insexchim";}
  if( $SuperUser["sede"]=="E-Chicama") {$tableIns="insexchic";}//falta crear BD
?>
<?php include_once('layouts/header.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Empresa</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="assets/css/main.css">
	<style>
		body{
			width: 100%;
			margin: 0;
			background: #f1f2f7;
			/* background: rgb(233, 231, 231); */
			
		
			border-radius: 8px;
		}
		.contend{
			width: 100%; 
            
		}
		#chartdiv {
			width: 100%;
			/* border: white solid 3px; */
			height:320px;
			margin: 10px;
			background: white;
			color: #001f3f;
			box-shadow: 0px 0px 12px -4px black;
			border-radius: 8px;

		}
			#chartdiv8 {
			width: 100%;
			/* border: #001f3f solid 3px; */
			border-radius: 8px;
			background: white;
			
			box-shadow: 0px 0px 12px -4px black;	
			height:320px;
			margin: 10px 15px 15px 5px;
			color: #001f3f;

		}
		#chartdiv2 {
    
			width: 100%;
			/* border: #001f3f solid 3px; */
			border-radius: 8px;
			background: white;
			box-shadow: 0px 0px 12px -4px black;	
			height:320px;
			margin: 10px;
			color: #001f3f;
      text-align: center;
      justify-content: center;

		}
		#chartdiv3 {
			width: 100%;
			/* border: #001f3f solid 3px; */
			border-radius: 8px;
			background: white;
			color: #001f3f;
			box-shadow: 0px 0px 12px -4px black;	
			height:320px;
			margin: 10px;
		}
    	#chartdiv4 {
			width: 100%;
			border: #001f3f solid 3px;
			border-radius: 8px;
			background: white;
			color: #001f3f;
			box-shadow: 0px 0px 12px -4px black;	
			height:320px;
			margin: 10px;
      display: flex;
		}
		#chartdiv4 p{
		text-align: center;
		
		}
			.content{
				text-align: center;
			}
			
			.content-estadist{
				display: flex;
				text-align: center;

			}
			.tromper{
				display: flex;
				
			}
			#combo{
				border:2px solid #001f3f;
				color: #001f3f;
				font-weight: bolder;
				margin: 0px 0px 15px 0px;

			}
			#generate{
				width:20%;
				font-weight: bolder;
				color: #001f3f;
				background: white;
				border:2px solid #001f3f;
				border-radius:5px;
				margin: 0px 0px 15px 5px;
				
			}
			#generate:hover{
				background: #001f3f;
				color:white;
				font-weight: bolder;
			}
			
			
	</style>

</head>
<body>
	<div class="row">
		<div class="col-md-12">
			<?php echo display_msg($msg); ?>
		</div>
		<div class="col-md-12">
			<div class="container-fluid">
				<div class="page-header">
					<h1 class="text-titles"><i class="zmdi zmdi-balance zmdi-hc-fw"></i> Datos Estadisticos <small>EMPRESA DE TRASPORTE</small></h1>
				</div>
					<!-- <p class="lead">Seleccione la sede que desea gestionar las estadísticas. Dicho reporte están enfocadas a la inspeción de las empresas de trasporte que
						cumplen con traer la manta tipo pañuelo y quienes no. <strong style="color: red; font-size:16px;">(Una vez generado un grafico debe limpiar el panel para gestionar un nuevo resultado).</strong></p> -->
			</div>
			
			<?php if( $SuperUser["user_level"]=="1"){ ?>	
				<div class="col-md-8">
					<div class="tromper">
						<select name="combo" id="combo">
							<option selected="selected" value="">---Seleccione una Sede---</option>
							<option value="instacall">Tasa Callao</option>
							<option value="instapisc">Tasa Pisco</option>
							<option value="insexchic">Exalmar Malabrigo</option>
							<option value="instamata">Tasa Matarani</option>
							<option value="instavegu">Tasa Vegueta</option>
							<option value="instasupe">Tasa Supe</option>
							<option value="instachim">Tasa Chimbote</option>
							<option value="instaatic">Tasa Atico</option>
							<option value="instasama">Tasa Samanco</option>
						</select>
					</div>
				</div>
			<?php }?>	
		</div>
	</div>

	<script src="https://cdn.amcharts.com/lib/4/core.js"></script>
	<script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
	<script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
	<script src="https://cdn.amcharts.com/lib/4/themes/kelly.js"></script>

	<!-- -----------------Intento numero_1---------------------------- -->
	<script>

	window.onload= async function ()
	{
		var chart2=null; var chart=null; var chart3=null; var chart8=null;
		var dataJson=null;
		var table = '<?=$tableIns?>';
	
		dataJson=await getDataGraf(table);
		//console.log(dataJson);
		chart2=createAllGraf(dataJson,"chartdiv2",1,false);
		chart=createAllGraf(dataJson,"chartdiv",2,false);
		chart3=createAllGraf(dataJson,"chartdiv3",3,false);
		chart8=createAllGraf(dataJson,"chartdiv8",4,false);
		//createAllGraf(dataJson,chart,"chartdiv2",0);
		<?php if( $SuperUser["user_level"]=="1"){ ?>
			const datoSelec= document.getElementById("combo");

			datoSelec.addEventListener('change', async  ()=>
			{
				//const contPie= document.getElementById("chartdiv2");
				///contPie.innerHTML="";
				var tabl=datoSelec.options[datoSelec.selectedIndex].value;
				console.log(tabl);	
				dataJson=await getDataGraf(tabl);
				console.log(dataJson)
				changeDateGrafic(chart2,dataJson,1);
				changeDateGrafic(chart,dataJson,2);
				changeDateGrafic(chart3,dataJson,3);
				changeDateGrafic(chart8,dataJson,4);
			});
		<?php } ?>
		
	};	

	async function getDataGraf(table)
	{
		var dataJson=null;
		var payload = {
			t: table
		};
			
		var data = new FormData();
		data.append("id", JSON.stringify(payload));
		// data={id:"{t: table}"};
		//console.log("loool")
		await fetch("getDataInspec.php",
		{
			method: "POST",
			body: data
		})
		.then((response) => response.json())
		.then((data) => 
		{
			dataJson=data;
			
		});
		return dataJson;
	};

	function createAllGraf(data,dom,option,setData)
	{
		var chart=null;
		var conSi = 0; var conNo = 0;

		var conFigueroa = 0; var conAnticona = 0; var conPepeToro = 0; var conAgersa = 0;
		var conNaranjo = 0;var conGemeva = 0; var conPortLogistic = 0; var conRovSac = 0;
		var conUceda = 0;

		var conFigueroaNo = 0; var conAnticonaNo = 0; var conPepeToroNo = 0; var conAgersaNo = 0;
		var conNaranjoNo = 0; var conGemevaNo = 0; var conPortLogisticNo = 0; var conRovSacNo = 0;
		var conUcedaNo = 0;
		
		for (let i = 0; i < data.length; i++) 
		{
			var datatotal = JSON.parse(data[i]);
			if (datatotal.empresa == "Figueroa") 
			{
				if(datatotal.manta == "Si") { conFigueroa += 1; conSi += 1;
				}else if(datatotal.manta == "No"){conFigueroaNo += 1; conNo += 1;}; 

			} else if (datatotal.empresa == "Anticona") 
			{
				if(datatotal.manta == "Si") { conAnticona += 1; conSi += 1;
				}else if(datatotal.manta == "No"){conAnticonaNo += 1; conNo += 1;}; 
				
			} else if (datatotal.empresa == "Pepe el Toro") 
			{
				if(datatotal.manta == "Si") { conPepeToro += 1; conSi += 1;
				}else if(datatotal.manta == "No"){conPepeToroNo += 1; conNo += 1;}; 
				
			} else if (datatotal.empresa == "Naranjo") 
			{
				if(datatotal.manta == "Si") { conNaranjo += 1; conSi += 1;
				}else if(datatotal.manta == "No"){conNaranjoNo += 1; conNo += 1;}; 
			
			} else if (datatotal.empresa == "Agersa") 
			{
				if(datatotal.manta == "Si") { conAgersa += 1; conSi += 1;
				}else if(datatotal.manta == "No"){conAgersaNo += 1; conNo += 1;}; 
			
			} else if (datatotal.empresa == "Gemeva") 
			{
				if(datatotal.manta == "Si") { conGemeva += 1; conSi += 1;
				}else if(datatotal.manta == "No"){conGemevaNo += 1; conNo += 1;}; 
			
			} else if (datatotal.empresa == "Port Logistic") 
			{
				if(datatotal.manta == "Si") { conPortLogistic += 1; conSi += 1;
				}else if(datatotal.manta == "No"){conPortLogisticNo += 1; conNo += 1;}; 
			
			} else if (datatotal.empresa == "Rov Sac") 
			{
				if(datatotal.manta == "Si") { conRovSac += 1; conSi += 1;
				}else if(datatotal.manta == "No"){conRovSacNo += 1; conNo += 1;}; 
				
			} else if (datatotal.empresa == "Uceda") 
			{
				if(datatotal.manta == "Si") { conUceda += 1; conSi += 1;
				}else if(datatotal.manta == "No"){conUcedaNo += 1; conNo += 1;}; 
			};
		};
		
		switch (option) 
		{
			case 0:  //

				var send=[
					{opciones: "Figueroa",cantidad: conFigueroa}, 
					{opciones: "Anticona",cantidad: conAnticona}, 
					{opciones: "Pepe el Toro",cantidad: conPepeToro}, 
					{opciones: "Agersa",cantidad: conAgersa}, 
					{opciones: "Naranjo",cantidad: conNaranjo}, 
					{opciones: "Gemeva",cantidad: conGemeva}, 
					{opciones: "Port Logistic",cantidad: conPortLogistic}, 
					{opciones: "Rov Sac",cantidad: conRovSac}, 
					{opciones: "Uceda",cantidad: conUceda}
				];
		
				if(setData==false || setData=="false")
				{
					am4core.useTheme(am4themes_animated);
					am4core.useTheme(am4themes_kelly);
					//am4core.useTheme(am4themes_animated);
					chart = am4core.create(dom, am4charts.PieChart3D);
					chart.angle = 20;

					var pieSeries = chart.series.push(new am4charts.PieSeries3D());
					pieSeries.dataFields.value = "cantidad";
					pieSeries.dataFields.category = "opciones";
					pieSeries.slices.template.stroke = am4core.color("#fff");
					pieSeries.slices.template.strokeWidth = 1;
					pieSeries.slices.template.strokeOpacity = 1;

					// Disabling labels and ticks on inner circle
					// Disable sliding out of slices
					pieSeries.slices.template.states.getKey("hover").properties.shiftRadius = 0;
					pieSeries.slices.template.states.getKey("hover").properties.scale = 1.1;
				
				};
				break;

			case 1:  //CANTIDAD DE MANTOS TOTALES DE SI Y NO 

				var send=[
					{opciones: "Si",cantidad: conSi}, 
					{opciones: "No",cantidad: conNo}
				];
				
				if(setData==false || setData=="false")
				{
					am4core.useTheme(am4themes_animated);
					am4core.useTheme(am4themes_kelly);
					//am4core.useTheme(am4themes_animated);

					chart = am4core.create(dom, am4charts.PieChart3D);
					chart.angle = 20;

					var pieSeries = chart.series.push(new am4charts.PieSeries3D());
					pieSeries.dataFields.value = "cantidad";
					pieSeries.dataFields.category = "opciones";
					pieSeries.slices.template.stroke = am4core.color("#fff");
					pieSeries.slices.template.strokeWidth = 1;
					pieSeries.slices.template.strokeOpacity = 1;

					// Disabling labels and ticks on inner circle
					// Disable sliding out of slices
					pieSeries.slices.template.states.getKey("hover").properties.shiftRadius = 0;
					pieSeries.slices.template.states.getKey("hover").properties.scale = 1.1;
				};	
				break;
				

			case 2:  //CANTIDAD DE MANTOS NO POR EMPRESA DE TRANSPORTE

				var send=[
					{opciones: "Figueroa",cantidad: conFigueroaNo}, 
					{opciones: "Anticona",cantidad: conAnticonaNo}, 
					{opciones: "Pepe el Toro",cantidad: conPepeToroNo}, 
					{opciones: "Agersa",cantidad: conAgersaNo}, 
					{opciones: "Naranjo",cantidad: conNaranjoNo}, 
					{opciones: "Gemeva",cantidad: conGemevaNo}, 
					{opciones: "Port Logistic",cantidad: conPortLogisticNo}, 
					{opciones: "Rov Sac",cantidad: conRovSacNo}, 
					{opciones: "Uceda",cantidad: conUcedaNo}
				];
				
				if(setData==false || setData=="false")
				{
					am4core.useTheme(am4themes_animated);
					am4core.useTheme(am4themes_kelly);
					//am4core.useTheme(am4themes_animated);

					chart = am4core.create(dom, am4charts.PieChart3D);
					chart.angle = 20;

					var pieSeries = chart.series.push(new am4charts.PieSeries3D());
					pieSeries.dataFields.value = "cantidad";
					pieSeries.dataFields.category = "opciones";
					pieSeries.slices.template.stroke = am4core.color("#fff");
					pieSeries.slices.template.strokeWidth = 1;
					pieSeries.slices.template.strokeOpacity = 1;

					// Disabling labels and ticks on inner circle
					// Disable sliding out of slices
					pieSeries.slices.template.states.getKey("hover").properties.shiftRadius = 0;
					pieSeries.slices.template.states.getKey("hover").properties.scale = 1.1;
				};
				break;

			case 3: //CANTIDAD DE MANTOS SI POR EMPRESA DE TRANSPORTE
				
				var send=[
					{opciones: "Figueroa",cantidad: conFigueroa},
					{opciones: "Anticona",cantidad: conAnticona},
					{opciones: "Pepe el Toro",cantidad: conPepeToro},
					{opciones: "Agersa",cantidad: conAgersa},
					{opciones: "Naranjo",cantidad: conNaranjo},
					{opciones: "Gemeva",cantidad: conGemeva},
					{opciones: "Port Logistic",cantidad: conPortLogistic},
					{opciones: "Rov Sac",cantidad: conRovSac},
					{opciones: "Uceda",cantidad: conUceda}
				];
			
				if(setData==false || setData=="false")
				{
					am4core.useTheme(am4themes_animated);
					am4core.useTheme(am4themes_kelly);
					//am4core.useTheme(am4themes_animated);

					chart = am4core.create(dom, am4charts.PieChart3D);
					chart.angle = 20;

					var pieSeries = chart.series.push(new am4charts.PieSeries3D());
					pieSeries.dataFields.value = "cantidad";
					pieSeries.dataFields.category = "opciones";
					pieSeries.slices.template.stroke = am4core.color("#fff");
					pieSeries.slices.template.strokeWidth = 1;
					pieSeries.slices.template.strokeOpacity = 1;

					// Disabling labels and ticks on inner circle
					// Disable sliding out of slices
					pieSeries.slices.template.states.getKey("hover").properties.shiftRadius = 0;
					pieSeries.slices.template.states.getKey("hover").properties.scale = 1.1;
				};	
				break;

			case 4:

				var send=[
					{country: "Anticona",value: conAnticona,valueNo: conAnticonaNo},
					{country: "Agersa",value: conAgersa,valueNo: conAgersaNo},
					{country: "Figueroa",value: conFigueroa,valueNo: conFigueroaNo},
					{country: "Gemeva",value: conGemeva,valueNo: conGemevaNo},
					{country: "Naranjo",value: conNaranjo,valueNo: conNaranjoNo},
					{country: "Pepe el Toro",value: conPepeToro,valueNo: conPepeToroNo},
					{country: "Port Logistic",value: conPortLogistic,valueNo: conPortLogisticNo},
					{country: "Rov Sac",value: conRovSac,valueNo: conRovSacNo},
					{country: "Uceda",value: conUceda,valueNo: conUcedaNo}
				];
				
				if(setData==false || setData=="false")
				{
					am4core.useTheme(am4themes_animated);
					am4core.useTheme(am4themes_kelly);
					// Create chart instance
					chart = am4core.create(dom, am4charts.XYChart3D);
				
					// Create axes
					var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
					categoryAxis.dataFields.category = "country";
					categoryAxis.title.text = "[bold]Empresa Transporte";

					var  valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
					valueAxis.title.text = "[bold]Cantidad";

					// Create series
					var series = chart.series.push(new am4charts.ColumnSeries3D());
					series.dataFields.valueY = "value";
					series.dataFields.categoryX = "country";
					series.name = "value";
					series.tooltipText = "{name}: [bold]{valueY}[/]";

					var series2 = chart.series.push(new am4charts.ColumnSeries3D());
					series2.dataFields.valueY = "valueNo";
					series2.dataFields.categoryX = "country";
					series2.name = "valueNo";
					series2.tooltipText = "{name}: [bold]{valueY}[/]";
				};
				break;
		};
		
		// Add cursor
		chart.cursor = new am4charts.XYCursor();

		// Add data
		chart.data = send;

		return chart;
	};

	function changeDateGrafic(chart,data,option)
	{
		var conSi = 0; var conNo = 0;

		var conFigueroa = 0; var conAnticona = 0; var conPepeToro = 0; var conAgersa = 0;
		var conNaranjo = 0;var conGemeva = 0; var conPortLogistic = 0; var conRovSac = 0;
		var conUceda = 0;

		var conFigueroaNo = 0; var conAnticonaNo = 0; var conPepeToroNo = 0; var conAgersaNo = 0;
		var conNaranjoNo = 0; var conGemevaNo = 0; var conPortLogisticNo = 0; var conRovSacNo = 0;
		var conUcedaNo = 0;
		
		for (let i = 0; i < data.length; i++) 
		{
			var datatotal = JSON.parse(data[i]);
			if (datatotal.empresa == "Figueroa") 
			{
				if(datatotal.manta == "Si") { conFigueroa += 1; conSi += 1;
				}else if(datatotal.manta == "No"){conFigueroaNo += 1; conNo += 1;}; 

			} else if (datatotal.empresa == "Anticona") 
			{
				if(datatotal.manta == "Si") { conAnticona += 1; conSi += 1;
				}else if(datatotal.manta == "No"){conAnticonaNo += 1; conNo += 1;}; 
				
			} else if (datatotal.empresa == "Pepe el Toro") 
			{
				if(datatotal.manta == "Si") { conPepeToro += 1; conSi += 1;
				}else if(datatotal.manta == "No"){conPepeToroNo += 1; conNo += 1;}; 
				
			} else if (datatotal.empresa == "Naranjo") 
			{
				if(datatotal.manta == "Si") { conNaranjo += 1; conSi += 1;
				}else if(datatotal.manta == "No"){conNaranjoNo += 1; conNo += 1;}; 
			
			} else if (datatotal.empresa == "Agersa") 
			{
				if(datatotal.manta == "Si") { conAgersa += 1; conSi += 1;
				}else if(datatotal.manta == "No"){conAgersaNo += 1; conNo += 1;}; 
			
			} else if (datatotal.empresa == "Gemeva") 
			{
				if(datatotal.manta == "Si") { conGemeva += 1; conSi += 1;
				}else if(datatotal.manta == "No"){conGemevaNo += 1; conNo += 1;}; 
			
			} else if (datatotal.empresa == "Port Logistic") 
			{
				if(datatotal.manta == "Si") { conPortLogistic += 1; conSi += 1;
				}else if(datatotal.manta == "No"){conPortLogisticNo += 1; conNo += 1;}; 
			
			} else if (datatotal.empresa == "Rov Sac") 
			{
				if(datatotal.manta == "Si") { conRovSac += 1; conSi += 1;
				}else if(datatotal.manta == "No"){conRovSacNo += 1; conNo += 1;}; 
				
			} else if (datatotal.empresa == "Uceda") 
			{
				if(datatotal.manta == "Si") { conUceda += 1; conSi += 1;
				}else if(datatotal.manta == "No"){conUcedaNo += 1; conNo += 1;}; 
			};
		};
		
		switch (option) 
		{
			case 0:  //

				var send=[
					{opciones: "Figueroa",cantidad: conFigueroa}, 
					{opciones: "Anticona",cantidad: conAnticona}, 
					{opciones: "Pepe el Toro",cantidad: conPepeToro}, 
					{opciones: "Agersa",cantidad: conAgersa}, 
					{opciones: "Naranjo",cantidad: conNaranjo}, 
					{opciones: "Gemeva",cantidad: conGemeva}, 
					{opciones: "Port Logistic",cantidad: conPortLogistic}, 
					{opciones: "Rov Sac",cantidad: conRovSac}, 
					{opciones: "Uceda",cantidad: conUceda}
				];
		
				break;

			case 1:  //CANTIDAD DE MANTOS TOTALES DE SI Y NO 

				var send=[
					{opciones: "Si",cantidad: conSi}, 
					{opciones: "No",cantidad: conNo}
				];
					
				break;
				

			case 2:  //CANTIDAD DE MANTOS NO POR EMPRESA DE TRANSPORTE

				var send=[
					{opciones: "Figueroa",cantidad: conFigueroaNo}, 
					{opciones: "Anticona",cantidad: conAnticonaNo}, 
					{opciones: "Pepe el Toro",cantidad: conPepeToroNo}, 
					{opciones: "Agersa",cantidad: conAgersaNo}, 
					{opciones: "Naranjo",cantidad: conNaranjoNo}, 
					{opciones: "Gemeva",cantidad: conGemevaNo}, 
					{opciones: "Port Logistic",cantidad: conPortLogisticNo}, 
					{opciones: "Rov Sac",cantidad: conRovSacNo}, 
					{opciones: "Uceda",cantidad: conUcedaNo}
				];
				
				break;

			case 3: //CANTIDAD DE MANTOS SI POR EMPRESA DE TRANSPORTE
				
				var send=[
					{opciones: "Figueroa",cantidad: conFigueroa},
					{opciones: "Anticona",cantidad: conAnticona},
					{opciones: "Pepe el Toro",cantidad: conPepeToro},
					{opciones: "Agersa",cantidad: conAgersa},
					{opciones: "Naranjo",cantidad: conNaranjo},
					{opciones: "Gemeva",cantidad: conGemeva},
					{opciones: "Port Logistic",cantidad: conPortLogistic},
					{opciones: "Rov Sac",cantidad: conRovSac},
					{opciones: "Uceda",cantidad: conUceda}
				];
			
				break;

			case 4:

				var send=[
					{country: "Anticona",value: conAnticona,valueNo: conAnticonaNo},
					{country: "Agersa",value: conAgersa,valueNo: conAgersaNo},
					{country: "Figueroa",value: conFigueroa,valueNo: conFigueroaNo},
					{country: "Gemeva",value: conGemeva,valueNo: conGemevaNo},
					{country: "Naranjo",value: conNaranjo,valueNo: conNaranjoNo},
					{country: "Pepe el Toro",value: conPepeToro,valueNo: conPepeToroNo},
					{country: "Port Logistic",value: conPortLogistic,valueNo: conPortLogisticNo},
					{country: "Rov Sac",value: conRovSac,valueNo: conRovSacNo},
					{country: "Uceda",value: conUceda,valueNo: conUcedaNo}
				];
			
				break;
		};
		
		chart.data = send;
	};

	</script>


	<div class="col-md-12 content-estadist">
		<div id="chartdiv4">´
			<img src="assets/img/1.jpg" alt="" style="width:150px; height:310px;">
			<p class="lead">Seleccione la sede que desea gestionar las estadísticas. Dichos reportes están enfocados a la inspeción de las empresas de trasporte que
				cumplen con traer la manta tipo pañuelo y quienes no. <strong style="color: red; font-size:16px;">(Una vez generado un grafico debe limpiar el panel para gestionar un nuevo resultado).</strong></p>
		</div>
		<div id="chartdiv2"><strong>RESUMEN GENERAL</strong></div>
	</div>

	<div class="col-md-12 content-estadist">
		<div id="chartdiv3"><strong>SI TRAJERON MANTA TIPO PAÑUELO</strong></div>
		<div id="chartdiv"><strong>NO TRAJERON MANTA TIPO PAÑUELO</strong></div>	
	</div>

	<div class="col-md-12 content">
		<div id="chartdiv8"><strong>CRUZE DE RESULTADOS DEL SI Y NO</strong></div>
	</div>
</body>
</script>
<div class="col-md-12 content-estadist wrapper">
  <div id="chartdiv4"><img src="assets/img/1.jpg" alt="" style="width:150px; height:310px;">
 <p class="lead">Seleccione la sede que desea gestionar las estadísticas. Dichos reportes están enfocados a la inspeción de las empresas de trasporte que
				cumplen con traer la manta tipo pañuelo y quienes no. <strong style="color: red; font-size:16px;">(Una vez generado un grafico debe limpiar el panel para gestionar un nuevo resultado).</strong></p></div>
  <div id="chartdiv2"><strong>RESUMEN GENERAL</strong></div>
      </div>
<div class="col-md-12 content-estadist wrapper">
 <div id="chartdiv3"><strong>SI TRAJERON MANTA TIPO PAÑUELO</strong></div>
 <div id="chartdiv"><strong>NO TRAJERON MANTA TIPO PAÑUELO</strong></div>	
</div>

<div class="col-md-12 content wrapper">
	<div id="chartdiv8"><strong>CRUZE DE RESULTADOS DEL SI Y NO</strong></div>
</div>
	</body>
	
	</html>
<?php include_once('layouts/footer.php'); ?>
