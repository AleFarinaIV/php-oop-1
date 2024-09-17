<?php

// definizione della classe
class Movie
{

    // dichiarazione delle variabili d'istanza
    public $title;
    public $genre;
    public $director;
    public $lenght;
    public $releaseYear;

    // definizione della funzione __construct
    public function __construct($title, $genre, $director, $lenght, $releaseYear)
    {   
        $this->title = $title;
        $this->genre = $genre;
        $this->director = $director;
        $this->lenght = $lenght;
        $this->releaseYear = $releaseYear;
    }

    // definizione del metodo filmInfos
    public function movieInfos()
    {
        return $this->title . " è un film " . $this->genre . ", diretto da " . $this->director . ". Dura circa " . $this->lenght . " ed è uscito nel " . $this->releaseYear . ".";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>OOP Movies</title>
</head>

<body>

</body>

</html>