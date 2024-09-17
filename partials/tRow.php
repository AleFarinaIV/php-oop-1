<?php 

    include './partials/db.php';

?>

    <?php foreach($arrayMovie as $movie) { ?>

        <tr class="align-middle">

            <th scope="row"><?php echo $movie->title ?></th>
            <td>
                <?php foreach($movie->genre as $genre) { ?>
                    <span><?php echo $genre ?></span>
                <?php } ?>
            </td>
            <td><?php echo $movie->director ?></td>
            <td><span><?php echo $movie->length ?></span>min</td>
            <td><?php echo $movie->releaseYear ?></td>
            <td class="fw-semibold"><?php echo $movie->movieInfos() ?></td>
                
        </tr>

    <?php } ?>