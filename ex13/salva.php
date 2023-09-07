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
        $nome = $_GET['nome'];
        $pontuacao = $_GET['pontuacao'];
        $_SESSION['nome'] = $nome;
        $_SESSION['pontuacao'] = $pontuacao;
        echo "<a href='mostrar.php'>Mostrar</a>"
    ?>
</body>
</html>