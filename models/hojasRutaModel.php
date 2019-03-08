<?php 

class hojaRuta extends baseModel{

	private $id;
	private $numero;
	private $fechaCreacion;
    private $fechaSalida;

	function __construct(){
		parent::__construct('hojas_rutas');
	}

    function getId() {
        return $this->id;
    }

    function getNumero() {
        return $this->numero;
    }

    function getFechaCreacion() {
        return $this->fechaCreacion;
    }

    function getFechaSalida() {
        return $this->fechaSalida;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function setFechaCreacion($fechaCreacion) {
        $this->fechaCreacion = $fechaCreacion;
    }

    function setFechaSalida($fechaSalida) {
        $this->fechaSalida = $fechaSalida;
    }

    function add(){
    	$sql="INSERT INTO hojas_rutas(numero,fechaCreacion,fechaSalida)
    			VALUES({$this->numero},{$this->fechaCreacion}),{$this->fechaSalida}";
    	$result=false;
    	if ($query=$this->db->query($sql)) {
    		if ($this->db->affected_rows) {
    			$result=true;
    		}
    	}
    	return $result;
    }

    function edit(){
		$sql="UPDATE hojas_rutas
				SET numero={$this->numero},fechaCreacion={$this->fechaCreacion},
                    fechaSalida={$fechaSalida}
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