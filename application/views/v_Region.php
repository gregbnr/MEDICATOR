<html>
    <head>
        <title>Région</title>
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
                $('#lstRegion').change(function(){
                        //alert('salut');
                        $('#idRegion').val($('#lstRegion').val());
                        $('#codeRegion').val($('#lstRegion').val());
                        $('#nomRegion').val($('#lstRegion option:selected').text());
                        $('#secteur').val($('#lstRegion option:selected').attr('name'));
                    });
            
            
            {
                $('#sub1').click(function(){
                    //alert($('#nomRegion').val());
                    //alert($('#lstRegion option:selected').text());
                    //alert($('#lstRegion option:selected').attr('name'));
                    //alert($('#lstRegion').val());
                    //alert($('#idRegion').val());
                    ModifierLaRegion();
                });
            };
        
        });
       
        </script>
        
        
    </head>
    <body style="background-color: #F5F5F5; margin-left: 10px; margin-bottom: 10px;">
        
        <h1 style="font-family: Impact;" align="center"><u><i><a href="<?php echo base_url(); ?>index.php/Ctrl_MedicatorG/index">MEDICATOR</a></i></u></h1>
            <h2 style="font-family: Impact;">Les Régions</h2><br>
        
       
        
       
        <label>Cliquez sur la région à modifier :</label> <br><br>
    
        <div class="form-inline"><select class="form-control" id="lstRegion">
                
                    <?php


                    foreach ($lesRegions as $region)
                    {
                    ?>
                

                <option name="<?php echo $region->SEC_LIBELLE; ?>" value="<?php echo $region->REG_CODE; ?>"><?php echo $region->REG_NOM; ?></option>
                    
                    <?php
                    }
                    ?>
            </select></div>
       
        <br><br>
        <div>
            <input id="idRegion" hidden="" value="">
            <div class="form-inline"><label>Code Région :</label> <input class="form-control" id="codeRegion" disabled></div><br>
            <div class="form-inline"><label>Secteur :</label> <input class="form-control" id="secteur" disabled></div><br>
            <div class="form-inline"><label>Nom de la Région :</label> <input class="form-control" id="nomRegion" type="text"> <input class="btn btn-danger" id="sub1" type="button" value ="Modifier"  >
            
            
        </div></div>
        
        <div id="divR"></div>
        
        <br>
        
      

        <button class="btn btn-primary"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_MedicatorG/GetVisiteur">Visiteur</a></button>
        
        <button class="btn btn-primary"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_MedicatorG/GetLocalisation">Localisation</a></button>
        
        <button class="btn btn-primary"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_MedicatorG/GetAPI">Statistiques diverses</a></button>
        
        <button class="btn btn-primary"><a style="color: white;" href="<?php echo base_url(); ?>">Accueil</a></button>

        
    </body>
</html>

