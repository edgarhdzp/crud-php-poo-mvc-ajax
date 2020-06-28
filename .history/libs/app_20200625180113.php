<?php 

//archivo de error
require_once 'controllers/error.php';

class App{
    function __construct(){
        //la varible urlsera igual a la url que declaramos en htaccess y en acces es todo el valor que ingrese 
        $url = $_GET['url'];
        //aqui con xtrim retiramos los / que no necesitamos en la url
        $url = rtrim($url, '/');
        //buscamos nuestro separador / esto nos devuelve un arreglo
        $url = explode('/', $url);
        //validamos si despues denuestro primer / no hay nada entonces que nos redireccione a main 
        if(empty($url[0])){
            $archivoController = 'controllers/main.php';
            require_once $archivoController;
            $controller = new Main();
            $controller->loadModel('main');
            $controller->render();

            return false;
        }
        //declaramos nuestra variable que sera igual a la ubicacion de controlador y url es igual a la clase 
        $archivoController = 'controllers/' . $url[0] . '.php';
        //verificmos que el archivo exista
        if(file_exists($archivoController)){
            require_once $archivoController;
            //mandamos llamar nuestra clase que de acuerdo al arreglo sera la posicion 0
            $controller = new $url[0];
            $controller->loadModel($url[0]);

            $nparam = sizeof($url);

            if($nparam >1){
                if($nparam >2){
                    $param = [];
                    for($i = 2; $i<$nparam; $i++ ){
                        array_push($param,$url[$i]);
                    }
                    $controller->{$url[1]}($param);
                }
            }
            //ahora validamos si nuestra clase viene con algun metodo
            if(isset($url[1])){
                //aqui mandamos llamar dicho metodo el texto que se ingrese manda a llamar dicho metodo
                $controller->{$url[1]}();
            }else{
                $controller->render();
            }
            }else{
                $controller = new Fail();
                //si no existe se ejecutara el controlador error
            }
        }
    }

?>