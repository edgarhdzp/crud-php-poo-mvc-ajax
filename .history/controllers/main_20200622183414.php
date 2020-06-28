<?php

class Main extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->render('mai');
        echo '<p>nuevo controlador main </p>';
    } 
    function saludo(){
        echo 'que pedo puto';
    }
}

?>