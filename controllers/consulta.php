<?php

class Consulta extends Controller {
    function __construct() {
        parent::__construct();
        $this->view->alumnos = [];
        //echo "<p>Consulta.construct()</p>";
    }

    function render() {
        $this->view->alumnos = $this->model->get();
        $this->view->render('consulta/index');
    }

    function verAlumno($param = null) {
        $idAlumno = $param[0];
        $alumno = $this->model->getById($idAlumno);

        session_start();
        $_SESSION['id_verAlumno'] = $alumno->matricula;
        $this->view->alumno = $alumno;
        $this->view->mensaje = "";
        $this->view->render('consulta/detalle');
    }

    function actualizarAlumno() {
        session_start();
        $matricula = $_SESSION['id_verAlumno'];
        $nombre = $_POST['nombre'];
        $paterno = $_POST['paterno'];

        unset($_SESSION['id_verAlumno']);

        $alumno = new Alumno();
        $this->view->mensaje = "";
        if ($this->model->update(['matricula' => $matricula, 'nombre' => $nombre, 'paterno' => $paterno])) {
            $alumno->matricula = $matricula;
            $alumno->nombre = $nombre;
            $alumno->paterno = $paterno;

            $this->view->alumno = $alumno;
            $this->view->mensaje = "Alumno actualizado correctamente";
        } else {
            $this->view->mensaje = "No se pudo actualizar el alumno";
        }
        $this->view->render('consulta/detalle');
    }

    function eliminarAlumno($param = null) {
        $matricula = $param[0];

        if ($this->model->delete($matricula)) {
            //$this->view->mensaje = "Alumno eliminado correctamente";
            $mensaje = "Alumno eliminado correctamente";
        } else {
            //$this->view->mensaje = "No se pudo eliminar el alumno";
            $mensaje = "No se pudo eliminar el alumno";
        }
        //$this->render();
        echo $mensaje;
    }
}

?>
