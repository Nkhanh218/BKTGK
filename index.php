<?php

function sayHello($name)
{
	echo "Hello $name!";
}

?>

<html>

<head>
	<title>Advanced Web Development K15-N03</title>
	<link rel="stylesheet" href="./css/style.css">

</head>

<body>
	<?php
	?>
	 <div class="container">
        <div class="background">
            <div class="content-position">
                <img src="./img/login-line-1.png" alt="">
            </div>
            <div class="logo">
                <img src="./img/logo-Phenikaa-w.png" alt="">
            </div>
            <div class="form-container">
                <div class="login-form">
                    <h1>Đăng nhập</h1>
                    <form action="./Controller/checkLogin.php" method="post">
                        <div class="input">
                            <label for="username">
                            </label>

                            <input type="text" id="username" name="userName" placeholder="Nhập tài khoản"><br><br>
                            <div class="password">
                                <label for="password"></label>
                                <input type="password" id="password" name="passWord"
                                    placeholder="Nhập mật khẩu"><br><br>
                            </div>
                        </div>
                        <div>
                            <input
                                style="width: 80%; margin-left: 35px; background: rgb(34,55,113); height: 50px; color: aliceblue; border-radius: 10px; font-size: 18px; font-weight: 500;"
                                type="submit" name="submit" value="Login" class="btn-login" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
	<!-- <form action="./Controller/checkLogin.php" method="POST">
		<a>Username:</a><input type=text name="userName" size=16>
		<a>Password:</a><input type=password name="passWord" size=16>
		<input type=submit name=submit value="Login">
	</form> -->
</body>

</html>