<?php

class View{
    function __construct(){
        echo 'vista padre';
    }
    function render($nombre){
        require 'views/' . $nombre . 
    }
}

?>