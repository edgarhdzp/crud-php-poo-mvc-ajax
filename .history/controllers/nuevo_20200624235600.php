<?php

class Nuevo extends Controller{
    function __construct(){
        parent::__construct();
    }

    function render(){
        $this->view->render('nuevo/index');

    }
    function registrarAlumno(){

        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];

        $this->model->insert(['nombre' => $nombre, 'apellido' => $apellido]);
        $this->

    }
}

?>