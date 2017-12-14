<?php

class Model_Region extends CI_Model
{
    
    public function GetAllRegions()
    {
        $sql = $this->db->query("select * from region, secteur where region.SEC_CODE = secteur.SEC_CODE order by REG_NOM");
        
        return $sql->result();
        
    }
    
    public function ModifierRegion($data1,$idRegion){
        
      
        $sql = $this->db->query("UPDATE region SET REG_NOM='".$data1."' where REG_CODE = '".$idRegion."'");
        // Pas de résultat à récupérer ICI : c'est un update !!!!
        //return $sql->result();
        
    }
    
    
    
    
}