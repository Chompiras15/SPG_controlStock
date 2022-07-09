<?php
  $page_title = 'Home Page';
  require_once('includes/load.php');
  if (!$session->isUserLoggedIn(true)) { redirect('index.php', false);}
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
		<div class="col-md-8">
		<div class="tromper">
			  	<select name="combo" id="combo">
					<option selected="selected" value="">---Seleccione una Sede---</option>
				  <option value="inspection_callao">Tasa Callao</option>
					<option value="inspection_pisco">Tasa Pisco</option>
					<option value="inspection_mala">Exlamar Malabrigo</option>
					<option value="inspection_matarani">Tasa Matarani</option>
					<option value="inspection_vegueta">Tasa Vegueta</option>
					<option value="inspection_supe">Tasa Supe</option>
           <option value="inspection_chim">Tasa Chimbote</option>
          <option value="inspection_atico">Tasa Atico</option>
        			<option value="inspection_samanco">Tasa Samanco</option>
				</select>
				<button id=generate onclick=location.reload() title="Limpiar Panel">Limpiar Panel</button>
		</div>
		</div>	
 </div>
</div>
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
	
	

<!-- -----------------Intento numero_1---------------------------- -->
<script>
window.onload= function ()
{
		var tabl="";
		const datoSelec= document.getElementById("combo");
		datoSelec.addEventListener('change', (event)=>{
		var tabl=datoSelec.options[datoSelec.selectedIndex].value;
		crateGraf(tabl);	
		})
};	
	function crateGraf (table)
	{
		var payload = {
			t: table
		};
        
		var data = new FormData();
		data.append("id", JSON.stringify(payload));
	// data={id:"{t: table}"};
    console.log("loool")
		fetch("getDataInspec.php",
			{
				method: "POST",
				body: data
			})
			.then((response) => response.json())
			.then((data) => {
				var conSi = 0;
				var conNo = 0;
				var conFigueroa = 0;
				var conAnticona = 0;
				var conPepeToro = 0;
				var conAgersa = 0;
				var conNaranjo = 0;
				var conGemeva = 0;
				var conPortLogistic = 0;
				var conRovSac = 0;
				var conUceda = 0;
				for (let i = 0; i < data.length; i++) {
					var datatotal = JSON.parse(data[i]);
					if (datatotal.empresa == "Figueroa" && datatotal.manta == "Si") {
						conFigueroa += 1;
					} else if (datatotal.empresa == "Anticona" && datatotal.manta == "Si") {
						conAnticona += 1;
					} else if (datatotal.empresa == "Pepe el Toro" && datatotal.manta == "Si") {
						conPepeToro += 1;
					} else if (datatotal.empresa == "Naranjo" && datatotal.manta == "Si") {
						conNaranjo += 1;
					} else if (datatotal.empresa == "Agersa" && datatotal.manta == "Si") {
						conAgersa += 1;
					} else if (datatotal.empresa == "Gemeva" && datatotal.manta == "Si") {
						conGemeva += 1;
					} else if (datatotal.empresa == "Port Logistic" && datatotal.manta == "Si") {
						conPortLogistic += 1;
					} else if (datatotal.empresa == "Rov Sac" && datatotal.manta == "Si") {
						conRovSac += 1;
					} else if (datatotal.empresa == "Uceda" && datatotal.manta == "Si") {
						conUceda += 1;
					}
				}
				for (let i = 0; i < data.length; i++) {
					var dataf = JSON.parse(data[i]);
					if (dataf.manta == "Si") {
						conSi += 1;
					} else {
						conNo += 1;
					}
				}
				var conFigueroaNo = 0;
				var conAnticonaNo = 0;
				var conPepeToroNo = 0;
				var conAgersaNo = 0;
				var conNaranjoNo = 0;
				var conGemevaNo = 0;
				var conPortLogisticNo = 0;
				var conRovSacNo = 0;
				var conUcedaNo = 0;
				for (let i = 0; i < data.length; i++) {
					var datatotalNo = JSON.parse(data[i]);
					if (datatotalNo.empresa == "Figueroa" && datatotalNo.manta == "No") {
						conFigueroaNo += 1;
					} else if (datatotalNo.empresa == "Anticona" && datatotalNo.manta == "No") {
						conAnticonaNo += 1;
					} else if (datatotalNo.empresa == "Pepe el Toro" && datatotalNo.manta == "No") {
						conPepeToroNo += 1;
					} else if (datatotalNo.empresa == "Naranjo" && datatotalNo.manta == "No") {
						conNaranjoNo += 1;
					} else if (datatotalNo.empresa == "Agersa" && datatotalNo.manta == "No") {
						conAgersaNo += 1;
					} else if (datatotalNo.empresa == "Gemeva" && datatotalNo.manta == "No") {
						conGemevaNo += 1;
					} else if (datatotalNo.empresa == "Port Logistic" && datatotalNo.manta == "No") {
						conPortLogisticNo += 1;
					} else if (datatotalNo.empresa == "Rov Sac" && datatotalNo.manta == "No") {
						conRovSacNo += 1;
					} else if (datatotalNo.empresa == "Uceda" && datatotalNo.manta == "No") {
						conUcedaNo += 1;
					}
				}


				//   console.log(conSi);
				//     console.log(conNo);
				am5.ready(function () {
					
					// Create root element
					// https://www.amcharts.com/docs/v5/getting-started/#Root_element
					var root = am5.Root.new("chartdiv");
					// Set themes
					// https://www.amcharts.com/docs/v5/concepts/themes/
					root.setThemes([
						am5themes_Animated.new(root)
					]);

					// Create chart
					// https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/
					var chart = root.container.children.push(am5percent.PieChart.new(root, {
						radius: am5.percent(90),
						innerRadius: am5.percent(50),
						layout: root.horizontalLayout
					}));

					// Create series
					// https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Series
					var series = chart.series.push(am5percent.PieSeries.new(root, {
						name: "Series",
						valueField: "cantidad",
						categoryField: "opciones"
					}));

					// Set data
					// https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Setting_data
					series.data.setAll([{
						opciones: "Figueroa",
						cantidad: conFigueroa
					}, {
						opciones: "Anticona",
						cantidad: conAnticona
					}, {
						opciones: "Pepe el Toro",
						cantidad: conPepeToro
					}, {
						opciones: "Agersa",
						cantidad: conAgersa
					}, {
						opciones: "Naranjo",
						cantidad: conNaranjo
					}, {
						opciones: "Gemeva",
						cantidad: conGemeva
					}, {
						opciones: "Port Logistic",
						cantidad: conPortLogistic
					}, {
						opciones: "Rov Sac",
						cantidad: conRovSac
					}, {
						opciones: "Uceda",
						cantidad: conUceda
					}]);

					// Disabling labels and ticks
					series.labels.template.set("visible", false);
					series.ticks.template.set("visible", false);

					// Adding gradients
					series.slices.template.set("strokeOpacity", 0);
					series.slices.template.set("fillGradient", am5.RadialGradient.new(root, {
						stops: [{
							brighten: -0.8
						}, {
							brighten: -0.8
						}, {
							brighten: -0.5
						}, {
							brighten: 0
						}, {
							brighten: -0.5
						}]
					}));

					// Create legend
					// https://www.amcharts.com/docs/v5/charts/percent-charts/legend-percent-series/
					var legend = chart.children.push(am5.Legend.new(root, {
						centerY: am5.percent(50),
						y: am5.percent(50),
						layout: root.verticalLayout
					}));
					// set value labels align to right
					legend.valueLabels.template.setAll({ textAlign: "right" })
					// set width and max width of labels
					legend.labels.template.setAll({
						maxWidth: 140,
						width: 140,
						oversizedBehavior: "wrap"
					});

					legend.data.setAll(series.dataItems);


					// Play initial series animation
					// https://www.amcharts.com/docs/v5/concepts/animations/#Animation_of_series
					series.appear(1000, 100);

				}); // end am5.ready()




				// -------------------------------------------------------------------
				// Funcion para el Chart N°2
				am5.ready(function () {

					// Create root element
					// https://www.amcharts.com/docs/v5/getting-started/#Root_element
					var root = am5.Root.new("chartdiv2");

					// Set themes
					// https://www.amcharts.com/docs/v5/concepts/themes/
					root.setThemes([
						am5themes_Animated.new(root)
					]);

					// Create chart
					// https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/
					var chart = root.container.children.push(am5percent.PieChart.new(root, {
						radius: am5.percent(90),
						innerRadius: am5.percent(50),
						layout: root.horizontalLayout
					}));

					// Create series
					// https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Series
					var series = chart.series.push(am5percent.PieSeries.new(root, {
						name: "Series",
						valueField: "cantidadSi",
						categoryField: "opcionesSi"
					}));

					// Set data
					// https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Setting_data
					series.data.setAll([{
						opcionesSi: "Si",
						cantidadSi: conSi
					}, {
						opcionesSi: "No",
						cantidadSi: conNo
					}]);

					// Disabling labels and ticks
					series.labels.template.set("visible", false);
					series.ticks.template.set("visible", false);

					// Adding gradients
					series.slices.template.set("strokeOpacity", 0);
					series.slices.template.set("fillGradient", am5.RadialGradient.new(root, {
						stops: [{
							brighten: -0.8
						}, {
							brighten: -0.8
						}, {
							brighten: -0.5
						}, {
							brighten: 0
						}, {
							brighten: -0.5
						}]
					}));

					// Create legend
					// https://www.amcharts.com/docs/v5/charts/percent-charts/legend-percent-series/
					var legend = chart.children.push(am5.Legend.new(root, {
						centerY: am5.percent(50),
						y: am5.percent(50),
						layout: root.verticalLayout
					}));
					// set value labels align to right
					legend.valueLabels.template.setAll({ textAlign: "right" })
					// set width and max width of labels
					legend.labels.template.setAll({
						maxWidth: 140,
						width: 140,
						oversizedBehavior: "wrap"
					});

					legend.data.setAll(series.dataItems);


					// Play initial series animation
					// https://www.amcharts.com/docs/v5/concepts/animations/#Animation_of_series
					series.appear(1000, 100);

				}); // end am5.ready()


				// ==========================================================================
				// Funcion para llenar el Chart N°3
				am5.ready(function () {

					// Create root element
					// https://www.amcharts.com/docs/v5/getting-started/#Root_element
					var root = am5.Root.new("chartdiv3");

					// Set themes
					// https://www.amcharts.com/docs/v5/concepts/themes/
					root.setThemes([
						am5themes_Animated.new(root)
					]);

					// Create chart
					// https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/
					var chart = root.container.children.push(am5percent.PieChart.new(root, {
						radius: am5.percent(90),
						innerRadius: am5.percent(50),
						layout: root.horizontalLayout
					}));

					// Create series
					// https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Series
					var series = chart.series.push(am5percent.PieSeries.new(root, {
						name: "Series",
						valueField: "cantidadNo",
						categoryField: "opcionesNo"
					}));

					// Set data
					// https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Setting_data
					series.data.setAll([{
						opcionesNo: "Figueroa",
						cantidadNo: conFigueroaNo
					}, {
						opcionesNo: "Anticona",
						cantidadNo: conAnticonaNo
					}, {
						opcionesNo: "Pepe el Toro",
						cantidadNo: conPepeToroNo
					}, {
						opcionesNo: "Agersa",
						cantidadNo: conAgersaNo
					}, {
						opcionesNo: "Naranjo",
						cantidadNo: conNaranjoNo
					}, {
						opcionesNo: "Gemeva",
						cantidadNo: conGemevaNo
					}, {
						opcionesNo: "Port Logistic",
						cantidadNo: conPortLogisticNo
					}, {
						opcionesNo: "Rov Sac",
						cantidadNo: conRovSacNo
					}, {
						opcionesNo: "Uceda",
						cantidadNo: conUcedaNo
					}]);

					// Disabling labels and ticks
					series.labels.template.set("visible", false);
					series.ticks.template.set("visible", false);

					// Adding gradients
					series.slices.template.set("strokeOpacity", 0);
					series.slices.template.set("fillGradient", am5.RadialGradient.new(root, {
						stops: [{
							brighten: -0.8
						}, {
							brighten: -0.8
						}, {
							brighten: -0.5
						}, {
							brighten: 0
						}, {
							brighten: -0.5
						}]
					}));

					// Create legend
					// https://www.amcharts.com/docs/v5/charts/percent-charts/legend-percent-series/
					var legend = chart.children.push(am5.Legend.new(root, {
						centerY: am5.percent(50),
						y: am5.percent(50),
						layout: root.verticalLayout
					}));
					// set value labels align to right
					legend.valueLabels.template.setAll({ textAlign: "right" })
					// set width and max width of labels
					legend.labels.template.setAll({
						maxWidth: 140,
						width: 140,
						oversizedBehavior: "wrap"
					});

					legend.data.setAll(series.dataItems);


					// Play initial series animation
					// https://www.amcharts.com/docs/v5/concepts/animations/#Animation_of_series
					series.appear(1000, 100);

				}); // end am5.ready()
				// POSISICON 4________________________________________-
				  am5.ready(function () {

        // Create root element
        // https://www.amcharts.com/docs/v5/getting-started/#Root_element
        var root = am5.Root.new("chartdiv8");


        // Set themes
        // https://www.amcharts.com/docs/v5/concepts/themes/
        root.setThemes([
            am5themes_Animated.new(root)
        ]);


        // Create chart
        // https://www.amcharts.com/docs/v5/charts/xy-chart/
        var chart = root.container.children.push(am5xy.XYChart.new(root, {
            panX: true,
            panY: true,
            wheelX: "panX",
            wheelY: "zoomX",
            pinchZoomX: true
        }));

        // Add cursor
        // https://www.amcharts.com/docs/v5/charts/xy-chart/cursor/
        var cursor = chart.set("cursor", am5xy.XYCursor.new(root, {}));
        cursor.lineY.set("visible", false);


        // Create axes
        // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
        var xRenderer = am5xy.AxisRendererX.new(root, { minGridDistance: 30 });
        xRenderer.labels.template.setAll({
            rotation: -90,
            centerY: am5.p50,
            centerX: am5.p100,
            paddingRight: 15
        });

        var xAxis = chart.xAxes.push(am5xy.CategoryAxis.new(root, {
            maxDeviation: 0.3,
            categoryField: "country",
            renderer: xRenderer,
            tooltip: am5.Tooltip.new(root, {})
        }));

        var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
            maxDeviation: 0.3,
            renderer: am5xy.AxisRendererY.new(root, {})
        }));


        // Create series
        // https://www.amcharts.com/docs/v5/charts/xy-chart/series/
        var series = chart.series.push(am5xy.ColumnSeries.new(root, {
            name: "Series 1",
            xAxis: xAxis,
            yAxis: yAxis,
            valueYField: "value",
            sequencedInterpolation: true,
            categoryXField: "country",
            tooltip: am5.Tooltip.new(root, {
                labelText: "{valueY}"
            })
        }));

        series.columns.template.setAll({ cornerRadiusTL: 5, cornerRadiusTR: 5 });
        series.columns.template.adapters.add("fill", function (fill, target) {
            return chart.get("colors").getIndex(series.columns.indexOf(target));
        });

        series.columns.template.adapters.add("stroke", function (stroke, target) {
            return chart.get("colors").getIndex(series.columns.indexOf(target));
        });


        // Set data
       var data = [{
            country: "Anticona Si",
            value: conAnticona
        }, {
            country: "Anticona No",
            value: conAnticonaNo
        }, {
            country: "Agersa Si",
            value: conAgersa
        }, {
            country: "Agersa No",
            value: conAgersaNo
        }, {
            country: "Figueroa Si",
            value: conFigueroa
        }, {
            country: "Figueroa No",
            value: conFigueroaNo
        },{
        
            country: "Gemeva",
            value: conGemeva
        },{
			country: "Gemeva No",
            value: conGemevaNo
		},{
            country: "Naranjo",
            value: conNaranjo
        },{
			country: "Naranjo No",
            value: conNaranjoNo
		}, {
            country: "Pepe el Toro",
            value: conPepeToro
        }, {
			country: "Pepe el Toro No",
            value: conPepeToroNo
		},{
            country: "Port Logistic",
            value: conPortLogistic
        },{
			country: "Port Logistic No",
            value: conPortLogisticNo
		}, {
            country: "Rov Sac",
            value: conRovSac
        },{
			country: "Rov Sac No",
            value: conRovSacNo
		}, {
            country: "Uceda",
            value: conUceda
        },{
			country: "Uceda",
            value: conUcedaNo
		}];

        xAxis.data.setAll(data);
        series.data.setAll(data);


        // Make stuff animate on load
        // https://www.amcharts.com/docs/v5/concepts/animations/
        series.appear(1000);
        chart.appear(1000, 10);

    }); // end am5.ready()
			});
	}
	





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
