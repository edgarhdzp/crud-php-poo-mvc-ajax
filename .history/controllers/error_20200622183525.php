<?php

class Fail extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->render('error/indez');
        echo 'tenemos un error';
    }
}

?>