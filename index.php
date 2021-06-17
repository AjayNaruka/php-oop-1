<?php 
require_once __DIR__."/Movie.php";

$movies = [];
for($i=0;$i<15;$i++){
  $movies[]= new Movie("Titolo $i","Direttore $i");
  $movies[$i]->setRelease_date("19-9-1997 $i");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Test</title>
</head>
<body>
  <h1>MOVIES</h1>
  <div class="container">
  <?php 
    foreach ($movies as $movie) {
      ?>
      <div class="movie">
          <h3>Titolo: <?php echo $movie->getTitle() ?></h3>
          <h3>Direttore: <?php echo $movie->getDirector() ?></h3>
          <h3>Release: <?php echo $movie->getRelease_date() ?></h3>
          <h3>Generi: <?php echo $movie->getGenres() ?></h3>
    </div>
    <?php
    }
   ?>
  </div>
  <h2>Ci sono: <?php echo Movie::getCounter() ?> film</h2>
</body>
</html>