<?php

class Model_TypeIndividu extends CI_Model
{
  
    public function GetAllTypesIndividus()
    {
     $sql = $this->db->query("Select * from type_individu");   
        return $sql->result();
    }
    public function InsererLeTypeIndividu($data2,$data)
            {
            $sql = $this->db->query("INSERT INTO type_individu values('".$data2."','".$data."')");  
            //return $sql->result();
            }
    public function ModifierLeTypeIndividu($data,$data2)
            {
            $sql = $this->db->query("UPDATE type_individu SET TIN_LIBELLE='".$data."'WHERE TIN_CODE =".$data2);
            //return $sql->result();
            }
    
}
//Select max(TIN_CODE), TIN_LIBELLE from type_individu;

//UPDATE type_individu SET TIN_LIBELLE='Enfant' WHERE TIN_CODE =2