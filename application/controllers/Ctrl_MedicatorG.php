<?php

class Ctrl_MedicatorG extends CI_Controller 
{
        public function index()
    {
       
        
        $this->load->view("v_AccueilGB");
        
        
        
    }

    
    //PAGE REGION
    
    
    public function GetRegion(){
        
        
        
         //Appel du Model : Model_Region
        $this->load->model("Model_Region");  
        
        //Appel de la fonction dans Model_Region
        $data['lesRegions']= $this->Model_Region->GetAllRegions();
        
       
        
        //Appel de la view
        $this->load->view("v_Region", $data);
    }
    
    
    
    
    public function ModifierUneRegion(){
        
        $data1 = $_POST['nomregion'];
        $idRegion = $_POST['idRegion'];
//            echo($data1);
//            echo($idRegion);
            
           $this->load->model("Model_Region");
           $this->Model_Region->ModifierRegion($data1,$idRegion);
    }
    
    
    //PAGE VISITEUR 
    
    public function GetVisiteur(){
        
        
        
        
        $this->load->model("Model_Visiteur");
        $this->load->model("Model_Secteur");
        $this->load->model("Model_Labo");
        
        
        $data['lesVisiteurs'] = $this->Model_Visiteur->GetAllVisiteurs();
        $data['lesSecteurs'] = $this->Model_Secteur->GetAllSecteurs();
        $data['lesLabos'] = $this->Model_Labo->GetAllLabos();
        
        
        
              
        $this->load->view("v_Visiteur", $data);
        
        
    }
    
    
    
    
    public function InsertionVisiteur(){
        
        $matricule = $_POST['matricule'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $adresse = $_POST['adresse'];
        $cp = $_POST['cp'];
        $ville = $_POST['ville'];
        $dateE = $_POST['dateE'];
        $codeSec = $_POST['codeSec'];
        $codeLabo = $_POST['codeLabo'];
        
        $this->load->model("Model_Visiteur");
        $this->Model_Visiteur->InsererVisiteur($matricule, $nom, $prenom, $adresse, $cp, $ville, $dateE, $codeSec, $codeLabo);
        
        
        
    }
    
    public function ModificationVisiteur(){
        
        
        
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $adresse = $_POST['adresse'];
        $cp = $_POST['cp'];
        $ville = $_POST['ville'];
        $dateE = $_POST['dateE'];
        $codeSec = $_POST['codeSec'];
        $codeLabo = $_POST['codeLabo'];
        $idVisiteur = $_POST['idVisiteur'];
        
        $this->load->model("Model_Visiteur");
        $this->Model_Visiteur->ModifierVisiteur($nom, $prenom, $adresse, $cp, $ville, $dateE, $codeSec, $codeLabo, $idVisiteur);
        
        
    }
    
    
    public function GetLocalisation(){
        
        
        $this->load->model("Model_Visiteur");
        $this->load->model("Model_Region");
        
        
        $data['lesVisiteurs'] = $this->Model_Visiteur->GetAllVisiteurs();
        $data['lesRegions'] = $this->Model_Region->GetAllRegions();
        
        
        $this->load->view("v_Localisation", $data);
        
        
        
    }
    
    
    public function InsertionTravailleur(){
        
        $matriculeT = $_POST['matriculeT'];
        $dateT = $_POST['dateT'];
        $codeRegT = $_POST['codeRegT'];
        $commentaireT = $_POST['commentaireT'];
        
        $this->load->model("Model_Localisation");
        
        $this->Model_Localisation->InsererTavail($matriculeT, $dateT, $codeRegT, $commentaireT);
        
        
        
    }
    
    
    public function GetAPI(){
        
        $this->load->model("Model_StatVisiteur");
        
        $data['visNord'] = $this->Model_StatVisiteur->GetVisNord();
        $data['visEst'] = $this->Model_StatVisiteur->GetVisEst();
        $data['visSud'] = $this->Model_StatVisiteur->GetVisSud();
        $data['visOuest'] = $this->Model_StatVisiteur->GetVisOuest();
        $data['visParis'] = $this->Model_StatVisiteur->GetVisParis();
        
        $this->load->view("v_API", $data);
        
        
    }
    
    
}




