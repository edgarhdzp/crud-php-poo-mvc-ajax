<?php

class Fail extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->render();
        echo 'tenemos un error';
    }
}

?>