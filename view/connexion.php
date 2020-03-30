<?php
 include("entete.php"); 
include("../nav/nav.php");
 ?>

<form method="POST" class="form-horizontal">
    
 
    
  <div class="form-group">
    <div class="col-sm-5">
        <input type="email" class="form-control" name="email" id="inputPassword3" placeholder="Email" required autofocus>
    </div>
  </div>
  
    <div class="form-group">
    <div class="col-sm-5">
      <input type="password" class="form-control" name="psw" id="inputPassword3" placeholder="Mot de passe">
    </div>
  </div>
    
   
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary" name="connexion" id="o">Connexion</button>
    </div>
  </div>

</form>
  
<?php
include("../includes/v_connexion.php"); 
include("footer.php"); 
?>
