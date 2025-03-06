<?php

class mData{
    public $db;
    public function __construct(){
        $this->db = new Database;
    }

    public function getAllData(){
        $this->db->("SELECT * FROM table");
        $this->db->execute();
        return $this->db->resultSet();
   	}
}

?>