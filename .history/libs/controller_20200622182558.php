<?php

class Controller{
    function __construct(){
        echo 'controlador padre';

        $this->view = new View();

    }
}

?>