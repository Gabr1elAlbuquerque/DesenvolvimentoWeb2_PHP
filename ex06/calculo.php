<?php

$nome = $_GET['nome'];
$altura = $_GET['altura'];
$peso = $_GET['peso'];

$calcImc = $peso/($altura ** 2);
$Imc = number_format($calcImc, 1, '.', '');

if($calcImc <= 18.5){
  echo "$nome, seu IMC é $Imc, você está MAGRO";
}
else if($calcImc <= 24.9){
  echo "$nome, seu IMC é $Imc, você está NORMAL";
}  
else if($calcImc <= 29.9){
  echo "$nome, seu IMC é $Imc, você está com SOBREPESO";
}
else if($calcImc <= 39.9){
  echo "$nome, seu IMC é $Imc, você está com OBESIDADE";
}
else if($calcImc >= 40.0){
  echo "$nome, seu IMC é $Imc, você está com OBESIDADE GRAVE";
}

?>