<?php
//? import file Movie.php:
require_once __DIR__ . '/models/Movie.php';


//? logica di rappresentazione:
try {
    $ritorno_al_futuro = new Movie('ritorno al futuro', 'film di fantascienza', new Actor('Micchael J.', 'Fox'), new Actor('Christopher', 'Lioyd'));
    $ritorno_al_futuro -> setVote(5);
    $ritorno_al_futuro -> setGenre('fantascienza', 'avveneristico');

    // var_dump($ritorno_al_futuro);
    // echo $ritorno_al_futuro -> getName();
    // echo $ritorno_al_futuro -> getDescription();

    $top_gun = new Movie('Top Gun', 'film di guerra', new Actor('Ton', 'Cruise'));
    $top_gun -> setActor(new Actor('Kelly', 'McGillis'));
    $top_gun -> setGenre('war', 'avventura');
    $top_gun -> setVote(5);

    // var_dump($top_gun);
    // echo $top_gun -> getName();
    // echo $top_gun -> getDescription();

    $list_movie = [$top_gun, $ritorno_al_futuro];
    
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
    <!-- style -->
    <link rel="stylesheet" href="./style.css">
    <title>PHP OOP Movies</title>
</head>
<body>
    <!-- HEADER -->
    <header>
        <div class="container">
            <h2>Movies</h2>
        </div>
    </header>
    <!-- /HEADER -->

    <main>
        <div class="container mt mb">
            <div class="row">
                <?php foreach($list_movie as $movie): ?>
                <div class="card col-6">
                    <h2><?php echo $movie -> getName(); ?></h2>
                    <h4>Descrizione:</h4>
                    <p><?php echo $movie -> getDescription(); ?></p>
                    <h4>Genere:</h4>
                        <?php foreach ($movie -> getGenre() as $genre): ?>
                        <p><?php echo $genre; ?></p>
                        <?php endforeach ?>
                    <h4>Attori</h4>
                    <?php foreach ($movie -> getActor() as $actor): ?>
                       <p><?php echo $actor -> getFirstName() . ' ' . $actor -> getLasttName(); ?></p>
                    <?php endforeach ?>
                    <p></p>

                </div>
                <?php endforeach ?>
            </div>
        </div>

    </main>

    <footer>
        <div class="container">
            <h6>© byHYONS™ | 2024</h6>
        </div>
                        
    </footer>

    
</body>
</html>