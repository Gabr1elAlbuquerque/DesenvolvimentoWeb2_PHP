<?php
$x = $_GET['x'];
$y = $_GET['y'];
$z = $_GET['z'];
$min = min($x,$y,$z);
$max = max($x,$y,$z);

printf  ("Valor minimo = %d<br>",$min);
printf ("Valor maximo = %d<br>",$max);
?>