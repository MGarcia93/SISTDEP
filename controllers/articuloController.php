<?php
require './models/articulosModel.php';
class articuloController{

	function add(){
		echo "esno";
		if (isset($_POST['generar'])){
			$datos= new articulo;
			$datos->setCodigo($_POST['codigo']);
			$datos->setDescripcion($_POST['descripcion']);
			$datos->setIdCliente($_POST['cliente']);
			$datos->setIdUndMed($_POST['unidad']);
			$datos->setIdTipo($_POST['tipo']);
			if ($result=$datos->add()){
				header('location:'.url_base.'definiciones/articulo');
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
			$datos= new articulo;
			$datos->setId($_GET['id']);
			
			if ($result=$datos->remove()){
				header('location:'.url_base.'definiciones/articulo');
			}
			else{
				var_dump($result);
			}

		}
	}


	function showMod(){
		if (isset($_GET['id'])){
			/* Datos necesarios para los campos de articulos*/
			require './models/clienteModel.php';
			$tabla= new cliente;
			$datosClientes=$tabla->findAll();
			require './models/unidadMedModel.php';
			$tabla= new unidadMed;
			$datosUnidades=$tabla->findAll();
			require './models/tipoArticuloModel.php';
			$tabla= new tipoArticulo;
			$datosTipos=$tabla->findAll();
			/*fin de datos necesarios*/
			$datos= new articulo;
			$fila=$datos->findBy('id',$_GET['id']);
			include './views/definiciones/modArticulo.php';
		}

	}

	function modify(){

		if (isset($_POST['id'])){
			$datos= new articulo;
			$datos->setId($_POST['id']);
			$datos->setCodigo($_POST['codigo']);
			$datos->setDescripcion($_POST['descripcion']);
			$datos->setIdCliente($_POST['cliente']);
			$datos->setIdUndMed($_POST['unidad']);
			$datos->setIdTipo($_POST['tipo']);
			 var_dump($datos);
			if ($result=$datos->edit()){
				header('location:'.url_base.'definiciones/articulo');
			}
			else{
				var_dump($result);
			}

		}
	}

}
?>