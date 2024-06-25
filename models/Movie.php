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
    private array $genre = [];
    private array $actor = [];
 
    //* costruttore:
    public function __construct(string $_name, string $_description, Actor ...$_actor)
    {
        $this -> id = self::$nextId++;
        $this -> nameFilm = $_name;
        $this -> description = $_description;
        $this -> actor = $_actor;
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
        // $this->genre = array_merge($this->genre, $_genre);
    }

    public function getGenre(): array {
        return $this -> genre;
    }

    //* actor:
    public function setActor(Actor $_actor): void {
        $this -> actor[] = $_actor;
    }
    public function getActor(): array {
        return $this -> actor;
    }
 
 };