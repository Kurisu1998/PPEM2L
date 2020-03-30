<?php
 include("entete.php"); 
 include("../nav/nav.php"); 
  include("../includes/v_connexion.php"); 
 include("../includes/v_emploi.php"); 
 ?>
 <?php

$moli = $requete->fetch();

 echo $moli['nom_emploi'].'     '.$moli['domaine'].'    '.$moli['ville'].'   '.$moli['date_publication']; 
?>

<?php


include("footer.php"); 
?>
