<?php 
class detalleOrden extends baseModel{

	private $id;
	private $idOrden;
	private $idArticulo;
	private $idPosicion;
	private $cantidad;
	private $idTipoSacado;

	function __construct(){
		parent::__construct('detalle_ordenes');
	}


	function getId() {
        return $this->id;
    }

    function getIdOrden() {
        return $this->idOrden;
    }

    function getIdArticulo() {
        return $this->idArticulo;
    }

    function getIdPosicion() {
        return $this->idPosicion;
    }

    function getCantidad() {
        return $this->cantidad;
    }

    function getIdTipoSacado() {
        return $this->idTipoSacado;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setIdOrden($idOrden) {
        $this->idOrden = $idOrden;
    }

    function setIdArticulo($idArticulo) {
        $this->idArticulo = $idArticulo;
    }

    function setIdPosicion($idPosicion) {
        $this->idPosicion = $idPosicion;
    }

    function setCantidad($cantidad) {
        $this->cantidad = $cantidad;
    }

    function setIdTipoSacado($idTipoSacado) {
        $this->idTipoSacado = $idTipoSacado;
    }

    function add(){
    	$sql="INSERT INTO detalle_ordenes(id,idOrden,idArticulo,idPosicion,cantidad,idTipoSacado)
    			VALUES({$this->id},{$this->idOrden}.{$this->idArticulo},{$this->idPosicion},{$this->cantidad}.{$this->idTipoSacado}) ";
    	$result=false;
    	if($query=$this->db->query($sql)){
    		if($this->db->affected_rows==1){
    			$result=true;
    		}
    	}
    	return $result;

    }

    function edit(){
    	$sql="UPDATE detalle_ordenes(
    			SET id={$this->id},idOrden={$this->idOrden},idArticulo={$this->idArticulo},idPosicion={$this->idPosicion},cantidad={$this->cantidad},idTipoSacado={$this->idTipoSacado})
    			WHERE id={$this->id}";
    	$result=false;
    	if($query=$this->db->query($sql)){
    		if($this->db->affected_rows==1){
    			$result=true;
    		}
    	}
    	return $result;

    }

}
 ?>
