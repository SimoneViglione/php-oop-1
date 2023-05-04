<?php

    class Movie {

         public $title;
        public $genre;
        public $length;
        public $date;
        public $vote1;
        public $vote2;
        public $vote3;

        public function __construct($title) {
            $this->title = $title;
        }

        public function getAverageVote() {
            return  ($this->vote1 + $this->vote2 + $this->vote3) / 3;
        }

    }

    $kungfupanda = new Movie("Kung Fu Panda");
    
    $kungfupanda->genre = "comedy";
    $kungfupanda->length = "92 min";
    $kungfupanda->date = "2008";
    $kungfupanda->vote1 = 5;
    $kungfupanda->vote2 = 3;
    $kungfupanda->vote3 = 4;

    var_dump($kungfupanda);

    $scream = new Movie("Scream");

    $scream->genre = "horror";
    $scream->length = "111 min";
    $scream->date = "1996";
    $scream->vote1 = 4;
    $scream->vote2 = 2;
    $scream->vote3 = 5;

    var_dump($scream);
?>