<?php 

class App{
    function __construct(){
        $url = $_GET['url'];
        $url = rtrim($url, '/');
        $url = explode ('/', $url);

        $archivoController = '/controllers' . $url[0] . 'php';
    }
}

?>