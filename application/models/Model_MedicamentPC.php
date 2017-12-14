<?php

class Model_MedicamentPC extends CI_Model
{
    public function GetAllMedicaments(){
        $sql= $this->db->query("SELECT * FROM medicament");
        return $sql->result();
    }
    public function InsererLeMedicament($depot,$nom,$famille,$compo,$effets,$contreindic,$prix)
            {
        $sql = $this->db->query("INSERT INTO medicament value('".$depot."','".$nom."','".$famille."','".$compo."','".$effets."','".$contreindic."','".$prix."')");
            }
    public function GetMedicamentById($depot){
        $sql= $this->db->query("SELECT * FROM medicament where MED_DEPOTLEGAL='".$depot."'");
        return $sql->result();
    }      
    public function ModifierLeMedicament($nom,$famille,$compo,$effets,$contreindic,$prix,$idMedicament)
            {
        $sql = $this->db->query("UPDATE medicament SET MED_NOMCOMMERCIAL='".$nom."',FAM_CODE='".$famille."',MED_COMPOSITION='".$compo."',MED_EFFETS='".$effets."',MED_CONTREINDIC='".$contreindic."',MED_PRIXECHANTILLON='".$prix."' WHERE  MED_DEPOTLEGAL= '".$idMedicament."'");
            }
}
//INSERT INTO type_individu values('".$data2."','".$data.
//("INSERT INTO type_individu values('".$data2."','".$data."')")