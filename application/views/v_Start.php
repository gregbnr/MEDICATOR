<html>
<head>
	<title>NewMEDICATOR</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
            include 'v_bootstrapPC.php';
        ?>
</head>
<body style="background-color:#F5F5F5; margin-left: 10px; margin-bottom: 10px" >
        <div style="border-color: black; height:auto; overflow:auto">
        <h1 style="font-family: Impact;" align="center"><u><i><a href="<?php echo base_url(); ?>index.php/Ctrl_Start/index">MEDICATOR<img src = "<?php echo base_url();?>Image/medicament.png" style="width: 50px; height: 50px;"></a></i></u></h1>
        <p>
            <h2 class="text-center">Bienvenue, sur l'application MEDICATOR</h2>
            <h4 class="text-center" ><i> Sélectionnez la fonctionnalité souhaité</i></h4></br>
        </p>
        </div>
  
    <div align="center">
        <button type="button" class="btn btn-primary"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_Medicator/index"> Gestion des medicaments </a></button></br></br>
        <button type="button" class="btn btn-primary"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_MedicatorG/index"> Gestion des visiteurs </a></button>
    </div>
</body>
</html>
