<?php
/*$prenom="Marc";
$nom="Doe";
$note1=10;
$note2=20;
$moy=($note1+$note2)/2;
echo "$prenom $nom vous avez $moy de moyenne";
$notes=[];
$not=null;
while (true) {
    $not=readline("Enter une note pour l'ajouter au tableau et fin pour arreter la saisie : ");
    if ($not==="fin"){
        break;
    }else{
        $notes[]=(int)$not;
    }
}
foreach($notes as $note){
    echo "- $note\n";
}
$mot = readline("Entrez une chaîne de caracere : ");
$mot2=strtolower($mot);
if($mot2===strrev($mot2)){
    echo "$mot est reversible";
}else{
    echo "$mot n'est pas reversible";
}*/

function repond_oui($phrase){
    while ($phrase!=="O" && $phrase!=="N"){
        $phrase = readline("Entrer O pour continuer et N pour annuler : ");
        $phrase=strtoupper($phrase); 
    }
    if ($phrase==="O"){
        return true;
    }else{
        return false;
    }
}
$phrase = readline("Entrer O pour continuer et N pour annuler : ");
$phrase=strtoupper($phrase); 
var_dump( repond_oui($phrase)   );