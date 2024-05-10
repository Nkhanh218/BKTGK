<?php

function sayHello($name)
{
	echo "Hello $name!";
}

?>

<html>

<head>
	<title>Advanced Web Development K15-N03</title>
</head>

<body>
	<?php
	sayHello('K15-N03 2024');
	?>
	<form action="./Controller/checkLogin.php" method="POST">
		<a>Username:</a><input type=text name="userName" size=16>
		<a>Password:</a><input type=password name="passWord" size=16>
		<input type=submit name=submit value="Login">
	</form>
</body>

</html>