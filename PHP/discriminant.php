<?php 
require 'header.php'; 
require 'functions.php';
$valeur1=null;
$valeur2=null;
$valeur3=null;
    if (isset($_POST['valeur'])) {
        $valeur1=$_POST['valeur'][0];
        $valeur2=$_POST['valeur'][1];
        $valeur3=$_POST['valeur'][2];
    };

?>
<form action="/discriminant.php" method="POST">
    <input type="number" name="valeur[]" value="<?=$valeur1?>" placeholder="Entrez a" required><br>
    <br>
    <input type="number" name="valeur[]" value="<?=$valeur2?>" placeholder="Entrez b" required><br>
    <br>
    <input type="number" name="valeur[]" value="<?=$valeur3?>" placeholder="Entrez c" required><br>
    <br>
    <button type="submit">Affichez les solutions</button>
    <p>
        <?php if(isset($_POST['valeur'])):?>
        <div class="message">
        <?=afficher($valeur1,$valeur2,$valeur3);?>
        <p><strong>solution(s) : </strong><br><?=resultat($valeur1,$valeur2,$valeur3);?></p>
        </div>
        <?php else:?>
        <div class="none">
            veuillez soummetre des nombres pour l'equation
        </div>
        <?php endif;?>
    </p>
</form>
<pre>
<?php print_r($_POST)?>
</pre>

<?php require 'footer.php'; ?>'