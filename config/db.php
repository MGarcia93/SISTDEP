<?php 
class Database{
		
		public static function connect(){
			$dbHost="localhost";
			$dbName="depo";
			$dbUser="root";
			$dbPass="";
			$connect= new mysqli($dbHost,$dbUser,$dbPass,$dbName);
			//$connect->querry("set names 'utf8'");
			return $connect;

		}
}

 ?>