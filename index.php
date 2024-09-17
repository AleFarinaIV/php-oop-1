<?php

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

    <div class="container text-center py-5">
        <h1>
            Elenco dei film creati con PHP OOP
        </h1>
        <div class="row">
            <div class="col-12 py-5">
                <table class="table border fs-6">
                    <thead>
                        <tr class="align-middle">
                            <th scope="col">Film</th>
                            <th scope="col">Genere</th>
                            <th scope="col">Regia</th>
                            <th scope="col">Durata</th>
                            <th scope="col">Anno di uscita</th>
                            <th scope="col">Descrizione</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            include './partials/tRow.php'
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>