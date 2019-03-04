<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php

include('includes/db.php');
?>


<form method="POST" action="handle.php">
	<input type="text" placeholder="Ваш логин" name="login">
	<input type="text" placeholder="Ваш пароль" name="password">
	<hr>
	<input type="submit" value="Отправить">


</form>
</body>
</html>
