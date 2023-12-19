<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 4 : Boucles for"; //Mettre le nom du titre de la page que vous voulez
$random = rand(5,15);
?>

<!-- mettre ici le code -->
<h1>Voici la table de multiplication de <?=$random?> : </h1>
<?php
for ($i = 0; $i <=10; $i++) {
    echo $random.' * '.$i.' = '.$random*$i;
    echo "<br />";
}
?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
