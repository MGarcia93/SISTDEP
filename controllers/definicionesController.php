<?php
class definicionesController {
	
	function cliente(){
		require './models/clienteModel.php';
		$tabla= new cliente;
		$datos=$tabla->findAll();
		include './views/definiciones/cliente.php';
	}
	function articulo(){
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

		require './models/articulosModel.php';
		$tabla= new articulo;
		$datos=$tabla->findAll();


		include './views/definiciones/articulo.php';
	}
	function posicion(){
		require './models/posicionModel.php';
		$tabla= new posicion;
		$datos=$tabla->findAll();
		include './views/definiciones/posicion.php';
	}
	function proveedor(){
		require './models/proveedorModel.php';
		$tabla= new proveedor;
		$datos=$tabla->findAll();
		
		include './views/definiciones/proveedor.php';
	}
	function unidadMed(){
		require './models/unidadMedModel.php';
		$tabla= new unidadMed;
		$datos=$tabla->findAll();
		include './views/definiciones/unidadMed.php';
	}

	function tipo(){
		require './models/tipoArticuloModel.php';
		$tabla= new tipoArticulo;
		$datos=$tabla->findAll();
		include './views/definiciones/tipo.php';
	}

}