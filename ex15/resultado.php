<?php
include('salvaTime.php');
?>
<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <?php

$timesJSON = json_decode($_SESSION['timesJSON']);

foreach($timesJSON as $timecodificado) {
  $time = json_decode($timecodificado);

  //var_dump($time);
  $voltaTime = new Time($time->nome, $time->imagem, $time->pontos);
  $voltaTime->mostraTime();
  //$t->mostraTime();
}

    ?>
</body>
</html>