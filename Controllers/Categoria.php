<?php
require_once "Models/TCategoria.php";
class Categoria extends Controllers{
	use TCategoria;
	public function __construct() {
		parent::__construct();
		//session_start();
	}

	public function home() {
		$data = $this->getCategoriasAll();
		$this->views->getView("Categoria/categoria-home", $data, "");
	}

	public function nueva(){
		$data = "";
		$this->views->getView("Categoria/categoria-nueva", $data, "");
	}

	public function guardar($params){
		$parametros = explode(",", $params);
		echo $this->getGuardar($parametros[0], $parametros[1]);
	}

	public function eliminar($params){
		$parametros = explode(",", $params);
		echo $this->getEliminar($parametros[0]);
	}

	public function actualizar($params) {
		$parametros = explode(",", $params);
		echo $this->getActualizar($parametros[0], $parametros[1], $parametros[2]);
		
	}
}
?>
