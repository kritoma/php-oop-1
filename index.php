<?php
require_once __DIR__ . '/classes/movie.php';

$movies = [
    new movie("Eternals", "Action" , "Chloe Zhao", 2021),
    new movie("Nomadland", "Dramatic", "Chloe Zhao", 2020),
];

var_dump($movies);

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
    <h1>Lista film</h1>
    <ul>
        <?php foreach($movies as $movie) { ?>
            <li> 
                <h3><?= $movie->title; ?></h3>
                <p><?= $movie->genre; ?></p>
                <p><?= $movie->director; ?></p>
                <p><?= $movie->year; ?></p>
                <p><?= $movie->bestFilm($movie->title); ?></p>
            </li>
        <?php } ?>
    </ul>

</body>
</html>