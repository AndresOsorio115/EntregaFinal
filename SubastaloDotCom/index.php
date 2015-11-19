<?php

/**
 * Clase FrontController:
 * Esta clase juega el rol de controlador principal,
 * encargado de tomar la ruta absoluta del navegador para relizar
 * las tareas de redireccion.
 */
class FrontController{
	
    
        /** @var $controlador Esta variable almacena la parte de la ruta absoluta que representa el controlador */
	private $controlador ="Home";
        
        /** @var $metodo Esta variable almacena la parte de la ruta absoluta que representa el metodo */
	private $metodo="index";
        
        /** @var $params Esta variable almacena la parte de la ruta absoluta que representa los parametros del metodo */
	private $params;

        /**
         * El metodo index se encarga de capturar la ruta absoluta del navegador
         * y dividir dicha ruta en las 3 partes necesarias.
         */
	public function index(){

            /** @var url Esta variable almacena la ruta absoluta capturada */
            $url = $_SERVER["REQUEST_URI"];
            
            /** @var path Esta variable almacena la ruta fragmentada */
            $path = trim(parse_url($url, PHP_URL_PATH), "/");

            try{
                
                /** @var path Esta variable representa la lista de partes en las que se fragmento la ruta */
                @list($appname,$controlador,$metodo,$params) = explode("/", $path,4);
                @$params = (explode("/", $params));

                // Se validan los contenidos
                if($controlador != null){
                        $this->controlador = $controlador;
                }
                if($metodo != null){
                        $this->metodo = $metodo;
                }
                if($params != null){
                        $this->params = $params;
                }

                $micontrolador = $this->cargarControlador($this->controlador);
                
                // Cargamos el controlador, el cual por defecto es Home
                if($micontrolador!=null){
                    $micontrolador->setParams($this->params);
                    $stringMetodo= $this->metodo;
                    $micontrolador->$stringMetodo();
                }
            } catch(Exception $e){
                    $e->getMessage();
            }
	}

        /**
         * 
         * Este es el metodo encargado de cargar el controlador que se obtuvo
         * al fragmentar la ruta abosulta.
         * 
         * @param type $controlador
         * @return \class
         */
	public function cargarControlador($controlador){
		$controlador =ucfirst(strtolower($controlador));
		$urlFile = 'controladores/'. $controlador. '.php';

		if(file_exists($urlFile)){
			include $urlFile;

			$class = $controlador;

			$controller = new $class();

			return $controller;
		}else {
			return null;
		}
	}

        
        // <------------------------ SETTER AND GETTER ------------------------>
 	public function getControlador(){
	return $this->controlador;
	}

	public function getMetodo(){
	return $this->metodo;
	}

	public function getParams(){
	return $this->params;
	}

	public function setControlador($controlador){
		$this->controlador = $controlador;
	}
	public function setMetodo($metodo){
		$this->metodo = $metodo;
	}
	
}

$frontController = new FrontController();
$frontController -> index();

?>