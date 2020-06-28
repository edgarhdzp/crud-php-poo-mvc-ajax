<?php

class NuevoModel extends Model{

    public function __construct(){
        parent::__construct();
    }
    public function insert($datos){
        $query = $this->db->connect()->prepare('INSERT INTO TASK (NOMBRE, APELLIDO) VALUES (:nombre, :apellido)');
        $query->execute(['nombre' => $datos['nombre'], 'apellido' => $datos['apellido']]);
        echo 'insertar datos';
    }
}

?>