<?php 
require_once '../connect.php';
$reqselect = $bdd->prepare("select * from evenement");
$reqselect->execute();
$retourderequete = $reqselect->fetchAll();

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste</title>
    <!-- <link rel="stylesheet" href="./style.css"> -->
    <link rel="stylesheet" href="../css/liste.css">
  </head>
  <body>
    <!-- en haut -->
    <div class="navtop">MON AGENDA</div>
    <!-- a gauche -->
    <div class="navleft">
      <ul>
        <!-- <li><a href="/html/index.html">Ajout</a></li> -->
        <li><a href="#">Listes</a></li>
        <li><a href="calendrier.php">Calendrier</a></li>
        <li><a href="details.php">Details</a></li>
        <li><a href="calendrier2.php">Mois</a></li>
        <li><a href="calendrier3.php">Jour</a></li>
      </ul>
    </div>
    <div class="container">
      <div class="bouton">
        <a href="index.php" class="bouton"><input type="submit"
            value="Ajouter"></a>
        <a href="calendrier.php" class="bouton"><input type="submit"
            value="Calendrier"></a>
      </div>
      <div class="liste">
        <table>
          <thead>
            <tr>
              <th>Titre</th>
              <th>Description</th>
              <th>Début</th>
              <th>Fin</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <?php foreach ($retourderequete as $valeur) {?>
              <td><?php echo $valeur['titre'] ?></td>
              <td><?php echo $valeur['description'] ?></td>
              <td><?php echo $valeur['date_debut'] ?></td>
              <td><?php echo $valeur['date_fin'] ?></td>
              <td>
                <div class="action">
                <a href="index.php?id=<?=$valeur['id_evenement']?>"><button name="bouton">Modifier</button></a>
                <button><a href="supprimer.php?id=<?=$valeur['id_evenement']?>" onclick="return confirm('Voulez-vous réélement supprimer cet evenement?')">Supprimer</a></button>
                <a href="details.php"><button>Details</button></a>
              </div>
              </td>
            </tr>
            <?php } ?>

            <!-- <tr>
              <td>Lorem ips .</td>
              <td>Lorem ips .</td>
              <td>03/07/2023</td>
              <td>03/07/2023</td>
              <td>
                <div class="action">
                <a href="index.php"><button>Modifier</button></a>
                <button>Supprimer</button>
                <a href="details.php"><button>Details</button></a>
              </div>
              </td>
            </tr>
            <tr>
              <td>Lorem ips .</td>
              <td>Lorem ips .</td>
              <td>03/07/2023</td>
              <td>03/07/2023</td>
              <td>
                <div class="action">
                <a href="index.php"><button>Modifier</button></a>
                <button>Supprimer</button>
                <a href="details.php"><button>Details</button></a>
              </div>
              </td>
            </tr>
            <tr>
              <td>Lorem ips .</td>
              <td>Lorem ips .</td>
              <td>03/07/2023</td>
              <td>03/07/2023</td>
              <td>
                <div class="action">
                <a href="index.php"><button>Modifier</button></a>
                <button>Supprimer</button>
                <a href="details.php"><button>Details</button></a>
              </div>
              </td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>
                <div class="action">
                <a href="index.php"><button>Modifier</button></a>
                <button>Supprimer</button>
                <a href="details.php"><button>Details</button></a>
              </div>
              </td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>
                <div class="action">
                <a href="index.php"><button>Modifier</button></a>
                <button>Supprimer</button>
                <a href="details.php"><button>Details</button></a>
              </div>
              </td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>
                <div class="action">
                <a href="index.php"><button>Modifier</button></a>
                <button>Supprimer</button>
                <a href="details.php"><button>Details</button></a>
              </div>
              </td>
            </tr> -->
          </tbody>
        </table>
      </div>
    </div>
  </body>
</html>