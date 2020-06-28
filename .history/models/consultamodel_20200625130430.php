<?php

class NuevoModel extends Model{

    public function __construct(){
        parent::__construct();
    }
    public function Get(){
        $items = [];

        try{
            $query = $this->db->connect()->query("")
        }catch(PDOException $e){
            return [];
        }
    }
}

?>