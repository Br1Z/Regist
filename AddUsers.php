<?php
$data = $_POST; 
	if( isset ( $data['du_signup'] )) //Если нажата кнопка то...
	{
		$error = array(); // массив для ошибок

			if( $data['passwored'] != $data['passwored_2'])
				{
					$error[] = "Повторный пароль введен не верно ";
				}

			if(R::count('users', "login = ? " ,array($data['login'],))>0)
				{
					$error[] = 'Пользователь с таким логином уже существует';

				}

			if(R::count('users',"email = ?", array($data['email']))>0)
				{	
					$error[] = 'Пользователь с таким Email уже существует';
				}

			if (empty($error)) 
				{
					//Если ошибок не выдаст то выполнит..
					$user = R::dispense('users'); // Создание в базе данных таблице пользователи 
					$user->login = $data['login']; // ввод данных
					$user->email = $data['email'];
					$user->passwored = password_hash($data['passwored'], PASSWORD_DEFAULT);
					$user->date_signup = date('Y.m.d H:i:s');
					R::store($user); // сохраняет
					echo '<div style = "color: green;"> Вы успешно зарегистрирован </div><a href="index.php">Главное меню</a> <hr>';
					
				}	
			else
				{
				echo '<div style = "color: red;">' . array_shift($error). '</div> <hr>';
				}

	}