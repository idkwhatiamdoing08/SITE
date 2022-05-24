<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Game</title>
    <link rel="stylesheet" href="styles/game.css">
</head>
<body>
<a class="wrapper">
  <h1>Игра «Найди пару»</h1>
      Фон:
      <button class="button1" id="ffdead" name="button" value="#ffdead" onclick='change_color(this)'>&nbsp;</button>
      <button class="button2" id="pink" name="button" value="pink" onclick='change_color(this)'>&nbsp;</button>
      <button class="button3" id="orange" name="button" value="orange" onclick='change_color(this)'>&nbsp;</button>
      <button class="button4" id="skyblue" name="button" value="skyblue" onclick='change_color(this)'>&nbsp;</button>
      <button class="button5" id="black" name="button" value="#4E4E4E" onclick='change_color(this)'>&nbsp;</button>

      <br><br><br>
  Нажмите на любую карту, чтобы начать<br>

  <p id ="text"></p>
  <div id="container" class="eight">

  </div>
      <div>
          <button id="button-pause">Пауза</button><br><br>
          Время: <span id="seconds">00</span>.<span id="tens">00</span><br>Попытки: <span id="triesid"></span>
          <br><br>

      </div>
      </div>
      <div>
          <a href="records.html">Рекорды и сохранение результата</a>
          <br><br>
      </div>
      <script  src="scripts/game.js"></script>
</body>
</html>