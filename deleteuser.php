<?php 
require "/db.php";

	$data = $_POST;
	if (isset($data['yes'])) {
		$user = R::load('users', $_SESSION['logged_user']);
		R::trash($user);
		unset($_SESSION['logged_user']);
		header("Location:index.php");
	}
	if (isset($data['no'])) {
		
		header("Location:index.php");
	}
?>
<div align="center" ">
	<form action="/deleteuser.php" method="POST">
		<p>Вы уверены?</p><br> 
		<input type="submit" name="yes" value="Да">
		<input type="submit" name="no" value="нет">
	</form>
</div>
