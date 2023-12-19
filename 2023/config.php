<?php 
try
{
$bdd = new PDO('mysql:host=localhost;dbname=dbmarket', 'root', '');
//echo 'Connexion reussi !';
}catch (Exception $e)
{
die('Erreur : ' . $e->getMessage());
}
?>