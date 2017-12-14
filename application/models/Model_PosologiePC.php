<?php

class Model_PosologiePC extends CI_Model
{
  
    public function GetAllTypesIndividusPosologie()
    {
     $sql = $this->db->query("Select * from type_individu");   
        return $sql->result();
    }
     public function GetAllMedicamentsPosologie(){
        $sql= $this->db->query("SELECT * FROM medicament");
        return $sql->result();
    }
    public function GetAllDosage()
            {
                $sql=$this->db->query("SELECT * FROM dosage");
                return $sql->result();
            }
   public function InsererPrescription($depot,$typeIndiv,$dosage,$description)
           {
       $sql = $this->db->query("INSERT INTO prescrire value('".$depot."','".$typeIndiv."','".$dosage."','".$description."')");
           }
     
    
}