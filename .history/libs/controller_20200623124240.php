<?php
//clase padre
class Controller{
    function __construct(){
        //indicamos que se cree una nueva vista para un controlador
        $this->view = new View();

    }

    function loalModel($model){
        $url = 'models/'.$model.'model.php'
    }
}

?>