<?php
require_once __DIR__.'/classes/Movie.php';

$movies = [
  [
    'titolo' => 'Film1',
    'regista' => 'regista1',
    'attori' => 'attore1',
    'trama' => 'lorem',
    'locandina' => 'locandina',
  ],
  [
    'titolo' => 'Film2',
    'regista' => 'regista2',
    'attori' => 'attore2',
    'trama' => 'lorem',
    'locandina' => 'locandina',
  ],
  [
    'titolo' => 'Film3',
    'regista' => 'regista3',
    'attori' => 'attore3',
    'trama' => 'lorem',
    'locandina' => 'locandina',
  ],
  [
    'titolo' => 'Film4',
    'regista' => 'regista4',
    'attori' => 'attore4',
    'trama' => 'lorem',
    'locandina' => 'locandina',
  ],
  [
    'titolo' => 'Film5',
    'regista' => 'regista5',
    'attori' => 'attore5',
    'trama' => 'lorem',
    'locandina' => 'locandina',
  ]
];
// var_dump($titolo);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Php - OOP-1</title>
</head>
<body>
  <h1>Lista Films</h1>
  <?php
    foreach($movies as $key => $value){
      $movie = new Movie($value['titolo'], $value['regista'], $value['attori']);
  ?>
     <!-- <h3>Film: php echo "{$movie->getTitolo()} - {$movie->getRegista()} - {$movie->getAttori()}" ?> </h3> -->
     <h3>Titolo: <?php echo $movie->getTitolo() ?> </h3>
     <h3>Regista: <?php echo $movie->getRegista() ?> </h3>
     <h3>Attori: <?php echo $movie->getAttori() ?> </h3>

  <?php
  }
  ?>
  
</body>
</html>