<?php
require './models/clienteModel.php';
class clienteController {

	function add(){
		if (isset($_POST['generar'])){
			$datos= new cliente;
			$datos->setNombre($_POST['nombre']);
			$datos->setDireccion($_POST['direccion']);
			$datos->setTelefono($_POST['telefono']);
			$datos->setCuit($_POST['cuit']);
			if ($result=$datos->add()){
				header('location:'.url_base.'definiciones/cliente');
				var_dump($result);
			}
			else{
				var_dump($result);
			}

		}
	}

	function delete(){
		echo $_GET['id'];

		if (isset($_GET['id'])){
			$datos= new cliente;
			$datos->setId($_GET['id']);
			
			if ($result=$datos->remove()){
				header('location:'.url_base.'definiciones/cliente');
			}
			else{
				var_dump($result);
			}

		}
	}


	function showMod(){
		if (isset($_GET['id'])){
			$datos= new cliente;
			$datos->setId($_GET['id']);
			$fila=$datos->findById());
			include './views/definiciones/modCliente.php';
		}

	}

	function modify(){
		echo $_POST['id'];

		if (isset($_POST['id'])){
			$datos= new cliente;
			$datos->setId($_POST['id']);
			$datos->setNombre($_POST['nombre']);
			$datos->setDireccion($_POST['direccion']);
			$datos->setTelefono($_POST['telefono']);
			$datos->setCuit($_POST['cuit']);
			
			if ($result=$datos->edit()){
				header('location:'.url_base.'definiciones/cliente');
			}
			else{
				var_dump($result);
			}

		}
	}

}
?>