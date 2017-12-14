<html>
    <head>
        <title>MEDICATOR</title>
        <?php
        include 'bootstrap.php';
        ?>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" type="image/x-icon" href="Image/medicament.png" />
    </head>
     <body style="background-color: #F5F5F5;">
         <button class="btn btn-primary"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_MedicatorG/GetRegion">Région</a></button>
        <br>
        <button class="btn btn-primary"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_MedicatorG/GetVisiteur">Visiteur</a></button>
        <br>
        <button class="btn btn-primary"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_MedicatorG/GetLocalisation">Localisation</a></button>
        <br>
        <button class="btn btn-primary"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_MedicatorG/GetAPI">Statistiques diverses</a></button>
        
    </body>
</html>
