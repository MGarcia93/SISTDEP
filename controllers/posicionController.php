<?php
require './models/posicionModel.php';
class posicionController{

	function add(){
		var_dump($_POST);
		if (isset($_POST['generar'])){
			$datos= new posicion;
			$datos->setPasillo($_POST['pasillo']);
			$datos->setColumna($_POST['columna']);
			$datos->setFila($_POST['fila']);
			$datos->setAltura($_POST['altura']);
			$datos->setContiene('0');
			if ($result=$datos->add()){
				header('location:'.url_base.'definiciones/posicion');
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
			$datos= new posicion;
			$datos->setId($_GET['id']);
			
			if ($result=$datos->remove()){
				header('location:'.url_base.'definiciones/posicion');
			}
			else{
				var_dump($result);
			}

		}
	}


	function showMod(){
		if (isset($_GET['id'])){
			$datos= new posicion;
			$datos->setId($_GET['id']);
			$fila=$datos->show();
			include './views/definiciones/modPosicion.php';
		}

	}

	function modify(){
		echo var_dump($_POST);

		if (isset($_POST['id'])){
			$datos= new posicion;
			$datos->setId($_POST['id']);
			$datos->setPasillo($_POST['pasillo']);
			$datos->setColumna($_POST['columna']);
			$datos->setFila($_POST['fila']);
			$datos->setAltura($_POST['altura']);
			
			if ($result=$datos->edit()){
				header('location:'.url_base.'definiciones/posicion');
			}
			else{
				var_dump($result);
			}

		}
	}

}
?>