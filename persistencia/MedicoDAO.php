<?php
class MedicoDAO {
    public function consultarPorEspecialidad($idEspecialidad) {
        return "SELECT idMedico, nombre, apellido, especialidad_id 
                FROM Medico 
                WHERE especialidad_id = $idEspecialidad 
                ORDER BY apellido ASC";
    }
}
?>
