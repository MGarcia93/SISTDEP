<?php 

class helpers 
{
	
	function findArticulos($articulos,$array){
		$errores=array();
		if (!$articulos->findBy('codigo',$array['codigo'])){
				$errores[]='El codigo ' . $array['codigo'];
		}
		var_dump($array['cantidad']);
		for ($i=1; $i < $array['cont']; $i++){ 
			var_dump($i);
			if (!$articulos->findBy('codigo',$array['codigo'.$i])){
				$errores[]='El codigo ' . $array['codigo'.$i];
			}
		}
		return $errores;
	}

	function convertNumero($string,$value,$lenghts=5){

		$strLength=strlen($string);
		var_dump($strLength);
		$number= (substr($value, $strLength));
		var_dump($number);
		$number++;
		$string2=(string)$number;
		//Hago un bucle para agregar 0 haci la cadena tiene el largo pedido
		while ($lenghts>strlen($string2)) {
			$string2='0'.$string2;
		}
		$result=$string.$string2;
		return $result;
	}



}


 ?>