<?php 

class posicion  extends baseModel{

    private $id;
	private $pasillo;
	private $columna;
	private $fila;
	private $altura;
    private $contiene;


	function __construct(){

		parent::__construct('posiciones');

	}

    function getId() {
        return $this->id;
    }

	function getPasillo() {
        return $this->pasillo;
    }

    function getColumna() {
        return $this->columna;
    }

    function getFila() {
        return $this->fila;
    }

    function getAltura() {
        return $this->altura;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setPasillo($pasillo) {
        $this->pasillo = $pasillo;
    }

    function setColumna($columna) {
        $this->columna = $columna;
    }

    function setFila($fila) {
        $this->fila = $fila;
    }

    function setAltura($altura) {
        $this->altura = $altura;
    }
    function getContiene() {
            return $this->contiene;
    }

    function setContiene($contiene) {
        $this->contiene = $contiene;
    }

     public function add(){
     	$sql="INSERT INTO posiciones(pasillo,columna,fila,altura,contiene) VALUES('{$this->pasillo}','{$this->columna}','{$this->fila}',{$this->altura},{$this->contiene})";
    	$query=$this->db->query($sql);
    	if($this->db->affected_rows==1){
    		return true;
    	}
    	else
    	{
    		return false;
    	}
    }

    public function remove(){
    	$sql="DELETE FROM posiciones WHERE id={$this->id}";
    	$query=$this->db->query($sql);
    	if($this->db->affected_rows==1){
    		return true;
    	}
    	else
    	{
    		return false;
    	}
    }

    public function edit(){
    	$sql="UPDATE posiciones
    			SET pasillo='{$this->pasillo}',columna='{$this->columna}',fila='{$this->fila}',altura={$this->altura}
    			WHERE id={$this->id}";
        echo $sql;
    	$query=$this->db->query($sql);
    	if($this->db->affected_rows==1){
    		return true;
    	}
    	else
    	{
    		return false;
    	}
    }
    function show(){
		$sql="SELECT * FROM posiciones WHERE id={$this->id}";
		$query=$this->db->query($sql);
		if ($query->num_rows){
			return $query->fetch_object();
		}
		else {
			return false;		}
	}
    public function showAll(){
        $sql="SELECT * FROM posiciones";
        $query=$this->db->query($sql);
        if ($query->num_rows){
            return $query;
        }
        else {
            return false;       
        }
    }


}

 ?>