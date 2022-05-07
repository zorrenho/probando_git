<?php namespace Models;

use Config\Conexion as Conect;

class Estudiantes{

    private $_dbh;
    private $_id;
    private $_nombre;
    private $_edad;
    private $_promedio;
    private $_imagen;
    private $_idseccion;
    private $_fecha;

    public function __construct(){
        $this->_dbh = new Conect();
        
    }

    public function set($atributo, $contenido){
        $this->$atributo = $contenido;
    }

    public function get($atributo){
        return $this->$atributo;
    }

    public function listar(){
        //Preparamos la consulta
        $stmt = $this->_dbh->prepare("SELECT * FROM estudiantes");

        //Especificamos el fetch mode antes de llmar a fetch()
        //$stmt->setFetchMode(\PDO::FETCH_ASSOC);
        //$stmt->setFetchMode(\PDO::FETCH_OBJ);
        
        //Ejecutamos
        $stmt->execute();
        $datos = $stmt->fetchAll();
        return $datos;       
            
    }
}
?>