<?php

class Database{
    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;

    public function __construct(){
        $this->host = constant('HOST');
        $this->host = constant('DB');
        $this->host = constant('USER');
        $this->host = constant('PA');
        $this->host = constant('HOST');

    }
}

?>