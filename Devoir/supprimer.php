<?php 
require 'ConnectBD.php';

$id = $_GET['id'];
$sql  ="DELETE FROM exercice WHERE id = '$id'";
$result = $conn->query($sql);
header("Location:ajouter.php")
?>


