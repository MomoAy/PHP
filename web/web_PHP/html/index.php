<?php 
    require_once("../connect.php");
    if(isset($_POST["bouton"])){
      $titre = $_POST["titre"];
      $description = $_POST["description"];
      $date_debut = $_POST["date_debut"];
      $date_fin = $_POST["date_fin"];

      if($titre ==="" || $description ==="" || $date_debut ==="" || $date_fin ===""){
        echo "veuillez remplir tous les champs";
      }else{

        $reqajout=$bdd->prepare("insert into evenement(titre,description,date_debut,date_fin) values('$titre', '$description', '$date_debut', '$date_fin')");
        $reqajout->execute();
        header('Location: liste.php');
      }
    }
    ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajout</title>
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
    <!-- en haut -->
    <div class="navtop">MON AGENDA</div>
    <!-- a gauche -->
    <div class="navleft">
      <ul>
        <li><a href="#">Ajout</a></li>
        <li><a href="liste.php">Listes</a></li>
        <li><a href="calendrier.php">Calendrier</a></li>
        <li><a href="details.php">Details</a></li>
        <li><a href="calendrier2.php">Mois</a></li>
        <li><a href="calendrier3.php">Jour</a></li>
      </ul>

    </div>
    <!-- Formulaire -->

    <div class="formulaire">
      <form action="" method="post">
        <div class="row">
          <input type="text" placeholder="Titre de l'événement" name="titre" required>
          <textarea placeholder="Description" name="description" rows="0" cols="10"></textarea>
        </div>
        <div class="row">
          <input type="date" placeholder="Date de début" name="date_debut" required>
          <input type="date" placeholder="Date de fin" name="date_fin" required>
        </div>
        <div class="bloc">
          <button type="submit" name="bouton">Ajouter</button>
          <button type="reset"><a href="liste.php">Annuler</a></button>
        </div>
      </form>
    </div>

    
  </body>
</html>