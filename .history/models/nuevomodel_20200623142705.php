<?php

class NuevoModel extends Model{

    public function __construct(){
        parent:: __construct();
    }
    public function insert($datos){
        $query = $this->db->connect;
        echo 'insertar datos';
    }
}

?>