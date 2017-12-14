<?php

class Model_Localisation extends CI_Model
{
    
    public function InsererTavail($matriculeT, $dateT, $codeRegT, $commentaireT){
        
        $sql = $this->db->query("INSERT INTO travailler value('".$matriculeT."','".$dateT."','".$codeRegT."','".$commentaireT."')");
        
    }
    
    
    
}