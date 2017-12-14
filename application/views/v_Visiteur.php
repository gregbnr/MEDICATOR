<html>
    <head>
        <title>Visiteur</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" type="image/x-icon" href="Image/medicament.png" />
        
        <?php
        include 'bootstrap.php';
        ?>
        
        <script type="text/javascript" src="<?php echo base_url(); ?>JS/lesFonctionsG.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>JQuery/jquery-3.1.1.js"></script>
        
        
        <script type="text/javascript">
        
        $(function(){
            $('#btn1').click(function(){
                //alert('erreur');
                InsererLesVisiteurs();
                });
            
            $('tr').click(function(){
                $('#txtMatricule').val($(this).children(0).eq(0).text());
                $('#txtNom').val($(this).children(0).eq(1).text());
                $('#txtPrenom').val($(this).children(0).eq(2).text());
                $('#txtAdresse').val($(this).children(0).eq(3).text());
                $('#txtCP').val($(this).children(0).eq(4).text());
                $('#txtVille').val($(this).children(0).eq(5).text());
                $('#txtDateE').val($(this).children(0).eq(6).text());
                $('#txtCodeSec').val($(this).children(0).eq(7).text());
                $('#txtCodeLabo').val($(this).children(0).eq(8).text());
            });
            
            $('#btnM').click(function(){
                ModifierLesVisiteurs();
            });
            
            
        });
        
        
        
        </script>
        
        
        
        
        
    </head>
    <body style="background-color: #F5F5F5; margin-left: 10px; margin-bottom: 10px;">

        <h1 style="font-family: Impact;" align="center"><u><i><a href="<?php echo base_url(); ?>index.php/Ctrl_MedicatorG/index">MEDICATOR</a></i></u></h1>
            <h2 style="font-family: Impact;">Les Visiteurs</h2><br>
        
        
        <input id="idVisiteur" hidden="" value="">
        
        
        <div class="form-inline"><label>Matricule :</label> 
            <input class="form-control" id="txtMatricule" type="text"></div><br>
            
        <div class="form-inline"><label>Nom :</label> 
            <input class="form-control" id="txtNom" type="text"></div><br>
        
        <div class="form-inline"><label>Prénom :</label> 
        <input class="form-control" id="txtPrenom" type="text"></div><br>
        
        <div class="form-inline"><label>Adresse :</label> 
        <input class="form-control" id="txtAdresse" type="text"></div><br>
        
        <div class="form-inline"><label>Code Postal :</label> 
        <input class="form-control" id="txtCP" type="text"></div><br>
        
        <div class="form-inline"><label>Ville :</label> 
        <input class="form-control" id="txtVille" type="text"></div><br>
        
        <div class="form-inline"><label>Date d'embauche :</label> 
            <input class="form-control" id="txtDateE" type="date"></div><br>
        
        <div class="form-inline"><label>Code Secteur :</label> <!--<input id="txtCodeSec" type="text"><br><br>-->
        
            <select class="form-control" id="txtCodeSec">
                
                    <?php


                    foreach($lesSecteurs as $secteur)
                    {
                    ?>
                

                <option value="<?php echo $secteur->SEC_CODE; ?>"><?php echo $secteur->SEC_LIBELLE; ?></option>
                    
                    <?php
                    }
                    ?>
            </select></div><br>
        
        
        
        
        <div class="form-inline"><label>Code Laboratoire :</label> <!--<input id="txtCodeLabo" type="text">--> 
            
                <select class="form-control" id="txtCodeLabo">
                
                    <?php


                    foreach($lesLabos as $labo)
                    {
                    ?>
                

                <option value="<?php echo $labo->LAB_CODE; ?>"><?php echo $labo->LAB_NOM; ?></option>
                    
                    <?php
                    }
                    ?>
        </select> 
            
            
            
            
            
        <input id="btn1" type="button" value="Inserer" class="btn btn-success"> <input id="btnM" type="button" value="Modifier" class="btn btn-danger"></div>
        
        <br><br>
        
        <label style="font-weight:bold; color: green;">Cliquez sur le matricule du visiteur à modifier ou insérer un visiteur directement :</label>
        <br><br>

        
        <table border="1.5" class="table table-striped">
            <thead>
                <tr> <th>Matricule</th><th>Nom</th><th>Prénom</th><th>Adresse</th><th>CP</th><th>Ville</th><th>Date d'embauche</th><th>Code secteur</th><th>Code laboratoire</th></tr>
            </thead>
                <?php 
                 
                    foreach($lesVisiteurs as $visiteur)
                        {
                        ?>
            <tbody>
                <tr><td><?php echo $visiteur->VIS_MATRICULE; ?></td>
                    <td><?php echo $visiteur->VIS_NOM;?></td>
                    <td><?php echo $visiteur->Vis_PRENOM;?></td>
                    <td><?php echo $visiteur->VIS_ADRESSE;?></td>
                    <td><?php echo $visiteur->VIS_CP;?></td>
                    <td><?php echo $visiteur->VIS_VILLE;?></td>
                    <td><?php echo $visiteur->VIS_DATEEMBAUCHE;?></td>
                    <td><?php echo $visiteur->SEC_CODE;?></td>
                    <td><?php echo $visiteur->LAB_CODE;?></td>
                </tr>
            </tbody>
                 <?php 
                        }                       
                ?>
        
        </table>
        
        
        <div id='divV'></div>
        <div id='divM'></div>
        
        <br>


        <button class="btn btn-primary"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_MedicatorG/GetRegion">Région</a></button>
        
        <button class="btn btn-primary"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_MedicatorG/GetLocalisation">Localisation</a></button>
        
        <button class="btn btn-primary"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_MedicatorG/GetAPI">Statistiques diverses</a></button>
        
        <button class="btn btn-primary"><a style="color: white;" href="<?php echo base_url(); ?>">Accueil</a></button>

    </body>
</html>
