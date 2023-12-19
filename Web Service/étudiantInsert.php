<?php
    require "connect.php";
    if (isset($_POST['envoyer'])) {
        $nom = $_POST['nom'];
        $pns = $_POST['pns']; 
        $dns = $_POST['dns'];
        $lns = $_POST['lns'];
        $ads = $_POST['ads'];
        $tel = $_POST['tel'];
        $eml = $_POST['eml'];
        try {
            $sql = "INSERT INTO étudiant (Nom, Prénoms, Date_naissance, Lieu_naissance, Adresse, Téléphone, Email) VALUES ('$nom','$pns','$dns','$lns','$ads','$tel','$eml')";
            $response = $connect->query($sql);
            header('location: étudiantList.php');
        } catch (Exception $e) {
            echo "Erreur : ".$e->getMessage();
        }
    }
?>
<html lang="en">
	<head>
		<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Insertion</title>
        <link rel="stylesheet" type="text/css" href="styles.css"/>
	</head>
	<body bgcolor="palegoldenrod" style="width: 80%; font-family: Arial; margin: 5px auto; padding: 20px; color: black; font-size: 16px;">
		<header align="center" style="background : aliceblue;">
            <h2 style="height: 50px; padding-top: 30px;">INSERTION D'ETUDIANTS</h2>
        </header>
		<form action="étudiantInsert.php" method="POST" style="backdrop-filter: blur(10px); padding: 3rem;">
			<fieldset style="border-radius: 20px;">
				<legend>Formulaire</legend>
                <div align="center">
                    Nom<input type="text" name="nom" id="nom" value="" required/><br/>
                </div>
                <div align="center">
                    Prénoms<input type="text" name="pns" id="pns" value="" required/><br/>
                </div>
                <div align="center">
                    Date de naissance<input type="text" name="dns" id="dns" value="" required/><br/>
                </div>
                <div align="center">
                    Lieu de naissance<input type="text" name="lns" id="lns" value="" required/><br/>
                </div>
                <div align="center">
                    Adresse<input type="text" name="ads" id="ads" value="" required/><br/>
                </div>
                <div align="center">
                    Téléphone<input type="text" name="tel" id="tel" value="" required/><br/>
                </div>
                <div align="center">
                    Email<input type="email" name="eml" id="eml" value="" required/><br/>
                </div>
                <div align="center">
					<input type="submit" placeholder="" name="envoyer" id="envoyer" value="Soumettre"/>
					<input type="reset" placeholder="" name="annuler" id="annuler" value=" Annuler tout" class="rst" style="margin-left: 80px;"/>
				</div>
			</fieldset>
		</form>
	</body>
</html>