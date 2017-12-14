<html>
  <head>
      <title>Statistique</title>
      <link rel="shortcut icon" type="image/x-icon" href="Image/medicament.png" />
    
    <?php
    include 'bootstrap.php';
    ?>
    
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
            
     
            
            
          ['Task', 'Hours per Day'],                     
          [<?php
                foreach($visNord as $vN){
                    echo "'Nord', $vN->nbNord";
                }
          ?>],
          [<?php
                foreach($visEst as $vE){
                    echo "'Est', $vE->nbEst";
                }
          ?>],
          [<?php
                foreach($visSud as $vS){
                    echo "'Sud', $vS->nbSud";
                }
          ?>],
          [<?php
                foreach($visOuest as $vO){
                    echo "'Ouest', $vO->nbOuest";
                }
          ?>],
          [<?php
                foreach($visParis as $vP){
                    echo "'Paris', $vP->nbParis";
                }
          ?>]
        ]);

        var options = {
          title: 'Statistique des visiteurs par région'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body style="background-color: #F5F5F5; margin-left: 10px; margin-bottom: 10px;">
      <h1 style="font-family: Impact;" align="center"><u><i><a href="<?php echo base_url(); ?>index.php/Ctrl_MedicatorG/index">MEDICATOR</a></i></u></h1>
      <br>
      
    <div id="piechart" style="width: 900px; height: 500px;"></div>
    

    
    <br><br>
    
    <button class="btn btn-primary"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_MedicatorG/GetRegion">Région</a></button>

        <button class="btn btn-primary"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_MedicatorG/GetVisiteur">Visiteur</a></button>

        <button class="btn btn-primary"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_MedicatorG/GetLocalisation">Localisation</a></button>

        <button class="btn btn-primary"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_MedicatorG/index">Accueil</a></button>
        
        
        
    
  </body>
</html>