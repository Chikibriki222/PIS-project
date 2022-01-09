<?php
 require('header.php');

$linkind = mysqli_connect("localhost", "t988368n_muz", "Danil115155!", "t988368n_muz");
	//Если форма авторизации отправлена...
	if ( !empty($_REQUEST['password']) and !empty($_REQUEST['login']) ) {
		//Пишем логин и пароль из формы в переменные (для удобства работы):
		$loginind = $_REQUEST['login']; 
		$passwordind = $_REQUEST['password']; 

		/*
			Формируем и отсылаем SQL запрос:
			ВЫБРАТЬ ИЗ таблицы_users ГДЕ поле_логин = $login И поле_пароль = $password.
		*/
		$queryind = 'SELECT*FROM user WHERE Login="'.$loginind.'" AND Password="'.$passwordind.'"';
		$resultind = mysqli_query($linkind, $queryind); //ответ базы запишем в переменную $result. 
		$userind = mysqli_fetch_assoc($resultind); //преобразуем ответ из БД в нормальный массив PHP

		//Если база данных вернула не пустой ответ - значит пара логин-пароль правильная
		if (!empty($userind)) {


			//Стартуем сессию:
			session_start(); 

			//Пишем в сессию информацию о том, что мы авторизовались:
			$_SESSION['auth'] = true; 

			//Пишем в сессию логин и id пользователя (их мы берем из переменной $user!):
			$_SESSION['id'] = $userind['UserID']; 
			$_SESSION['login'] = $userind['Login'];

            require('viev.php'); 
		} else {
			require('reg.php');//Пользователь неверно ввел логин или пароль, выполним какой-то код.
            echo "<div class='textt' >Неверный логин или пароль</div>";
		}
    }
?>