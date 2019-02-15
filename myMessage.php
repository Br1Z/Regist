<?php 
require "/db.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Мои сообщения</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	

<div align="center" ">

	ЗДЕСЬ МОИ СООБЩЕНИЯ
</div>
	<br>
	<div align="center">
		<div  class="acceptedMessage">

		<div class="content">
			<?php	
			$msges = R::getAll('SELECT * FROM massages ORDER BY `id` DESC'); // Получаем всех пользователей и выводим
			foreach ($msges as $msg) {
				if ($msg['to_user'] === $_SESSION['logname']) {
					
					echo 'Отправленно: '. $msg['date'] . '<br>';
					echo $msg['from_user'] . ': ' . $msg['msg'] ;
					echo "<hr>";
				}
			}
		?>
		</div>
	
	</div>

<a href="index.php">Назад</a>
	</div>
</div>

</body>
</html>