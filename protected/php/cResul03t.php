<?php 

	$conDos = new SQLite3("../data/cuestionarios.db") or die("Problemas para conectar!");

	$cs = $conDos -> query("SELECT SUM(p1_R3a+p2_R3a+p3_R3a+p4_R3a+p5_R3a) AS conAmbDeTrabajo, SUM(p6_R3a+p7_R3a+p8_R3a+p9_R3a+p10_R3a+p11_R3a+p12_R3a+p13_R3a+p14_R3a+p15_R3a+p16_R3a+p65_R3a+p66_R3a+p67_R3a+p68_R3a) AS cargaDeTrabajo, SUM(p23_R3a+p24_R3a+p25_R3a+p26_R3a+p27_R3a+p28_R3a+p29_R3a+p30_R3a+p35_R3a+p36_R3a) AS faltDeContTrab, SUM(p17_R3a+p18_R3a) AS jorDeTrab, SUM(p19_R3a+p20_R3a+p21_R3a+p22_R3a) AS interEnRelFam, SUM(p31_R3a+p32_R3a+p33_R3a+p34_R3a+p37_R3a+p38_R3a+p39_R3a+p40_R3a+p41_R3a) AS liderazgo, COUNT(correoCrypt_R3a) AS CPersonas FROM nom035R3a");

	while ($nivelDeRiezgo = $cs->fetchArray()) {

		$conAmbDeTrabajoCFinal=$nivelDeRiezgo['conAmbDeTrabajo'];
		$cargaDeTrabajoCFinal=$nivelDeRiezgo['cargaDeTrabajo'];
		$faltDeContTrabFinal=$nivelDeRiezgo['faltDeContTrab'];
		$jorDeTrabFinal=$nivelDeRiezgo['jorDeTrab'];
		$interEnRelFamFinal=$nivelDeRiezgo['interEnRelFam'];
		$liderazgoFinal=$nivelDeRiezgo['liderazgo'];

		$CPersonasCFinal=$nivelDeRiezgo['CPersonas'];

	}
	//CALCULO CFINAL
	$cConAmbDeTrabajoF = $conAmbDeTrabajoCFinal/$CPersonasCFinal;
	$cCarDeTrabF = $cargaDeTrabajoCFinal/$CPersonasCFinal;
	$cFaltDeContTrabF = $faltDeContTrabFinal/$CPersonasCFinal;
	$jorDeTrabF = $jorDeTrabFinal/$CPersonasCFinal;
	$interEnRelFamF = $interEnRelFamFinal/$CPersonasCFinal;
	$liderazgoF = $liderazgoFinal/$CPersonasCFinal;

	//EL RESULTADO DE cConAmbDeTrabajoF

	switch ($cConAmbDeTrabajoF) {
		case $cConAmbDeTrabajoF < 5:
			$nivelCADeTracFinal = 'Nulo o despreciable';
			$colorCADeTracFinal = 'azul';
			break;
		case $cConAmbDeTrabajoF >= 5 && $cConAmbDeTrabajoF < 9:
			$nivelCADeTracFinal = 'Bajo';
			$colorCADeTracFinal = 'verde';
			break;
		case $cConAmbDeTrabajoF >= 9 && $cConAmbDeTrabajoF < 11:
			$nivelCADeTracFinal = 'Medio';
			$colorCADeTracFinal = 'amarillo';
			break;
		case $cConAmbDeTrabajoF >= 11 && $cConAmbDeTrabajoF < 14:
			$nivelCADeTracFinal = 'Alto';
			$colorCADeTracFinal = 'naranja';
			break;
			case $cConAmbDeTrabajoF >= 14:
			$nivelCADeTracFinal = 'Muy alto';
			$colorCADeTracFinal = 'rojo';
			break;
		
		default:
			$nivelCADeTracFinal = 'No puede ser medido';
			$colorCADeTracFinal = '';
			break;
	}

	//EL RESULTADO DE cCarDeTrabF

	switch ($cCarDeTrabF) {
		case $cCarDeTrabF < 15:
			$nivelcCarDeTrabFinal = 'Nulo o despreciable';
			$colorcCarDeTrabFinal = 'azul';
			break;
		case $cCarDeTrabF >= 15 && $cCarDeTrabF < 21:
			$nivelcCarDeTrabFinal = 'Bajo';
			$colorcCarDeTrabFinal = 'verde';
			break;
		case $cCarDeTrabF >= 21 && $cCarDeTrabF < 27:
			$nivelcCarDeTrabFinal = 'Medio';
			$colorcCarDeTrabFinal = 'amarillo';
			break;
		case $cCarDeTrabF >= 27 && $cCarDeTrabF < 37:
			$nivelcCarDeTrabFinal = 'Alto';
			$colorcCarDeTrabFinal = 'naranja';
			break;
			case $cCarDeTrabF >= 37:
			$nivelcCarDeTrabFinal = 'Muy alto';
			$colorcCarDeTrabFinal = 'rojo';
			break;
		
		default:
			$nivelcCarDeTrabFinal = 'No puede ser medido';
			$colorcCarDeTrabFinal = '';
			break;
	}

	//EL RESULTADO DE cFaltDeContTrabF

	switch ($cFaltDeContTrabF) {
		case $cFaltDeContTrabF < 11:
			$nivelfdeContTrabFinal = 'Nulo o despreciable';
			$colorfdeContTrabFinal = 'azul';
			break;
		case $cFaltDeContTrabF >= 11 && $cFaltDeContTrabF < 16:
			$nivelfdeContTrabFinal = 'Bajo';
			$colorfdeContTrabFinal = 'verde';
			break;
		case $cFaltDeContTrabF >= 16 && $cFaltDeContTrabF < 21:
			$nivelfdeContTrabFinal = 'Medio';
			$colorfdeContTrabFinal = 'amarillo';
			break;
		case $cFaltDeContTrabF >= 21 && $cFaltDeContTrabF < 25:
			$nivelfdeContTrabFinal = 'Alto';
			$colorfdeContTrabFinal = 'naranja';
			break;
			case $cFaltDeContTrabF >= 25:
			$nivelfdeContTrabFinal = 'Muy alto';
			$colorfdeContTrabFinal = 'rojo';
			break;
		
		default:
			$nivelfdeContTrabFinal = 'No puede ser medido';
			$colorfdeContTrabFinal = '';
			break;
	}

	//EL RESULTADO DE jorDeTrabF

	switch ($jorDeTrabF) {
		case $jorDeTrabF < 1:
			$niveljorDeTrabFinal = 'Nulo o despreciable';
			$colorjorDeTrabFinal = 'azul';
			break;
		case $jorDeTrabF >= 1 && $jorDeTrabF < 2:
			$niveljorDeTrabFinal = 'Bajo';
			$colorjorDeTrabFinal = 'verde';
			break;
		case $jorDeTrabF >= 2 && $jorDeTrabF < 4:
			$niveljorDeTrabFinal = 'Medio';
			$colorjorDeTrabFinal = 'amarillo';
			break;
		case $jorDeTrabF >= 4 && $jorDeTrabF < 6:
			$niveljorDeTrabFinal = 'Alto';
			$colorjorDeTrabFinal = 'naranja';
			break;
			case $jorDeTrabF >= 6:
			$niveljorDeTrabFinal = 'Muy alto';
			$colorjorDeTrabFinal = 'rojo';
			break;
		
		default:
			$niveljorDeTrabFinal = 'No puede ser medido';
			$colorjorDeTrabFinal = '';
			break;
	}

	//EL RESULTADO DE interEnRelFamF

	switch ($interEnRelFamF) {
		case $interEnRelFamF < 14:
			$nivelinterEnRelFamF = 'Nulo o despreciable';
			$colorinterEnRelFamFinal = 'azul';
			break;
		case $interEnRelFamF >= 14 && $interEnRelFamF < 29:
			$nivelinterEnRelFamF = 'Bajo';
			$colorinterEnRelFamFinal = 'verde';
			break;
		case $interEnRelFamF >= 29 && $interEnRelFamF < 42:
			$nivelinterEnRelFamF = 'Medio';
			$colorinterEnRelFamFinal = 'amarillo';
			break;
		case $interEnRelFamF >= 42 && $interEnRelFamF < 58:
			$nivelinterEnRelFamF = 'Alto';
			$colorinterEnRelFamFinal = 'naranja';
			break;
			case $interEnRelFamF >= 58:
			$nivelinterEnRelFamF = 'Muy alto';
			$colorinterEnRelFamFinal = 'rojo';
			break;
		
		default:
			$nivelinterEnRelFamF = 'No puede ser medido';
			$colorinterEnRelFamFinal = '';
			break;
	}

	//EL RESULTADO DE liderazgoF

	switch ($liderazgoF) {
		case $liderazgoF < 9:
			$nivelliderazgoF = 'Nulo o despreciable';
			$colorliderazgoFinal = 'azul';
			break;
		case $liderazgoF >= 9 && $liderazgoF < 12:
			$nivelliderazgoF = 'Bajo';
			$colorliderazgoFinal = 'verde';
			break;
		case $liderazgoF >= 12 && $liderazgoF < 16:
			$nivelliderazgoF = 'Medio';
			$colorliderazgoFinal = 'amarillo';
			break;
		case $liderazgoF >= 16 && $liderazgoF < 20:
			$nivelliderazgoF = 'Alto';
			$colorliderazgoFinal = 'naranja';
			break;
			case $liderazgoF >= 20:
			$nivelliderazgoF = 'Muy alto';
			$colorliderazgoFinal = 'rojo';
			break;
		
		default:
			$nivelliderazgoF = 'No puede ser medido';
			$colorliderazgoFinal = '';
			break;
	}


	$conDos -> close();


 ?>