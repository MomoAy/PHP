<?php 
try
{
//$bdd = new PDO('mysql:host=localhost;dbname=dbmarket', 'root','');
$bdd = new PDO('mysql:host=localhost;dbname=db_market_2', 'root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
echo 'Connexion reussie !';
}catch (Exception $e)
{
die('Erreur : ' . $e->getMessage());
}
?>