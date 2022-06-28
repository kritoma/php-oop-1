<?php
class movie {
    public $title;
    public $genre;
    public $director;
    public $year;

    public function __construct( string $_title, string $_genre, string $_director, int $_year)
    {
        $this->title = $_title;
        $this->genre = $_genre;
        $this->director = $_director;
        $this->year = $_year;
    }

    public function bestFilm($title){
        if($title === "Nomadland") {
            return "Premio Oscar come mmiglior film!!";
        } else {
            return "";
        }
    }
}

?>