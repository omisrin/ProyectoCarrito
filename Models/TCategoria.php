<?php 
require_once "Libraries/Core/Mysql.php";
trait TCategoria {
	private $con;

	public function getCategoriasAll(){
		$this->con = new Mysql();
		$sql = "SELECT id, nombre, descripcion FROM categorias";
		return $this->con->select_all($sql);
		
	}

	public function getActualizar($id, $nombre, $descripcion){
		$this->con = new Mysql();
		$q = "UPDATE categorias SET nombre=:a, descripcion=:b WHERE id=:z";
		return $this->con->update($q, ['a'=>$nombre, 'b'=>$descripcion, 'z'=>$id]);
	}

	public function getGuardar($nombre, $descripcion){
		$this->con = new Mysql();
		$q = "INSERT INTO categorias(nombre, descripcion) VALUES(:a, :b)";
		return $this->con->insert($q, ['a'=>$nombre, 'b'=>$descripcion]);
	}

	public function getEliminar($id){
		$this->con = new Mysql();
		$q = "DELETE FROM categorias WHERE id=:z";
		return $this->con->delete($q, ['z'=>$id]);
	}

}

 ?>