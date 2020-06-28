<?php

include_once 'alum'

class NuevoModel extends Model{

    public function __construct(){
        parent::__construct();
    }
    public function Get(){
        $items = [];

        try{
            $query = $this->db->connect()->query("SELECT * FROM task");
            while($row = $query->fetch()){
                $item = new Alumno();
                $item->nombre = $row['nombre'];
                $item->apellido =$row['apellido'];

                array_push($items, $item);
            }
        }catch(PDOException $e){
            return [];
        }
    }
}

?>