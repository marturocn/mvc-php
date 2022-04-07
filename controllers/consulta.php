<?php

class Consulta extends Controller {
    function __construct() {
        parent::__construct();
        //echo "<p>Consulta.construct()</p>";
    }

    function render() {
        $this->view->render('consulta/index');
    }
}

?>
