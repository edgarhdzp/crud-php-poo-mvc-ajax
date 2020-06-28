<?php

include_once 'models/alumno.php';

class ConsultaModel extends Model{

    public function __construct(){
        parent::__construct();
    }
    public function Get(){
        $items = [];

        try{
            $query = $this->db->connect()->query("SELECT * FROM task");
            while($row = $query->fetch()){
                $item = new Alumno();
                $item->id = $row['id'];
                $item->nombre = $row['nombre'];
                $item->apellido =$row['apellido'];

                array_push($items, $item);
            }
            return $items;
        }catch(PDOException $e){
            return [];
        }
    }
    public function
}

?>