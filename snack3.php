<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];
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
    <h1>10/01/2019</h1>
    <ul>
    <?php for($i = 0 ; $i < count(($posts['10/01/2019'])); $i++) : ?>
        <li>
            <h3><?= $posts['10/01/2019'][$i]['title'] ?></h3>
            <h3><?= $posts['10/01/2019'][$i]['author'] ?></h3>
            <h3><?= $posts['10/01/2019'][$i]['text'] ?></h3>

        </li>
    <?php endfor; ?> 
    </ul>
    <h1>15/05/2019</h1>
    <ul>
    <?php for($i = 0 ; $i < count(($posts['15/05/2019'])); $i++) : ?>
        <li>
            <h3><?= $posts['15/05/2019'][$i]['title'] ?></h3>
            <h3><?= $posts['15/05/2019'][$i]['author'] ?></h3>
            <h3><?= $posts['15/05/2019'][$i]['text'] ?></h3>
        </li>
    <?php endfor; ?> 
    </ul>
</body>
</html>
