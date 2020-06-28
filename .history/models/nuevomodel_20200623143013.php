<?php

class NuevoModel extends Model{

    public function __construct(){
        parent:: __construct();
    }
    public function insert($datos){
        $query = $this->db->connect()->prepare('INSERT INTO task (name, description) values (:nombre, :apellido)');
        $query->execute
        echo 'insertar datos';
    }
}

?>