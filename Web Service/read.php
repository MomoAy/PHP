<?php
    header ("Access-Control-Allow-Origin: *");
    header ("Content-Type: application/json");
    require '../WebService/connect.php';
    require '../../connect.php';
    try {
        $sql = 'SELECT * FROM étudiant';
        $response = $connect->query($sql);
        $data = $response->fetchAll();
        echo json_encode($data);
    } catch (Exception $e) {
        echo "Erreur : ".$e->getMessage();
    }

?>
