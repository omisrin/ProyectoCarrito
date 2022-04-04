<?php 
require_once "Models/TCategoria.php";
//require_once("Models/TProducto.php");
class Home extends Controllers{
	//use TCategoria, TProducto;
	use TCategoria;
	public function __construct() {
		parent::__construct();
		//session_start();
	}

	public function home() {
		$data = "";
		$this->views->getView("Home/home", $data, "");
	}

	

}
 ?>
