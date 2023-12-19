<?php require 'header.php'; require 'functions.php';



    if(isset($_POST['add'])){
        if (isset($_POST['nbr'])){
            $nb1 = $_POST['nbr'][0];
            $nb2 = $_POST['nbr'][1];
            $nb = (int)$nb1 + (int)$nb2;
            // print_r($_POST['add']);
        }        
    }

    if(isset($_POST['sou'])){
        if (isset($_POST['nbr'])){
            $nb1 = $_POST['nbr'][0];
            $nb2 = $_POST['nbr'][1];
            $nb = (int)$nb1 - (int)$nb2;
        }        
    }

    if(isset($_POST['mul'])){
        if (isset($_POST['nbr'])){
            $nb1 = $_POST['nbr'][0];
            $nb2 = $_POST['nbr'][1];
            $nb = (int)$nb1 * (int)$nb2;
            // print_r($_POST['add']);
        }        
    }

    if(isset($_POST['div'])){
        if (isset($_POST['nbr'])){
            $nb1 = $_POST['nbr'][0];
            $nb2 = $_POST['nbr'][1];
            $nb = (int)$nb1 / (int)$nb2;
            // print_r($_POST['add']);
        }        
    }

?>

<div class="form-container">
    <form action="PetitCalcul.php" method="post">
        <div class="cont">
            <label for="nbr1">Nombre 1 : </label>
            <input type="number" id="nbr1" name="nbr[]" value="<?=$nb1?>" >
        </div>
        <div class="cont">
            <label for="nbr2">Nombre 2 : </label>
            <input type="number" id="nbr2" name="nbr[]" value="<?=$nb2?>" >
        </div>
        <div class="cont">
            <label for="res">Resultat : </label>
            <input id="res"  value="<?=$nb?>" readonly>
        </div>
        <div>
            <input type="submit" value="Addition" name="add">
            <input type="submit" value="Soustraction" name="sou">
        </div>
        <div>
            <input type="submit" value="Multiplication" name="mul">
            <input type="submit" value="Division" name="div">
        </div>
    </form>
</div>

<?php require 'footer.php' ?>