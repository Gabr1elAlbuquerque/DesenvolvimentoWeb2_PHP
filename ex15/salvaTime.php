<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salva</title>
</head>
<body>
<?php

$_SESSION['time'] = $_GET['time'];
$_SESSION['pontos'] = $_GET['pontos'];

class Time{
    private $nome;
    private $pontos;

    function mostraTime() {
        echo "<h1>{$this->nome}</h1>";
        echo "Pontos: <b>{$this->pontos}</b>";
      }

    function __construct($nome,$pontos){
        $this->nome = $nome;
        $this->pontos = $pontos;
    }

    function setNome($nome) {
        $this->nome = $nome;
      }
    function getNome() {
        return $this->nome;
      }
    function setPontos($pontos) {
        $this->pontos = $pontos;
      }
    function getPontos() {
        return $this->pontos;
      }

$timeEscolhido = new Time($_SESSION['time'], $_SESSION['pontos']);
$timeEscolhidoJSON = json_encode($timeEscolhido);
$_SESSION['timeJSON'] = $timeEscolhidoJSON;

//$timeEscolhido->mostraTime();

}

?>
</body>
</html>