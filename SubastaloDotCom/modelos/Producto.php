<?php
require_once 'libs/Modelo.php';
class Producto extends Modelo {
	function Producto() {
		parent::Modelo ();
	}
	function getProducto() {
		return $this->query ( "Select * from Productos" );
	}
        
	function insertarProducto($nombretabla, $params) {
            $query  =  "INSERT INTO $nombretabla SET ";
            $coma = "";
            foreach ( $params as $clave => $valor ) {
                            $query .= $coma."$clave = '$valor'";
                            $coma =",";
                    }
                    echo $query;
                    return $this->query($query);	
	}
        
        public function borrarProducto($nombretabla, $id){
		$query = "DELETE FROM $nombretabla WHERE id = $id";
		echo $query;
		$this->query($query);
	}
        
        public function actualizarProducto($nombretabla, $id, $params){

		$query = "UPDATE $nombretabla SET ";
		$coma = "";
		foreach ($params as $clave => $valor) {
			$query .= $coma. "$clave = '$valor' ";
			$coma = ",";
		}
		$query = $query."WHERE id = $id";
		echo $query;
		$this->query($query);		
	}
        
        function authenticate($username, $password){
            return $this->query("Select * from Productos where username='$username'and pass='$password'");
        }
        
}
?>