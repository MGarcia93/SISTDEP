<?php 

class articulo extends Basemodel{

	private $id;
	private $codigo;
	private $descripcion;
	private $idCliente;
	private $idUndMed;
	private $idTipo;

	function __construct(){
		parent::__construct('articulos');
	}



    function getCodigo() {
        return $this->codigo;
    }

	function getId() {
        return $this->id;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getIdCliente() {
        return $this->idCliente;
    }

    function getIdUndMed() {
        return $this->idUndMed;
    }

    function getIdTipo() {
        return $this->idTipo;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setIdCliente($idCliente) {
        $this->idCliente = $idCliente;
    }

    function setIdUndMed($idUndMed) {
        $this->idUndMed = $idUndMed;
    }

    function setIdTipo($idTipo) {
        $this->idTipo = $idTipo;
    }



     public function add(){
     	$sql="INSERT INTO articulos(codigo,descripcion,idCliente,idUndMed,idTipo) VALUES('{$this->codigo}','{$this->descripcion}','{$this->idCliente}','{$this->idUndMed}','{$this->idTipo}')";
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
    	$sql="UPDATE articulos
    			SET codigo='{$this->codigo}', descripcion='{$this->descripcion}',idCLiente='{$this->idCliente}',idUndMed='{$this->idUndMed}',idTipo='{$this->idTipo}'
    			WHERE id={$this->id}";
    	$query=$this->db->query($sql);
        var_dump($sql);
    	if($this->db->affected_rows==1){
    		return true;
    	}
    	else
    	{
    		return false;
    	}
    }

    public function findbyLike($column,$value){
        $sql="SELECT a.id, a.codigo, a.descripcion, cliente.nombre, tipo.nombre,unidad.nombre
            FROM articulos a
            LEFT JOIN clientes  ON a.idCliente = clientes.id
            LEFT JOIN tipos_articulos  tipo ON a.idTipo = tipo.id
            LEFT JOIN unidades_med unidad ON a.idUndMed = unidad.id
            Where $column LIKE '%{$value}%';
        ";
        $query=$this->db->query($sql);
        if ($query->num_rows){
            while ($row=$query->fetch_object()) {
                $data[]=$row;
            }
            return $data;
        }
        else {
            return false;       
        }
    }

    public function findAll(){
        $sql="SELECT a.id, a.codigo, a.descripcion, clientes.nombre AS 'cliente', tipo.nombre AS 'tipo',unidad.nombre AS  'unidad'
            FROM articulos a
            LEFT JOIN clientes  ON a.idCliente = clientes.id
            LEFT JOIN tipos_articulos  tipo ON a.idTipo = tipo.id
            LEFT JOIN unidades_med unidad ON a.idUndMed = unidad.id
        ";
        $query=$this->db->query($sql);
        if ($query->num_rows){
            while ($row=$query->fetch_object()) {
                $data[]=$row;
            }
            return $data;
        }
        else {
            return false;       
        }
    }

    public function findby($column,$value){
        $sql="SELECT a.id, a.codigo, a.descripcion, cliente.nombre, tipo.nombre,unidad.nombre
            FROM articulos a
            LEFT JOIN clientes  ON a.idCliente = clientes.id
            LEFT JOIN tipos_articulos  tipo ON a.idTipo = tipo.id
            LEFT JOIN unidades_med unidad ON a.idUndMed = unidad.id
            Where $column=$value;
        ";
        $result=false;
        if ($query=$this->db->query($sql)){
            if ($query->num_rows){
            $result=$query->fetch_object();
            }    
        }
        return $result;
    }

    
}

 ?>