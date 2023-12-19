<?php 
require 'config.php';
$sql='select * from categorie';
$reponse=$bdd->query($sql);
$data=$reponse->fetchAll();
echo '<pre>';
//print_r ($data);
echo '</pre>';
?>
<table border=2>
    <tr>
      <th>id</th>
      <th>Categorie</th>
      <th>Modifier</th>
      <th>Supprimer</th>
    </tr>
    <?php
    foreach($data as $cat){
      echo'  <tr>
            <td>'.$cat['id_cat'].'</td>
            <td>'.$cat['lib_cat'].'</td>
            <td></td>
            <td><a href="categorieDelConf.php?id='.$cat['id_cat'].'">Supprimer</a></td>
        </tr>'; } 
    ?>
</table>