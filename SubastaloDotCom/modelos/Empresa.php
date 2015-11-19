<?php

require_once 'Libs/Modelo.php';
/**
 * Esta clase representara las instancias de las empresas
 * del portal de subastas.
 */
class Empresa extends Modelo{

function __construct(){
 	parent::__construct();

 }

 /**
  * Este metodo se encarga de insertar las empresas
  * @param type $nombretabla
  * @param type $params
  */
public function insertEmpresa($nombretabla, $params){
	$this->insert($nombretabla,$params);
}

/**
 * Metodo encargado de la autenticacion a traves de la consulta 
 * @param type $contraseña
 * @param type $correo
 * @return type
 */
function authenticate($contraseña,$correo){
	return $this->query("Select * from empresa where correo='$correo' and contrasena='$contraseña'");
	}
} 

?>