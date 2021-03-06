<?php

class Consulta extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->alumnos = [];
    }
    function render(){
        $alumnos = $this->model->get();
        $this->view->alumnos = $alumnos;
        $this->view->render('consulta/index');

    }

    function verAlumno($param = null){
        $idAlumno = $param[0];
        $alumno =$this->model->getById($idAlumno);

        session_start();
        $_SESSION['id_verAlumno'] = $alumno->id;
        $this->view->alumno = $alumno;
        $this->view->render('consulta/detalle');
    }
    function actualizarAlumno(){
        session_start();
        $id = $_SESSION['id_verAlumno'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];

        unset($_SESSION['id_verAlumno']);

        if($this->model->update(['id' => $id, 'nombre' => $nombre, 'apellido' => $apellido])){
            $alumno = new Alumno();
            $alumno->id = $id;
            $alumno->nombre = $nombre;
            $alumno->apellido = $apellido;

            $this->view->alumno = $alumno;
        }else{
            echo "no se pudo";
        }
        $this->view->render('consulta/d');
    }
    function eliminarAlumno(){}
}

?>