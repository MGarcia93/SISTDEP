<?php
require './models/tipoArticuloModel.php';
class tipoArticuloController{

	function add(){
		echo "esno";
		if (isset($_POST['generar'])){
			$datos= new tipoArticulo;
			$datos->setNombre($_POST['nombre']);
			if ($result=$datos->add()){
				header('location:'.url_base.'definiciones/tipo');
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
			$datos= new tipoArticulo;
			$datos->setId($_GET['id']);
			
			if ($result=$datos->remove()){
				header('location:'.url_base.'definiciones/tipo');
			}
			else{
				var_dump($result);
			}

		}
	}


	function showMod(){
		if (isset($_GET['id'])){
			$datos= new tipoArticulo;
			$datos->setId($_GET['id']);
			$fila=$datos->show();
			include './views/definiciones/modTipo.php';
		}

	}

	function modify(){
		echo $_POST['id'];

		if (isset($_POST['id'])){
			$datos= new tipoArticulo;
			$datos->setId($_POST['id']);
			$datos->setNombre($_POST['nombre']);
			
			if ($result=$datos->edit()){
				header('location:'.url_base.'definiciones/tipo');
			}
			else{
				var_dump($result);
			}

		}
	}

}
?>