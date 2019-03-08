<?php 

class ordenesController{

	function generarIngreso(){
		require './models/clienteModel.php';
		$tabla= new cliente;
		$datosClientes=$tabla->findAll();
		include './views/ordenes/generarIngreso.php';
	}

	function generarPedido(){
		include './views/ordenes/generarPedido.php';
	}	

	function entrada(){
		include './views/ordenes/entrada.php';
	}

	function pedido(){
		include './views/ordenes/pedido.php';
	}

	function diferencias(){
		include './views/ordenes/diferencias.php';
	}

}

 ?>