<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 3 : Les tests"; //Mettre le nom du titre de la page que vous voulez

$random = rand(1,20);
?>

<!-- mettre ici le code -->
<h1>Le chiffre est : <?=$random?></h1>
<?php 

if( $random>0 && $random<6 ){
    echo "Le chiffre est compris entre 1 et 5";
}else if( $random>5 && $random<11 ){
    echo "Le chiffre est compris entre 6 et 10";
}else if( $random>10 && $random<16 ){
    echo "Le chiffre est compris entre 11 et 15";
}else{
    echo "Le chiffre est compris entre 16 et 20";
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
