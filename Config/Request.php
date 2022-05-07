<?php namespace Config;

	//Esta clase se encargara de tomar los valores requeridos para cada elemento de la ruta
	//Controlador, Modelo, Argumento
	class Request{

		private $controlador;
		private $metodo;
		private $argumento;

		//metodo constructor que se ejecuta automaticamente
		public function __construct(){
			//si existe una variable tipo GET, la cual se encuentra en el archivo .htaccess url
			if(isset($_GET['url'])){
				//obtenemos la variable, la validamos y filtramos
				$ruta = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
				//creamos un array de la variable
				$ruta = explode("/", $ruta);
				//asignamos los valores al array
				$ruta = array_filter($ruta);
				
				//si el valor 0 del array es index.php
				if($ruta[0] == "index.php"){
					//renombramos la variable controlador
					$this->controlador = "inicio";
				}else{
					//de lo contrario tomamos el valor en la posicion 0 y se la asignamos a controlador
					$this->controlador = strtolower(array_shift($ruta));
				}
				
				//tomamos el siguiente valor del array y lo asignamos al metodo
				$this->metodo = strtolower(array_shift($ruta));

				//si no existe un metodo
				if(!$this->metodo){
					//asignamos el valor de index a la variable metodo
					$this->metodo = "index";
				}
				//por ultimo nos quedamos con el ultimo valor del array y lo asignamos al argumento
				$this->argumento = $ruta;
			}else{
				//si no existe la ruta, asignamos los valores por default al controlador y al metodo
				$this->controlador = "inicio";
				$this->metodo = "index";
			}
		}

		//tomamos el valor que corresponde al controlador y lo retornamos
		public function getControlador(){
			return $this->controlador;
		}
		//tomamos el valor que corresponde al metodo y lo retornamos
		public function getMetodo(){
			return $this->metodo;
		}
		//tomamos el valor que corresponde al argumento y lo retornamos
		public function getArgumento(){
			return $this->argumento;
		}
	}

?>