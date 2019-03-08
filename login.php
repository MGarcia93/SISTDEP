<!DOCTYPE html>
<html>
<head>
	<title> Deposito</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/styleLogin.css">

</head>
<body>
	<section>

		<form action="" method="POST">
			<fieldset>
				<p>INGRESO</p>
				<input type="text" name="usuario" placeholder="USURAIO">
				<input type="password" name="pass" placeholder="CONTRASEÑA">
				<input type="submit" name="enviar" value="INICIAR">
			</fieldset>
		</form>
	</section>
	<img src="img/clientes.png" class="clientes">
	<?php
		if(isset($_POST['usuario'])){
			/*require('php/onexion.php');
			$conexion=new clsConexion;
			if ($conexion->iniciar($_POST['usuario'],$_POST['pass'])){
				if (isset($_COOKIE["anterior"])){
					$destino=$_COOKIE["anterior"];
					unset($_COOKIE["anterior"]);
					header("location:".$destino);
				}
				else
				header("location:index.php");
			}
			else
			{
				echo "<p>CONTRASEÑA O USARION INCORRECTO</p>";
			}*/
			session_start();
			$_SESSION["usuario"]="admin";
			header("location:index.php");
		}
	?>
</body>
</html>