<?php

class Fail extends Controller{
    function __construct(){
        parent::__construct();
        $this->mensaje =
        $this->view->render('error/index');
        echo 'tenemos un error';
    }
}

?>