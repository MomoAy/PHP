 <?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 1 : Variables"; //Mettre le nom du titre de la page que vous voulez
$a = 3;
$b = 5;
$c = 7;
?>

<!-- mettre ici le code -->
<h2 align="center">**********AVANT PERMUTATION**********</h2>
<p align="center">A : <?=$a?> </p>
<p align="center">B : <?=$b?> </p>
<p align="center">c : <?=$c?> </p>
<?php 
$temp = $a;
$a = $b;
$b = $c;
$c = $temp;
?>
<h2 align="center">**********APRES PERMUTATION**********</h2>
<p align="center">A : <?=$a?> </p>
<p align="center">B : <?=$b?> </p>
<p align="center">c : <?=$c?> </p>
<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
