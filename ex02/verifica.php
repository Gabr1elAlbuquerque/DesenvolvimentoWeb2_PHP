<?php

//var_dump($_GET);
$texto =  $_GET['texto'];

$quant_palavras = str_word_count($texto);

if($quant_palavras>=2){
    echo "Nome completo";
}else{
    echo "Nome incompleto";
}

?>