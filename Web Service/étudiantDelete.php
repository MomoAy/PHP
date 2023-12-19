<html lang="en">
	<head>
		<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Suppression</title>
        <link rel="stylesheet" type="text/css" href="styles.css"/>
	</head>
	<body bgcolor="palegoldenrod" style="width: 80%; font-family: Arial; margin: 5px auto; padding: 20px; color: black; font-size: 16px;">
		<header align="center" style="background : aliceblue;">
            <h2 style="height: 50px; padding-top: 30px;">SUPPRESSION D'ETUDIANTS</h2>
        </header>
		<form action="" method="POST" bgcolor="marroon" style="backdrop-filter: blur(10px); padding: 3rem;">
			<fieldset style="border-radius: 20px;">
				<legend>Confirmation</legend>
                <?php
                    require "connect.php";
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                        try {
                            $sql = "SELECT Nom, Prénoms FROM étudiant WHERE Matricule=$id";
                            $response = $connect->query($sql);
                            $data = $response->fetchAll();
                        } catch (Exception $e) {
                            echo "Erreur : ".$e->getMessage();
                        }
                        if (count($data)!=0) {
                            echo '<br/>
                                <div align="center">
                                    <label align="center" style="background-color: cyan;">Identité</label>
                                    <label align="center" style="background-color: indianred;">'.$data[0]["Nom"].' '.$data[0]["Prénoms"].'</label><br/><br/>
                                </div>';
                        } else {
                            echo '<br/><br/>...Désolé. L\'étudiant sélectionné a déjà été supprimé. Veuillez consulter la <a href="étudiantList.php">liste des étudiants</a>, pour confirmation...<br/><br/><br/>';
                        }
                    } else {
                        echo '<br/><br/>...Désolé. Aucun étudiant sélectionné. Veuillez consulter si besoin la <a href="étudiantList.php">liste des étudiants</a>, si vous désirez bien poursuivre...<br/><br/><br/>';
                    }
                ?>
                <div align="center">
                    <input type="submit" placeholder="" name="envoyer" id="envoyer" value="Supprimer"/>
                    <label style="background-color: white;"><a href="étudiantList.php">Annuler</a></label>
                </div>
                <?php
                    require "connect.php";
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                        if (isset($_POST['envoyer'])) {
                            try {
                                $sql = "DELETE FROM étudiant WHERE Matricule=$id";
                                $response = $connect->query($sql);
                                header('location: étudiantList.php');
                            } catch (Exception $e) {
                                echo "Erreur : ".$e->getMessage();
                            }
                        }
                    }
                ?>
			</fieldset>
		</form>
	</body>
</html>