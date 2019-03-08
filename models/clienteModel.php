<?php 

class cliente extends baseModel{

	private $id;
	private $nombre;
	private $direccion;
	private $telefono;
	private $cuit;
	

	function __construct(){

		parent::__construct('clientes');

	}

	function getId() {
            return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getCuit() {
        return $this->cuit;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    function setCuit($cuit) {
        $this->cuit = $cuit;
    }
    function getdb(){
        return $this->db;
    }


    public function add(){

    	$query=$this->db->query("INSERT INTO clientes(nombre,direccion,telefono,cuit) VALUES('{$this->nombre}','{$this->direccion}','{$this->telefono}','{$this->cuit}')");
        var_dump($query);
    	if($this->db->affected_rows==1){
    		return true;
    	}
    	else
    	{
    		return false;
    	}
    }


    public function edit(){

    	$query=$this->db->query("UPDATE clientes
    						SET nombre='{$this->nombre}',direccion='{$this->direccion}',telefono='{$this->telefono}',cuit='{$this->cuit}'
    						WHERE id={$this->id}");
    	if($this->db->affected_rows==1){
    		return true;
    	}
    	else
    	{
    		return false;
    	}
    }
   



}

 ?>