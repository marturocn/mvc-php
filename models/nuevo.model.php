<?php

class NuevoModel extends Model {
    public function __construct() {
        parent::__construct();
    }

    public function insert($datos) {
        // insertar datos en la DB
        try {
            $query = $this->db->connect()->prepare('INSERT INTO alumnos (matricula, nombre, paterno) VALUES (:matricula, :nombre, :paterno)');
            $query->execute(['matricula' => $datos['matricula'], 'nombre' => $datos['nombre'], 'paterno' => $datos['paterno']]);
            return true;
        } catch (PDOException $e) {
            echo "Ya existe la matrícula";
            return false;
        }
    }
}

?>
