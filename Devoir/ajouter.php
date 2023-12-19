<?php 
require 'header.php'; 

require 'ConnectBD.php';
if(count($_POST)>0){
    $exercice = $_POST['exercice'];
    $auteur = $_POST['auteur'];
    $date = $_POST['date'];
    
    //echo $exercice;
    $sql = "INSERT INTO exercice(titre,auteur,date_creation) VALUES ('$exercice', '$auteur','$date')";
    $result = $conn->query($sql);
}

$req = "SELECT * FROM exercice";
$result = $conn->query($req);
if(!$result){
    echo "Erreur";
}else{
    $datas = $result->fetchAll();
}


?>
<fieldset>
    <legend> Ajouter un exercice</legend>
    <form action="ajouter.php" method="post">
        <table>
            <tr>
                <td><label>Titre de l'exercice</label></td>
                <td><input type="text" name="exercice" id="exercice" require></td>
            </tr>
            <tr>
                <td><label>Auteur de l'exercice</label></td>
                <td><input type="text" name="auteur" id="auteur" require></td>
            </tr>
            <tr>
                <td><label>Date de creation</label></td>
                <td><input type="date" name="date" id="date" require></td>
            </tr>
        </table>
        <input type="submit" value="Envoyer">
    </form>
</fieldset>
<br/>
<br/>
<br/>
<br/>
<table width="50%" border="3px" align="center" >
    <th>id</th>
    <th>titre</th>
    <th>Auteur</th>
    <th>date</th>
    <th>Modifier</th>
    <th>Supprimer</th>

    <?php foreach($datas as $data) : ?>
        <tr>
        <td><?=$data['id']?></td>
        <td><?=$data['titre']?></td>
        <td><?=$data['auteur']?></td>
        <td><?=$data['date_creation']?></td>
        <td><a href="modifier.php?id=<?=$data['id']?>">Modifier</a></td>
        <td><a href="supprimer.php?id=<?=$data['id']?>">Supprimer</a></td>
        </tr>
    <?php endforeach; ?>
</table>
<?php require 'footer.php'; ?>