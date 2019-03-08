<?php 

class ordenes extends baseModel{

	private $id;
	private $numero;
	private $tipoOrden;
	private $fechaCreacion;
	private $fechaUtilizacion;
	private $estado;
	private $fechaCierre;
	private $idCliente;
	private $observacion;
	
	function __construct(){
		parent::__construct('ordenes');
	}

	function getId() {
        return $this->id;
    }
    function getNumero() {
        return $this->numero;
    }

    function getTipoOrden() {
        return $this->tipoOrden;
    }

    function getFechaCreacion() {
        return $this->fechaCreacion;
    }

    function getFechaUtilizacion() {
        return $this->fechaUtilizacion;
    }

    function getEstado() {
        return $this->estado;
    }

    function getFechaCierre() {
        return $this->fechaCierre;
    }

    function getIdCliente() {
        return $this->idCliente;
    }

    function getObservacion() {
        return $this->observacion;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function setTipoOrden($TipoOrden) {
        $this->tipoOrden = $TipoOrden;
    }

    function setFechaCreacion($fechaCreacion) {
        $this->fechaCreacion = $fechaCreacion;
    }

    function setFechaUtilizacion($fechaUtilizacion) {
        $this->fechaUtilizacion = $fechaUtilizacion;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setFechaCierre($fechaCierre) {
        $this->fechaCierre = $fechaCierre;
    }

    function setIdCliente($idCliente) {
        $this->idCliente = $idCliente;
    }

    function setObservacion($observacion) {
        $this->observacion = $observacion;
    }


	function add(){

		$sql="INSERT INTO ordenes(numero,tipoOrden,fechaCreacion,fechaUtilizacion,estado,idCliente,observacion)
			VALUES('{$this->numero}','{$this->tipoOrden}','{$this->fechaCreacion}','{$this->fechaUtilizacion}','{$this->estado}',{$this->idCliente},'{$this->observacion}')";
			$result=false;
			if($querry=$this->db->query($sql)){
				if($this->db->affected_rows==1){
		    		$result=true;
		    	}
			}
			return $result;
	}


	function edit(){

		$sql="UPDATE ordenes
			SET numero={$this->numero},idTipoOrden={$this->tipoOrden},fechaCreacion={$this->fechaCreacion},fechaUtilizacion={$this->fechaUtilizacion},estado={$this->estado},fechaCierre={$this->fechaCierre},idCliente={$this->idCliente},observacion={$this->observacion})
			WHERE id={$this->id}";
			$result=false;
			if($querry=$this->db->query($sql)){
				if($this->db->affected_rows==1){
		    		$result=true;
		    	}
			}
			return $result;
	}



}

 ?>