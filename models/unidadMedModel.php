<?php 
	
class unidadMed  extends baseModel{

	private $id;
	private $nombre;
	function __construct(){

		parent::__construct('unidades_med');

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

    	$query=$this->db->query("INSERT INTO unidades_med(nombre) VALUES('{$this->nombre}')");
    	if($this->db->affected_rows==1){
    		return true;
    	}
    	else
    	{
    		return false;
    	}
    }

    public function remove(){

    	$query=$this->db->query("DELETE FROM unidades_med WHERE id={$this->id}");
    	if($this->db->affected_rows==1){
    		return true;
    	}
    	else
    	{
    		return false;
    	}
    }

    public function edit(){

    	$query=$this->db->query("UPDATE unidades_med
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
        $sql="SELECT * FROM unidades_med WHERE id={$this->id}";
		$query=$this->db->query($sql);
		if ($query->num_rows){
			return $query->fetch_object();
		}
		else {
			return false;		
		}
	}
    public function showAll(){
        $sql="SELECT * FROM unidades_med";
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