<?php 

error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");

session_start();
session_destroy();

 ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/all.css">
	<link rel="stylesheet" href="css/animate.css">
	<title>Inicio ELFICO</title>
	<style>

  body{
    background: url(img/ideaCorsec-01.jpg) no-repeat center center fixed; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
  }
	.input-group-text{
		background-color: rgba(255,255,255,0.1);
		color: #FFF;
	}
	input[type="email"]::-webkit-input-placeholder {
		color: #fff;
	}
	input[type="password"]::-webkit-input-placeholder {
		color: #fff;
	}
	</style>
</head>
<body>



				
<div class="container animated fadeIn">
  <div class="abs-center">

    <form action="valida/usuarios.aspx" method="POST" class="text-light rounded p-4 form my-3" style="background-color: rgba(130,195,65,0.5);">
		
		<div class="text-center my-3">
    	<img class="img-fluid p-2" src="img/logo_element_elfico.svg" alt="LOGO CORSEC">
    	</div>

      <div class="form-group mb-3">
      	<label for="email">Correo:</label>
      	<div class="input-group input-group-lg mb-3">
      		<div class="input-group-prepend">
      			<div class="input-group-text bg-transparent">
      				<i class="fas fa-envelope"></i>
      			</div>
      		</div>
      		<input type="email" name="txtUsr" class="text-light form-control bg-transparent" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" id="email" placeholder="Correo Electrónico" required/>
      	</div>

        
      </div>
      <div class="form-group mb-3">

      	<label for="password">Contraseña:</label>
        <div class="input-group input-group-lg mb-3">
        	<div class="input-group-prepend">
        		<div class="input-group-text bg-transparent">
        			<i class="fas fa-unlock"></i>
        		</div>
        	</div>
        	<input type="password" name="txtPwd" class="text-light form-control bg-transparent" id="inlineFormInputGroup" placeholder="Contraseña" minlength="3" required />
        </div>
      </div>

      <div class="text-right py-2">
      	<input type="submit" class="btn btn-outline-light btn-lg" value="Continuar" />
  	  </div>

  	  <div class="form-group">
  	  	<div class="text-center py-3">------- ¿Eres nuevo? -------</div>
  	  	<a href="empleado/numEmpleado.aspx" class="btn btn-outline-light btn-lg form-control">Regístrate aquí</a>
  	  </div>

    </form>
  </div>
</div>



	<script src="js/jquery-3.3.1.slim.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>