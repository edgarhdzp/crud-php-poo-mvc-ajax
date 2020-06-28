<?php
//clase padre
class Controller{
    function __construct(){
        echo 'controlador padre';
        //indicamos que se cree una nueva vista 
        $this->view = new View();

    }
}

?>