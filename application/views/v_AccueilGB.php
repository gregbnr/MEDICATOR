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
         
         <div style="border-color: black; height:auto; overflow:auto">
        <h1 style="font-family: Impact;" align="center"><u><i><a href="<?php echo base_url(); ?>index.php/Ctrl_Start/index">MEDICATOR<img src = "<?php echo base_url();?>Image/medicament.png" style="width: 50px; height: 50px;"></a></i></u></h1>
        <p>
            <h2 class="text-center">Bienvenue, sur l'application MEDICATOR</h2>
            <h4 class="text-center" ><i> Gestion des visiteurs</i></h4>
        </p>
        </div>
         <div class="form-inline"align="center">
         <button class="btn btn-primary"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_MedicatorG/GetRegion">Région</a></button>
        <br><br>
        <button class="btn btn-primary"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_MedicatorG/GetVisiteur">Visiteur</a></button>
        <br><br>
        <button class="btn btn-primary"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_MedicatorG/GetLocalisation">Localisation</a></button>
        <br><br>
        <button class="btn btn-primary"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_MedicatorG/GetAPI">Statistiques diverses</a></button>
        <br><br>
        <button class="btn btn-danger"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_Start/index">Choix des fonctionnalités</a></button>
         </div>
         
    </body>
</html>
