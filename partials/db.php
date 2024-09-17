<?php

    include './Models/Movie.php';

    // creazione d'istanze della classe Movie
    $movie1 = new Movie("'La quinta onda'", ["Fantascienza / ", "Azione"], "J Blakeson", 112, "2016");
    $movie2 = new Movie("'Titanic'", ["Sentimentale / ", "Epico-Catastrofico"], "James Cameron", 195, "1997");
    $movie3 = new Movie("'L'esorcista del papa'", ["Horror / ", "Biografico"], "Julius Avery", 103, "2023");
    $movie4 = new Movie("'Avengers: Endgame'", ["Azione / ", "Fantascienza"], "Russo Brothers", 181, "2016" );
    $movie5 = new Movie("'Natale a Miami'", ["Commedia"], "Neri Parenti", 96, "2005");

    $arrayMovie = [$movie1, $movie2, $movie3, $movie4, $movie5]
?>