<?php 
class nivelAcceso extends baseModel{

	private $id;
	private $nombre;
	

	function __construct(){
		parent::__construct('niveles_acceso');
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


    function add(){
    	$sql="INSERT INTO niveles_acceso(nombre)
    			VALUES({$this->nombre})";
    	$result=false;
    	if ($query=$this->db->query($sql)) {
    		if ($this->db->affected_rows) {
    			$result=true;
    		}
    	}
    	return $result;
    }

    function edit(){
		$sql="UPDATE niveles_acceso
				SET nombre={$this->nombre}
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