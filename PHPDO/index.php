<?php require "insertlistsql.php";?>
<!DOCTYPE html>
<html>
<head>
  <title>Page d'accueil</title>
  <style>
    /* CSS pour la navbar */
    nav {
      background-color: #333;
      overflow: hidden;
    }
    nav ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
}

nav li {
  float: left;
}

nav a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

nav a:hover {
  background-color: #111;
}

/* CSS pour le contenu de la page */
.contenu {
  text-align: center;
  padding: 50px;
}

.bouton {
  background-color: #4CAF50;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.bouton:hover {
  background-color: #3e8e41;
}

</style>
</head>
<body>
  <header>
    <nav>
      <ul>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="insertion.php">Inscription</a></li>
        <li><a href="form_modif.php">Modifier</a></li>
      </ul>
    </nav>
  </header>
  <div class="contenu">
    <h1>Bienvenue sur notre site !</h1>
    <p>Ici vous pourrez vous inscrire à nos différents événements.</p>
    <a href="insertion.php" class="bouton">S'inscrire</a>
  </div>
  <h1 align="center">La liste des clients</h1>
  <table width="50%" border="3px" align="center"> 
    <th>#</th>
    <th>Nom</th>
    <th>Prenom</th>
    <th>Mail</th>
    <th>Age</th>
    <th>Adresse</th>
    <th>Ville</th>
    <?php 
    //print_r($datas);
    foreach($datas as $data):?>
      <tr>
        <td><?=$data['id_client'] ?></td>
        <td><?=$data['nom'] ?></td>
        <td><?=$data['prenom'] ?></td>
        <td><?=$data['mail'] ?></td>
        <td><?=$data['age'] ?></td>
        <td><?=$data['adresse'] ?></td>
        <td><?=$data['ville']; ?></td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>
</html>