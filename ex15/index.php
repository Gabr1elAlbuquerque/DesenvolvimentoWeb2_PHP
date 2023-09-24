<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Inicial</title>
</head>
<body>

    <form action="salvaTime.php">
        <label for="">Escolha o time:</label>
        <select name="time" id="">Escolha o time
            <option value="Flamengo">Flamengo</option>
            <option value="Palmeiras">Palmeiras</option>
            <option value="Fluminense">Fluminense</option>
            <option value="Corinthians">Corinthians</option>
            <option value="São Paulo">São Paulo</option>
        </select><br>    
        <label for="">Digite os Pontos:</label>
        <input type="text" name="pontos"><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>