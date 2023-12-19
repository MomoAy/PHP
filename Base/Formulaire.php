<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produits</title>
    <link rel="stylesheet" href="simple.css">
</head>
<body>
    <h1 align="center" >Gestion de produits : </h1>
    <form action="Formulaire.php" method="POST" enctype="multipart/form-data">
        <div class="container">
            <div class="cont">
                <label for="CdProd">Code produit : </label>
                <input type="text" name ="CdProd" id="CdProd" >
            </div>
            <div class="cont">
                <label for="CtProd">Categories Produits : </label>
                <input type="text" name ="CtProd" id="CtProd" required>
            </div>
            <div class="cont">
                <label for="LbProd">Libellé Produits : </label>
                <input type="text" name ="LbProd" id="LbProd" required>
            </div>
            <div class="cont">
                <label for="PuProd">Prix Unitaires Produits</label>
                <input type="number" name ="PuProd" id="PuProd" required>
            </div>
            <div class="cont">
                <label for="DProd">Description Produits : </label>
                <input type="text"  name ="DProd" id="DProd">
            </div>
            <div class="cont">
                <label for="IProd">Image Produits 1 : </label>
                <input type="file"  name ="IProd" id="IProd" >
            </div>
            <div class="cont">
                <label for="image">Image Produits 2 : </label>
                <input type="file" name="image" id="image">
            </div> 
            <button type="submit" class="val">Soumettre</button>
            <button type="reset">Annuler</button>
        </div>
    </form>
    <hr color="black" width="80%">
    <h2 align="center" >Produits ajoutés : </h2>
    
    <?php if(isset($_POST["CdProd"])&&isset($_POST["CtProd"])&&isset($_POST["LbProd"])&&isset($_POST["PuProd"]) && isset($_FILES["image"])) : ?>
        <div class="cont2">
            <li><?="Code : ".$_POST["CdProd"];?> </li> 
            <li><?= "Categories : ".$_POST["CtProd"] ;?></li>
            <li><?= "Libellé : ".$_POST["LbProd"] ;?></li>
            <li><?="Prix Unitaires : ".$_POST["PuProd"] ;?></li>
        </div>
    <div class="cont3">
        <div class="img_js"></div>
        <div class="img_php">
        <?php 

                $tmp = $_FILES["image"]["tmp_name"];
                $filename = $_FILES["image"]["name"];
                move_uploaded_file($tmp, $filename);
                echo '<img src="'.$filename .'"   >';
            
        ?>
        <?php endif ;?>
        </div>
    </div>
    <pre>
        <?php print_r($_POST);?>
    </pre>
    




    <script src="simple.js"></script>
    </body>
</html>