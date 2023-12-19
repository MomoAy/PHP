<?php
$aDeviner = 150;
require 'header.php';
$erreur = null;
$succes = null;
$value = null;
if (isset($_POST['chiffre']) ) {
    $value=(int)$_POST['chiffre'];
    if ($_POST['chiffre'] < $aDeviner){
        $erreur= "le nombre ".$value." est trop petit";
    } elseif($_POST['chiffre']>$aDeviner) {
        $erreur= "le nombre ".$value." est trop grand";
    }else{
        $succes = "Bravo!!! c'est le bon nombre";
    }
}
?>
<?php if($erreur) : ?>
<div class="echec"><?=$erreur;?></div>
<?php elseif($succes) : ?>
<div class="succes"><?=$succes;?></div>
<?php endif; ?>

<form action="jeu.php" method="post">
    <input type="number" name="chiffre" placeholder="Entrez un nombre entre 0 et 500" value="<?= $value?>">
    <button type="submit">Valider</button>
</form>
<pre>
    <?php print_r($_POST)?>
</pre>
<?php require 'footer.php';?>