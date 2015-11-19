<?php
/**
 * Esta clase se encarga de realizar la funcion
 * de controlador funcional, para la carga de los modelos y vistas.
 */
class Controlador{
    
        /** @var $parametro esta variable contiene los parametros necesarios o ingresados */
	private $parametros;

        /**
         * Este metodo se encarga de cargar el modelo
         * desde la carpeta de los modelos..
         * @param type $modelo
         * @return \class
         */
	protected function cargarModelo($modelo){

		$modelo = ucfirst(strtolower($modelo));
		$urlFile = 'modelos/'.$modelo.'.php';

		if(file_exists($urlFile)){

			include $urlFile;

			$class=$modelo;

			$model= new $class();

			return $model;
		}else{
			return null;
		}
	}

        /**
         * Este metodo es el encargado de cargar las vistas pedidas por
         * parametro desde la carpeta de vistas.
         * @param type $vista
         * @return boolean
         */
	protected function cargarVista($vista){

		$vista = ucfirst(strtolower($vista));
		$urlFile = 'vistas/'.$vista.'.php';

		if(file_exists($urlFile)){

			require_once($urlFile);
			return true;
		}else{
			return false;
		}
	}

        /**
         * Metodo set de Parametros
         * @param type $parametros
         */
	public function setParams($parametros){
		$this->parametros = $parametros;
	}

        /**
         * Metodo get de Parametros
         * @param type $parametros
         */
	public function getParametros(){
	return $this->params;
	}
}

?>