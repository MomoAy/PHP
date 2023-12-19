<?php $title = "Fournisseurs"; require 'header.php';require '../fonctions.php';
$fournisseur = [
    "SigleFour" => "Sigle Fournisseur",
    "LibFour" => "Libellé Fournisseur",
    "TelFour" => "Tel. Fournisseur",
    "EmailFour" => "Email Fournisseur",
    "InfoFour" => "Autres Informations Fournisseur",
]
?>

<div class="body-container">

    <form method="post" action="">

        <div class="form-container">
            <?php foreach ($fournisseur as $key => $value): ?>
                <?php if(strstr($key, "EMail")) :?>
                    <?=div("email", $key, $value)?>
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
