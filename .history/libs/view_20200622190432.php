<?php
//vista madre
class View{
    function __construct(){
        echo 'vista padre';
    }
    //esta funcion hace el redireccionamiento
    function render($nombre){
        //indicamos 
        require 'views/' . $nombre . '.php';
    }
}

?>