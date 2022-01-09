<?php
			session_start(); 
            require('header.php');
		if (!empty($_SESSION['login'])) {
            require('viev.php'); 
		} else {
			require('reg.php');//Пользователь неверно ввел логин или пароль, выполним какой-то код.
            
		}
?>
