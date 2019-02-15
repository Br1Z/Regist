<?php
	$data= $_POST;

	if( isset($data['du_login']))
	{

		$error = array();
		$user = R::findOne('users', 'login = ?', array($data['login'])); // Для поиска пользователей
		
		if( $user ) // Если нашел пользователя
			{
				if(password_verify($data['passwored'],$user->passwored)) // проверка паролья
				{
					$_SESSION['logname'] = $data['login'];
					$_SESSION['logged_user'] = $user;
					$user = R::load('users', $_SESSION['logged_user']); 
					$user->date_last_login = date('Y.m.d H:i:s');
					R::store($user);
					header("Location: index.php");
				}else{
					$error[] = 'Пароль введет не правельно!';
				}

			}
		else
			{ 
					
				$error[] = 'Пользователь с таким логином не найден!';
			}
			if ( ! empty($error)) 
				{
						
					echo '<div style = "color: red;">' . array_shift($error). '</div> <hr>';	
				}	
					

	}	
