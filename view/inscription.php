<?php
 include("entete.php"); 
 include("../nav/nav.php"); 
?>
<form class="form-horizontal" method="POST">
    
  <div class="form-group">   
    <div class="col-sm-5">
      <input type="text" class="form-control" name="name" placeholder="Nom" required autofocus>
    </div>
  </div>
    
  <div class="form-group">
    <div class="col-sm-5">
      <input type="email" class="form-control" name="email" id="inputPassword3" placeholder="Email">
    </div>
  </div>
  
    <div class="form-group">
    <div class="col-sm-5">
      <input type="password" class="form-control" name="mdp" id="inputPassword3" placeholder="Mot de passe">
    </div>
  </div>
    
    <div class="form-group">
    <div class="col-sm-5">
      <input type="password" class="form-control" name="mdpu" id="inputPassword3" placeholder="Retaper à nouveau le mot de passe">
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary" name="envoyer" id="o">Envoyer</button>
    </div>
  </div>
</form>
<?php
include("../includes/v_inscription.php"); 
include("footer.php"); 
?>