<?php
//vista madre
class View{
    function __construct(){
        echo 'vista padre';
    }
    //esta funcion hace el redirec
    function render($nombre){
        require 'views/' . $nombre . '.php';
    }
}

?>