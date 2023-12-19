<?php $title = "Produit"; require 'header.php';require '../fonctions.php';
$produit=[
    "IdCat" => "Id Categorie",
    "LibProd" => "Libellé du produit",
    "PuProd" => "Prix unitaire du produit",
    "InfoProd" => "Info du produit",
    "ImgProd" => "Image du produit"
];
?>

<div class="body-container">

    <form method="post" action="" enctype="multipart/form-data">
    <div class="form-container">
        <?php foreach ($produit as $key => $value): ?>
            <?php if(strstr($key, "Id") || strstr($key, "Pu")) :?>
                <?=div("number", $key, $value)?>
            <?php elseif(strstr($key, "Img")) :?>
                <?=div("file", $key, $value)?>
            <?php elseif(strstr($key, "Info")) :?>
                <div class="cont">
                    <label for=<?=$key?>><?=$value?></label>
                    <textarea name=<?=$key?> id=<?=$key?> cols="20" rows="2"></textarea>
                </div>
            <?php else :?>
                <?=div("text", $key, $value)?>
            <?php endif;?>
        <?php endforeach;?>
        <div class="button">
            <button type="submit">Valider</button>
            <button type="reset">Annuler</button>
        </div>
    </div>
    </form>

</div>
<?php require "footer.php";
