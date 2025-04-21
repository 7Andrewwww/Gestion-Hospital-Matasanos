<?php
require_once("persistencia/Conexion.php");
require_once("persistencia/MedicoDAO.php");
require_once("logica/Persona.php");

class Medico extends Persona {
    private $especialidadId;

    public function __construct($id = 0, $nombre = "", $apellido = "", $especialidadId = 0) {
        parent::__construct($id, $nombre, $apellido);
        $this->especialidadId = $especialidadId;
    }

    public static function consultarPorEspecialidad($idEspecialidad) {
        $conexion = new Conexion();
        $medicoDAO = new MedicoDAO();
        $conexion->abrir();
        $conexion->ejecutar($medicoDAO->consultarPorEspecialidad($idEspecialidad));
        $medicos = array();
        while (($datos = $conexion->registro()) != null) {
            $medico = new Medico($datos[0], $datos[1], $datos[2], $datos[3]);
            array_push($medicos, $medico);
        }
        $conexion->cerrar();
        return $medicos;
    }
}
?>
