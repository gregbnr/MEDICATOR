<html>
    <head>
        <title>MEDICATOR</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <?php
            include 'v_bootstrapPC.php';
        ?>
        
        
        
        <script type="text/javascript" src = "<?php echo base_url();?>JS/lesFonctions.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>JQuery/jquery-3.1.1.js"></script>
        
        
        <script>
             $(
                function()
                {
                    
                    $('#lstTypes').change
                    (                           
                            function()
                           {
                                // alert("de");
                                $('#txt1').val($('#lstTypes option:selected').text());
                           }
                    );    
                    $('#sub1').click
                    (
                        function()
                        {
                          ModifierTypeIndividu();
                        }
                    );
                    $('#sub2').click
                    (
                        function()
                        {  
                            //alert($('#lstTypes option:selected').val());
                          InsererTypeIndividu();
                            //InsererLeTypeIndividu(('#txt1').val());
                        }
                    );
                }
            );
  
        </script>
        
        
    </head>
    <body style="background-color:#F5F5F5; margin-left: 10px; margin-bottom: 10px" >
        
<!--        <a href="<?php echo base_url(); ?>index.php/Ctrl_Medicator/index"> <img src = "<?php echo base_url();?>Image/logo.png"></a><br>-->
        <div id="divTypesIndividus">
      <h1 style="font-family: Impact;" align="center"><u><i><a href="<?php echo base_url(); ?>index.php/Ctrl_Medicator/index">MEDICATOR<img src = "<?php echo base_url();?>Image/medicament.png" style="width: 50px; height: 50px;"></a></i></u></h1>
            <h2 style="font-family: Impact;" align="left">Les Types Individus</h2><br>
        <div>
            <p><i>Veuillez saisir un type d'individus :</i></p>
<!--             <div class="form-inline"><label>Depot légal:    </label> <input class="form-control" id="txtDepot" type="text"></div><br>-->
            <div class="form-inline"><input class="form-control" id="txt1" type="text">
            <input id="sub1" type="button" class="btn btn-danger" value ="Modifier"  >
            <input id="sub2" type="button" class="btn btn-success" value ="Inserer"></div><br>
        </div>
       
            <div class="form-inline">
            <select id="lstTypes" class="form-control">
                <?php 
                    foreach($lesTypesIndividus as $types)
                        {
                        $code=0;
                        ?>
                <option name='optIndividu' value="<?php echo $types->TIN_CODE; ?>"><?php echo $types->TIN_LIBELLE; ?></option> 
                <?php
                      $code = $types ->TIN_CODE + 1; 
                        }                       
                ?>
            </select>
            </div>
        
        <p id="p1" hidden><?php echo $code; ?></p>       
        <div id="div1"></div> 
        <div id="div2"></div>  <br><br>
        
        
        <button type="button" class="btn btn-primary"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_Medicator/GetMedicaments"> Medicaments </a></button>
        <button type="button" class="btn btn-primary"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_Medicator/GetMedicamentsPosologie"> Préscritpion </a></button>
        <button type="button" class="btn btn-primary"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_Medicator/GetAllMedicamentsContreIndication"> Contre Indication </a><br></button>
        <button type="button" class="btn btn-primary"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_Medicator/statistique"> Statistiques </a><br></button>
        <button type="button" class="btn btn-primary"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_Medicator/index"> Accueil </a> </button>
        </div>
    </body>
</html>
