<?php 

//archivo de error
require_once 'controllers/error.php';

class App{
    function __construct(){
        echo 'nueva app';
        //la varible urlsera igual a la url que declaramos en htaccess y en acces es todo el valor que ingrese 
        $url = $_GET['url'];
        //aqui con xtrim retiramos los / que no necesitamos en la url
        $url = rtrim($url, '/');
        //buscamos nuestro separador /
        $url = explode('/', $url);
        //declaramos nuestra variable que sera igual a la ubicacion de controlador y url es igual al m
        $archivoController = 'controllers/' . $url[0] . '.php';

        if(file_exists($archivoController)){
            require_once $archivoController;
            $controller = new $url[0];

            if(isset($url[1])){
                $controller->{$url[1]}();
            }
            } else{
                $controller = new Fail();
            }
        }
    }

?>