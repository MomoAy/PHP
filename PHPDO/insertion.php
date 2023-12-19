<?php 
require 'insertsql.php';
?>
<!DOCTYPE html>
<html>
<head>
<style>
/* CSS pour le style du formulaire */
form {
  width: 300px;
  padding: 20px;
  margin: 0 auto;
  background-color: #f2f2f2;
}
label {
font-weight: bold;
display: block;
margin-bottom: 10px;
}

input[type="text"], input[type="email"] {
width: 100%;
padding: 12px 20px;
margin: 8px 0;
box-sizing: border-box;
border: 2px solid #ccc;
border-radius: 4px;
}

input[type="number"] {
width: 100%;
padding: 12px 20px;
margin: 8px 0;
box-sizing: border-box;
border: 2px solid #ccc;
border-radius: 4px;
}

input[type="submit"] {
width: 100%;
background-color: #4CAF50;
color: white;
padding: 14px 20px;
margin: 8px 0;
border: none;
border-radius: 4px;
cursor: pointer;
}

input[type="reset"] {
width: 100%;
background-color: #4CAF50;
color: white;
padding: 14px 20px;
margin: 8px 0;
border: none;
border-radius: 4px;
cursor: pointer;
}

input[type="submit"]:hover {
background-color: #45a049;
}
input[type="reset"]:hover {
background-color: #45a049;
}

</style>

</head>
<body>
<form method="post" action="insertion.php">

<label for="nom">Nom</label>
<input type="text" id="nom" name="nom" required>

<label for="prenom">Prénom</label>
<input type="text" id="prenom" name="prenom" required>

<label for="age">Age</label>
<input type="number" id="age" name="age" required>

<label for="adresse">Adresse</label>
<input type="text" id="adresse" name="adresse" required>

<label for="ville">Ville</label>
<input type="text" id="ville" name="ville" required>

<label for="mail">Email</label>
<input type="email" id="mail" name="mail" required>

<input type="submit" value="Envoyer">
<input type="reset" value="Annuler">
<?php
// $url = "https://localhost:80/web2/helloworld.php?id=2";

//fonction permettant de prtitionner l'url
// $url_c = parse_url($url);
//pour voir comment l'url a été partitionner
// print_r($url_c);
//Afficher les parties
// echo "Host: " . $url_c['host'] . "\n";
// echo "Path: " . $url_c['path'] . "\n";
// echo "les valeurs apres le \'?\': " . $url_c['query'] . "\n";
// print_r($_GET);
// echo "---------------------------------------------------------------";


?>
</form> 
</body>
</html>