<?php require 'header.php';
require 'functions.php';
$parfums=[
    'fraise'=>4,
    'chocolat'=>5,
    'vanille'=>3
];
$cornets=[
    'pots'=>2,
    'cornet'=>4
];
$supplements=[
    'ppt choco'=>2,
    'chanti'=>1
];
$ingredients=[];
$total=0;
if(isset($_GET['parfum'])){
    foreach($_GET['parfum']as $parfum){
        if (isset($parfums[$parfum])){
            $ingredients[] = $parfum;
            $total=$total+$parfums[$parfum];
        }
    }
}
if(isset($_GET['supplement'])){
    foreach($_GET['supplement']as $supplement){
        if (isset($supplements[$supplement])){
            $ingredients[] = $supplement;
            $total=$total+$supplements[$supplement];
        }
    }
}
if(isset($_GET['cornet'])){
    $cornet=$_GET['cornet'];
        if (isset($cornets[$cornet])){
            $ingredients[] = $cornet;
            $total=$total+$cornets[$cornet];
        }
    }


?>
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-title">
                <h2>Votre glace</h2>
                <ul>
                    <?php foreach ($ingredients as $ingredient): ?>
                    <li><?php echo $ingredient ?></li>
                    <?php endforeach;?>
                </ul>
                <p><strong>Prix : </strong> <?= $total?> $</p>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <form action="glace.php" method="get">
        <h1>Realisez votre glace</h1>
        <h3>Choisissez vos parfums</h3>
        <?php foreach ($parfums as $parfum => $prix): ?>
        <div class="checkbox">
            <label >
            <?=checkbox('parfum',$parfum,$_GET)?>
            <?=$parfum?> - <?=$prix?> $
            </label>
        </div>
        <?php endforeach;?>
        <h3>Choisissez votre cornet</h3>
        <?php foreach ($cornets as $cornet => $prix): ?>
        <div class="radio">
            <label >
            <?=radio('cornet',$cornet,$_GET)?>
            <?=$cornet?> - <?=$prix?> $
            </label>
        </div>
        <?php endforeach;?>
        <h3>Choisissez vos supplements</h3>
        <?php foreach($supplements as $supplement=> $prix):?>
        <div class="checkbox_2">
            <label>
                <?=checkbox('supplement', $supplement,$_GET) ?>
                <?=$supplement?>-<?=$prix?> $
            </label>
        </div>
        <?php endforeach;?>
        <button type="submit">Valider</button>
        <button type="reset">Renintialiser</button>
    </form>
    </div>
</div>




<?php require 'footer.php'; ?>