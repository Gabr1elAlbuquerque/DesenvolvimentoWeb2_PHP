<?php

$timeCasa = $_POST['timeCasa'];

$golsMarcadosCasa = $_POST['golsMarcadosCasa'];
$golsSofridosCasa = $_POST['golsSofridosCasa'];
$porcentagemVitoriaCasa = $_POST['porcentagemVitoriaCasa'];
$vitoriaUltimos5JogosCasa = $_POST['vitoriaUltimos5JogosCasa'];
$empateUltimos5JogosCasa = $_POST['empateUltimos5JogosCasa'];
$derrotaUltimos5JogosCasa = $_POST['derrotaUltimos5JogosCasa'];

$timeFora = $_POST['timeFora'];

$golsMarcadosFora = $_POST['golsMarcadosFora'];
$golsSofridosFora = $_POST['golsSofridosFora'];
$porcentagemVitoriaFora = $_POST['porcentagemVitoriaFora'];
$vitoriaUltimos5JogosFora = $_POST['vitoriaUltimos5JogosFora'];
$empateUltimos5JogosFora = $_POST['empateUltimos5JogosFora'];
$derrotaUltimos5JogosFora = $_POST['derrotaUltimos5JogosFora'];

$nomeTempCasa = $_FILES['brasaoCasa']['tmp_name'];
$nomeTempFora = $_FILES['brasaoFora']['tmp_name'];
$pasta = "imagens/";
$NomeCasa = $_FILES['brasaoCasa']['name'];
$NomeFora = $_FILES['brasaoFora']['name'];
$destino = $pasta . $NomeCasa;
$destino2 = $pasta. $NomeFora;

move_uploaded_file($nomeTempCasa,$destino);
move_uploaded_file($nomeTempFora,$destino2);

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
  $imagemVencedor = $NomeCasa;
}else{
  $imagemVencedor = $NomeFora;
}


echo "
 <link rel='stylesheet' type='text/css' href='style.css' />
        <div >
          <table class='tabela'>
            <tr>
              <th>{$vencedor}</th>
              <th>
                <img src=imagens/{$imagemVencedor} />
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