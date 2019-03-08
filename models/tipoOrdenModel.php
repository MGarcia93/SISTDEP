<?php 
class tipoOrden extends baseModel{

	private $id;
	private $nombre;
	

	function __construct(){
		parent::__construct('tipos_ordenes');
	}

	function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }


    function setId($id) {
        $this->id = $id;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

}

 ?>