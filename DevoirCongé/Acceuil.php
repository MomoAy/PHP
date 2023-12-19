<?php $title = "Acceuil"; require 'header.php';
$tcards=[
    "Produit" => "../produits.png",
    "Categorie" => "../categorie.png",
    "Detailler" => "../Detail.png",
    "Facture" => "../facture.jpg",
    "Client" => "../clients.jpg",
    "Fournisseur" =>" ../fournisseur.png"
]
?>
<div class="container">
<?php foreach($tcards as $key =>$value) :?>
        <div class="card">
            <a href="<?=$key.".php"?>">
                <img src="<?=$value?>">
                <h2><?=$key?></h2>
            </a>
        </div>
<?php endforeach; ?>
</div>
<?php require "footer.php";
