<?php namespace Config;


class Conexion extends \PDO{
        
    public function __construct(){
    // Sobreescribo el metodo constructor de la clase PDO
    try
    {
    // Ejecutamos las variables y aplicamos UTF8
    $connect = parent::__construct(DB_TIPO.":host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS, 
    array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES '".DB_CHARSET."'"));    
    }catch (\PDOException $e)
        {
        exit("Error al conectar con la base de datos: " . $e->getMessage());
        }
       
    } 
} 