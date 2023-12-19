<?php
    if (isset($_GET['txtnom'])&&isset($_GET['txtprenom']))
    {
        $nom = $_GET['txtnom'];
        $Prenom = $_GET['txtprenom'];
        echo "Je me nomme ".$nom." ".$Prenom;
        echo " <br/>";
        echo "Je me nomme $nom $Prenom";

    }
?>
