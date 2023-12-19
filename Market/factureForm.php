<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facture saisi</title>
.
   
<link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <input type="submit" value="<<< RETOURNER A L'ACCUEIL" style="width: 40%; font-size: 12px;">
         <h2>INSERTION DE NOUVEAUX PRODUITS</h2>
    </header>
    <form action="factureInsert.php" method="POST" id="frm" name="frm" >
        <fieldset>
            <label> le fournisseur</label>
            <?php
                require "config.php";

                $sql='select * from fournisseur order by lib_four asc';
                $reponse=$bdd->query($sql);
                $data=$reponse->fetchAll();
        
                echo ' <select name="txtfour" id="txtfour" selected="selected">';
                    foreach($data as $fac){
                        echo'  <option value="'.$fac['id_four'].'">'.$fac['lib_four'].'</option>' ; } 
                echo' </select><br>';

                echo '<label> le fournisseur</label> ';
    
                    $sql='select * from client order by nom_client asc';
                    $reponse=$bdd->query($sql);
                    $data=$reponse->fetchAll();
            
                    echo ' <select name="txtcli" id="txtcli" selected="selected">';
                        foreach($data as $fac){
                            echo'  <option value="'.$fac['id_client'].'">'.$fac['nom_client'].'</option>' ; } 
                    echo' </select>';
    
               
            ?>
            <br>
            <label for="">Date de facture</label>
            <input type="date" name="dfac" id="dfac" require>
            <br>
            <label>Remise la facture:</label>
                <input type="number" name="rfac" id="rfac" required placeholder="Veuillez entrer la remise" min=0 step="0.5"/><br>
            <label>Livraison</label>
                <input type="datetime-local" name="liv" id="liv" required /><br>
            <label>Observation</label>
                <input type="text" name="obs" id="obs" required placeholder="entrer l'obs">
                <div class="btn">

                        <input type="submit" name="envoyer" id="envoyer" value="VALIDER" >


                        <input type="reset" name="annuler" id="annuler" value="ANNULER" class= "resetbtn" >
      
                </div>
           

        </fieldset>

    </form>
</body>
</html>
