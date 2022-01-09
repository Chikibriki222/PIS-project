<?php
    $mysqli = mysqli_connect("localhost", "t988368n_muz", "Danil115155!", "t988368n_muz");
    if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
    //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
 if (empty($login) or empty($password)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
    {  
        require("registr.php");
    echo "<p class='valid'>Вы ввели не всю информацию, заполните все поля!</p>";
    }
    else{
    //если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
    $password = stripslashes($password);
    $password = htmlspecialchars($password);
 //удаляем лишние пробелы
    $login = trim($login);
    $password = trim($password);
 // подключаемся к базе
    include ("bd.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 
 // проверка на существование пользователя с таким же логином
    $sql = "SELECT UserID FROM user WHERE Login='$login'";
    $result = $mysqli->query($sql);
    $myrow = mysqli_fetch_array($result);
    if (!empty($myrow['UserID'])) {
    
        require("registr.php");
    echo "<p class='valid'>Извините, введённый вами логин уже зарегистрирован. Введите другой логин.</p>";
    
    }
    else{
 // если такого нет, то сохраняем данные
    $sql2 = "INSERT INTO user (Login,Password) VALUES('$login','$password')";
    $result2 = $mysqli->query($sql2);
    // Проверяем, есть ли ошибки
    if ($result2=='TRUE')
    {
        require("header.php");
        require("viev.php");
    }
    else {
        require("header.php");
    require("registr.php");
    echo "<p class='valid'>Ошибка! Вы не зарегистрированы.</p>";}
    }
}
    ?>