<?php

//? class Actor:
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

