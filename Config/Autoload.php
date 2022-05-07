<?php namespace Config;

class Autoload{
    public static function run(){
        //Cargamos las clases automaticamente
        spl_autoload_register(function($clase){
            //creamos la ruta de la clase en funcion y reemplazamos la barra invertida
            $ruta = str_replace('\\', '/', $clase) . ".php";
            //nos aseguramos que la ruta o el archivo exista y sea legible
            if(is_readable($ruta)){
                //requerimos el archivo
                require_once $ruta;
            }else{
                //si no existe mostramos un mensaje
                echo "<br>El archivo <strong>".$ruta." </strong>no exite";
            }
        });
    }
}
?>