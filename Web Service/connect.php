<?php
    try {
        $connect = new PDO('mysql:host=localhost;dbname=école', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    } catch (Exception $e) {
        die('Erreur : '.$e->getMessage());
    }
?>