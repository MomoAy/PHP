<?php 
require 'config.php';
if(empty($_POST['id_client'])){
    header("Location:form_modif.php");
}

$id_client = $_POST['id_client'];
$requete = "SELECT * FROM clients WHERE id_client = '$id_client'";
$result = $conn->query($requete);
$datas = $result->fetchAll();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Page d'accueil</title>
</head>
<body>
<form method="post" action="modif.php">
<?php foreach($datas as $data ) : ?>

<label for="nom">Nom</label>
<input type="text" id="nom" name="nom" value="<?=$data['nom']?>">

<label for="prenom">Prénom</label>
<input type="text" id="prenom" name="prenom" value="<?=$data['prenom']?>">

<label for="age">Age</label>
<input type="number" id="age" name="age" value="<?=$data['age']?>">

<label for="adresse">Adresse</label>
<input type="text" id="adresse" name="adresse" value="<?=$data['adresse']?>">

<label for="ville">Ville</label>
<input type="text" id="ville" name="ville" value="<?=$data['ville']?>">

<label for="mail">Email</label>
<input type="email" id="mail" name="mail" value="<?=$data['mail']?>">

<?php endforeach; ?>
<input type="submit" value="Modifier" name="Modifier">
<input type="reset" value="Annuler">
</form>
</body>
</html>