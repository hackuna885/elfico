<?php 

error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");
include 'info.php';

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require 'phpMailer/Exception.php';
	require 'phpMailer/PHPMailer.php';
	require 'phpMailer/SMTP.php';

############### Inicia Compro de Campos ###############

if (isset($_POST['txtNumEmp']) && !empty($_POST['txtNumEmp']) &&
	isset($_POST['txtNombre']) && !empty($_POST['txtNombre']) &&
	isset($_POST['txtEmpresa']) && !empty($_POST['txtEmpresa']) &&	
	isset($_POST['optSexo']) && !empty($_POST['optSexo']) &&
	isset($_POST['txtTelefono']) && !empty($_POST['txtTelefono']) &&
	isset($_POST['txtCorreo']) && !empty($_POST['txtCorreo']) &&
	isset($_POST['txtPassword']) && !empty($_POST['txtPassword'])) {

	$varNavega = $info["browser"];	
	$varVersio = $info["version"];
	$varSitemaO = $info["os"];
	$fechaCap = date("d-m-Y");
	$horaCap = date("g:i:s a");
	$fechaHora = $fechaCap.' '.$horaCap;

	############### Inicia Variables ###############

	$resBus = "";

	############### Termina Variables ###############

	############### Inicia Convertidor de Variables a Mayusculas ###############

	$nombre = mb_strtoupper($_POST['txtNombre'], 'UTF-8');
	$dirEmpresaVar = mb_strtoupper($_POST['txtEmpresa'], 'UTF-8');


	############### Termina Convertidor de Variables a Mayusculas ###############

	############### Inicia Encritación de Password y Correo ###############
	$pwCode = md5($_POST['txtPassword']);
	$correoCode = md5($_POST['txtCorreo']);
	
	############### Inicia Encritación de Password y Correo ###############


	############### Inicia Consulta a CORREO Existente ###############
	$con = new SQLite3("../data/usuarios.db") or die("Problemas para conectar!");

	$busCorreo = $con -> query("SELECT correo FROM login WHERE correo = '$_POST[txtCorreo]'");

	while ($correoX = $busCorreo->fetchArray()) {
		$resBus = $correoX['correo'];
	}
	############### Termina Consulta a CORREO Existente ###############

	############### Inicia Comprobación de si existe correo ###############
	if ($resBus == $_POST['txtCorreo']) {

		############### Inicia Si si existe ###############
		// echo "<script> alert('Error este Correo ya existe!');</script>";
		echo "<script> window.location='../../error/alerta.aspx?error=correoRegistrado&idCorreo=".$resBus."';</script>";
		############### Termina Si si existe ###############

		############### Cierra conexion ###############
		$con -> close();
		############### Cierra conexion ###############
		
	}else{

		############### Inicia Si no existe ###############

	$cs = $con -> query("INSERT INTO login (numEmp,empresa,dirEmpresa,nombre,sexo,telefono,correo,usrCrypt,usrActivo,password,passDecrypt,usrSO,usrNavega,usrVerSO,usrGPS,usrFechaHoraReg) VALUES ('$_POST[txtNumEmp]','ELFICO','$dirEmpresaVar','$nombre','$_POST[optSexo]','$_POST[txtTelefono]','$_POST[txtCorreo]','$correoCode',1,'$pwCode','$_POST[txtPassword]','$varSitemaO','$varNavega','$varVersio','$_POST[txtGeoRef]','$fechaHora')");
		

	############### Cierra conexion ###############
	$con -> close();
	############### Cierra conexion ###############


	############### Envia Correo de Confirmación ###############

	echo '<div style="display: none;">';


	$mail = new PHPMailer(true);

	try {
	    //Server settings
	    $mail->SMTPDebug = 2;
	    $mail->CharSet = 'UTF-8';

	    $mail->isSMTP();

	    $mail->Host       = 'smtp.uservers.net';  // Specify main and backup SMTP servers
	    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
	    $mail->Username   = 'confirmacion@corsec.com.mx';                     // SMTP username
	    $mail->Password   = '@Confirma123#Correo';                               // SMTP password
	    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
	    $mail->Port       = 587;                                    // TCP port to connect to

	    //PARA PHP 5.6 Y POSTERIOR
	    $mail->SMTPOptions = array( 'ssl' => array( 'verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true ) );

	    //Recipients
	    $mail->setFrom('confirmacion@corsec.com.mx', 'CORSEC - Activación de usuario');
	    // $mail->addAddress($correoLista);
	    $mail->addAddress($_POST['txtCorreo']);
	    // $mail->addBCC('oliver.velazquez@corsec.com.mx');
	    // $mail->addBCC('fpolom@corsec.com.mx');
	    // $mail->addAttachment('firmaCORSEC.png');

	    // Content
	    $mail->isHTML(true);                                  // Set email format to HTML
	    $mail->Subject = 'Correo electrónico de confirmación';
	    $mail->Body    = '
	<div style="line-height: 150px; text-align: center">
	<div style="line-height: 1; display: inline-block; vertical-align: middle; text-align: left; padding: 10px; font-family: Arial, Helvetica, sans-serif; text-align : justify; color: #626265; max-width: 550px; min-width: 320px;">
	<h3>Estimado(a): '.$nombre.'</h3>


	<b>¡Completa tu Registro!</b>

	<p>Para activar tu usuario, deberás dar click en el siguiente link:</p>

	<br>
	<a href="http://www.corsec.com.mx/elfico/activacion/usuario.php?idUsuario='.$correoCode.'">http://www.corsec.com.mx/elfico/activacion/usuario.php?idUsuario='.$correoCode.'</a>
	<br>
	<br>
	<p>Recuerda tus datos</p>
	<p>Usuario: '.$_POST['txtCorreo'].'</p>
	<p>Contraseña: '.$_POST['txtPassword'].'</p>
	<a href="http://www.corsec.com.mx/elfico">http://www.corsec.com.mx/elfico</a>
	<br>

	<p>Busca en tu bandeja de entrada <b>confirmacion@corsec.com.mx</b> el correo electrónico de confirmación y haz clic en el enlace para activar tu correo.</p>
	<p>Si no has recibido un correo electrónico de confirmación, por favor revisa tu carpeta de spam o solicita otro correo electrónico.</p>

	<p>¿No tuviste suerte? Comunícate a Asistencia al cliente.</p>
	<p>Tel:56-14-21-33-22</p>

	<br>
	<br>

	</div>
	</div>

	    ';

	    $mail->send();
	    echo 'Message COOL! todo bien!';
	} catch (Exception $e) {
	    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}

	echo '</div>';
############### Envia Correo de Confirmación ###############





	
	echo "<script> window.location='../../mail/confirmacion.aspx';</script>";
	}

	############### Termina Si no existe ###############
	############### Termina Comprobación de si existe correo ###############
}else{
	// NO PUEDES VER ESTA PAGINA
	echo "<script> window.location='../../error/alerta.aspx?error=404';</script>";
}

############### Termina Compro de Campos ###############

 ?>