<?php

class Nuevo extends Controller {
    function __construct() {
        parent::__construct();
        //echo "<p>Nuevo.construct()</p>";
    }

    function render() {
        $this->view->render('nuevo/index');
    }

    function regAlumno() {
        $matricula = $_POST['matricula'];
        $nombre = $_POST['nombre'];
        $paterno = $_POST['paterno'];

        if ($this->model->insert(['matricula' => $matricula, 'nombre' => $nombre, 'paterno' => $paterno])) {
            echo "Se registró la matrícula";
        }

        //echo "Alumno creado";
    }
}

?>
