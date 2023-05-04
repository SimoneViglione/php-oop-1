<?php

    class Movie {

        public $genre;
        public $length;
        public $date;

    }

    $kungfupanda = new Movie();
    
    $kungfupanda->genre = "comedy";
    $kungfupanda->length = "92 min";
    $kungfupanda->date = "2008";

    var_dump($kungfupanda);

    $scream = new Movie();

    $scream->genre = "horror";
    $scream->genre = "111 min";
    $scream->genre = "1996";

    var_dump($scream);
?>