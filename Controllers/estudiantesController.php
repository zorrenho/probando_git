<?php namespace Controllers;

use Models\Estudiantes as Est;

class estudiantesController{

	private $_estudiante;

	public function __construct(){
		$this->_estudiante = new Est();
	}

    public function index(){
		$datos = $this->_estudiante->listar();
		return $datos;
		}
}

?>