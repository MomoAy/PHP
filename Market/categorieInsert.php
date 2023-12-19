<?php
    require "config.php";

    //verification de l'existence du contenu de la variable aek insertion
    if(isset($_POST['txtCat'])){
        $cat = $_POST['txtCat'];
        $sql = "INSERT INTO categorie (lib_cat) VALUE ('$cat') ";

        $reponse=$bdd->query($sql);
        header('location:categorieList.php');

    }
?>