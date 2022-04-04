<?php 
	class Mysql extends Conexion {
		private $conexion;
		private $strquery;
		private $arrValues;

		function __construct() {
			$this->conexion = new Conexion();
			$this->conexion = $this->conexion->conect();
		}

		//Insertar un registro
		public function insert(string $query, array $arrValues) {
			try{
	        	$insert = $this->conexion->prepare($query);
	        	$resInsert = $insert->execute($arrValues);
	        	return ($resInsert) ? $this->conexion->lastInsertId() : 0;
	        } catch (PDOException $e) {
	        	return "Error: Insertando " . $e . " " . $query;
	        }
		}
		//Busca un registro
		public function select(string $query) {
        	$result = $this->conexion->prepare($query);
			$result->execute();
        	//return $result->fetch(PDO::FETCH_ASSOC);
        	return $result->fetch();
		}
		
		//Devuelve todos los registros
		public function select_all(string $query) {
			$this->strquery = $query;
        	$result = $this->conexion->prepare($this->strquery);
			$result->execute();
        	//return $result->fetchall(PDO::FETCH_ASSOC);
        	return $result->fetchall();
		}

		//Actualiza registros
		public function update($query, $arrValues) {
			try {
				$update = $this->conexion->prepare($query);
				$update->execute($arrValues);
				return "Actualizacion exitosa";
			} catch (PDOException $e) {
            	return "Mensaje de Error: " . $e. " " .$query;
        	}
		}

		//Eliminar un registros
		public function delete($query, $arrValues) {
			try {
				$delete = $this->conexion->prepare($query);
				$delete->execute($arrValues);
				return "Eliminacion exitosa";
			} catch (PDOException $e) {
            	return "Mensaje de Error: " . $e->getMessage()." ".$query;
        	}
		
		}
	}


 ?>

