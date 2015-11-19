<?php
/**
 * Esta clase es la encargada de gestionar la conexion y los accesos
 * a la base de datos.
 */
class Modelo{

        /** @var host Esta variable contiene la ubicacion del host */
	protected $host = "localhost";
        
        /** @var db_name Esta variable contiene el nombre de la bd */
	protected $db_name = "proyecto";
        
        /** @var username Esta variable contiene el username para el acceso */
	protected $username = "root";
        
        /** @var password Esta variable contiene la contrasena del usuario */
	protected $password = "";
        
	protected $conexion;
	protected $nombretabla;

/**
 * Constructor de la Clase
 */
public function Modelo(){

try{
        // Establecemos la conexion por PDO
	$this->conexion = new PDO ("mysql:host={$this->host};dbname={$this->db_name}",$this->username,$this->password);

}catch(PDOException $exception){
	echo "Connection error: " . $exception->getMessage();
}
}

public function query($query){
	return $this->conexion->query($query);
}

public function insert($nombretabla, $params) {
	$query  =  "INSERT INTO $nombretabla SET ";
	$coma = "";
	foreach ( $params as $clave => $valor ) {
			$query .= $coma."$clave = '$valor'";
			$coma =",";
		}
//		echo $query;
		$this->query($query);	
//		print_r($this->conexion->errorInfo());
	}

	public function delete($nombretabla, $id){
		$query = "DELETE FROM $nombretabla WHERE id = $id";
//		echo $query;
		$this->query($query);

	}

	public function update($nombretabla, $id, $params){

		$query = "UPDATE $nombretabla SET ";
		$coma = "";
		foreach ($params as $clave => $valor) {
			$query .= $coma. "$clave = '$valor' ";
			$coma = ",";
		}
		$query.="WHERE id = $id";
//		echo $query;
		$this->query($query);
		
	}

}
?>