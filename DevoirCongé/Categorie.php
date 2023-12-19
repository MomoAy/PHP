<?php $title = "Catégorie"; require 'header.php';require '../fonctions.php';
$categories=[
    "LibCat" => "Libellé Categorie"
];
?>
<div class="body-container">

    <form method="post" action="">
        <div class="form-container">
            <?php foreach($categories as $key => $value) : ?>
                <?=div("text",$key,$value)?>
            <?php endforeach; ?>
            <div class="button">
                <button type="submit">Valider</button>
                <button type="reset">Annuler</button>
            </div>
        </div>
    </form>

</div>
<?php require "footer.php";
