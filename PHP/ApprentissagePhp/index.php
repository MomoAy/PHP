<?php require "header.php"; ?>

<!-- <a href="Presentation.php?planete=Terre&satellite=Lune">Allez dans la page de presentation</a> -->

  <form action="Presentation.php" method="post">
    <label>Nom d'utilisateur :</label>
    <input type="text" name="username">
    <label>Mot de passe :</label>
    <input type="password" name="password">
    <input type="submit" value="Soumettre">
    <input type="reset" value="Réinitialiser">
  </form>
<?php require "footer.php"; ?>
