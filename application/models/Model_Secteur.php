<?php

class Model_Secteur extends CI_Model
{
    
    
    
    public function GetAllSecteurs(){
        
        $sql = $this->db->query("select * from secteur");
        
        return $sql->result();
        
        
    }
    
    
    
}