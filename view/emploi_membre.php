<?php
 include("../view/entete.php"); 
 include("../view/nav_membre.php"); 
 include("../includes/v_emploi.php"); 
 include("../view/membre.php");
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
 while($resultat = $requete->fetch()){
    
?>
    <tr>
     
      <td><?php echo $resultat['nom_emploi']?></td>
      <td><?php echo $resultat['domaine']?></td>
      <td><?php echo $resultat['ville']?></td>
      <td><?php echo $resultat['date_publication']?></td>
       <td><button type="button" onclick="location.href='#'"  class="btn btn-primary" >Consulter</button></td>
    </tr>
   
    
  </tbody>
  <?php 
 }
  
?>
  
</table>



<?php

include("../view/footer.php"); 
?>


