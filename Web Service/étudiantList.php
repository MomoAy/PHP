<?php
    require 'connect.php';
    try {
        $sql = 'SELECT * FROM étudiant';
        $response = $connect->query($sql);
        $data = $response->fetchAll();
    } catch (Exception $e) {
        echo "Erreur : ".$e->getMessage();
    }
?>
<html lang="en">
	<head>
		<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sélection</title>
        <link rel="stylesheet" type="text/css" href="styles.css"/>
	</head>
	<body bgcolor="palegoldenrod" style="width: 96%; font-family: Arial; margin: 5px auto; padding: 20px; color: black; font-size: 16px;">
        <header align="center" style="background : aliceblue;">
            <h2 style="height: 50px; padding-top: 30px;">LISTE DES ETUDIANTS</h2>
        </header>
        <table border=2 align="center">
            <tr bgcolor="yellow">
            <th>Matricule</th>
            <th>Nom</th>
            <th>Prénoms</th>
            <th>Date de naissance</th>
            <th>Lieu de naissance</th>
            <th>Adresse</th>
            <th>Téléphone</th>
            <th>Email</th>
            <th>Suppression</th>
            </tr>
            <?php
            foreach($data as $etd){
                echo'<tr bgcolor="aliceblue">
                    <td>'.$etd['Matricule'].'</td>
                    <td>'.$etd['Nom'].'</td>
                    <td>'.$etd['Prénoms'].'</td>
                    <td>'.$etd['Date_naissance'].'</td>
                    <td>'.$etd['Lieu_naissance'].'</td>
                    <td>'.$etd['Adresse'].'</td>
                    <td>'.$etd['Téléphone'].'</td>
                    <td>'.$etd['Email'].'</td>
                    <td><a href="étudiantDelete.php?id='.$etd['Matricule'].'">Delete</a></td>
                    </tr>
                    <tr>
                        <td>Modifier/Supprimer</td>
                        <td><a href="étudiantUpdate.php?id='.$etd['Matricule'].'&att=1">Update</a></td>
                        <td><a href="étudiantUpdate.php?id='.$etd['Matricule'].'&att=2">Update</a></td>
                        <td><a href="étudiantUpdate.php?id='.$etd['Matricule'].'&att=3">Update</a></td>
                        <td><a href="étudiantUpdate.php?id='.$etd['Matricule'].'&att=4">Update</a></td>
                        <td><a href="étudiantUpdate.php?id='.$etd['Matricule'].'&att=5">Update</a></td>
                        <td><a href="étudiantUpdate.php?id='.$etd['Matricule'].'&att=6">Update</a></td>
                        <td><a href="étudiantUpdate.php?id='.$etd['Matricule'].'&att=7">Update</a></td>
                        <td><a href="étudiantInsert.php">Insert</a></td>
                    </tr>';
            }
            ?>
        </table>
    </body>
</html>