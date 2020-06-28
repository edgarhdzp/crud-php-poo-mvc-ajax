<?php

class Nuevo extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->render('nuevo/index');
    }
    function registrarAlumno(){

        $nombre = $_POST['nombre'];
        $apel = $_POST['apellido'];
        $this->model->insert();

        echo 'alumno creado';
    }
}

?>