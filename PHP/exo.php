<?php require 'header.php'; 
if(isset($_POST['nom']) && isset($_POST['pnom']) && isset($_POST['age']) && isset($_POST['langue']) && isset($_POST['competence']) ){
    $nom = $_POST['nom'];
    $pnom = $_POST['pnom'];
    $age = $_POST['age'];
    $langue = $_POST['langue'];
    $competences = $_POST['competence'];
}
?>
<h1 align="center">Bienvenu sur notre page. Voici vos informations : </h1>
<p>
    Nom : <?=$nom?> <br>
    Prenom : <?=$pnom?> <br>
    Age : <?=$age?> <br>
    Langue : <?=$langue?> <br>
</p>
<h2 align="center">Vous avez les competences suivantes : </h2>
<ul>
    <?php foreach ($competences as $competence) : ?>
        <li><?=$competence?></li>
    <?php endforeach ?>
</ul>
<?php require 'footer.php'; ?>