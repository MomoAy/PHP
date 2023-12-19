<?php
require 'config.php';

if (count($_POST)>0) {
    $nom = Verifier($_POST["nom"]);
    $prenom = Verifier($_POST["prenom"]);
    $age = Verifier($_POST["age"]);
    $adresse = Verifier($_POST["adresse"]);
    $ville = Verifier($_POST["ville"]);
    $mail = Verifier($_POST["mail"]);

    $sql = "INSERT INTO clients(nom, age, prenom, adresse, ville, mail) VALUES ('$nom', $age,'$prenom' , '$adresse', '$ville', '$mail')";
    $requete = $conn->prepare($sql);
    $result = $requete->execute();
    // $result = $conn->query($requete);
    if (!$result) {
        echo "une erreur s'est produite";
    }else{
        header("Location:index.php");
    }
    
}

function Verifier($var){
    $var = trim($var);
    $var = stripslashes($var);
    $var = htmlspecialchars($var);
    return $var;
}



?>