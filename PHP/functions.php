<?php
function checkbox(string $name, string $value, array $options):string
{   
    $attributes = '';
    if(isset($options[$name]) && in_array($value,$options[$name])){
        $attributes = 'checked';
    }
    return <<<HTML
    <input type="checkbox" name="${name}[]" value="$value" $attributes>
HTML;
};

function radio(string $name, string $value, array $options){
    $attributes = '';
    if(isset($options[$name]) && $value===$options[$name]){
        $attributes = 'checked';
    }
    return <<<HTML
    <input type="radio" name="$name" value="$value" $attributes>
HTML;
}
function afficher( $val1, $val2,  $val3){
    return "Votre equation se présente sous la forme $val1 x²+$val2 x+$val3";
}
function resultat($val1, $val2, $val3){
    $delta=($val2**2)-(4*$val1*$val3);
    $x0=round((-$val2/(2*$val1)),2);
    $x1=round((-$val2-sqrt($delta)/(2*$val1)),2);
    $x2=round((-$val2+sqrt($delta)/(2*$val1)),2);
    if($delta>0){
        return "Il existe deux solutions x1=$x1 et x2=$x2";
    }elseif($delta<0){
        return "Il n'existe pas solutions";
    }else{
        return "Il existe une solution double xo=$x0";
    }
}

function Check2($nom,$value,$opion){
    return <<<HTML
        <input type="checkbox" name={$nom}[] value={$value}>
HTML;
}

function Add($n, $n1, $n2){
   
    return $n;
}

function Sou($n, $n1, $n2){
    $n = $n1 - $n2;
    return $n;
}

function Mul($n, $n1, $n2){
    $n = $n1 * $n2;
    return $n;
}

function Div($n, $n1, $n2){
    $n = $n1 / $n2;
    return $n;
}