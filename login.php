<?php
	require "db.php";
	require "EnterLogin.php";
?><!DOCTYPE html>
<html>
<head>
	<title>Авторизация</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div align="center">
		<div class="box_txt">
		<p class="LogTxt">Авторизация</p>
		<form action="login.php" method="POST">

			<p>
			<p>Логин</p>
			<input required type="text" name="login" value="<?php echo @$data ['login']; ?>">

			<p>Пароль</p>
			<input required type="password" name="passwored" value="<?php echo @$data ['passwored']; ?>">
			<br>
				<button class="Logbutton" type="submit" name="du_login"> Войти </button>
		</form>
	</div>
</div>
<a href="index.php">Главное меню</a>
</body>
</html>