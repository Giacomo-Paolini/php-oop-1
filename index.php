<?php

    class Movie {
        public $title;
        public $director;
        public $year;
        public $duration;

        public function __construct($title, $director, $year, $duration) {
            $this->title = $title;
            $this->director = $director;
            $this->year = $year;
            $this->duration = $duration;
        }

        public function getDetails() {
            echo "Title: " . $this->title . "<br>";
            echo "Director: " . $this->director . "<br>";
            echo "Year: " . $this->year . "<br>";
            echo "Duration: " . $this->duration . "<br>";
        }
    }

    $akira = new Movie("Akira", "Katsuhiro Otomo", 1988, 124);
    $jumanji = new Movie("Jumanji", "Joe Johnston", 1995, 104);
    $the_mummy = new Movie ("The Mummy", "Stephen Sommers", 1999, 124);

    $akira->getDetails();
    echo "<br>";
    $jumanji->getDetails();
    echo "<br>";
    $the_mummy->getDetails();
?>