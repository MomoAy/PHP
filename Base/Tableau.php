<?php
// $Liste_1=array("ABIGUIM","AFANOU","AGBA","ANADE");
// $Liste_2=array("DOSSEH","DOUTHE","LEMOU","TEPE");
// $Liste_3=array(
//             "DJIBRILLA",
//             "KLUTCHE",
//             "THON",
//             "SATI"
// );

// echo $Liste_3[1];

// echo"echo <br/>";
// echo $Liste_1;

// echo"print_r <br/>";
// print_r($Liste_1);

// echo"Var_dump <br/>";
// var_dump($Liste_1);

// for($i=0;$i<count($Liste_3);$i++){
//     echo $Liste_3[$i].'<br/>';
// };
// echo '<br/>';

// foreach ($Liste_3 as $value) {
//     echo $value.'<br/>';
// };

// $Liste_4=array(
//         "Nom"=>"AYEVA",
//         "Prenom"=>"Mohamed",
//         "Sexe"=>"M",
//         "Age"=>18,
//         "Taille"=>"1,67"
// );

// foreach ($Liste_4 as $key => $value) {
//     echo $key." : " . $value."<br/>";
// }
//  Define("vi",3.14);
// echo vi
$Liste_1=array("ABIGUIM","AFANOU","AGBA","ANADE");
$Liste_2=array("DOSSEH","DOUTHE","LEMOU","TEPE");
//Recherche dans un Tableau
echo array_search("agba",$Liste_1,true);
echo '<br/>';
print_r($Liste_1);
echo '<br/>';
print_r($Liste_2);
echo '<br/>';
sort($Liste_1);//Trie
echo '<br/>';
print_r($Liste_1);
echo '<br/>';
$tableau = range(1,100,10);//Remplissage du tableau suivant une plage de nombre
print_r($tableau);
echo '<br/>';
$table = range("A","Z");
print_r($table);
echo '<br/>';
shuffle($table);//Melange aléatoire du tableau
print_r($table);
echo '<br/>';
$AllList = array_merge($Liste_1, $Liste_2);//fusion des tableaux
print_r($AllList);
echo '<br/> <pre>';
$AllList2 = array_combine($Liste_1, $Liste_2);
print_r($AllList2);
$txt = "Tous les jours le code, encore du code et rien que du code, EVERYTIME";
$tab = explode(",", $txt);
print_r($tab);

$n=1;
while($n%7!=0 )
{
$n = rand(1,100);
echo $n," /";
}
for($i=0;$i<=8;$i++) {
    $tab[$i] = pow(2,$i);
    }
    $val ="Une valeur";
    echo $val,"<br />";
    //Lecture des valeurs du tableau
    echo"Les puissances de 2 sont :";
    foreach($tab as $val) {
    echo $val." : ";
}
echo"<br />";
foreach ($AllList2 as $key =>$value) {
    echo$key."=>".$value."<br />";
}
$tab[1]="Basile";
$tab[2]="Conan";
$tab[3]="Albert";
$tab[4]="Vincent";
for($i=1;$i<count($tab);$i++){
    for ($j = 0; $j < strlen($tab[$i]); $j++) {
        if($tab[$i][$j]=="A"||$tab[$i][$j]=="a"){
            echo "Le premier nom contenant A est le n˚ $i: ",$tab[$i],"Il se trouve à la position : ",array_search($tab[$i],$tab,true);
            break;
        }    
    }
    break;
}

    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
		$url = "https"; 
	else
		$url = "http"; 
	  
	// Ajoutez // à l'URL.
	$url .= "://"; 
	  
	// Ajoutez l'hôte (nom de domaine, ip) à l'URL.
	$url .= $_SERVER['HTTP_HOST']; 
	  
	// Ajouter l'emplacement de la ressource demandée à l'URL
	$url .= $_SERVER['REQUEST_URI']; 
		  
	// Afficher l'URL
	echo $url; 


    $url = strtr($url,":/"," /");
    $url = explode(' ', $url);
    print_r($url);
echo"<br />";
print_r($_SERVER);
echo '</pre>';
?>