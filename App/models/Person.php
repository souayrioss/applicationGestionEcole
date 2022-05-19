<?php 
class Person{
    private $db;
    
    public function __construct()
    {
        $this->db = new Database;
    }
    public function getPerson(){
        $this->db->query("SELECT * FROM person");
        return $this->db->resultSet();
    }
}