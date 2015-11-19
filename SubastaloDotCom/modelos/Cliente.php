<?php

require_once 'Libs/Modelo.php';
/**
 * Esta clase representara las instancias de los Usuarios o clientes
 * del protel de subastas.
 */
class Cliente extends Modelo
{

 /**
  * Constructor por herencia
  */
 function __construct(){
 	parent::__construct();

 }

public function insertUsuario($nombretabla, $params){
	$this->insert($nombretabla,$params);
}

/**
 * 
 * Metodo encargado de la autenticacion a traves de la consulta
 * de seleccion en la base de datos.
 * 
 * @param type $contraseña
 * @param type $correo
 * @return type
 */
public function authenticate($contraseña,$correo){
	 	return $this->query("Select * from usuario where contrasena='$contraseña' and correo='$correo'");
	}



public function consulta(){
	return $this->query("Select * from producto");
}

}
?>