</!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Библиотека</title>
</head>
<body>

<div style="width: 1000%;">
    <div style="float: left; width: 400px; height: 200px;">
    	<div class="h3">Авторизация</div>
<br>

<form action="?action=login" method="post" name="form_login">
  Логин: &nbsp;&nbsp;<input type="text" name="login" placeholder="Логин" value="" id="login"><br>
  Пароль: <input type="password" name="password" placeholder="Пароль" value="" id="passwod"><br><br>
  <input type="submit" name="submit" value="Войти"></form>
</div>

<div style="float: left; width: 400px; height: 500px;">
  <div class="h3">Регистрация</div><br>

<form action="?action=registration" method="post" name="form_registr" id="form_registr">
  Логин*: &nbsp;&nbsp;<input type="text" name="login" required="required" placeholder="Введите логин" value="" id="reg_login"><br>
  Имя: &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="name" placeholder="Имя" value="" id="name"><br><br>
  Телефон:<input type="phone" name="phone" placeholder="Номер тел" value="" id="phone"><br>
  Почта: &nbsp;&nbsp;<input type="email" name="email" placeholder="Ваш email" value="" id="email"><br><br>
  Пароль*: &nbsp;&nbsp;<input type="password" name="pass_1" required="required" placeholder="Пароль" value="" id="pass_1"><br>
  Повтор пароля*: <input type="password" name="pass_2" required="required" placeholder="Повтор пароля" value="" id="pass_2"><br>
  Дата рождения*: &nbsp;&nbsp;<input type="text" name="birthday" required="required" placeholder="Введите дату рождения" value="" id="birthday"><br>
  <br>
  <input type="submit" name="submit" value="Регистрация">
 </form>
</div>
</div>
</body>
</html>