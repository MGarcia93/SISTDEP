<?php
require './models/unidadMedModel.php';
class unidadMedController{

	function add(){
		echo "esno";
		if (isset($_POST['generar'])){
			$datos= new unidadMed;
			$datos->setNombre($_POST['nombre']);
			if ($result=$datos->add()){
				header('location:'.url_base.'definiciones/unidadMed');
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
			$datos= new unidadMed;
			$datos->setId($_GET['id']);
			
			if ($result=$datos->remove()){
				header('location:'.url_base.'definiciones/unidadMed');
			}
			else{
				var_dump($result);
			}

		}
	}


	function showMod(){
		if (isset($_GET['id'])){
			$datos= new unidadMed;
			$datos->setId($_GET['id']);
			$fila=$datos->show();
			include './views/definiciones/modUnidadMed.php';
		}

	}

	function modify(){
		echo $_POST['id'];

		if (isset($_POST['id'])){
			$datos= new unidadMed;
			$datos->setId($_POST['id']);
			$datos->setNombre($_POST['nombre']);
			
			if ($result=$datos->edit()){
				header('location:'.url_base.'definiciones/unidadMed');
			}
			else{
				var_dump($result);
			}

		}
	}

}
?>