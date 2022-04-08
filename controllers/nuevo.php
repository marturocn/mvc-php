<?php

class Nuevo extends Controller {
    function __construct() {
        parent::__construct();
        $this->view->mensaje = "";
        //echo "<p>Nuevo.construct()</p>";
    }

    function render() {
        $this->view->render('nuevo/index');
    }

    function regAlumno() {
        $matricula = $_POST['matricula'];
        $nombre = $_POST['nombre'];
        $paterno = $_POST['paterno'];
        $mensaje = "";

        if ($this->model->insert(['matricula' => $matricula, 'nombre' => $nombre, 'paterno' => $paterno])) {
            $mensaje = "Se registró la matrícula";
        } else {
            $mensaje = "Ya existe la matrícula";
        }

        $this->view->mensaje = $mensaje;
        $this->render();
        //echo "Alumno creado";
    }
}

?>
