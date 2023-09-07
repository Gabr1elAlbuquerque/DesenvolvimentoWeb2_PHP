<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salvar</title>
</head>
<body>
    <?php
        $timeCasa = $_GET['timeCasa'];
        $pontuacaoCasa = $_GET['pontuacaoCasa'];
        $timeFora = $_GET['timeFora'];
        $pontuacaoFora = $_GET['pontuacaoFora'];
        $_SESSION['timeCasa'] = $timeCasa;
        $_SESSION['pontuacaoCasa'] = $pontuacaoCasa;
        $_SESSION['timeFora'] = $timeFora;
        $_SESSION['pontuacaoFora'] = $pontuacaoFora;
        echo "<a href='mostrar.php'>MOSTRAR</a>"
    ?>
</body>
</html>