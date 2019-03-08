<?php 

class remito extends baseModel{
	private $id;
	private $numero;
	private $fecha;
	private $tipo;
	private $idOrden;
	private $idCLiente;
	private $destinatario;
	private $direccion;
	private $idProveedor;
	private $horaLlegada;
	private $horaInicio;
	private $horaSalida;


	function __construct(){
		parent::__construct('remitos');
	}


	function getId() {
        return $this->id;
    }

    function getNumero() {
        return $this->numero;
    }

    function getFecha() {
        return $this->fecha;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getIdOrden() {
        return $this->idOrden;
    }

    function getIdCLiente() {
        return $this->idCLiente;
    }

    function getDestinatario() {
        return $this->destinatario;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getIdProveedor() {
        return $this->idProveedor;
    }

    function getHoraLlegada() {
        return $this->horaLlegada;
    }

    function getHoraInicio() {
        return $this->horaInicio;
    }

    function getHoraSalida() {
        return $this->horaSalida;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function setIdOrden($idOrden) {
        $this->idOrden = $idOrden;
    }

    function setIdCLiente($idCLiente) {
        $this->idCLiente = $idCLiente;
    }

    function setDestinatario($destinatario) {
        $this->destinatario = $destinatario;
    }

    function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    function setIdProveedor($idProveedor) {
        $this->idProveedor = $idProveedor;
    }

    function setHoraLlegada($horaLlegada) {
        $this->horaLlegada = $horaLlegada;
    }

    function setHoraInicio($horaInicio) {
        $this->horaInicio = $horaInicio;
    }

    function setHoraSalida($horaSalida) {
        $this->horaSalida = $horaSalida;
    }
    
    function add(){
    	$sql="INSERT INTO remitos(id,numero,fecha,tipo,idOrden,idCLiente,destinatario,direccion,
    			idProveedor,horaLlegada,horaInicio,horaSalida)
    			VALUES({$this->id},{$this->numero},{$this->fecha},{$this->tipo},{$this->idOrden},
    			{$this->idCLiente},{$this->destinatario},{$this->direccion},{$this->idProveedor},
    			{$this->horaLlegada},{$this->horaInicio},{$this->horaSalida});";
    	$result=false;
    	if ($query=$this->db->query($sql)) {
    		if($this->db->affected_rows==1){
    			$result=true;
    		}
    	}
    	return $result;
    }

    function edit(){
    	$sql="UPDATE remitos
    			SET id={$this->id},numero={$this->numero},fecha={$this->fecha},
    				tipo={$this->tipo},idOrden={$this->idOrden},idCLiente={$this->idCLiente},
    				destinatario={$this->destinatario},direccion={$this->direccion},
    				idProveedor={$this->idProveedor},horaLlegada={$this->horaLlegada},
    				horaInicio={$this->horaInicio},horaSalida={$this->horaSalida})
    			WHERE id={$this->id}";
    	$result=false;
    	if ($query=$this->db->query($sql)) {
    		if($this->db->affected_rows==1){
    			$result=true;
    		}
    	}
    	return $result;
    }
    
}


 ?>