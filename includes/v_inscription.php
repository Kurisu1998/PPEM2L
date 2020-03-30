<?php

include("bdd.php");
if(isset($_POST['envoyer'])){
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['mdp']) && !empty($_POST['mdpu'])){
        $name = htmlspecialchars($_POST['name']);
        $mail = htmlspecialchars($_POST['email']);
        $mdp = sha1($_POST['mdp']);
        $mdpu = sha1($_POST['mdpu']);
        if($mdp == $mdpu){
            
            $insertmrbs = $bdd->prepare("INSERT INTO mrbs_users(name,password,email) VALUES(?,?,?)");
            $insertmrbs->execute(array($name,$mdp,$mail));
            echo 'ok';
        }else{
            echo '<p>le mot de passe doit être le même</p>';
        }
    }else{
        echo '<p>Tous les champs doivent être remplie</p>';
    }
}
?>