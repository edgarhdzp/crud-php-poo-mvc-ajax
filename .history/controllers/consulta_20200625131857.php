<?php

class Consulta extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->alumnos = [];
    }
    function render(){
        $alumnos = $this->;
        $this->view->render('consulta/index');

    }
}

?>