<?php
        require_once('../connect.php');

      //  if(isset($_POST['id']))
        $id = $_GET['id'];
        $reqDelete=$bdd->prepare("delete from evenement where id_evenement ='$id'");
        $reqDelete->execute();
        echo "<script> alert('Etudiant supprimé avec succès'); document.location='liste.php'; </script>";
      //where id_evenement = '$id'    
      header("Location: liste.php");
?> 