<table border="1.5">    
            <thead>
                <tr> <th>Medicament_Perturbé</th></tr>
            </thead>  
            <?php 
                    foreach($lesPerturbateurs as $perturbateur)
                        {   
                        ?>
            <tbody>
                <tr>
                    <td><?php echo $perturbateur->MED_MED_PERTURBE; ?></td>
                </tr>

            </tbody>
            <?php 
                        }                       
                ?>
</table>