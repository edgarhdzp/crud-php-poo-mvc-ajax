<?php

class NuevoModel extends Model{

    public function __construct(){
        parent::__construct();
    }
    public function Get(){
        $items = [];

        try{
            $query = $this->db->connect()->query("SELECT * FROM task");
            while($row = $query->fetch)
        }catch(PDOException $e){
            return [];
        }
    }
}

?>