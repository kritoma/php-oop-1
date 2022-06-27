<?php
class movie {
    public $title;
    public $genre;
    public $director;
    public $year;

    public function __costruct($title, $genre, $director, $year)
    {
        $this->title = $_title;
        $this->genre = $_genre;
        $this->director = $_director;
        $this->year = $_year;
    }

    public function bestFilm($title){
        if($this->title === "Nomadland") {
            return "Premi oscar come mmiglior film!!";
        };
    }
}

?>