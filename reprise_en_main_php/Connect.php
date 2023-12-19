<?php 
try{
    $conn = new PDO('mysql:host=localhost;dbname=rem','root',"");
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (Exception $e)
{
die('Erreur : ' . $e->getMessage());
}
?>
    