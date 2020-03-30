<?php
 include("../view/entete.php");
 include("../view/nav_admin.php"); 
 include("../includes/v_connexion.php"); 
?>
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

<div class="container col-sm-10 col-md-10 col-lg-10 mt-10">
    <div class="card">
        <h3 class="card-header" id="monthAndYear"></h3>
        <table class="table table-bordered table-responsive-sm" id="calendar">
            <thead>
            <tr>
                <th>Dim</th>
                <th>Lun</th>
                <th>Mar</th>
                <th>Mer</th>
                <th>Jeu</th>
                <th>Ven</th>
                <th>Sam</th>
            </tr>
            </thead>

            <tbody id="calendar-body">

            </tbody>
        </table>

        <div class="form-inline">

            <button class="btn btn-outline-primary col-sm-6" id="previous" onclick="previous()">Previous</button>

            <button class="btn btn-outline-primary col-sm-6" id="next" onclick="next()">Next</button>
        </div>
         <div >

            <button class="btn btn-primary col-sm-6" id="previous" onclick="previous()">Modifier</button>

           <button class="btn btn-danger col-sm-6" id="next" onclick="next()">Supprimer</button>
        </div>
        <br/>
        <form class="form-inline">
            <label class="lead mr-2 ml-2" for="month">Jump To: </label>
            <select class="form-control col-sm-4" name="month" id="month" onchange="jump()">
                <option value=0>Janvier</option>
                <option value=1>Fevrier</option>
                <option value=2>Mars</option>
                <option value=3>Avril</option>
                <option value=4>Mai</option>
                <option value=5>Juin</option>
                <option value=6>Juillet</option>
                <option value=7>Août</option>
                <option value=8>Septembre</option>
                <option value=9>Octobre</option>
                <option value=10>Novembre</option>
                <option value=11>Decembre</option>
            </select>


            <label for="year"></label><select class="form-control col-sm-4" name="year" id="year" onchange="jump()">
            <option value=2019>2019</option>
            <option value=2020>2020</option>
            <option value=2021>2021</option>
            <option value=2022>2022</option>
            <option value=2023>2023</option>
            <option value=2024>2024</option>
            <option value=2025>2025</option>
            <option value=2026>2026</option>
            <option value=2027>2027</option>
            <option value=2028>2028</option>
            <option value=2029>2029</option>
            <option value=2030>2030</option>
        </select>
        </form>
        
    </div>
</div>
<script src="../js/date.js"></script>
<?php
include("../view/footer.php"); 
?>


