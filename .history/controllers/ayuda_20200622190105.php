<?php

//creamos nuestra clase que hereda de controo
class Ayuda extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->render('ayuda/index');
    }
}

?>