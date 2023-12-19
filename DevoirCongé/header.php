<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if(isset($title)){echo $title;}else{echo"Mon site";}?></title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
    <header>
        <h1>GestCom</h1>
        <ul>
            <li><a href="Acceuil.php">Acceuil</a></li>
            <li><a href="Produit.php">Produit</a></li>
            <li><a href="Categorie.php">Categories</a></li>
            <li><a href="Detailler.php">Details</a></li>
            <li><a href="Facture.php">Facture</a></li>
            <li><a href="Client.php">Client</a></li>
            <li><a href="Fournisseur.php">Fournisseur</a></li>
        </ul>
        <button><a href="Login.php">Connexion</a></button>
    </header>
