<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="proximo.php" method="post"  enctype="multipart/form-data" >
        <label for="TimeCasa">Time Casa:</label>
        <select id="TimeCasa" name="timeCasa">
          <option value="fla">Flamengo</option>
          <option value="flu">Fluminense</option>
          <option value="bot">Botafogo</option>
          <option value="15p">15 de Piracicaba</option>
        </select>  
        <br>
        <label for="">imagem do brasão Casa</label>
        <input type="file" name="brasaoCasa"><br>
        <label for="">Gols Marcados</label>
        <input type="number" name="golsMarcadosCasa"><br>
        <label for="">Gols Sofridos</label>
        <input type="number" name="golsSofridosCasa"><br>
        <label for="">Porcentagem de Vitória</label>
        <input type="float" name="porcentagemVitoriaCasa"><br>
        <label for="">Vitoria ultimos 5 jogos</label>
        <select id="TimeCasa" name="vitoriaUltimos5JogosCasa">
          <option value="0">0</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          </select>
        <br>
        <label for="">Empate ultimos 5 jogos</label>
        <select id="TimeCasa" name="empateUltimos5JogosCasa">
          <option value="0">0</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          </select>
        <label for="">Derrota ultimos 5 jogos</label>
        <select id="TimeCasa" name="derrotaUltimos5JogosCasa">
          <option value="0">0</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          </select>
        <br>
        <label for="timeFora">Time Fora:</label>
        <select id="timeFora" name="timeFora">
          <option value="fla">Flamengo</option>
          <option value="flu">Fluminense</option>
          <option value="bot">Botafogo</option>
          <option value="15p">15 de Piracicaba</option>
        <br>
        <label for="">Imagem do brasão fora</label>
        <input type="file" name="brasaoFora"><br>
        <label for="">Gols Marcados</label>
        <input type="number" name="golsMarcadosFora"><br>
        <label for="">Gols Sofridos</label>
        <input type="number" name="golsSofridosFora"><br>
        <label for="">Porcentagem de Vitória</label>
        <input type="float" name="porcentagemVitoriaFora"><br>
        <label for="">Vitoria ultimos 5 jogos</label>
        <select id="TimeCasa" name="vitoriaUltimos5JogosFora">
          <option value="0">0</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          </select><br>
        <label for="">Empate ultimos 5 jogos</label>
        <select id="TimeCasa" name="empateUltimos5JogosFora">
          <option value="0">0</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          </select><br>
        <label for="">Derrota ultimos 5 jogos</label>
        <select id="TimeCasa" name="derrotaUltimos5JogosFora">
          <option value="0">0</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          </select><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>