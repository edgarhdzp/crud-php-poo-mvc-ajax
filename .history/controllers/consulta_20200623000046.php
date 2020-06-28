<?php

class Consulta extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->mensaje ="valio verga no estas viendo";
        $this->view->render('consulta/index');
        echo 'tenemos un error';
    }
}

?>