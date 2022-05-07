<?php namespace Config;

	//esta clase se encargara de generar la ruta para los archivos requeridos
	class Enrutador{

		//Metodo que se encarga de generar la ruta dependiendo los valores obtenidos del Request
		public static function run(Request $request){
			//obtenemos el controlador desde Request y completamos el nombre del archivo
			$controlador = $request->getControlador() . "Controller";
			//creamos la ruta del archivo php indicando la ubicacion del archivo
			$ruta = ROOT . "Controllers" . DS . $controlador . ".php";
			//obtenemos el metodo desde Request
			$metodo = $request->getMetodo();
			//si el valor de metodo es index.php
			if($metodo == "index.php"){
				//renombramos el metodo
				$metodo = "index";
			}
			//obtenemos el argumento desde Request
			$argumento = $request->getArgumento();
			//nos aseguramos que la ruta del archivo sea legible
			if(is_readable($ruta)){
				//requerimos el archivo
				require_once $ruta;
				//generamos una variable para utilizar el namespace
				$mostrar = "Controllers\\" . $controlador;
				//creamos un objeto de la clase requerida
				$controlador = new $mostrar;
				//Si no existe un argumento en la ruta
				if(!isset($argumento)){
					//creamos una variable solo con el controlador y el metodo
					//Llamada de retorno, dado por el primer parámetro y pasa los parámetros restantes como argumentos
					$datos = call_user_func(array($controlador, $metodo));
				}else{
					//si existe argumento, creamos una variable que incluya el argumento
					//llamada de retorno, devuelve un array de parámetros
					$datos = call_user_func_array(array($controlador, $metodo), $argumento);
				}
			}

			//Cargar vista
			//Generamos la ruta del archivo que obtendra la vista del metodo requerido
			$ruta = ROOT . "Views" . DS . $request->getControlador() . DS . $metodo . ".php";
			//nos aseguramos que el archivo exista y sea legible
			if(is_readable($ruta)){
				//requerimos el archivo
				require_once $ruta;
			}else{
				//de lo contrario mostramos un mensaje
				print "No se encontro la ruta";
			}
		}
	}

?>