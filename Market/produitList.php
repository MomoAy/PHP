<?php
require 'config.php';
$sql='select p.*,c.lib_cat
 from produit p, categorie c
 where c.id_cat=p.id_cat
 ';
$reponse=$bdd->query($sql);
$data=$reponse->fetchAll();

?>

<table border=2>
    <tr>
      <th>id_prod</th>
      <th>Categorie</th>
      <th>Nom</th>
      <th>Prix</th>
      <th>Infos</th>
      <th>Image</th>
    </tr>
    <?php
    foreach($data as $cat){
      echo'  <tr>
            <td>'.$cat['id_prod'].'</td>
            <td>'.$cat['lib_cat'].'</td>
            <td>'.$cat['lib_prod'].'</td>
            <td>'.$cat['pu_prod'].'</td>
            <td>'.$cat['info_prod'].'</td>
            <td>'.$cat['img_prod'].'</td>
        </tr>'; } 
    ?>
</table>
