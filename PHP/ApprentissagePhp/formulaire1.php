<?php require "header.php" ?>

  <form action="cible.php" method="post"> 
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom"  required>

    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" name="prenom"  required>

    <label for="email">E-mail :</label>
    <input type="email" id="email" name="email"  required>

    <label for="numero">Numéro de téléphone :</label>
    <input type="tel" id="numero" name="numero"  required>

    <label for="message">Message :</label>
    <textarea id="message" name="message" rows="10" ></textarea>

    <input type="submit" value="Envoyer">
    <input type="reset" value="Rénitialiser">
  </form>
<?php
$cnom = "momo";

$cprenom = "mard";

setcookie($cnom, $cprenom, time() + 3600, '/', 'C:\xampp\htdocs\PHP\ApprentissagePhp', false, true);
?>
<?php require "footer.php" ?>