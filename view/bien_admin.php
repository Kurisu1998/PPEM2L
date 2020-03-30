<div class="card" id="crt">
  <div class="card-header">
     <?php
        echo $_SESSION['name'];
      ?>
  </div>
  <div class="card-body">
    <p class="card-text">Administrateur</p>
    <button class="btn btn-primary">Go somewhere</button>
    <button type="button" onclick="location.href='../view/deconnexion.php'" class="btn btn-danger">Déconnexion</button>
  </div>
</div>

