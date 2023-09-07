<?php

$nome = $_GET['nome'];
$data = $_GET['data'];

$idade = 2023 -  (int)$data;

echo "Mostre: $nome, você tem $idade anos."
?>