<?php
		require "/db.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Главное меню</title> 
	<link rel="stylesheet" type="text/css" href="style.css"> 
</head>
<body>



<?php	if (isset($_SESSION['logged_user'])) :		?><!-- если нажата кнопка авторизоваться  -->
		<div align="right"><a href="deleteuser.php">Удалить аккаунт</a></div>
		<div align="center">
			Добро пожаловать <?php echo $_SESSION['logged_user']->login;?>!<br>
			<img class="gif" src="Welcome.gif">
		</div>
		<hr>

		<a href="myMessage.php">Мои сообщения</a><br>
		<a href="sendMessage.php">Отправить сообщения</a><br>
		<a class="link" href="logout.php">Выйти</a><br>
		
	<?php else :?>
	
	<div align="center">
		<div class="bloc_for_button">
		<div class="buttons">
			<span class="txt_above_button">ТЕСТ <p>Авторизации и Регистрации</span>
			<a href="/login.php">
				<button class="style_button1" type="button"> Авторизация </button>
			</a>
			<a href="/signup.php">
				<button class="style_button2" type="button"> Регистрация </button>
			</a>
		</div>	
	</div>
	</div>
	<?php endif; ?>
</body>
</html>