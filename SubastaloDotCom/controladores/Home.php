<?php
	include "libs/Controlador.php";
/**
 * Clase Home:
 * Esta clase juega el rol de controlador unico,
 * encargado de cargar las vistas y realizar el trabajo
 * relacionado a los registros en las bases de datos.
 */        
class Home extends Controlador{
        
	public function imprimir(){
		print_r($this->parametros);
	}

        //<---------------------METODOS PARA CARGAR LAS VISTAS--------------->
	public function index(){
		$this->cargarVista("index");
	}
	public function registrarCliente(){
		$this->cargarVista("RegistrarCliente");
	}
	public function registrarEmpresa(){
		$this->cargarVista("RegistrarEmpresa");
	}
	public function registrarProducto(){
		$this->cargarVista("RegistrarProducto");
	}
        public function comprarPujas(){
		$this->cargarVista("ComprarPujas");
	}
        
        /**
         * Este metodo se encarga de realizar el registro de los usuarios 
         * en la base de datos, los datos ingresados son anteriormente validados
         * por el jquery.
         */
        public function registrarUsuario(){
		if ($_POST) {
		$nombre =$_POST["nombre"];
		$apellido =$_POST["apellido"];
		$cedula=$_POST["cedula"];
		$telefono=$_POST["telefono"];
		$direccion=$_POST["direccion"];
		$correo=$_POST["correo"];
		$contraseña=$_POST["contrasena"];
		$aux=10;
		$modelo=$this->cargarModelo("Cliente");
		$result=$modelo->insertUsuario("usuario", ["nombre" => $nombre, 
			"apellido" => $apellido, "cedula" => $cedula,"direccion" => $direccion, 
			"correo" =>$correo, "contrasena" => $contraseña,"telefono" =>$telefono, "pujas" =>$aux]);
	}
	$this->cargarVista("index");
	}

        /**
         * Este metodo se encarga de realizar el registro de las empresas en la
         * base de datos, dados los atributos basicos de la empresa.
         */
	public function registrarEmpresaBD(){
		if ($_POST) {
		$nombre =$_POST["nombre"];
		$telefono=$_POST["telefono"];
		$direccion=$_POST["direccion"];
		$correo=$_POST["correo"];
		$contraseña=$_POST["contrasena"];

		$modelo=$this->cargarModelo("Empresa");
		$result=$modelo->insert("empresa", ["nombre" => $nombre,"telefono" =>$telefono
			,"direccion" => $direccion, "correo" =>$correo, "contrasena" => $contraseña]);
	}

	$this->cargarVista("index");
	}
        
        /**
         * Este metodo es el encargado de realizar el registro de
         * los productos en la base de datos.
         */
	public function registrarProductoBD(){
		if ($_POST) {
		$nombre=$_POST["nombre"];
		$codigo=$_POST["codigo"];
		$precio=$_POST["precio"];
		$fechaF=$_POST["fechaF"];
		$fechaE=$_POST["fechaE"];
		$descri=$_POST["descri"];

		$modelo=$this->cargarModelo("Cliente");
		$result=$modelo->insert("producto", 
			["nombre" => $nombre,"codigo" => $codigo,"precio" => $precio,
			"fechaFinal" => $fechaF,"fechaEntrega" => $fechaE,"descripcion" => $descri]);
	}
	$this->cargarVista("index");
	}
        
	/**
        * Este metodo inicia la sesion del usuario 
        * consultando en la base de datos el usuario y la contraseña para el logueo utilizamos
        * el correo electronico 
        */
	public function login(){
		$username=$_POST["usuario"];
		$pass=$_POST["contraseña"];
		$modelo = $this->cargarModelo("Cliente");
		$respuesta = $modelo->authenticate($pass,$username);

		$modeloE=$this->cargarModelo("Empresa");
		$respuestaE = $modeloE->authenticate($pass,$username);

		if($respuesta != null && $respuesta->rowCount()>0 || $respuestaE != null && $respuestaE->rowCount()>0)
		{
			setcookie("chsm","logedin",time()+3600,"/");
			header("location: /subastaloDotCom/home/index");
			$this->cargarVista("index");
			exit();
		}
		else{
			echo "login fallido";
			$this->cargarVista("index");
		}
	}
	/**
 *Este metodo cierra la sesion activa del usuario
 */
	public function logout(){
		setcookie("chsm","",time()-3600, "/");
		header("location: /subastaloDotCom/home/index");
		//$this->cargarVista("index");
	}
}
?>