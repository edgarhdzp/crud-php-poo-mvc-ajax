<?php
//clase padre
class Controller{
    function __construct(){
        //indicamos que se cree una nueva vista para un controlador
        $this->view = new View();

    }

    function loadM($model){
        $url = 'models/'.$model.'model.php';

        if(file_exists($url)){
            require $url;

            $modelName = $model.'Model';
            $this->model = new $modelName();
        }
    }
}

?>