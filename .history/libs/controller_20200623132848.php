<?php
//clase padre
class Controller{
    function __construct(){
        //indicamos que se cree una nueva vista para un controlador
        $this->view = new View();

    }

    function loadModel($model){
        $url = 'models/'.$model.'model.php';

        if(file_exists($url)){
            require $url;

            $modelName =n$model.'Model';
            $this->model = new $modelName();
        }
    }
}

?>