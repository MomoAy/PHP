<?php 
    require "config.php";

    if(isset($_POST['envoyer'])){
            $idf = $_POST['txtfour'];
            $idc = $_POST['txtcli'];
            $datef = $_POST['dfac'];
            $remise = $_POST['rfac'];
            $livr = $_POST['liv'];
            $obs = $_POST['obs'];
            
            $sql = "INSERT INTO facture (id_four, id_client, date_fact, remise_fact, liraison_fact, obserb_fact) VALUES ($idf,$idc,'$datef',$remise,'$livr','$obs') ";
                echo $sql;exit;
            /*$reponse=$bdd->query($sql);
            header('Location:factureList.php');*/
    }
?>
.