<?php

class Nuevo extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->render('nuevo/index');
    }
    function registrarAlumno(){

        $nombre = $_POST['']
        echo 'alumno creado';
        // $this->model->insert();
    }
}

?>