<?php

// definizione della classe
class Movie {

    // dichiarazione delle variabili d'istanza
    public $genre;
    public $description;
    public $lenght;
    public $director;
    public $releaseYear;

    // definizione della funzione __construct
    public function __construct($genre, $description, $lenght, $director, $releaseYear)
    {
        $this->genre = $genre;
        $this->description = $description;
        $this->lenght = $lenght;
        $this->director = $director;
        $this->releaseYear = $releaseYear;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Movies</title>
</head>

<body>

</body>

</html>