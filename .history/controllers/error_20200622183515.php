<?php

class Fail extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->render(v);
        echo 'tenemos un error';
    }
}

?>