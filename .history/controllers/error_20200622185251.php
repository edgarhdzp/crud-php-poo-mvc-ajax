<?php

class Fail extends Controller{
    function __construct(){
        parent::__construct();
        $this->mensaje ='valio verga no estas viendo'
        $this->view->render('error/index');
        echo 'tenemos un error';
    }
}

?>