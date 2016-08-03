<?php
error_reporting(E_ALL ^ E_DEPRECATED);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
    <form name="text" action="chek.php" method="post">
        <label>Имя:</label><br>
      <input type="text" name="name" placeholder="Имя"><br>
      <label>Email:</label><br>
      <input type="text" name="email" placeholder="email"><br>
      <label>Сообщение:</label><br>
      <textarea name="message" cols="6"  rows="3"></textarea><br>
      <input type="submit" name="done" value="Готово">
    </form>
</body>
</html>