<?php 

class usuario extends baseModel{

	private $id;
	private $idHR;
	private $idRemito;
    private $bultos;

	function __construct(){
		parent::__construct('detalles_hr');
	}

    function getId() {
        return $this->id;
    }

    function getIdHR() {
        return $this->idHR;
    }

    function getIdRemito() {
        return $this->idRemito;
    }

    function getBultos() {
        return $this->bultos;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setIdHR($idHR) {
        $this->idHR = $idHR;
    }

    function setIdRemito($idRemito) {
        $this->idRemito = $idRemito;
    }

    function setBultos($bultos) {
        $this->bultos = $bultos;
    }

    function add(){
    	$sql="INSERT INTO detalles_hr(idHR,idRemito,bultos)
    			VALUES({$this->idHR},{$this->idRemito}),{$this->bultos}";
    	$result=false;
    	if ($query=$this->db->query($sql)) {
    		if ($this->db->affected_rows) {
    			$result=true;
    		}
    	}
    	return $result;
    }

    function edit(){
		$sql="UPDATE detalles_hr
				SET idHR={$this->idHR},idRemito={$this->idRemito},
                    bultos={$bultos}
				WHERE id={$this->id}";
		$result=false;
		if ($query=$this->db->query($sql)) {
			if ($this->db->affected_rows) {
				$result=true;
			}
		}
		return $result;
    }

}

 ?>