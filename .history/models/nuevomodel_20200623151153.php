<?php

class NuevoModel extends Model{

    public function __construct(){
        parent:: __construct();
    }
    public function insert($datos){
        $query = $this->db->connect()->prepare('INSERT INTO T (nombre, apellido) values (:nombre, :apellido)');
        $query->execute(['nombre' => $datos['nombre'], 'apellido' => $datos['apellido']]);
        echo 'insertar datos';
    }
}

?>