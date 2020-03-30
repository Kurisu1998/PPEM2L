<?php
 include("entete.php"); 
 include("../nav/nav.php"); 
  include("../includes/v_connexion.php"); 
 include("../includes/v_emploi.php"); 
 ?>

<table class="table table-striped table-dark">
<caption class="bg-primary text-white">Offres d'emplois</caption>
  <thead>
    <tr>
      
      <th scope="col">Nom de l'emploi</th>
      <th scope="col">Domaine</th>
      <th scope="col">Ville</th>
      <th scope="col">Date de publication</th>
      <th scope="col">Consulter</th>
    </tr>
  </thead>
  <tbody>
      <?php 
 foreach ($resultat as $emplois){
    
?>
    <tr>
     
      <td><?php echo $emplois['nom_emploi']?></td>
      <td><?php echo $emplois['domaine']?></td>
      <td><?php echo $emplois['ville']?></td>
      <td><?php echo $emplois['date_publication']?></td>
       <td><button type="button" onclick="location.href='consulter.php?id=<?= $emplois['id'] ?>'"  class="btn btn-primary" >Consulter</button></td>
    </tr>


    
  </tbody>


  <?php 
 }
  
?>
  
</table>


<?php

include("footer.php"); 
?>


