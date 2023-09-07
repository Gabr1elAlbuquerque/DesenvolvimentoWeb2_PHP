<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar</title>
</head>
<body>
    <?php
        echo "Time: {$_SESSION['nome']}";<br>
        echo "Pontuacao: {$_SESSION['pontuacao']}";<br>
        echo"<a href='sair.php'>Sair</a>"
    ?>
</body>
</html>