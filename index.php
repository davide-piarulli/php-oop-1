<?php
require_once __DIR__ . '/Model/Movies.php';

$avengers = new Movie('Avengers: Endgame', 'In seguito allo schiocco di dita di Thanos, Clint Barton vede scomparire tutta la sua famiglia. Ventidue giorni più tardi, Tony Stark e Nebula, che si trovano sull........', 'Azione', '10');

$cars = new Movie('Cars - Motori ruggenti', 'Saetta Mcqueen, la macchina più scattante di sempre', 'Azione', '8');

var_dump($avengers);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP OOP</title>
</head>

<body>
  <div class="container">
    <div class="movies">
      <h1>Movies</h1>
    </div>
  </div>
</body>

</html>