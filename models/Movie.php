<?php
//? import file Actor.php:
require_once __DIR__ . '/Actor.php';

//? classe muvie:
class Movie {
    
    private static int $nextId = 0;
    private int $id;
 
    private string $nameFilm;
    private string $description;
    private int $vote;
    private string $genre;
    private Actor $actor;
 
    //* costruttore:
    public function __construct(string $_name, string $_description)
    {
        $this -> id = self::$nextId++;
        $this -> nameFilm = $_name;
        $this -> description = $_description;
    }
 
    //* vot:
    public function setVote (int $_vote): void {
        $this -> vote = $_vote;
    }
    public function getVote (): int {
        return $this -> vote;

        if (!is_int($this -> vote)) {
            throw new Exception('Inserisci un numero valido');
        };
    }

    //* nome film:
    public function getName (): string {
        return $this -> nameFilm;
    }
    
    //* descrizione:
    public function getDescription(): string {
        return $this -> description;
    }

    //* genere:
    public function setGenre(string ...$_genre): void {
        $this -> genre = [...$this -> genre, ...$_genre];
    }
 
 };