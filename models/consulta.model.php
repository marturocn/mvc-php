<?php

include_once 'models/alumno.php';

class ConsultaModel extends Model {
    public function __construct() {
        parent::__construct();
    }

    public function get() {
        $items = [];
        try {
            $query = $this->db->connect()->query("SELECT * FROM alumnos WHERE borrado = 0");

            while ($row = $query->fetch()) {
                $item = new Alumno();
                $item->matricula = $row['matricula'];
                $item->nombre = $row['nombre'];
                $item->paterno = $row['paterno'];

                array_push($items, $item);
            }

            return $items;
        } catch (PDOException $e) {
            return [];
        }
    }

    public function getById($id) {
        $item = new Alumno();
        $query = $this->db->connect()->prepare("SELECT * FROM alumnos WHERE matricula = :matricula");
        try {
            $query->execute(['matricula' => $id]);
            while($row = $query->fetch()) {
                $item->matricula = $row['matricula'];
                $item->nombre = $row['nombre'];
                $item->paterno = $row['paterno'];
            }
            return $item;
        } catch (PDOException $e) {
            return null;
        }
    }

    public function update($item) {
        $query = $this->db->connect()->prepare("UPDATE alumnos SET nombre = :nombre, paterno = :paterno WHERE matricula = :matricula");
        try {
            $query->execute([
                'nombre' => $item['nombre'],
                'paterno' => $item['paterno'],
                'matricula' => $item['matricula']
            ]);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function delete($id) {
        $query = $this->db->connect()->prepare("UPDATE alumnos SET borrado = 1 WHERE matricula = :matricula");
        try {
            $query->execute(['matricula' => $id]);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
}

?>
