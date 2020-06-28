<?php

class Main extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->render('main/index');
    } 
    function render(){
        $this->view->render('nuevo/index');

    }
    function saludo(){
        echo 'que pedo puto';
    }
}

?>