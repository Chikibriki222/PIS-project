
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <title>Интернет-магазин товаров для дома</title>
    <link href="style.css" rel="stylesheet">
  </head>
<?php
  session_start();
echo "
  <body>
    <header class='site-header'>
      <nav class='site-navigation'>

        <ul class='navigation-list'>
          <li><a href='add.php'>Добавить</a></li>
          <li><a href='index.php'>Просмотр</a></li>
        </ul>
        
      </nav>
      <div class='exit'>
        <form  method='post'>
          <input class='exitbtn' type='submit' name='nazvanie_knopki' value='Выход' />
          
        </form>
        
      </div>
      <div class='exit2'>
      <form action='registr.php' method='post'>
          <input class='regbtn' type='submit' name='nazvanie_knopki2' value='Регистрация' />
        </form>
      </div>
    </header>
    
  </body>";

    # Если кнопка нажата
if(isset($_POST['nazvanie_knopki'])){
        session_destroy();
};

?>