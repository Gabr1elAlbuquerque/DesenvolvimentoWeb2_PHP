<?php

$nome = $_GET['nome'];
$centimetros = $_GET['centimetro'];

$tam_pe = (int)((5*$centimetros + 32) / 4);

echo "$nome, você deve comprar sapato número: $tam_pe.";
?>