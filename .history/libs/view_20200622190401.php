<?php
//vista madre
class View{
    function __construct(){
        echo 'vista padre';
    }
    function render($nombre){
        require 'views/' . $nombre . '.php';
    }
}

?>