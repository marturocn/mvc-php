<?php

class Main extends Controller {
    function __construct() {
        parent::__construct();
        $this->view->render('main/index');
        //echo "<p>Main.construct()</p>";
    }

    function saludo() {
        echo "<p>Main.saludo()</p>";
    }
}

?>
