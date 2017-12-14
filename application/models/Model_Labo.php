<?php

class Model_Labo extends CI_Model
{
    
    
    public function GetAllLabos(){
        
        $sql = $this->db->query("select * from labo");
        
        return $sql->result();
        
        
    }
    
    
    
}