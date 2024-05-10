<?php
echo "hello";
phpinfo();

$host = "mysql-2410ad7e-st-bfd3.l.aivencloud.com";

$user = "avnadmin";
$port = "26540";
$password = "AVNS_EV3aXOU6zdIjvm7rXcq";

$con = mysqli_connect($host, $user, $password);

mysqli_select_db($con, "defaultdb");
//To select the database

session_start(); //To start the session

$query = mysqli_query($con, "select * from QuanLySach");

//$row = mysqli_fetch_array($query);

$rowcount = mysqli_num_rows($query);
//made query after establishing connection with database.

//echo "my result <a href='data/" . htmlentities($row['classtype'], ENT_QUOTES, 'UTF-8') . ".php'>sinh vien</a>";

printf($rowcount);
