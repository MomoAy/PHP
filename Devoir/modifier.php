<?php 
require 'header.php'; 

require 'ConnectBD.php';
if ($_SERVER['REQUEST_METHOD'] == 'GET') {

$id = $_GET['id'];
$req = "SELECT * FROM exercice WHERE id = '$id'";
$result = $conn->query($req);
if(!$result){
    echo "Erreur";
}else{
    $datas = $result->fetchAll();
}

}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $exerciceu = $_POST['exercice'];
    $auteuru = $_POST['auteur'];
    $dateu = $_POST['date'];

    
    $sql = "UPDATE exercice set titre='$exerciceu' ,auteur='$auteuru',date_creation='$dateu' where id='$id'";
    $result = $conn->query($sql);

    header("Location:ajouter.php");
}

?>
<fieldset>
    <legend> Ajouter un exercice</legend>
    <form action="modifier.php" method="post">
    <?php foreach($datas as $data) : ?>

        <table>
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
            <tr>
                <td><label>Titre de l'exercice</label></td>
                <td><input type="text" name="exercice" id="exercice" value="<?=$data['titre']?>"></td>
            </tr>
            <tr>
                <td><label>Auteur de l'exercice</label></td>
                <td><input type="text" name="auteur" id="auteur" value="<?=$data['auteur']?>"></td>
            </tr>
            <tr>
                <td><label>Date de creation</label></td>
                <td><input type="date" name="date" id="date" value="<?=$data['date_creation']?>"></td>
            </tr>
        </table>
    <?php endforeach; ?>

        <input type="submit" value="Modifier">
    </form>
</fieldset>


<?php require 'footer.php'; ?>