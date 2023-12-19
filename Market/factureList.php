<?php
require 'config.php';
$sql='SELECT fa.*,f.id_four, c.nom_client
 FROM facture fa, client c, fournisseur f
 where fa.id_four = f.id_four AND fa.id_client = c.id_client
 ';
$reponse=$bdd->query($sql);
$data=$reponse->fetchAll();

?>

<table border=2>
    <tr>
      <th>id</th>
      <th>Fournisseur</th>
      <th>Client</th>
      <th>Date</th>
      <th>Remise</th>
      <th>Liraison</th>
      <th>observation</th>
    </tr>
    <?php
    $i=1;

    foreach($data as $cat){
      echo'  <tr>
            <td>'.$i.'</td>
            <td>'.$cat['lib_four'].'</td>
            <td>'.$cat['nom_client'].'</td>
            <td>'.$cat['ate_fact'].'</td>
            <td>'.$cat['remise_fact'].'</td>
            <td>'.$cat['livraison_fact'].'</td>
            <td>'.$cat['obserb_fact'].'</td>
        </tr>'; $i++;} 
    ?>
</table>
.
