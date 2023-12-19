<?php
session_start();
print_r($_SESSION);
echo $_SESSION['Nom'];
echo $_SESSION['notes'][2];

?>
<a href="formulaire_destroy.php">Destruction de la variable session</a>