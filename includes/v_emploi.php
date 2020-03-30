<?php

include("bdd.php");       
$requete = $bdd->prepare("SELECT * FROM emploi ");



$execute = $requete->execute();

$resultat = $requete->fetchAll();




  
if(isset($_GET['supprime']) && !empty($_GET['supprime'])){
    $supprime = (int) $_GET['supprime'];
    $del = $bdd->prepare("DELETE FROM emploi WHERE id = ?");
    if($del->execute(array($supprime))){
        header("Location: emploi_admin.php");
    }
}
    

   if(isset($_POST['modifier'])){
       
       if(isset($_POST['nom']) && !empty($_POST['nom'])){
           
           if(isset($_POST['domaine']) && !empty($_POST['domaine'])){
               
               if(isset($_POST['ville']) && !empty($_POST['ville'])){
                   
                 if(isset($_POST['date']) && !empty($_POST['date'])){
                   
           $newpseudo = htmlspecialchars($_POST['nom']);
           $domaine = htmlspecialchars($_POST['domaine']);
           $ville = htmlspecialchars($_POST['ville']);
           $date = $_POST['date'];
          
         
           $id = (int) $_GET['id'];
      $insertpseudo = $bdd->prepare("UPDATE emploi SET  nom_emploi = ?, domaine = ?, ville = ?, date_publication = ? WHERE id = ?");
      if($insertpseudo->execute(array($newpseudo,$domaine,$ville,$date,$id))){
          header("Location: emploi_admin.php");
      }else{
          echo 'non';
      }
                   
                 }
               }
           }
      
      
      
       }
      
   }
 if(isset($_POST['ajouter'])){
    if(!empty($_POST['nomm']) && !empty($_POST['domainee']) && !empty($_POST['villee']) && !empty($_POST['datee'])){
        $name = htmlspecialchars($_POST['nomm']);
        $dom = htmlspecialchars($_POST['domainee']);
        $vil = htmlspecialchars($_POST['villee']);
        $dat = $_POST['datee'];
        
            
            $insertemploi = $bdd->prepare("INSERT INTO emploi(nom_emploi,domaine,ville,date_publication) VALUES(?,?,?,?)");
            if($insertemploi->execute(array($name,$dom,$vil,$dat))){
                 header("Location: emploi_admin.php");
            }
        
    }else{
        echo '<p>Tous les champs doivent être remplie</p>';
    }
}     
     
   
    


?>
    
     
       