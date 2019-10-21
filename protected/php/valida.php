<?php 

error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");

session_start();

if (isset($_POST['txtUsr']) && !empty($_POST['txtUsr']) &&
	isset($_POST['txtPwd']) && !empty($_POST['txtPwd'])) {

	$correo = '';
	$pass = '';

	$con = new SQLite3("../../protected/data/usuarios.db") or die("Problemas para conectar");
	$cs = $con -> query("SELECT * FROM login WHERE correo = '$_POST[txtUsr]'");



	while ($resul = $cs -> fetchArray()) {

		$numEmp = $resul['numEmp'];
		$empresa = $resul['empresa'];
		$dirEmpresa = $resul['dirEmpresa'];
		$nombre = $resul['nombre'];
		$sexo = $resul['sexo'];
		$correo = $resul['correo'];	
		$usrCrypt = $resul['usrCrypt'];
		$pass = $resul['password'];
		$activo = $resul['usrActivo'];

	}

	$passCrypt = md5($_POST['txtPwd']);


	/*VALIDACIÓN DE USUARIO*/

	if ($_POST['txtUsr'] === $correo) {

		/*VALIDACIÓN DE PASSWORD*/
		
		if ($passCrypt === $pass) {

			/*VALIDACIÓN DE USUARIO ACTIVO*/
			if ($activo === '1') {

				$_SESSION['numEmp'] = $numEmp;
				$_SESSION['empresa'] = $empresa;
				$_SESSION['dirEmpresa'] = $dirEmpresa;
				$_SESSION['nUsrCompleto'] = $nombre;
				$_SESSION['sexo'] = $sexo;
				$_SESSION['correo'] = $correo;
				$_SESSION['usrCrypt'] = $usrCrypt;
				$_SESSION['pass'] = $pass;
				$_SESSION['usrActivo'] = $activo;

				echo "<script> window.location='../menu/guias.aspx';</script>";

				$con -> close();
			}else{
				echo "<script> window.location='../error/alerta.aspx?error=usrNoActivo';</script>";
				$con -> close();
			}

			
			
		}else{
			// ERROR DE PASSWORD
			echo "<script> window.location='../error/alerta.aspx?error=pswNoValido';</script>";
			$con -> close();
		}

	}else{
		// ERROR DE USUARIO
		echo "<script> window.location='../error/alerta.aspx?error=usrNoValido';</script>";
		$con -> close();
	}
	
	
}else{
	// FLATAN CAMPOS
	echo "<script> window.location='../error/alerta.aspx?error=faltanCampos';</script>";
}

 ?>