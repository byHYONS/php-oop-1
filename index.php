<?php

class Movie {
   private string $nameFilm;
   private string $description;
   private int $vote;

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


