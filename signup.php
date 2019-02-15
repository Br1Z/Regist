<?php
	require "db.php"; // Подключение к базе данных
?>
<!DOCTYPE html>
<html>
<head>
	<title>Регистрация</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
<?php require "AddUsers.php"; ?>
<div align="center">
	<div class="box_txt">
		<p class="Reg_txt">Регистрация</p>
		<form action="/signup.php" method="POST">
			<p>Ваш логин</p>
				<input required style="text-align: center;" type="text" name="login" value="<?php echo @$data ['login']; ?>">	
			</p>

			<p>Ваш Email</p>
				<input required style="text-align: center;" type="email" name="email" value="<?php echo @$data ['email']; ?>">	
			</p>
			<p>Ваш Пароль</p>
				<input required style="text-align: center;" type="password" name="passwored">	
			</p>	
			<p>Введите пароль еще раз</p>
				<input required style="text-align: center;" type="password" name="passwored_2">	
			</p>
				<button type="submit" name="du_signup"> Зарегистрироваться </button>
		</form>
	</div>
</div>
</body>
</html>