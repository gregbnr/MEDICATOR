<?php

class Model_ContreIndicationPC extends CI_Model
{
  
    
     public function GetAllContreIndication(){
        $sql= $this->db->query("SELECT * FROM medicament");
        return $sql->result();
     }
     public function GetMedPerturbateursByIds($depotMed)
             {
         $sql= $this->db->query("SELECT MED_MED_PERTURBE from interagir WHERE MED_PERTURBATEUR = '".$depotMed."'");
         return $sql->result();
             }
             
    
}