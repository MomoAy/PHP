<?php 
function affiche($msg){
    echo $msg;
}
function affiche2($nom){
    return $nom;
}

function permuteNomber(int &$a,int &$b){
    $temp = $a;
    $a = $b;
    $b = $temp;
}

function ice(string $nom,string $prenom="Merveilles"){
    echo "Je me nomme $nom $prenom";
}


function divText($name,$code){
    return <<<HTML
    <div  class="cont">
        <label for={$code}>{$name}</label>
        <input type="text" name={$code}>
    </div>
HTML;
}

function div($type,$code,$name,){
    return <<<HTML
    <div class="cont">
        <label for={$code}>{$name}</label>
        <input type={$type} name={$code} id={$code} required>
    </div>
HTML;
}

?>