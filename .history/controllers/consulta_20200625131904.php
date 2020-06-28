<?php

class Consulta extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->alumnos = [];
    }
    function render(){
        $alumnos = $this->$router->model('user', 'App\User');
        $this->view->render('consulta/index');

    }
}

?>