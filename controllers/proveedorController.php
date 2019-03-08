<?php
require './models/proveedorModel.php';
class proveedorController{

	function add(){
		echo "esno";
		if (isset($_POST['generar'])){
			$datos= new proveedor;
			$datos->setNombre($_POST['nombre']);
			if ($result=$datos->add()){
				header('location:'.url_base.'definiciones/proveedor');
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
			$datos= new proveedor;
			$datos->setId($_GET['id']);
			
			if ($result=$datos->remove()){
				header('location:'.url_base.'definiciones/proveedor');
			}
			else{
				var_dump($result);
			}

		}
	}


	function showMod(){
		if (isset($_GET['id'])){
			$datos= new proveedor;
			$datos->setId($_GET['id']);
			$fila=$datos->show();
			include './views/definiciones/modProveedor.php';
		}

	}

	function modify(){

		var_dump($_POST);
		if (isset($_POST['id'])){
			$datos= new proveedor;
			$datos->setId($_POST['id']);
			$datos->setNombre($_POST['nombre']);
			
			if ($result=$datos->edit()){
				header('location:'.url_base.'definiciones/proveedor');
			}
			else{
				var_dump($result);
			}

		}
	}

}
?>