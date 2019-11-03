<?php 

error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");
date_default_timezone_set('America/Mexico_City');


include 'cResul01t.php';
include 'cResul02t.php';
include 'cResul03t.php';


 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Reporte NOM-035 G3</title>
	<style>
		@media print {
			.hoja{
				page-break-before: always;
			}
		}
		.marcoP{
			display: flex;
        align-items: center;
		}
		.hoja{
			margin: 0 auto;
			width: 730px;
			height: 980px;
			text-align:  justify;
		}
		body {
		    font-family: Arial, sans-serif;
		    }
		table{
			border-collapse: collapse;
		}
		th{
			padding: 3px 10px;
			border: 1px solid black;
		}
		td{
			padding: 3px 10px;
			border: 1px solid black;
		}
		.azul{
			background-color: #1565C0;
			color: #FFF;
		}
		.verde{
			background-color: #80cbc4;
			color: #FFF;
		}
		.amarillo{
			background-color: #ffeb3b;
			color: #FFF;
		}
		.naranja{
			background-color: #ffc107;
			color: #FFF;
		}
		.rojo{
			background-color: #f44336 ;
			color: #FFF;
		}

	</style>
</head>
<body>
<!-- <body onload="window.print();"> -->
	<div class="marcoP">
		<div class="hoja">
			<div style="position: absolute; z-index: -1;">
				<img src="../img/hFondo.svg" style="height: 950px;">
			</div>
			<div>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<div style="padding: 10px; width: 630px; height: 950px; margin: auto;">
				<h4>RESULTADOS</h4>

				<div style="font-size: .93em;">
					<p>Al realizar el análisis de datos, se obtuvieron los siguientes resultados:</p>
					<!-- // COMPRO I	 -->				
					<p>Nivel de riesgo del cuestionario General</p>
					<br>
					<table>
						<tr>
							<th>Cuestionario</th>
							<th class="<?php echo $colorcFinal; ?>">Calificación del cuestionario</th>
							<th class="<?php echo $colorcFinal; ?>">Nivel de riesgo</th>
						</tr>
						<tr>
							<td>Cuestionario <span style="font-size: .8em;">C<i>final</i></span></td>
							<td class="<?php echo $colorcFinal; ?>"><?php echo $cfinal; ?></td>
							<td class="<?php echo $colorcFinal; ?>"><?php echo $nivelcFinal; ?></td>
						</tr>
					</table>
				</div>
				<br>
				<h4>Nivel de riesgo por categoría</h4>

				<div style="font-size: .9em;">
					<!-- // COMPRO II	 -->
					<table>
						<tr>
							<th style="width: 250px;">Calificación de la categoría</th>
							<th style="width: 220px;">Calificación del cuestionario</th>
							<th style="width: 140px;">Nivel de riesgo</th>
						</tr>
						<tr>
							<td>Ambiente de trabajo</td>
							<td class="<?php echo $colorADeTracFinal; ?>"><?php echo $cAmbDeTrabajoF; ?></td>
							<td class="<?php echo $colorADeTracFinal; ?>"><?php echo $nivelADeTracFinal; ?></td>
						</tr>
						<tr>
							<td>Factores propios de la actividad</td>
							<td class="<?php echo $colorcfpTracFinal; ?>"><?php echo $cfPropdeActF; ?></td>
							<td class="<?php echo $colorcfpTracFinal; ?>"><?php echo $nivelcfpTracFinal; ?></td>
						</tr>
						<tr>
							<td>Organización del tiempo de trabajo</td>
							<td class="<?php echo $colororgTFinal; ?>"><?php echo $orgTimptF; ?></td>
							<td class="<?php echo $colororgTFinal; ?>"><?php echo $nivelorgTFinal; ?></td>
						</tr>
						<tr>
							<td>Liderazgo y relaciones en el trabajo</td>
							<td class="<?php echo $colorlidRelFinal; ?>"><?php echo $lidRelCF; ?></td>
							<td class="<?php echo $colorlidRelFinal; ?>"><?php echo $nivelidRelFinal; ?></td>
						</tr>
						<tr>
							<td>Entorno organizacional</td>
							<td class="<?php echo $colorentOrgFinal; ?>"><?php echo $cEntOrgF; ?></td>
							<td class="<?php echo $colorentOrgFinal; ?>"><?php echo $niveentOrgFinal; ?></td>
						</tr>
					</table>
				</div>
				<br>
				<div style="font-size: .9em;">
					<!-- // COMPRO II	 -->
					<h4>Nivel de riesgo por dominio</h4>

					<table>
						<tr>
							<th style="width: 250px;">Resultado del dominio</th>
							<th style="width: 220px;">Calificación del cuestionario</th>
							<th style="width: 140px;">Nivel de riesgo</th>
						</tr>
						<tr>
							<td>Condiciones en el ambiente de trabajo</td>
							<td class="<?php echo $colorCADeTracFinal; ?>"><?php echo $cConAmbDeTrabajoF; ?></td>
							<td class="<?php echo $colorCADeTracFinal; ?>"><?php echo $nivelCADeTracFinal; ?></td>
						</tr>
						<tr>
							<td>Carga de trabajo</td>
							<td class="<?php echo $colorcCarDeTrabFinal; ?>"><?php echo $cCarDeTrabF; ?></td>
							<td class="<?php echo $colorcCarDeTrabFinal; ?>"><?php echo $nivelcCarDeTrabFinal; ?></td>
						</tr>
						<tr>
							<td>Falta de control sobre el trabajo</td>
							<td class="<?php echo $colorfdeContTrabFinal; ?>"><?php echo $cFaltDeContTrabF; ?></td>
							<td class="<?php echo $colorfdeContTrabFinal; ?>"><?php echo $nivelfdeContTrabFinal; ?></td>
						</tr>
						<tr>
							<td>Jornada de trabajo</td>
							<td class="<?php echo $colorjorDeTrabFinal; ?>"><?php echo $jorDeTrabF; ?></td>
							<td class="<?php echo $colorjorDeTrabFinal; ?>"><?php echo $niveljorDeTrabFinal; ?></td>
						</tr>
						<tr>
							<td>Interferencia en la relación trabajo-familia</td>
							<td class="<?php echo $colorinterEnRelFamFinal; ?>"><?php echo $interEnRelFamF; ?></td>
							<td class="<?php echo $colorinterEnRelFamFinal; ?>"><?php echo $nivelinterEnRelFamF; ?></td>
						</tr>
						<tr>
							<td>Liderazgo</td>
							<td class="<?php echo $colorliderazgoFinal; ?>"><?php echo $liderazgoF; ?></td>
							<td class="<?php echo $colorliderazgoFinal; ?>"><?php echo $nivelliderazgoF; ?></td>
						</tr>
						<tr>
							<td>Relaciones en el trabajo</td>
							<td class="<?php echo $colorcFinal; ?>"><?php echo $cfinal; ?></td>
							<td class="<?php echo $colorcFinal; ?>"><?php echo $nivelcFinal; ?></td>
						</tr>
						<tr>
							<td>Violencia</td>
							<td class="<?php echo $colorcFinal; ?>"><?php echo $cfinal; ?></td>
							<td class="<?php echo $colorcFinal; ?>"><?php echo $nivelcFinal; ?></td>
						</tr>
						<tr>
							<td>Reconocimiento del desempeño</td>
							<td class="<?php echo $colorcFinal; ?>"><?php echo $cfinal; ?></td>
							<td class="<?php echo $colorcFinal; ?>"><?php echo $nivelcFinal; ?></td>
						</tr>
						<tr>
							<td>Insuficiente sentido de pertenencia e inestabilidad</td>
							<td class="<?php echo $colorcFinal; ?>"><?php echo $cfinal; ?></td>
							<td class="<?php echo $colorcFinal; ?>"><?php echo $nivelcFinal; ?></td>
						</tr>
					</table>
				</div>
			</div>
			</div>
		</div>
	</div>


</body>
</html>