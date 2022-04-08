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
}

?>
