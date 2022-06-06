<?php
require_once __DIR__.'/classes/Movie.php';

$movies = [
  [
    'titolo' => 'Film1',
    'regista' => 'regista1',
    'attori' => 'attore1',
    'trama' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur id neque at eleifend. Proin viverra tortor interdum massa commodo, et pharetra velit tempor.',
    'locandina' => 'https://m.media-amazon.com/images/I/81PiSBOcc1L._SL1200_.jpg',
  ],
  [
    'titolo' => 'Film2',
    'regista' => 'regista2',
    'attori' => 'attore2',
    'trama' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur id neque at eleifend. Proin viverra tortor interdum massa commodo, et pharetra velit tempor.',
    'locandina' => 'https://images-na.ssl-images-amazon.com/images/I/71pMSCmg-XL.jpg',
  ],
  [
    'titolo' => 'Film3',
    'regista' => 'regista3',
    'attori' => 'attore3',
    'trama' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur id neque at eleifend. Proin viverra tortor interdum massa commodo, et pharetra velit tempor.',
    'locandina' => 'https://upload.wikimedia.org/wikipedia/it/1/1f/Overlord_Light_Novel.jpg',
  ],
  [
    'titolo' => 'Film4',
    'regista' => 'regista4',
    'attori' => 'attore4',
    'trama' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur id neque at eleifend. Proin viverra tortor interdum massa commodo, et pharetra velit tempor.',
    'locandina' => 'https://www.animeclick.it/immagini/anime/Overlord_IV/cover/Overlord_IV-cover.jpg',
  ],
  [
    'titolo' => 'Film5',
    'regista' => 'regista5',
    'attori' => 'attore5',
    'trama' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur id neque at eleifend. Proin viverra tortor interdum massa commodo, et pharetra velit tempor.',
    'locandina' => 'https://asiantv4u.com/wp-content/uploads/2021/09/overlord-iv.jpeg',
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Php - OOP-1</title>
</head>
<body>
  <h1>Lista Films</h1>

<div class="card-group">
<?php
    foreach($movies as $key => $value){
      $movie = new Movie($value['titolo'], $value['regista'], $value['attori'], $value['trama'], $value['locandina']);
  ?>
  <div class="card border-secondary text-dark bg-light m-2">
    <img src=" <?php echo "{$movie->getLocandina()} " ?> " class="card-img-top" alt="  <?php echo "{$movie->getTitolo()}" ?>  ">
    <div class="card-body">
      <h5 class="card-title"> <?php echo "{$movie->getTitolo()}" ?> </h5>
      <p class="card-text"><small class="text-muted"> <?php echo "{$movie->getRegista()}" ?></small></p>
      <p class="card-text"><small class="text-muted"> <?php echo "{$movie->getAttori()}" ?></small></p>
      <p class="card-text"> <?php echo "{$movie->getTrama()}" ?> </p>
    </div>
  </div>
  <?php
  }
  ?>
  
</div>


  
</body>
</html>