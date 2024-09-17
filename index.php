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
    public function __construct($title, array $genre, $director, $lenght, $releaseYear)
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

    // creazione d'istanze della classe Movie
    $movie1 = new Movie("'La quinta onda'", ["Fantascienza", "/", "Azione"], "J Blakeson", "112min", "2016");
    $movie2 = new Movie("'Titanic'", ["Sentimentale"], "James Cameron", "195min", "1997");
    $movie3 = new Movie("'L'esorcista del papa'", ["Horror", "/", "Biografico"], "Julius Avery", "103min", "2023")

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
    <div class="container py-5 fs-5">
        <h2 class="text-danger mb-4">Descrizione dei film</h2>
        <div class="row">
            <div class="col-12">
                <p class="py-2"><?php echo $movie1->movieInfos()?></p>
                <p class="py-2"><?php echo $movie2->movieInfos()?></p>
                <p class="py-2"><?php echo $movie3->movieInfos()?></p>
            </div>
        </div>
    </div>

</body>

</html>