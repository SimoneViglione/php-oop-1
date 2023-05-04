<?php

    class Movie {

    public $title;
    public $genre = [];
    public $length;
    public $date;
    public $vote1;
    public $vote2;
    public $vote3;

    public function __construct($title) {
        $this->title = $title;
    }

    public function getAverageVote() {
        $averageVotes = ($this->vote1 + $this->vote2 + $this->vote3) / 3;
            return $averageVotes;
    }

    }

?>