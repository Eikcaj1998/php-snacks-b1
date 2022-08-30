<?php
$reggio = [
    'casa'=>[
        [
            'name'=>'avellino',
            'point'=>'75-91',
        ],
        [
            'name'=>'bologna',
            'point'=>'81-89',
        ],
        [
            'name'=>'milano',
            'point'=>'79-82',
        ],
        [
            'name'=>'cremona',
            'point'=>'82-76',
        ],
    ],
    'ospite'=>[
        [
            'name'=>'avellino',
            'point'=>'108-66',
        ],
        [
            'name'=>'bologna',
            'point'=>'89-99',
        ],
        [
            'name'=>'milano',
            'point'=>'82-81',
        ],
        [
            'name'=>'cremona',
            'point'=>'67-71',
        ],
    ],
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Basket Reggio Emilia</h1>
    <h2>calendario</h2>
    <h3>casa</h3>
    <ul>
    <?php for($i = 0 ; $i < count(($reggio['casa'])); $i++) : ?>
        <li>
            <h3><?= $reggio['casa'][$i]['name'] ?></h3>
            <h3><?= $reggio['casa'][$i]['point'] ?></h3>
        </li>
        <li>

        </li>
    <?php endfor; ?> 
    </ul>
    <h3>ospite</h3>
    <ul>
    <?php for($i = 0 ; $i < count(($reggio['casa'])); $i++) : ?>
        <li>
            <h3><?= $reggio['ospite'][$i]['name'] ?></h3>
            <h3><?= $reggio['ospite'][$i]['point'] ?></h3>
        </li>
    <?php endfor; ?> 
    </ul>
</body>
</html>