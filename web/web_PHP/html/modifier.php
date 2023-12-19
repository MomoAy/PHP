<?php
        require_once('../connect.php');
        $id=$_GET['id'];
        $reqselect = $bdd->prepare("select * from evenement where id_evenement = $id");
        $reqselect->execute();
        $retour = $reqselect->fetch();
        if(isset($_POST['boutton'])){
          $titre = $_POST["titre"];
         $description = $_POST["description"];
         $date_debut = $_POST["date_debut"];
         $date_fin = $_POST["date_fin"];
        $reqUpdate =$bdd->prepare("update evenement set titre='$titre',description ='$description',date_debut='$date_debut',date_fin='$date_fin' where id_evenement ='$id'");
        $reqUpdate->execute();
        header('location:liste.php');
        
        }
        ?>
