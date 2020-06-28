<?php

//creamos nuestra clase que hereda de libs/controller
class Ayuda extends Controller{

    function __construct(){
        //traemos el constructor padre
        parent::__construct();
        //indicamos la vista 
        $this->view->render('ayuda/index');
    }
}

?>