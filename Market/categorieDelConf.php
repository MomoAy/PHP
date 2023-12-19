<?php 
# connexion a la base
require 'config.php';

$cat = $_GET['id'];
$sql="select * from categorie where id_cat = '$cat'";
$reponse=$bdd->query($sql);
$data=$reponse->fetchAll();
echo '<pre>';
//print_r ($data);
echo '</pre>';
?>
<h1>T'es sûr de vouloir supprimer??</h1>
<table border=2>
    <tr>
      <th>id</th>
      <th>Categorie</th>
    </tr>
    <?php
    foreach($data as $cat){
      echo'  <tr>
            <td>'.$cat['id_cat'].'</td>
            <td>'.$cat['lib_cat'].'</td>
        </tr>'; } 
    ?>
</table>
<form action="categorieDelOk.php" method="POST">
    <input type="hidden" name="txtCat" id="txtCat" value="<?php echo $cat['id_cat'];?>">
    <input type="submit" value="Supprimer" >
    <button>Annuler</button>
</form>