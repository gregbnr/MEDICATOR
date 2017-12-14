<html>
  <head>
      <?php
            include 'v_bootstrapPC.php';
        ?>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      google.charts.setOnLoadCallback(drawChart2);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],                     
          [<?php
                foreach($leMaxMED as $max){
                    echo "'$max->nom', $max->fini";
                }
          ?>],
         [<?php
                foreach($leTotalMED as $total){
                    echo "'Autres Medicaments', $total->total";
                }
          ?>]
         
        ]);

        var options = {
          title: 'Médicament le plus préscrit:'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
      function drawChart2() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],                     
          [<?php
                foreach($leMaxTIN as $max){
                    echo "'$max->nom', $max->nombre";
                }
          ?>],
         [<?php
                foreach($leTotalTIN as $total){
                    echo "'Autres Types individus', $total->total";
                }
          ?>]
         
        ]);

        var options = {
          title: 'Type Individus le plus utilisé pour une prescription:'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart2'));

        chart.draw(data, options);
      }
    </script>
  </head>
 <body style="background-color:#F5F5F5; margin-left: 10px; margin-bottom: 10px" >
      <h1 style="font-family: Impact;" align="center"><u><i><a href="<?php echo base_url(); ?>index.php/Ctrl_Medicator/index">MEDICATOR<img src = "<?php echo base_url();?>Image/medicament.png" style="width: 50px; height: 50px;"></a></i></u></h1>
     
    <div id="piechart"  style="width: 900px; height: 500px;"></div><br>
    <div id="piechart2" style="width: 900px; height: 500px;"></div>
    <button type="button"  class="btn btn-primary"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_Medicator/GetTypesIndividus"> Types individus </a></button>
    <button type="button"  class="btn btn-primary"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_Medicator/GetMedicaments"> Medicaments </a></button>
    <button type="button"  class="btn btn-primary"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_Medicator/GetMedicamentsPosologie"> Préscritpion </a></button>
    <button type="button"  class="btn btn-primary"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_Medicator/GetAllMedicamentsContreIndication"> Contre Indication </a></button>
    <button type="button"  class="btn btn-primary"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_Medicator/index"> Accueil </a> </button>
  </body>
</html>