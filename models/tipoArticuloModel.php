<?php 
	
class tipoArticulo  extends baseModel{

	private $id;
	private $nombre;
	function __construct(){

		parent::__construct('tipos_articulos');

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

    	$query=$this->db->query("INSERT INTO tipos_articulos(nombre) VALUES('{$this->nombre}')");
    	if($this->db->affected_rows==1){
    		return true;
    	}
    	else
    	{
    		return false;
    	}
    }

    public function remove(){

    	$query=$this->db->query("DELETE FROM tipos_articulos WHERE id={$this->id}");
    	if($this->db->affected_rows==1){
    		return true;
    	}
    	else
    	{
    		return false;
    	}
    }

    public function edit(){

    	$query=$this->db->query("UPDATE tipos_articulos
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
        $sql="SELECT * FROM tipos_articulos WHERE id={$this->id}";
		$query=$this->db->query($sql);
		if ($query->num_rows){
			return $query->fetch_object();
		}
		else {
			return false;		
		}
	}
    public function showAll(){
        $sql="SELECT * FROM tipos_articulos";
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