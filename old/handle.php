<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php

include('includes/db.php');


$login = $_POST['login'];
$password = $_POST['password'];

$count = mysqli_query($connection, "select * from `users` where `login` = '$login' and `password` = '$password'");
if (mysqli_num_rows($count) == 0)
{
	echo "Вы не зарегистрированы";
}
else {
	/*echo "Привет, $login";*/
	echo 'Привет, '.$login;
}

?>
	
</body>
</html>
