<?php 

require_once'./models/detalleOrdenModel.php';
require_once'./models/articulosModel.php';
class detalleOrdenesController
{
	function createIn($idOrden,$data){

		$detalle=new detalleOrden;
		$articulo= new articulo;
		$detalle->setIdPosition(-1);
		$detalle->setIdtipoSacado(-1);
		for ($i=0; $i < $data['cantidad'] ; $i++) { 
			if ($i==0){
				$codigo=$articulo->findBy('codigo',$data['codigo'])->id;
				$detalle->setIdArticulo($codigo);
				$detalle->setIdOrden($idOrden);
				$detalle->setCantidad($data['cantidad']);
			}
			else{
				$codigo=$articulo->findBy('codigo',$data['codigo'.$i])->id;
				$detalle->setIdArticulo($codigo);
				$detalle->setIdOrden($idOrden);
				$detalle->setCantidad($data['cantidad'.$i]);
			}
			$detalle->add();
		}
	}
}



 ?>