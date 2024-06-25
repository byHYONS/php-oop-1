<?php
//? classe muvie:
class Movie {
    
   private static int $nextId;
   private int $id;

   private string $nameFilm;
   private string $description;
   private int $vote;
   private string $genre;
   private Actor $actor;


   public function __construct(string $_name, string $_description)
   {
    $this -> nameFilm = $_name;
    $this -> description = $_description;
   }

    public function setVote (int $_vote): void {
        $this -> vote = $_vote;
    }
    public function getVote (): int {
        return $this -> vote;

        if (!is_int($this -> vote)) {
            throw new Exception('Inserisci un numero valido');
        };
    }

    public function getName (): string {
        return $this -> nameFilm;
    }
    
    public function getDescription(): string {
        return $this -> description;
    }

};

class Actor {
    private string $first_name;
    private string $last_name;

    public function __construct($_firstName, $_lastName)
    {
        $this -> first_name = $_firstName;
        $this -> last_name = $_lastName;
    }

    public function getFirstName(): string {
        return $this -> first_name;
    }
    public function getLasttName(): string {
        return $this -> last_name;
    }
}



try {
    $ritorno_la_futuro = new Movie('ritorno al futuro', 'film di fantascienza');
    $ritorno_la_futuro -> setVote(5);

    var_dump($ritorno_la_futuro);
    echo $ritorno_la_futuro -> getName();
    echo $ritorno_la_futuro -> getDescription();

    $top_gun = new Movie('Top Gun', 'film di guerra con Tom Cruise');
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
    <title>PHP OOP Movies</title>
</head>
<body>

    
</body>
</html>