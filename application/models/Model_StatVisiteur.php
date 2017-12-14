<?php

class Model_StatVisiteur extends CI_Model
{
    
    
    
    
    public function GetVisNord(){
        
        $sql = $this->db->query("select COUNT(VIS_MATRICULE) AS nbNord from visiteur where SEC_CODE = 'N'");
        
        return $sql->result();
        
        
    }
    
    public function GetVisEst(){
        
        $sql = $this->db->query("select COUNT(VIS_MATRICULE) AS nbEst from visiteur where SEC_CODE = 'E'");
        
        return $sql->result();
        
        
    }
    
    public function GetVisSud(){
        
        $sql = $this->db->query("select COUNT(VIS_MATRICULE) AS nbSud from visiteur where SEC_CODE = 'S'");
        
        return $sql->result();
        
        
    }
    
    public function GetVisOuest(){
        
        $sql = $this->db->query("select COUNT(VIS_MATRICULE) AS nbOuest from visiteur where SEC_CODE = 'O'");
        
        return $sql->result();
        
        
    }
    
    public function GetVisParis(){
        
        $sql = $this->db->query("select COUNT(VIS_MATRICULE) AS nbParis from visiteur where SEC_CODE = 'P'");
        
        return $sql->result();
        
        
    }
    
}