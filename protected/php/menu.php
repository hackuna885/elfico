<?php 

error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");
date_default_timezone_set('America/Mexico_City');

session_start();

if (isset($_SESSION['usrActivo']) && !empty($_SESSION['usrActivo']) &&
	isset($_SESSION['usrCrypt']) && !empty($_SESSION['usrCrypt'])) {
	$ocultar = '';

	$fechaIniCap = date("d-m-Y");
	$horaIniCap = date("g:i:s a");
	$fechaHoraIni = $fechaIniCap.' '.$horaIniCap;
	$_SESSION['fechaHoraIni'] = $fechaHoraIni;

}else{
	$ocultar = 'style="display: none;"'; // --> recuerda agregar esto en "container"
	echo "<script> window.location='../error/alerta.aspx?error=404';</script>";
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>NOM-035-STPS-2018</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/all.css">
	<link rel="stylesheet" href="../css/animate.css">
	<link rel="stylesheet" href="../css/style.css">

	
</head>
<body>


	 <div class="container-fluid animated fadeIn" <?php echo $ocultar; ?>>
	 	<div class="abs-center">
	 		
		 		<div class="bg-muted p-3" style="width: 800px;">
		 			<div class="row">
		 				<div class="col-md-10 mx-auto text-center jumbotron">
				 			<h1>Factores de riesgo psicosocial</h1>
				 			<h3>NOM-035-STPS-2018</h3>
				 			<!-- <img src="../img/cerebro.svg" class="img-fluid" style="width: 380px;"> -->
				 			<br>
				 			<div>

				 				<div class="accordion" id="menuGuias">
				 					<div class="card">
				 						<div class="card-header">
				 							<h2 class="mb-0">
				 								<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#guia01" aria-expanded="true">
				 									Guía de Referencia I
				 								</button>
				 							</h2>
				 						</div>

				 						<div id="guia01" class="collapse show" data-parent="#menuGuias">
				 							<div class="card-body">
								        		Cuestionario para identificar a los trabajadores que fueron sujetos a acontecimientos traumáticos severos.
								        		<br>
								        		<img src="../img/cuestionario.svg" class="img-fluid">
								        		<div class="mt-3">
								        			<a href="../guia01/diagnostico.aspx" class="btn btn-secondary">Iniciar cuestionario</a>
								        		</div>								        		
								    		</div>
								    	</div>
								    </div>

								    <div class="card">
								    	<div class="card-header">
								    		<h2 class="mb-0">
								    			<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#guia02" aria-expanded="false">
								    				Guía de Referencia II
								    			</button>
								    		</h2>
								    	</div>
								    	<div id="guia02" class="collapse" data-parent="#menuGuias">
								    		<div class="card-body">
								    		 	Cuestionario para identificación y análisis de los factores de riesgo psicosocial.
								    		 	<br>
								    		 	<img src="../img/cuestionario2.svg" class="img-fluid">
								        		<div class="mt-3">
								        			<a href="../guia02/diagnostico.aspx" class="btn btn-secondary">Iniciar cuestionario</a>
								        		</div>	
								    		</div>
								    	</div>
								    </div>

								    <div class="card">
								    	<div class="card-header">
								    		<h2 class="mb-0">
								    			<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#guia03" aria-expanded="false">
								    				Guía de Referencia III
								    			</button>
								    		</h2>
								    	</div>
								    	<div id="guia03" class="collapse" data-parent="#menuGuias">
								    		<div class="card-body">
								    		 	Cuestionario para identificación y análisis de los factores de riesgo psicosocial y evaluación del entorno organizacional en los centros de trabajo.
								    		 	<br>
								    		 	<img src="../img/cuestionario3.svg" class="img-fluid">
								        		<div class="mt-3">
								        			<a href="../guia03/diagnostico.aspx" class="btn btn-secondary">Iniciar cuestionario</a>
								        		</div>	
								    		</div>
								    	</div>
								    </div>

								    <!-- <div class="card">
								    	<div class="card-header">
								    		<h2 class="mb-0">
								    			<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#guia04" aria-expanded="false">
								    				Guía de Referencia IV
								    			</button>
								    		</h2>
								    	</div>
								    	<div id="guia04" class="collapse" data-parent="#menuGuias">
								    		<div class="card-body">
								    		 	Política de prevención de riesgos psicosociales.
								    		</div>
								    	</div>
								    </div> -->

								    <!-- <div class="card">
								    	<div class="card-header">
								    		<h2 class="mb-0">
								    			<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#guia05" aria-expanded="false">
								    				Guía de Referencia V
								    			</button>
								    		</h2>
								    	</div>
								    	<div id="guia05" class="collapse" data-parent="#menuGuias">
								    		<div class="card-body">
								    		 	Datos del trabajador.
								    		</div>
								    	</div>
								    </div> -->

								</div>

							</div>
				 			<br>
				 			<a href="../" class="btn btn-secondary btn-lg form-md-control">Click aquí para regresar</a>
			 			</div>
			 		</div>
			 	</div>
	 	</div>
	 </div>

	<script src="../js/jquery-3.3.1.slim.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/forms.js"></script>

</body>
</html>



