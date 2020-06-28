<?php

//creamos nuestra clase que hereda de libs/controller
class Ayuda extends Controller{

    function __construct(){
        //traemos el constructor padre
        parent::__construct();
        //indicamos la vista  para esta clase donde le estamos pasando los parametros
        $this->view->render('ayuda/index');
    }
    function render(){
        $this->view->render('consulta/index');

    }
}

?>