<?php

class Consulta extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->alumnos = []:
    }
    function render(){
        $this->view->render('consulta/index');

    }
}

?>