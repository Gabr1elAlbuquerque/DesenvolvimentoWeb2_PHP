<!DOCTYPE html>
<html>
<head>
    <title>Busca e Troca de Palavra</title>
</head>
<body>
    <h1>Busca e Troca de Palavra</h1>
    <form action="troca.php" method="post">
        <label for="palavra">Palavra a ser buscada:</label>
        <input type="text" name="palavra" id="palavra" required><br><br>

        <label for="texto">Texto:</label><br>
        <textarea name="texto" id="texto" rows="5" cols="40" required></textarea><br><br>

        <input type="submit" value="Buscar e Trocar">
    </form>
</body>
</html>
