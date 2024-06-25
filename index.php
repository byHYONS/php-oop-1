<?php
//? import file Movie.php:
require_once __DIR__ . '/models/Movie.php';


//? logica di rappresentazione:
try {
    $ritorno_la_futuro = new Movie('ritorno al futuro', 'film di fantascienza', new Actor('Micchael J.', 'Fox'), new Actor('Christopher', 'Lioyd'));
    $ritorno_la_futuro -> setVote(5);
    $ritorno_la_futuro -> setGenre('fantascienza', 'avveneristico');

    var_dump($ritorno_la_futuro);
    echo $ritorno_la_futuro -> getName();
    echo $ritorno_la_futuro -> getDescription();

    $top_gun = new Movie('Top Gun', 'film di guerra', new Actor('Ton', 'Cruise'));
    $top_gun -> setGenre('war', 'avventura');
    $top_gun -> setVote(5);

    var_dump($top_gun);
    echo $top_gun -> getName();
    echo $top_gun -> getDescription();

    
} catch (Exception $e) {
    echo $e -> getMessage();
} catch (Error $e) {
    echo $e -> getMessage();
};


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" 
rel="stylesheet">
    <title>PHP OOP Movies</title>
</head>
<body>

    
</body>
</html>