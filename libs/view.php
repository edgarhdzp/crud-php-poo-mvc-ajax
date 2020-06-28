<?php
//vista madre
class View{
    function __construct(){
    }
    //esta funcion hace el redireccionamiento
    function render($nombre){
        //indicamos la ubicacion y nombre del archivo
        require 'views/' . $nombre . '.php';
    }
}

?>