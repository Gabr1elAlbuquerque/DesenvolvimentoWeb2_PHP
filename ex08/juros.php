<?php

$capital = $_GET['capital'];
$taxa = $_GET['taxa'] / 100;
$tempo = $_GET['tempo'];

$montante = $capital * (1 + $taxa)**$tempo;

printf( "O valor total é de R$: %.2f" ,$montante);


?>




