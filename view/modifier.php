<?php
 include("entete.php"); 
 include("nav_admin.php"); 
  include("../includes/v_connexion.php"); 
 include("../includes/v_emploi.php"); 
 include("bien_admin.php"); 
 
 
 ?>
<?php

$mol = $requete->fetch();
?>

<form class="form-horizontal" method="POST">
    
  
  <div class="form-group">
    <div class="col-sm-5">
      <input type="text" class="form-control" name="nom" id="inputPassword3" placeholder="Nom de l'emploi" value="<?php echo $mol['nom_emploi']; ?>">
    </div>
  </div>
  
    <div class="form-group">
    <div class="col-sm-5">
        <input type="text" class="form-control" name="domaine" id="inputPassword3" placeholder="Domaine" value="<?php echo $mol['domaine']; ?>">
    </div>
  </div>
    
    <div class="form-group">
    <div class="col-sm-5">
        <input type="text" class="form-control" name="ville" id="inputPassword3" placeholder="Ville" value="<?php echo $mol['ville']; ?>">
    </div>
  </div>
    
    <div class="form-group">   
    <div class="col-sm-5">
      <input type="date" class="form-control" name="date" placeholder="Date de publication" value="<?php echo $mol['date_publication']; ?>">
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary" name="modifier" id="o">Modifier</button>
    </div>
  </div>
    
    
</form>

<?php


include("footer.php"); 
?>
