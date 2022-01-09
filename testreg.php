<?php
    session_start();//  вся процедура работает на сессиях. Именно в ней хранятся данные  пользователя, пока он находится на сайте. Очень важно запустить их в  самом начале странички!!!
if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
    //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
if (empty($login) or empty($password)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
    {
        require("header.php");
        require("reg.php");
    echo "<p class='valid'>Вы ввели не всю информацию, заполните все поля!</p>";
    }
    else{
    //если логин и пароль введены,то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
$password = stripslashes($password);
    $password = htmlspecialchars($password);
//удаляем лишние пробелы
    $login = trim($login);
    $password = trim($password);
// подключаемся к базе
    include ("bd.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 
    $sql = "SELECT * FROM user WHERE Login='$login'";
    $result = $mysqli->query($sql); //извлекаем из базы все данные о пользователе с введенным логином
    $myrow = $result->fetch_assoc();
    if (empty($myrow['Password']))
    {
        require("header.php");
        require("reg.php");
    //если пользователя с введенным логином не существует
    echo ("<p class='valid'>введённый вами login или пароль неверный.</p>");
    }
    else {
    //если существует, то сверяем пароли
    if ($myrow['Password']==$password) {
    //если пароли совпадают, то запускаем пользователю сессию! Можете его поздравить, он вошел!
    $_SESSION['login']=$myrow['Login']; 
    $_SESSION['id']=$myrow['UserID'];//эти данные очень часто используются, вот их и будет "носить с собой" вошедший пользователь
    require("header.php");
    require("viev.php");

    }
else {
    //если пароли не сошлись
    require("header.php");
        require("reg.php");
    echo "<p class='valid'>Извините, введённый вами login или пароль неверный.</p>";
    }
}
    }
    ?>