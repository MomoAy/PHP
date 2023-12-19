<?php $title = "Facture"; require 'header.php';require '../fonctions.php';
$facture = [
    "IdFour" => "Id Fournisseur",
    "IdClient" => "Id Client",
    "DateFact" => "Date Facture",
    "RemiseFact" => "Remise Facture",
    "LivraisonFact" => "Livraison Facture",
    "InfoFact" => "Observation Facture",
]
?>

<div class="body-container">

    <form method="post" action="">

        <div class="form-container">
            <?php foreach ($facture as $key => $value): ?>
                <?php if(strstr($key, "Id") || strstr($key, "Remise")) :?>
                    <?=div("number", $key, $value)?>
                <?php elseif(strstr($key, "Info")) :?>
                    <div class="cont">
                        <label for=<?=$key?>><?=$value?></label>
                        <textarea name=<?=$key?> id=<?=$key?> cols="20" rows="2"></textarea>
                    </div>
                <?php elseif (strstr($key, "Date")) :?>
                    <?=div("date", $key, $value)?>
                <?php elseif (strstr($key, "Livraison")) :?>
                    <?=div("datetime", $key, $value)?>
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
