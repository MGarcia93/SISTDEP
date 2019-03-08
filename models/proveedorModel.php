<?php 
	
class proveedor  extends baseModel{

	private $id;
	private $nombre;
	function __construct(){

		parent::__construct('proveedores');

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


    public function add(){

    	$query=$this->db->query("INSERT INTO proveedores(nombre) VALUES('{$this->nombre}')");
    	if($this->db->affected_rows==1){
    		return true;
    	}
    	else
    	{
    		return false;
    	}
    }

    public function remove(){

    	$query=$this->db->query("DELETE FROM proveedores WHERE id={$this->id}");
    	if($this->db->affected_rows==1){
    		return true;
    	}
    	else
    	{
    		return false;
    	}
    }

    public function edit(){

    	$query=$this->db->query("UPDATE proveedores
    						SET nombre='{$this->nombre}'
    						WHERE id={$this->id}");
    	if($this->db->affected_rows==1){
    		return true;
    	}
    	else
    	{
    		return false;
    	}
    }
   
    function show(){
        $sql="SELECT * FROM proveedores WHERE id={$this->id}";
		$query=$this->db->query($sql);
		if ($query->num_rows){
			return $query->fetch_object();
		}
		else {
			return false;		
		}
	}

    public function showAll(){
        $sql="SELECT * FROM proveedores";
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