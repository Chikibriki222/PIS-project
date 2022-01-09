<!-- Это форма авторизации: -->
<div class="regmain">
	<form action="testreg.php" method="post">

    <!--****  testreg.php - это адрес обработчика. То есть, после нажатия на кнопку  "Войти", данные из полей отправятся на страничку testreg.php методом  "post" ***** -->
		<p>
			<label>Ваш логин:<br></label>
			<input name="login" type="text" size="15" maxlength="15">
		</p>


		<!--**** В текстовое поле (name="login" type="text") пользователь вводит свой логин ***** -->
	
		<p>

			<label>Ваш пароль:<br></label>
			<input name="password" type="password" size="15" maxlength="15">
    	</p>

    <!--**** В поле для паролей (name="password" type="password") пользователь вводит свой пароль ***** --> 

    	<p>
    		<input class = "btnad2" type="submit" name="submit" value="Войти">

		
    	</p></form>
	</div>
<!-- Конец формы авторизации. -->
