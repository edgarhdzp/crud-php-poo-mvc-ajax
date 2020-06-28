<?php

class Nuevo extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->render('error/index');
    }
}

?>