<?php
		require "/db.php";
unset($_SESSION['logged_user']);
unset($_SESSION['logname']);
header('Location: /');