<html lang="en">
	<head>
		<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Modification</title>
        <link rel="stylesheet" type="text/css" href="styles.css"/>
	</head>
	<body bgcolor="palegoldenrod" style="width: 80%; font-family: Arial; margin: 5px auto; padding: 20px; color: black; font-size: 16px;">
		<header align="center" style="background : aliceblue;">
            <h2 style="height: 50px; padding-top: 30px;">MODIFICATION D'ETUDIANTS</h2>
        </header>
		<form action="" method="POST" bgcolor="marroon" style="backdrop-filter: blur(10px); padding: 3rem;">
			<fieldset style="border-radius: 20px;">
				<legend>Formulaire</legend>
                <?php
                    require "connect.php";
                    if (isset($_GET['id']) && isset($_GET['att'])) {
                        $id = $_GET['id'];
                        $att = $_GET['att'];
                        try {
                            $sql = "SELECT Nom, Prénoms FROM étudiant WHERE Matricule=$id";
                            $response = $connect->query($sql);
                            $data = $response->fetchAll();
                        } catch (Exception $e) {
                            echo "Erreur : ".$e->getMessage();
                        }
                        if (count($data)!=0) {
                            if ($att == 1) {
                                echo '<div align="center">
                                        Nom<input type="text" name="nom" id="nom" value="" required/><br/>
                                    </div>
                                    <div align="center">
                                        <input type="submit" placeholder="" name="envoyer" id="envoyer" value="Soumettre">
                                        <input type="reset" placeholder="" name="annuler" id="annuler" value=" Annuler tout" class="rst" style="margin-left: 80px;">
                                    </div>';
                                if (isset($_POST['envoyer'])) {
                                    $nom = $_POST['nom'];
                                    try {
                                        $sql = "UPDATE étudiant SET Nom='$nom' WHERE Matricule=$id";
                                        $response = $connect->query($sql);
                                        header('location: étudiantList.php');
                                    } catch (Exception $e) {
                                        echo "Erreur : ".$e->getMessage();
                                    }
                                }
                            } elseif ($att == 2) {
                                echo '<div align="center">
                                        Prénoms<input type="text" name="pns" id="pns" value="" required/><br/>
                                    </div>
                                    <div align="center">
                                        <input type="submit" placeholder="" name="envoyer" id="envoyer" value="Soumettre">
                                        <input type="reset" placeholder="" name="annuler" id="annuler" value=" Annuler tout" class="rst" style="margin-left: 80px;">
                                    </div>';
                                if (isset($_POST['envoyer'])) {
                                    $pns = $_POST['pns'];
                                    try {
                                        $sql = "UPDATE étudiant SET Prénom='$pns' WHERE Matricule=$id";
                                        $response = $connect->query($sql);
                                        header('location: étudiantList.php');
                                    } catch (Exception $e) {
                                        echo "Erreur : ".$e->getMessage();
                                    }
                                }
                            } elseif ($att == 3) {
                                echo '<div align="center">
                                        Date de naissance<input type="text" name="dns" id="dns" value="" required/><br/>
                                    </div>
                                    <div align="center">
                                        <input type="submit" placeholder="" name="envoyer" id="envoyer" value="Soumettre">
                                        <input type="reset" placeholder="" name="annuler" id="annuler" value=" Annuler tout" class="rst" style="margin-left: 80px;">
                                    </div>';
                                if (isset($_POST['envoyer'])) {
                                    $dns = $_POST['dns'];
                                    try {
                                        $sql = "UPDATE étudiant SET Date_naissance='$dns' WHERE Matricule=$id";
                                        $response = $connect->query($sql);
                                        header('location: étudiantList.php');
                                    } catch (Exception $e) {
                                        echo "Erreur : ".$e->getMessage();
                                    }
                                }
                            } elseif ($att == 4) {
                                echo '<div align="center">
                                        Lieu de naissance<input type="text" name="lns" id="lns" value="" required/><br/>
                                    </div><div align="center">
                                        <input type="submit" placeholder="" name="envoyer" id="envoyer" value="Soumettre">
                                        <input type="reset" placeholder="" name="annuler" id="annuler" value=" Annuler tout" class="rst" style="margin-left: 80px;">
                                    </div>
                                    <div align="center">
                                        <input type="submit" placeholder="" name="envoyer" id="envoyer" value="Soumettre">
                                        <input type="reset" placeholder="" name="annuler" id="annuler" value=" Annuler tout" class="rst" style="margin-left: 80px;">
                                    </div>';
                                if (isset($_POST['envoyer'])) {
                                    $lns = $_POST['lns'];
                                    try {
                                        $sql = "UPDATE étudiant SET Lieu_naissance='$lns' WHERE Matricule=$id";
                                        $response = $connect->query($sql);
                                        header('location: étudiantList.php');
                                    } catch (Exception $e) {
                                        echo "Erreur : ".$e->getMessage();
                                    }
                                }
                            } elseif ($att == 5) {
                                echo '<div align="center">
                                        Adresse<input type="text" name="ads" id="ads" value="" required/><br/>
                                    </div><div align="center">
                                    <input type="submit" placeholder="" name="envoyer" id="envoyer" value="Soumettre">
                                    <input type="reset" placeholder="" name="annuler" id="annuler" value=" Annuler tout" class="rst" style="margin-left: 80px;">
                                </div>';
                                if (isset($_POST['envoyer'])) {
                                    $ads = $_POST['ads'];
                                    try {
                                        $sql = "UPDATE étudiant SET Adresse='$ads' WHERE Matricule=$id";
                                        $response = $connect->query($sql);
                                        header('location: étudiantList.php');
                                    } catch (Exception $e) {
                                        echo "Erreur : ".$e->getMessage();
                                    }
                                }
                            } elseif ($att == 6) {
                                echo '<div align="center">
                                        Téléphone<input type="text" name="tel" id="tel" value="" required/><br/>
                                    </div>
                                    <div align="center">
                                        <input type="submit" placeholder="" name="envoyer" id="envoyer" value="Soumettre">
                                        <input type="reset" placeholder="" name="annuler" id="annuler" value=" Annuler tout" class="rst" style="margin-left: 80px;">
                                    </div>';
                                if (isset($_POST['envoyer'])) {
                                    $tel = $_POST['tel'];
                                    try {
                                        $sql = "UPDATE étudiant SET Téléphone='$tel' WHERE Matricule=$id";
                                        echo $sql;
                                        $response = $connect->query($sql);
                                        header('location: étudiantList.php');
                                    } catch (Exception $e) {
                                        echo "Erreur : ".$e->getMessage();
                                    }
                                }
                            } else {
                                echo '<div align="center">
                                        Email<input type="email" name="eml" id="eml" value="" required/><br/>
                                    </div>
                                    <div align="center">
                                        <input type="submit" placeholder="" name="envoyer" id="envoyer" value="Soumettre"/>
                                        <input type="reset" placeholder="" name="annuler" id="annuler" value=" Annuler tout" class="rst" style="margin-left: 80px;"/>
                                    </div>';
                                if (isset($_POST['envoyer'])) {
                                    $eml = $_POST['eml'];
                                    try {
                                        $sql = "UPDATE étudiant SET Email='$eml' WHERE Matricule=$id";
                                        $response = $connect->query($sql);
                                        header('location: étudiantList.php');
                                    } catch (Exception $e) {
                                        echo "Erreur : ".$e->getMessage();
                                    }
                                }
                            }
                        } else {
                            echo '<br/><br/>...Désolé. L\'étudiant sélectionné a déjà été supprimé. Veuillez consulter la <a href="étudiantList.php">liste des étudiants</a>, pour confirmation...<br/><br/><br/>';
                        }
                    } else {
                        echo '<br/><br/>...Navré. Aucun attribut d\'aucun étudiant sélectionné. Veuillez consulter la <a href="étudiantList.php">liste des étudiants</a>, si vous désirez poursuivre...<br/><br/><br/>';
                    }
                ?>
			</fieldset>
		</form>
	</body>
</html>