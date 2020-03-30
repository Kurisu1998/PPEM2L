<?php
 include("../view/entete.php"); 
 include("../view/nav_admin.php"); 
  include("../includes/v_connexion.php"); 
 include("../includes/v_emploi.php"); 
  include("../view/bien_admin.php"); 
  
  ?>
<form class="form-horizontal" method="POST">
    
  
  <div class="form-group">
    <div class="col-sm-5">
      <input type="text" class="form-control" name="nomm" id="inputPassword3" placeholder="nom de l'emploi" >
    </div>
  </div>
  
    <div class="form-group">
    <div class="col-sm-5">
        <input type="text" class="form-control" name="domainee" id="inputPassword3" placeholder="Domaine" >
    </div>
  </div>
    
    <div class="form-group">
    <div class="col-sm-5">
        <input type="text" class="form-control" name="villee" id="inputPassword3" placeholder="Ville" >
    </div>
  </div>
    
    <div class="form-group">   
    <div class="col-sm-5">
      <input type="date" class="form-control" name="datee" placeholder="Date de publication">
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary" name="ajouter" id="o">Ajouter</button>
    </div>
  </div>
    
    
</form>
<?php
include("../view/footer.php"); 
?>