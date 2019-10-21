<?php 

error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");

session_start();

############### Inicia Compro de Campos ###############

if (isset($_SESSION['usrCrypt']) && !empty($_SESSION['usrCrypt']) &&
	isset($_SESSION['usrActivo']) && !empty($_SESSION['usrActivo'])) {


	$resBus = '';


	############### Inicia Consulta a CORREO Existente ###############
	$con = new SQLite3("../data/cuestionarios.db") or die("Problemas para conectar!");

	$busCorreo = $con -> query("SELECT correoCrypt_R2a FROM nom035R2a WHERE correoCrypt_R2a = '$_SESSION[usrCrypt]'");

	while ($correoX = $busCorreo->fetchArray()) {
		$resBus = $correoX['correoCrypt_R2a'];
	}
	############### Termina Consulta a CORREO Existente ###############

	############### Inicia Comprobación de si existe correo ###############
	if ($resBus == $_SESSION['usrCrypt']) {

		############### Inicia Si si existe Registro ###############
		// echo "<script> alert('Error este Correo ya existe!');</script>";

		echo "<script> window.location='../error/alerta.aspx?error=correoR01&idCorreo=".$_SESSION['correo']."';</script>";

		############### Termina Si si existe Registro ###############

		############### Cierra conexion ###############
		$con -> close();
		############### Cierra conexion ###############
		
	}else{


		############### Inicia Si no existe Registro ###############

	$cs = $con -> query("INSERT INTO nom035R2a (p1_R2a,p2_R2a,p3_R2a,p4_R2a,p5_R2a,p6_R2a,p7_R2a,p8_R2a,p9_R2a,p10_R2a,p11_R2a,p12_R2a,p13_R2a,p14_R2a,p15_R2a,p16_R2a,p17_R2a,p18_R2a,p19_R2a,p20_R2a,p21_R2a,p22_R2a,p23_R2a,p24_R2a,p25_R2a,p26_R2a,p27_R2a,p28_R2a,p29_R2a,p30_R2a,p31_R2a,p32_R2a,p33_R2a,p34_R2a,p35_R2a,p36_R2a,p37_R2a,p38_R2a,p39_R2a,p40_R2a,p41_R2a,p42_R2a,p43_R2a,p44_R2a,p45_R2a,p46_R2a,empresa_R2a,dirEmpresa_R2a,correo_R2a,correoCrypt_R2a,usrSexo_R2a,usrNombre_R2a) VALUES ('$_POST[opt1]','$_POST[opt2]','$_POST[opt3]','$_POST[opt4]','$_POST[opt5]','$_POST[opt6]','$_POST[opt7]','$_POST[opt8]','$_POST[opt9]','$_POST[opt10]','$_POST[opt11]','$_POST[opt12]','$_POST[opt13]','$_POST[opt14]','$_POST[opt15]','$_POST[opt16]','$_POST[opt17]','$_POST[opt18]','$_POST[opt19]','$_POST[opt20]','$_POST[opt21]','$_POST[opt22]','$_POST[opt23]','$_POST[opt24]','$_POST[opt25]','$_POST[opt26]','$_POST[opt27]','$_POST[opt28]','$_POST[opt29]','$_POST[opt30]','$_POST[opt31]','$_POST[opt32]','$_POST[opt33]','$_POST[opt34]','$_POST[opt35]','$_POST[opt36]','$_POST[opt37]','$_POST[opt38]','$_POST[opt39]','$_POST[opt40]','$_POST[opt41]','$_POST[opt42]','$_POST[opt43]','$_POST[opt44]','$_POST[opt45]','$_POST[opt46]','$_SESSION[empresa]','$_SESSION[dirEmpresa]','$_SESSION[correo]','$_SESSION[usrCrypt]','$_SESSION[sexo]','$_SESSION[nUsrCompleto]')");
		

	############### Cierra conexion ###############
	$con -> close();
	############### Cierra conexion ###############


		
	echo "<script> window.location='../completado/confirmacion.aspx';</script>";



	}

	############### Termina Si no existe Registro ###############
	############### Termina Comprobación de si existe correo ###############
}else{
	// NO PUEDES VER ESTA PAGINA
	echo "<script> window.location='../error/alerta.aspx?error=404';</script>";
}

############### Termina Compro de Campos ###############

 ?>