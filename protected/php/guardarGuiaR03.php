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

	$busCorreo = $con -> query("SELECT correoCrypt_R3a FROM nom035R3a WHERE correoCrypt_R3a = '$_SESSION[usrCrypt]'");

	while ($correoX = $busCorreo->fetchArray()) {
		$resBus = $correoX['correoCrypt_R3a'];
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

	$cs = $con -> query("INSERT INTO nom035R3a (p1_R3a,p2_R3a,p3_R3a,p4_R3a,p5_R3a,p6_R3a,p7_R3a,p8_R3a,p9_R3a,p10_R3a,p11_R3a,p12_R3a,p13_R3a,p14_R3a,p15_R3a,p16_R3a,p17_R3a,p18_R3a,p19_R3a,p20_R3a,p21_R3a,p22_R3a,p23_R3a,p24_R3a,p25_R3a,p26_R3a,p27_R3a,p28_R3a,p29_R3a,p30_R3a,p31_R3a,p32_R3a,p33_R3a,p34_R3a,p35_R3a,p36_R3a,p37_R3a,p38_R3a,p39_R3a,p40_R3a,p41_R3a,p42_R3a,p43_R3a,p44_R3a,p45_R3a,p46_R3a,p47_R3a,p48_R3a,p49_R3a,p50_R3a,p51_R3a,p52_R3a,p53_R3a,p54_R3a,p55_R3a,p56_R3a,p57_R3a,p58_R3a,p59_R3a,p60_R3a,p61_R3a,p62_R3a,p63_R3a,p64_R3a,p65_R3a,p66_R3a,p67_R3a,p68_R3a,p69_R3a,p70_R3a,p71_R3a,p72_R3a,empresa_R3a,dirEmpresa_R3a,correo_R3a,correoCrypt_R3a,usrSexo_R3a,usrNombre_R3a) VALUES ('$_POST[opt1]','$_POST[opt2]','$_POST[opt3]','$_POST[opt4]','$_POST[opt5]','$_POST[opt6]','$_POST[opt7]','$_POST[opt8]','$_POST[opt9]','$_POST[opt10]','$_POST[opt11]','$_POST[opt12]','$_POST[opt13]','$_POST[opt14]','$_POST[opt15]','$_POST[opt16]','$_POST[opt17]','$_POST[opt18]','$_POST[opt19]','$_POST[opt20]','$_POST[opt21]','$_POST[opt22]','$_POST[opt23]','$_POST[opt24]','$_POST[opt25]','$_POST[opt26]','$_POST[opt27]','$_POST[opt28]','$_POST[opt29]','$_POST[opt30]','$_POST[opt31]','$_POST[opt32]','$_POST[opt33]','$_POST[opt34]','$_POST[opt35]','$_POST[opt36]','$_POST[opt37]','$_POST[opt38]','$_POST[opt39]','$_POST[opt40]','$_POST[opt41]','$_POST[opt42]','$_POST[opt43]','$_POST[opt44]','$_POST[opt45]','$_POST[opt46]','$_POST[opt47]','$_POST[opt48]','$_POST[opt49]','$_POST[opt50]','$_POST[opt51]','$_POST[opt52]','$_POST[opt53]','$_POST[opt54]','$_POST[opt55]','$_POST[opt56]','$_POST[opt57]','$_POST[opt58]','$_POST[opt59]','$_POST[opt60]','$_POST[opt61]','$_POST[opt62]','$_POST[opt63]','$_POST[opt64]','$_POST[opt65]','$_POST[opt66]','$_POST[opt67]','$_POST[opt68]','$_POST[opt69]','$_POST[opt70]','$_POST[opt71]','$_POST[opt72]','$_SESSION[empresa]','$_SESSION[dirEmpresa]','$_SESSION[correo]','$_SESSION[usrCrypt]','$_SESSION[sexo]','$_SESSION[nUsrCompleto]')");
		

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