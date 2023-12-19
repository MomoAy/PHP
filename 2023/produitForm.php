<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUIT</title>

   
<link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <input type="submit" value="<<< RETOURNER A L'ACCUEIL" style="width: 40%; font-size: 12px;">
         <h2>INSERTION DE NOUVEAUX PRODUITS</h2>
    </header>
    <form action="produitInsert.php" method="POST" id="frm" name="frm" >
        <fieldset>
            <label>Libellé du produit</label>
                <input type="text" name="idprod" id="idprod" required placeholder="Veuillez entrer l'id du produit"/><br>
            <label>Identifiant de la catégorie</label>
            <?php
                require "config.php";

                $sql='select * from categorie order by lib_cat asc';
                $reponse=$bdd->query($sql);
                $data=$reponse->fetchAll();

                echo ' <select name="txtCat" id="txtCat">';
                    foreach($data as $cat){
                        echo'  <option value="'.$cat['id_cat'].'">'.$cat['lib_cat'].'</option>' ; } 
                echo' </select>';
            ?>
            <br>
            <label>Prix unitaire</label>
                <input type="number" name="prixuni" id="prixuni" required placeholder="Veuillez entrer le prix unitaire du produit" min=0 step="0.5"/><br>
            <label>Infos produit</label>
                <input type="text" name="infoprod" id="infoprod" required placeholder="Veuillez entrer les informations sur le produit"/><br>
            <label>Img du produit</label>
                <input type="file" accept="image/*" name="imgprod" id="imgprod" required /><br>

                <div class="btn">

                        <input type="submit" name="envoyer" id="envoyer" value="VALIDER" >


                        <input type="reset" name="envoyer" id="annuler" value="ANNULER" class= "resetbtn" >
      
                </div>
           

        </fieldset>

    </form>
</body>
</html>