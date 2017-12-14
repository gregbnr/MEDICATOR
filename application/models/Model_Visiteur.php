<?php


class Model_Visiteur extends CI_Model
{
    
    public function GetAllVisiteurs(){
        
        $sql = $this->db->query("select * from visiteur order by VIS_DATEEMBAUCHE DESC");
        
        return $sql->result();
        
    }
    
    
    public function InsererVisiteur($matricule, $nom, $prenom, $adresse, $cp, $ville, $dateE, $codeSec, $codeLabo){
        
        $sql = $this->db->query("INSERT INTO visiteur value('".$matricule."','".$nom."','".$prenom."','".$adresse."','".$cp."','".$ville."','".$dateE."','".$codeSec."','".$codeLabo."')");
        
        
        
        
    }
    
    
    public function ModifierVisiteur($nom, $prenom, $adresse, $cp, $ville, $dateE, $codeSec, $codeLabo, $idVisiteur){
        
        $sql = $this->db->query("UPDATE visiteur SET VIS_NOM='".$nom."',Vis_PRENOM='".$prenom."',VIS_ADRESSE='".$adresse."',VIS_CP='".$cp."',VIS_VILLE='".$ville."',VIS_DATEEMBAUCHE='".$dateE."',SEC_CODE='".$codeSec."',LAB_CODE='".$codeLabo."' WHERE VIS_MATRICULE = '".$idVisiteur."'");
    }
    
    
    
    
    
    
}