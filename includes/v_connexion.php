<?php

session_start();
include("bdd.php");
if(isset($_POST['connexion'])){
    $mail = htmlspecialchars($_POST['email']);
    $mdp = sha1($_POST['psw']);
    if(!empty($mail) && !empty($mdp)){
        
      $selectmrbs = $bdd->prepare("SELECT * FROM mrbs_users WHERE email = ? AND password = ?");
      $selectmrbs->execute(array($mail,$mdp));
      $userexist = $selectmrbs->rowCount();
     
        if($userexist == 1){
           $userinfo = $selectmrbs->fetch();
           $_SESSION['id'] = $userinfo['id'];
           $_SESSION['name'] = $userinfo['name'];
           $_SESSION['level'] = $userinfo['level'];
           if($_SESSION['level'] == 2){
               header("Location: admin.php");
           }else{
               header("Location: accueil.php");
           }
           
            
            
        }else{
            echo "<p>mot de passe ou l'adresse mail incorrect </p>";
        }
    }else{
        echo '<p>Tous les champs doivent être remplie</p>';
    }
}
