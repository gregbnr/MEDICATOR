<html>
<head>
	<title>MEDICATOR</title>
         <meta charset="UTF-8">
<!--     <meta http-equiv="refresh" content="40" />-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <?php
            include 'v_bootstrapPC.php';
        ?>
        
        <script type="text/javascript" src = "<?php echo base_url();?>JS/lesFonctions.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>JQuery/jquery-3.1.1.js"></script>
        <script type="text/javascript">
            $(
                    function()
                    {
                       
                     // va chercher le ctrl 
                      
                        $('#btnValider').click
                        (
                            function()
                            {
                                InsererPosologie();
                                alert('id medicament:'+$('#txtDepot').val()+' type prise     :'+$('#lstDosages option:selected').val()+' type individus:'+$('#lstTypes option:selected').val()+' saisie: '+$('#txtPoso').val());
                            }        
                        )
               
   

                        $('tr').click
                        (
                                function()
                        {
                            
                            $('#txtDepot').val($(this).children(0).eq(0).text());
                            $('#txtNom').val($(this).children(0).eq(1).text());
                            $('#txtFam').val($(this).children(0).eq(2).text());
                            $('#txtCompo').val($(this).children(0).eq(3).text());
                            $('#txtEffets').val($(this).children(0).eq(4).text());
                            $('#txtContre').val($(this).children(0).eq(5).text());
                            $('#txtPrix').val($(this).children(0).eq(6).text());
//                           //}
//                           
                        }
                        );
                       
                }
                
               );
        </script>
</head>
<body style="background-color:#F5F5F5; margin-left: 10px; margin-bottom: 10px" >
    
<!--    <div class="progress" id="progress25">
  <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>-->
    <h1 style="font-family: Impact;" align="center"><u><i><a href="<?php echo base_url(); ?>index.php/Ctrl_Medicator/index">MEDICATOR<img src = "<?php echo base_url();?>Image/medicament.png" style="width: 50px; height: 50px;"></a></i></u></h1>
    
    <h2 style="font-family: Impact;" >Prescription</h2><br>
        <div class="form-inline"><label>Depot légal:    </label> <input class="form-control" id="txtDepot" type="text"></div><br>
        <div class="form-inline"><label>Nom Comercial: </label><input class="form-control" id="txtNom" type="text"></div><br>
        <div class="form-inline"><label>Famille: </label><input class="form-control" id="txtFam" type="text"></div><br>
        <div class="form-inline"><label>Composition: </label><input class="form-control" id="txtCompo" type="text"></div><br>
        <div class="form-inline"><label>Effets: </label><input class="form-control" id="txtEffets" type="text"></div><br>
        <div class="form-inline"><label>Contre indication: </label><input class="form-control" id="txtContre" type="text"></div><br>
        <div class="form-inline"><label>Prix echantillon: </label><input class="form-control" id="txtPrix" type="text"></div><br>
       
        <div class="form-inline">
        <select id="lstTypes" class="form-control">
                <?php 
                    foreach($lesTypesIndividusPosologie as $types)
                        {
                        $idIndividus = 0;
                        ?>
                <option name='optIndividu' value="<?php echo $types->TIN_CODE; ?>"><?php echo $types->TIN_LIBELLE; ?></option> 
                <?php
                        $idIndividus = $types->TIN_CODE + 1;
                        }                       
                ?>
            </select>
        <select id="lstDosages" class="form-control">
                <?php 
                    foreach($lesDosages as $dosages)
                        {
                        $idTypePrise = 0;
                        ?>
                <option name='optDosage' value="<?php echo $dosages->DOS_CODE; ?>"><?php echo $dosages->DOS_UNITE; ?></option> 
                <?php
                        $idTypePrise = $dosages->DOS_CODE;
                        }                       
                ?>
            </select>
            
        <label>Veuillez saisir la posologie (en mg ou en qté):</label><input <input class="form-control" id="txtPoso" type="text"> <input id="btnValider" type="button" class="btn btn-success" value="Valider"> </div>   
        
        
        
    <table border="1.5"class="table table-striped">
            <thead class="thead-dark">
                <tr> <th>Depot</th><th>Nom</th><th>Code</th><th>Composition</th><th>Effets</th><th>Contre-indication</th><th>Prix</th></tr>
            </thead>
                <?php 
                 
                    foreach($lesMedicamentsPosologie as $medicament)
                        {
                            
                        ?>
            <tbody>
                <tr>
                    <td><?php echo $medicament->MED_DEPOTLEGAL; ?></td>
                    <td><?php echo $medicament->MED_NOMCOMMERCIAL;?></td>
                    <td><?php echo $medicament->FAM_CODE;?></td>
                    <td><?php echo $medicament->MED_COMPOSITION;?></td>
                    <td><?php echo $medicament->MED_EFFETS;?></td>
                    <td><?php echo $medicament->MED_CONTREINDIC;?></td>
                    <td><?php echo $medicament->MED_PRIXECHANTILLON;?></td>
                </tr>

            </tbody>
                 <?php 

                        }                       
                ?>
        
        </table>
        
        


    <div id="div3"></div>
    <div id="div5"></div>
    <button type="button"  class="btn btn-primary"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_Medicator/GetTypesIndividus"> Types individus </a></button>
    <button type="button"  class="btn btn-primary"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_Medicator/GetMedicaments"> Medicaments </a></button>
    <button type="button"  class="btn btn-primary"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_Medicator/GetAllMedicamentsContreIndication"> Contre Indication </a></button>
    <button type="button"  class="btn btn-primary"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_Medicator/statistique"> Statistiques </a></button>
    <button type="button"  class="btn btn-primary"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_Medicator/index"> Accueil </a></button> 
</body>
</html>
