<?php
require './models/articulosModel.php';
require './utils/helpers.php';
require './models/ordenesModel.php';

class generarController{

	function ingreso(){
		if (isset($_POST['cont']) || $_POST['cont']!=0){
			$articulo= new articulo;
			$helpers= new helpers;
			$orden= new ordenes;
			$array=$_POST;
			
			$errores=$helpers->findArticulos($articulo,$array);
			if (count($errores)==0){
				var_dump($errores);
				//include(".views/ordenes/errorCodigo.php");
			}
			else{

				//seteo de orden y guardado
				$numero=$orden->FindLast();
				$numero=$helpers->convertNumero('I',$numero->numero);
				$orden->setNumero($numero);
				$orden->setFechaCreacion(date("Y-m-d"));
				$orden->setFechaUtilizacion($array['fecha']);
				$orden->setEstado('P');
				$orden->setFechaCierre('null');
				$orden->setIdCliente($array['cliente']);
				$orden->setObservacion("");
				$orden->setTipoOrden('I');
				$result=$orden->add();

				//busco el id de la orden que acabo de generar para crear el detalle
				$id=$orden->findBy('numero',$numero);
				$_SESSION['data']=$array;
				header('location:'.url_base.'detalleOrdenes/createIn');
				$detalle->createIn($id->id,$array);
				echo "<script> window.close();<script>";
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
			$fila=$datos->show();
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