<?php

class Fail extends Controller{
    function __construct(){
        parent::__construct();
        $this-
        $this->view->render('error/index');
        echo 'tenemos un error';
    }
}

?>