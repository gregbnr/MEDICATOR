<?php

class Model_StatsPC extends CI_Model
{
  
    public function PrescriptionPlusGrandMED()
    {
     $sql = $this->db->query("select nom, max(nb) as fini FROM(select prescrire.MED_DEPOTLEGAL as nom, count(MED_DEPOTLEGAL) as nb from prescrire group by MED_DEPOTLEGAL) as rqt1");   
        return $sql->result();
    }
    public function PrecriptionTotalMED()
            {
        $sql = $this->db->query("SELECT COUNT(*) AS total FROM prescrire");   
        return $sql->result();
            }
    public function PrescriptionPlusGrandTIN()
            {
        $sql = $this->db->query("select nom, max(nb) as nombre 
FROM(select type_individu.TIN_LIBELLE as nom, count(type_individu.TIN_CODE) as nb from type_individu, prescrire where type_individu.TIN_CODE = prescrire.TIN_CODE group by type_individu.TIN_CODE) as rqt2");   
        return $sql->result();
            }
    public function PrecriptionTotalTIN()
            {
        $sql = $this->db->query("SELECT COUNT(*) AS total FROM prescrire");   
        return $sql->result();
            }
     
    
}
//select nom, max(nb)
//FROM
//(
//select prescrire.MED_DEPOTLEGAL as nom, count(MED_DEPOTLEGAL) as nb
//from prescrire
//group by MED_DEPOTLEGAL) as rqt1