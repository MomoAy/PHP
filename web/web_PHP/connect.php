<?php

try{
    $bdd = new PDO('mysql:host=127.0.0.1;dbname=agenda','root','');
    
}catch(Exception $ex1){
    die("erreur :".$ex1->getMessage());
}

?>
