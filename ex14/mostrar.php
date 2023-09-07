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

        if($_SESSION['pontuacaoCasa'] >= $_SESSION['pontuacaoFora']){
            echo "Time Vencedor: {$_SESSION['timeCasa']}";
        }
        else{
            echo "Time Vencedor: {$_SESSION['timeFora']}";
        }
        
        echo "<a href='sair.php'>SAIR</a>";

    ?>
</body>
</html>