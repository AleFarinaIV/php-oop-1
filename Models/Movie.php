<?php 

// definizione della classe
class Movie
{

    // dichiarazione delle variabili d'istanza
    public $title;
    public $genre;
    public $director;
    public $length;
    public $releaseYear;

    // definizione della funzione __construct
    public function __construct($title, array $genre, $director, $length, $releaseYear)
    {   
        $this->title = $title;
        $this->genre = $genre;
        $this->director = $director;
        $this->length = $length;
        $this->releaseYear = $releaseYear;
    }

    // definizione del metodo filmInfos
    public function movieInfos()
    {
        $description = $this->title . " è un film diretto da " . $this->director . ". Dura circa " . $this->length . "min ed è uscito nel " . $this->releaseYear . ".";
        return $description;
    }
}

?>