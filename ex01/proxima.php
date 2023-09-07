<?php

//var_dump($_GET);
$senha =  $_GET['senha'];

$tamanho = strlen($senha);

if($tamanho>=8){
    echo "Senha boa";
}else{
    echo "senha fraca";
}

/* Feito por 
Pedro Henrique Falcheti Alves
e
Gabriel Mendes Albuquerque
*/
?>