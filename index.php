<?php

require_once __DIR__ . '/Model/Movie.php'; 

// creo la prima istanza nella classe Movie 
$avengersEndgame = new Movie ('Avengers: Endgame' , 'inglese' , 181);
// Attributi obbligatori 
$avengersEndgame-> title = 'Avengers: Endgame';
$avengersEndgame-> language = 'inglese';
$avengersEndgame-> duration = 181; 
$avengersEndgame-> genre = ['action' , 'comico']; 


// creo la seconda istanza nella cartella Movie 
$setteAnime = new Movie ('Sette Anime' , 'inglese' , 123);
$setteAnime->title = 'Sette Anime';
$setteAnime->language = 'inglese';
$setteAnime->duration = 123;
$setteAnime-> genre = ['romanzo' , 'thriller']; 

// $setteAnime->addGenre('musicale');
var_dump($setteAnime->getDescription());

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OPP</title>
</head>
<body>

<h1>Movies</h1>

<h3>Titolo : <?php echo $avengersEndgame->title ?> </h3>
<h3>Lingua : <?php echo $avengersEndgame->language?> </h3>
<h3>Durata : <?php echo $avengersEndgame->duration?> </h3>
<h3>Genere :</h3>

<ul>
    <?php foreach($avengersEndgame->genre as $gener):?>
        <li> <?php echo $gener ?> </li> 
        <?php endforeach; ?>
</ul>

<h3>Descrizione</h3>
<p> <?php $setteAnime->getDescription();?> </p>

<h3>Titolo : <?php echo $setteAnime->title ?> </h3>
<h3>Lingua : <?php echo $setteAnime->language?> </h3>
<h3>Durata : <?php echo $setteAnime->duration?> </h3>
<h3>Genere :</h3>
<ul>
    <?php foreach($setteAnime->genre as $gener):?>
        <li> <?php echo $gener ?> </li> 
    <?php endforeach;?>
</ul>



</body>
</html>