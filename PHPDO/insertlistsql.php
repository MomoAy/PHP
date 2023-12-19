<?php require 'config.php';

 $requete = "SELECT * FROM clients ORDER BY id_client ASC";
$result = $conn->query($requete);
if(!$result){
    echo "Erreur";
}else{
    $datas = $result->fetchAll();
}