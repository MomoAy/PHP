<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nom = Verifier($_POST['nom']);
    $prenom = Verifier($_POST['prenom']);
    $email = Verifier($_POST['email']);
    $numero = Verifier($_POST['numero']);
}

function Verifier($var){
    $var = trim($var);
    $var = stripslashes($var);
    $var = htmlspecialchars($var);
    return $var;
}

echo "$nom $prenom a pour email $email et pour numero $numero";

if (isset($_COOKIE["momo"])){
    echo "Votre valeur de sesson est  " . $_COOKIE["momo"];
}
//print_r($_COOKIE);