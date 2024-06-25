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
    }

    public function getName (): string {
        $this -> nameFilm;
    }
    
    public function getDescription(): string {
        $this -> description;
    }

    


};

$ritorno_la_futuro = new Movie('ritorno al futuro', 'film di fantascienza');
$ritorno_la_futuro -> setVote(5);

var_dump($ritorno_la_futuro);
