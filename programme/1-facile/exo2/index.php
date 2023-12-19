<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 1 : Variables & ternaires"; //Mettre le nom du titre de la page que vous voulez

$nom = "Marie";
$age = 30;
$homme = false;

$nom2 = "Pierre";
$age2 = 32;
$homme2 = true;
?>

<!-- mettre ici le code -->
<?php
echo "$nom à $age ans et c'est ";
echo ($homme) ? "un Homme" : "une Femme";
echo "<br/>";
echo "$nom2 à $age2 ans et c'est ";
echo ($homme2) ? "un Homme" : "une Femme";

?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
