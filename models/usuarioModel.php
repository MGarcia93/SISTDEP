<?php 

class usuario extends baseModel{

	private $id;
	private $nombre;
	private $idNivel;

	function __construct(){
		parent::__construct('usuarios');
	}

	function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getIdNivel() {
        return $this->idNivel;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setIdNivel($idNivel) {
        $this->idNivel = $idNivel;
    }

    function add(){
    	$sql="INSERT INTO usuarios(nombre,idNivel)
    			VALUES({$this->nombre},{$this->idNivel})";
    	$result=false;
    	if ($query=$this->db->query($sql)) {
    		if ($this->db->affected_rows) {
    			$result=true;
    		}
    	}
    	return $result;
    }

    function edit(){
		$sql="UPDATE usuarios
				SET nombre={$this->nombre},idNivel={$this->idNivel}
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