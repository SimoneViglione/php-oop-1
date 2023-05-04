<?php

    require __DIR__ . '/Models/Movie.php';
    
    $kungfupanda = new Movie("Kung Fu Panda");
    
    $kungfupanda->genre = ["comedy", "animation"];
    $kungfupanda->length = "92 min";
    $kungfupanda->date = "2008";
    $kungfupanda->vote1 = 5;
    $kungfupanda->vote2 = 3;
    $kungfupanda->vote3 = 4;
    $kungfupandaAverageVote = $kungfupanda->getAverageVote();
    


    $scream = new Movie("Scream");

    $scream->genre = "horror";
    $scream->length = "111 min";
    $scream->date = "1996";
    $scream->vote1 = 4;
    $scream->vote2 = 4;
    $scream->vote3 = 4;
    $screamAverageVote = $scream->getAverageVote();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop</title>

    <link href="style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>

    <main>

        <h1>Movie Database Brutto</h1>

        <div class="container">
            <div class="card"> 
                <h3> Title: <?php echo $kungfupanda->title ?> </h3>
                <h5> Genere: 
                    <?php foreach ($kungfupanda->genre as $genre) { ?>
                        <span class="genre"><?php echo $genre ?></span>
                    <?php } ?>
                </h5>
                <h5> Length: <?php echo $kungfupanda->length ?> </h5>
                <h5> Published: <?php echo $kungfupanda->date ?> </h5>
                <h5> Average Vote: <?php echo $kungfupandaAverageVote ?> </h5>
            </div>

            <div class="card"> 
                <h3> Title: <?php echo $scream->title ?> </h3>
                <h5> Genere: <span class="genre"> <?php echo $scream->genre ?> </span> </h5>
                <h5> Length: <?php echo $scream->length ?> </h5>
                <h5> Published: <?php echo $scream->date ?> </h5>
                <h5> Average Vote: <?php echo $screamAverageVote ?> </h5>
            </div>
        </div>

    </main>
    
</body>
</html>

