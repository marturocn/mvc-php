<?php

class Nuevo extends Controller {
    function __construct() {
        parent::__construct();
        $this->view->render('nuevo/index');
        //echo "<p>Nuevo.construct()</p>";
    }

    function regAlumno() {
        echo "Alumno creado";
        $this->model->insert();
    }
}

?>
