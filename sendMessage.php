<?php 
require "/db.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Сообщения</title>
	<link rel="stylesheet" type="text/css" href="style.css"> 
</head>
<body>
<?php
	$data = $_POST;
	 if (isset($data['SendMessage'])) 
	 {
	 	$error = array();
	 	
	 	if (  ($_SESSION['logname']) == ($data['ToUser'])) {
	 		
	 		$error[] = "Вы не можете отправить сообщение самому себе";
	 	}
	 	if(($data['ToUser']) == ''){
	 		$error[] = "Выбирите пользователя для отправки сообщения";
	 	}
	 	if(($data['txt_message']) == ''){
	 		$error[] = "Вы не можете отправить пустое сообщение пользователяю";
	 	}
	  	if (empty($error)) {
	 		$message = R::dispense('massages');
	 		$message->fromUser = $_SESSION['logname'];
	 		$message->toUser = $data['ToUser'];
	 		$message->msg = $data['txt_message'];
	 		$message->date = date('Y.m.d H:i:s');
	 		R::store($message);
	 		echo "Сообщение отправлено : " .  $data['ToUser'];
	 	}
	 	else
	 	{
	 		echo '<div style = "color: red;">' . array_shift($error). '</div> ';
	 	}
	 }
?>

<div align="center" ">


		<form action="/sendMessage.php" method="POST">
			<dir class="choiceUsers">
				Выбирите пользователя<br><br>
					<select size="10" multiple name="ToUser" value= "<?php $data ['ToUser']; ?>">
						<?php 
						$users = R::getAll('SELECT login FROM `users` '); // Получаем всех пользователей и выводим их в выподающий список
							foreach ($users as $key => $value) {
								foreach ($value as $user) {
									echo "<option> $user </option>";
								}
								
							}
						 ?>
					</select>
			</dir>
			Сообщение<br>
			<textarea class="textarea"  name="txt_message" ></textarea><br>
			<input type="submit" name="SendMessage">
		</form>
		
		<div class="back">
		<a  href="index.php">Назад</a>
		</div>
</div>


</body>
</html>