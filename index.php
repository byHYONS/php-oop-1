<?php

class Movie {
   private string $nameFilm;
   private string $description;
   private int $vote;

   function __construct(int $vote)
   {
    $this -> vote = $vote;
   }

    public function getNameFilm (string $_name){
        return $this -> nome = $_name;
    }
};
