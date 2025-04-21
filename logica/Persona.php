<?php
abstract class Persona {
    protected $id;
    protected $nombre;
    protected $apellido;

    public function __construct($id = 0, $nombre = "", $apellido = "") {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }
}
?>
