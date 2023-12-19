<?php $title = "Details"; require 'header.php';require '../fonctions.php';
$detail = [
    "idProd" => "Id produit",
    "IdFact" => "Id Facture",
    "Qte" => "Quantité"
];
?>

<div class="body-container">

    <form method="post" action="">
        <div class="form-container">
            <?php foreach ($detail as $key => $value): ?>
                <?php if(strstr($key, "Id") || strstr($key, "Qte")):?>
                    <?=div("number", $key, $value)?>
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
