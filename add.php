<?php
session_start();
require('header.php');
		if (!empty($_SESSION['login'])) {
            echo "<div class='add'>
                    <div>
                        <form action='create.php' method='post'>
                            <p>Название:
                            <input type='text' name='name' /></p>
                            <p>Исполнитель:
                            <input type='text' name='author' /></p>
                            <p>Альбом:
                            <input type='text' name='album' /></p>
                            <p>Длительность:
                            <input type='time' step=1 name='time' /></p>
                            <p>Обложка альбома:
                            <input type='text' step=1 name='image' /></p>
                            <input type='submit' value='Добавить' class='btnad'>
                        </form>
                    </div>
                </div>";
        }
        else {
			require('reg.php');//Пользователь неверно ввел логин или пароль, выполним какой-то код.

		}
?>

