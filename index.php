<?php

$movies = [
  ['name' => 'Pulp Fiction','year' => '1994','director' => 'Quentin Tarantino','length' => '154 min'],
  ['name' => 'La Grande Bellezza','year' => '2013','director' => 'Paolo Sorrentino','length' => '142 min']
];

class Movie
{
  public $name;
  public $year;
  public $director;
  public $length;

  public function __construct($_name, $_year, $_director, $_length)
  {
    $this->name = $_name;
    $this->year = $_year;
    $this->director = $_director;
    $this->length = $_length;
  }

  static function isQuentin($_director)
  {
    if($_director == 'Quentin Tarantino'){
      return "Yep, it's Quentin";
    } else {
      return "Nope, isn't Quentin";
    };
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Movies</title>
</head>

<body>
  <section id="movies">
    <?php foreach ($movies as $movie) {
      $movie_obj = new Movie($movie['name'], $movie['year'], $movie['director'], $movie['length']);
    ?>
        <h1><?= $movie_obj->name ?></h1>
        <h2><?= $movie_obj->year ?></h2>
        <h3><?= $movie_obj->director ?></h3>
        <h4><?= $movie_obj->length ?></h4>
        <h4><?= $movie_obj->isQuentin($movie_obj->director) ?></h4>
    <?php } ?>

  </section>

</body>

</html>