<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <h1>Un titre </h1>
    <?php 
        include 'inc_Date.php';
        include 'inc_form.php';
        include_once 'inc_form.php';
        include 'inc_result.php';
        include 'fonctions.php';
        echo"<br />";
        affiche('Mohamed');
        echo"<br />";
    $x = 5;
    $y = 10;
    echo "x = $x, y = $y";
    permuteNomber($x, $y);
    echo"<br />";
    echo "x = $x, y = $y";
    echo"<br />";
    ice("LEMOU");
    echo"<br />";
    ice("ANTHONY","Kenneth");

    ?>
    <a href="Bonjour.php?nom=AYEVA&prenom=Mohamed">Bonjour !!</a>
</body>
</html>