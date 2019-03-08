<?php 
	
	class clsConexion{
		protected $conexion;
		function _clsConexion{
			$dbHost="localhost";
			$dbName="deposito";
			$dbUser="admin";
			$dbPass="";
			try{
				$this->conexion= new PDO("mysql:host=".$dbHost.";dbname=".$dbName,$dbUser,$dbPass);	
				$this->conexion=setAttribute(PDO::ATTR_MODE,PDO::ERRMOD_EXEPTION);
			}
			catch(PDOExeption $e){
				die("ERROR ". $e->getMessage());
			}
			

		}
		public function iniciar($user,$pass)
		{
			try {
				$sql="SELECT * FROM usuarios WHERE USUARIO= :usuario and PASSWORD = :pass"
				$consulta=$this->conexion->prepare($sql);
				$user=htmlentities(addslashes($user));
				$pass=htmlentities(addslashes($pass))
				$consulta->bindvalue(":usuario",$user);
				$consulta->bindvalue(":pass",$pass);
				$consulta->execute();
				if ($consulta->rowCount()!=0){
					$fila=$consulta->fetch(PDO::FETCH_ASSOC)
					setcookie("usuario[tipo]",$fila['TIPO']);
					setcookie("usuario[usuario]",$fila['USUARIO']);
					return true;
				}
				else{
					return false;
				}

			} catch (PDOException $e) {
				die("ERROR ". $e->getMessage());
			}
			

		}
	}

 ?>