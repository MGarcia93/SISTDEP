
<?php  
	require_once("config/db.php");
	require_once("config/autoload.php");
	require_once("config/parameters.php");
	require_once("Models/baseModel.php");
	if  (!isset($_GET['controller']) || $_GET['controller']!='ajax'){
		include ("./views/layout/header.php");
}
	
	function showError(){
		$error= new errorController;
		$error->show();
	}


	if (isset($_GET['controller']) && isset($_GET['action'])){
		$name_controller=$_GET['controller'].'Controller';
		if (class_exists($name_controller)){
			$controller = new $name_controller;
			if ($_GET['action'] && method_exists($controller, $_GET['action'])){
				$action=$_GET['action'];
				$controller->$action();
			}
			else{
				showError();
			}
		}
		else{
			showError();	
		}
	}
?>

<?php
if  (!isset($_GET['controller']) || $_GET['controller']!='ajax'){
	include ("./views/layout/footer.php");
	}
?>