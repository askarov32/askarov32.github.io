<!DOCTYPE html>
<html>
  <head>
    <title>Форма обратной связи</title>
  </head>
  <body>
    <form action="display.html" method="get" style="flex-direction: column; display: flex; width: 300px;">
        <legend>Форма обратной связи</legend>
        <label for="name">Ваше имя</label>
        <input type="text" id="name" name="name" placeholder="введите ваше имя">
        <br>
        <label for="email">Ваша почта</label>
        <input type="email" id="email" name="email" placeholder="введите ваш email">
        <br>
        <label for="message">Ваше сообщение</label>
        <textarea id="message" name="message" placeholder="Ваше сообщение"></textarea>
        <br>
        <button type="submit">Отправить сообщение</button>
    </form>
  </body>
</html>
