<?php

$timeCasa = $_GET['timeCasa'];
$brasaoCasa = $_GET['brasaoCasa'];
$golsMarcadosCasa = $_GET['golsMarcadosCasa'];
$golsSofridosCasa = $_GET['golsSofridosCasa'];
$porcentagemVitoriaCasa = $_GET['porcentagemVitoriaCasa'];
$vitoriaUltimos5JogosCasa = $_GET['vitoriaUltimos5JogosCasa'];
$empateUltimos5JogosCasa = $_GET['empateUltimos5JogosCasa'];
$derrotaUltimos5JogosCasa = $_GET['derrotaUltimos5JogosCasa'];

$timeFora = $_GET['timeFora'];
$brasaoFora = $_GET['brasaoFora'];
$golsMarcadosFora = $_GET['golsMarcadosFora'];
$golsSofridosFora = $_GET['golsSofridosFora'];
$porcentagemVitoriaFora = $_GET['porcentagemVitoriaFora'];
$vitoriaUltimos5JogosFora = $_GET['vitoriaUltimos5JogosFora'];
$empateUltimos5JogosFora = $_GET['empateUltimos5JogosFora'];
$derrotaUltimos5JogosFora = $_GET['derrotaUltimos5JogosFora'];



$pontuacaoCasa = 0;
$pontuacaofora = 0;
$vencedor = NULL;
$imagemVencedor = NULL;
$golMaior = NULL;
$porcentagemMaior = NULL;
$empateMaior = NULL;
$vitoriaMaior = NULL;
$derrotaMaior = NULL;

if($derrotaUltimos5JogosCasa >= $derrotaUltimos5JogosFora){
  $derrotaMaior = $derrotaUltimos5JogosCasa;
}else{
  $derrotaMaior = $derrotaUltimos5JogosFora;
}

if($vitoriaUltimos5JogosFora >= $vitoriaUltimos5JogosFora){
  $vitoriaMaior = $vitoriaUltimos5JogosFora;
}else{
  $vitoriaMaior = $vitoriaUltimos5JogosFora;
}

if($empateUltimos5JogosCasa >= $vitoriaUltimos5JogosFora){
  $empateMaior = $empateUltimos5JogosCasa;
}else{
  $empateMaior = $empateUltimos5JogosFora;
}

if($porcentagemVitoriaCasa >= $porcentagemVitoriaFora){
  $porcentagemMaior = $porcentagemVitoriaCasa;
}else{
  $porcentagemMaior = $porcentagemVitoriaFora;
}

if($golsMarcadosCasa >= $golsMarcadosFora){
  $golMaior = $golsMarcadosCasa;
}else{
  $golMaior = $golsMarcadosFora;
}

if($golsMarcadosCasa > $golsMarcadosFora){
  $pontuacaoCasa++;
}else{
  $pontuacaofora++;
}

if($golsSofridosCasa > $golsSofridosFora){
  $pontuacaofora++;
}else{
  $pontuacaoCasa++;
}

if($porcentagemVitoriaCasa > $porcentagemVitoriaFora){
  $pontuacaoCasa++;
}else{
  $pontuacaofora++;
}

if($vitoriaUltimos5JogosCasa > $vitoriaUltimos5JogosFora){
  $pontuacaoCasa++;
}else{
  $pontuacaofora++;
}

if($empateUltimos5JogosCasa > $empateUltimos5JogosFora){
  $pontuacaoCasa++;
}else{
  $pontuacaofora++;
}

if($derrotaUltimos5JogosCasa > $derrotaUltimos5JogosFora){
  $pontuacaofora++;
}else{
  $pontuacaoCasa++;
}


if($pontuacaoCasa > $pontuacaofora){
  $vencedor = $timeCasa;
}else{
  $vencedor = $timeFora;
}

if($pontuacaoCasa > $pontuacaofora){
  $imagemVencedor = $brasaoCasa;
}else{
  $imagemVencedor = $brasaoFora;
}


echo "
        <div>
          <table class='tabela'>
            <tr>
              <th>{$vencedor}</th>
              <th>
                <img src={$imagemVencedor} />
              </th>
            </tr>
            <tr>
              <td>GP</td>
              <th>{$pontuacaoCasa}</th>
            </tr>
            <tr>
              <td>GC</td>
              <th>{$pontuacaofora}</th>
            </tr>
            <tr>
              <td>SG</td>
              <th>{$pontuacaoCasa}</th>
            </tr>
            <tr>
              <td>%</td>
              <th>{$porcentagemMaior}</th>
            </tr>
            <tr>
              <td>V</td>
              <th>{$vitoriaMaior}</th>
            </tr>
            <tr>
              <td>E</td>
              <th>{$empateMaior}</th>
            </tr>
            <tr>
              <td>D</td>
              <th>{$derrotaMaior}</th>
            </tr>
          </table>
        </div>
    ";
?>