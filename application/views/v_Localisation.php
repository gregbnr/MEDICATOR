<html>
    <head>
        <title>Localisation</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" type="image/x-icon" href="Image/medicament.png" />
        
        <?php
        include 'bootstrap.php';
        ?>
        
        <script type="text/javascript" src="<?php echo base_url(); ?>JS/lesFonctionsG.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>JQuery/jquery-3.1.1.js"></script>
        
        
        <script type="text/javascript">
        
        
        
         $(
            function()
            {
                $('#lstVis').change(function(){
                        //alert('salut');
                        $('#visSelect').val($('#lstVis option:selected').text());
                        $('#visDate').val($('#lstVis option:selected').attr('name'));
                        //alert($('#lstVis option:selected').val())
                        //alert($('#lstVis option:selected').attr('name'));
                        
                    });
            
        {
            $('#lstReg').change(function(){
                        $('#regSelect').val($('#lstReg option:selected').text());
                        //alert($('#lstReg option:selected').val());
            });
            
            
        }
            
        {
            $(btnT).click(function(){
                //alert($('#textareaT').val());
                InsererUnTravailleur();
                alert("Vous avez selectionné "+$('#lstVis option:selected').text()+" travaillant depuis "+$('#lstVis option:selected').attr('name')+" dans la région "+$('#lstReg option:selected').text());
                
            });
        }
            
            });
        
        
        
        

            
        
        </script>
        
        
        
        
        
        
        
    </head>
    <body style="background-color: #F5F5F5; margin-left: 10px; margin-bottom: 10px;">
        <h1 style="font-family: Impact;" align="center"><u><i><a href="<?php echo base_url(); ?>index.php/Ctrl_MedicatorG/index">MEDICATOR</a></i></u></h1>
            <h2 style="font-family: Impact;">Localisation</h2><br>
        
        
        <div class="form-inline"><label>Selectionnez un visiteur et la région dans laquelle il travaille :</label><br><br>
        
            <select class="form-control" id="lstVis">
            
            <?php


                    foreach($lesVisiteurs as $visiteur)
                    {
                    ?>
                

                <option name="<?php echo $visiteur->VIS_DATEEMBAUCHE; ?>" value="<?php echo $visiteur->VIS_MATRICULE; ?>"><?php echo $visiteur->VIS_NOM; ?></option>
                    
                    <?php
                    }
                    ?>
            
                
            
            
            
        </select>
        
            <input class="form-control" type="text" id="visSelect" placeholder="Visiteur sélectionné" disabled></div>
        
        <br>
        
        <div class="form-inline"><label>Date d'embauche : </label> <input class="form-control" type="text" id="visDate" disabled></div>
        
        <br>
        
        <div class="form-inline">
            <select class="form-control" id="lstReg">
                
                    <?php


                    foreach ($lesRegions as $region)
                    {
                    ?>
                

                <option value="<?php echo $region->REG_CODE; ?>"><?php echo $region->REG_NOM; ?></option>
                    
                    <?php
                    }
                    ?>
        </select>
        
            <input class="form-control" type="text" id="regSelect" placeholder="Région sélectionnée" disabled></div>
        
        <br>
        
        <textarea class="form-control" id="textareaT" placeholder="Ajouter un commentaire sur le travail du visiteur..." style="height: 100px; width: 350px;"></textarea>
        
        <br>
        
        
        <input class="btn btn-success" type="button" id="btnT" value="Insérer"><br>
        
        <div id="divT" hidden></div>
            
        <br>
        
        <button class="btn btn-primary"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_MedicatorG/GetRegion">Région</a></button>
 
        <button class="btn btn-primary"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_MedicatorG/GetVisiteur">Visiteur</a></button>

       <button class="btn btn-primary"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_MedicatorG/GetAPI">Statistiques diverses</a></button>
        
        <button class="btn btn-primary"><a style="color: white;" href="<?php echo base_url(); ?>">Accueil</a></button>
        
        
        
        
    </body>
</html>
