<?php

class Main extends Controller {
    function __construct() {
        parent::__construct();
        //echo "<p>Main.construct()</p>";
    }

    function render() {
        $this->view->render('main/index');
    }

    function saludo() {
        echo "<p>Main.saludo()</p>";
    }
}

?>
