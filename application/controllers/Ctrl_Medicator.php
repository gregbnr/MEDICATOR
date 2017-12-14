<?php
class Ctrl_Medicator extends CI_Controller
{
      public function index()
    {
       
            
            $this->load->view("v_AccueilPC");
            
            
    }
  public function GetTypesIndividus()
        {
            
        
            //Appel du Model: Model_TypeIndividu
            $this->load->model("Model_TypeIndividu");
            
            //Appel de la fonction GetAllTypesIndividus() dans le model
            $data['lesTypesIndividus'] = $this->Model_TypeIndividu->GetAllTypesIndividus();
            
            $this->load->view("v_TypeIndividu",$data);
        }
public function InsertionLeTypeIndividu()
        {
            $data=$_POST['libelle'];    
            $data2=$_POST['code'];
            //echo $data;
            //echo $data2;
            
           // echo($data);
            $this->load->model("Model_TypeIndividu");
           $this->Model_TypeIndividu->InsererLeTypeIndividu($data2,$data);
           
           $this->GetTypesIndividus();
           
           // Attention ici tu recharges toutes la vue
           // DONC problème d'affichage
           // Je te laisse gérer :)
            //$this->load->view("v_TypeIndividu",$data); 
            }
            //Il faut que je reagarde, si il est necessaire de créer une nouvelle view
public function ModificationLeTypeIndividu()
        {
            $data=$_POST['nvlibelle'];
            $data2=$_POST['code'];
            
            //echo($data);
            //echo($data2);
           $this->load->model("Model_TypeIndividu");
            $this->Model_TypeIndividu->ModifierLeTypeIndividu($data,$data2);
          // $this->load->view("v_TypeIndividu",$data); 
        } 
public function GetMedicaments()
        {
        $this->load->model("Model_MedicamentPC");
       $data['lesMedicaments'] = $this->Model_MedicamentPC->GetAllMedicaments();
        
        $this->load->view("v_MedicamentPC",$data);
        }
public function InsertionLeMedicament()
        {
            $depot = $_POST['depot'];
            $nom = $_POST['nom'];
            $famille = $_POST['famille'];
            $compo = $_POST['composition'];
            $effets = $_POST['effets'];
            // echo($effets);
            $contreindic = $_POST['contre'];
            $prix = $_POST['prix'];
            $this->load->model("Model_MedicamentPC");
            $this->Model_MedicamentPC->InsererLeMedicament($depot,$nom,$famille,$compo,$effets,$contreindic,$prix);
            
        }
public function ModificationLeMedicament()
        {
            
            $nom = $_POST['nom2'];
            $famille = $_POST['famille2'];
            $compo = $_POST['composition2'];
            $effets = $_POST['effets2'];
            $contreindic = $_POST['contre2'];
            $prix = $_POST['prix2'];
            $idMedicament = $_POST['idMedicament'];
            $this->load->model("Model_MedicamentPC");
            $this->Model_MedicamentPC->ModifierLeMedicament($nom,$famille,$compo,$effets,$contreindic,$prix,$idMedicament);
            //essai
    
        }
        
        
public function GetMedicamentsPosologie()
        {
            $this->load->model("Model_PosologiePC");
            $data['lesMedicamentsPosologie'] = $this->Model_PosologiePC->GetAllMedicamentsPosologie();
            //Appel de la fonction GetAllTypesIndividus() dans le model
            $data['lesTypesIndividusPosologie'] = $this->Model_PosologiePC->GetAllTypesIndividusPosologie();
            $data['lesDosages'] = $this->Model_PosologiePC->GetAllDosage();
            $this->load->view("v_PosologiePC",$data);
        }
public function InsertionDeLaPosologie()
        {
            $depot = $_POST['depot'];
            $typeIndiv = $_POST['typeIndiv'];
            $dosage = $_POST['dosage'];
            $description = $_POST['description'];
            $this->load->model("Model_PosologiePC");
            $this->Model_PosologiePC->InsererPrescription($depot,$typeIndiv,$dosage,$description);
        }
        
public function GetAllMedicamentsContreIndication()
        {
            
            $this->load->model("Model_ContreIndicationPC");
            $data['lesMedicaments'] = $this->Model_ContreIndicationPC->GetAllContreIndication();
           //$depotMed = $_GET['depotMed']; 
            //$data['lesContreIndic'] = $this->Model_ContreIndicationPC->GetContreIndicsByIds($depotMed);
           // $data['lesPerturbateurs']=$this->Model_ContreIndicationPC->GetMedPerturbateursByIds($depotMed);
            $this->load->view("v_ContreIndicationPC",$data);
        }     
        
        public function GetAllMedicamentsContreIndicationV2()
        {
            
            $this->load->model("Model_ContreIndicationPC");
          //  $data['lesMedicaments'] = $this->Model_ContreIndicationPC->GetAllContreIndication();
           $depotMed = $_GET['depotMed']; 
            //$data['lesContreIndic'] = $this->Model_ContreIndicationPC->GetContreIndicsByIds($depotMed);
           $data['lesPerturbateurs']=$this->Model_ContreIndicationPC->GetMedPerturbateursByIds($depotMed);
            $this->load->view("v_Perturbe",$data);
        } 
        public function statistique()
                {
            $this->load->model("Model_StatsPC");
            $data['leMaxMED'] = $this->Model_StatsPC->PrescriptionPlusGrandMED();
            $data['leTotalMED'] = $this->Model_StatsPC->PrecriptionTotalMED();
            $data['leMaxTIN'] = $this->Model_StatsPC->PrescriptionPlusGrandTIN();
            $data['leTotalTIN'] = $this->Model_StatsPC->PrecriptionTotalTIN();
            $this->load->view("v_StatsPC",$data);
                }
        }
        ?>

<!-- data:"depot="+$('#txtDepot').val()+"&nom="+$('#txtNom').val()+"&famille="+$('#txtFam').val()+"&composition="+$('#txtCompo').val()+"&effets="+$('txtEffets')+"&contre="+$('#txtContre').val()+"&prix="+$('#txtPrix').val(),-->