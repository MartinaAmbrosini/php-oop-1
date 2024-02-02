<?php

class Movie
{
    public $title;
    public $genre;
    public $score;

    function __construct($title, $genre, $score)
    {

        $this->title = $title;
        $this->genre = $genre;
        $this->score = $score;
    }
}

$title1 = new Movie("La Città Incantata", "Animazione", 4.8);
$title2 = new Movie("Il Castello Errante di Howl", "Animazione", 4.9);

var_dump($title1);
echo "<br><br>";

var_dump($title2);
echo "<br><br>";