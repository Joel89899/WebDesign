<?php
$host= "localhost";
$database ="alumni";
$user = "root";
$pass= "";

#establish connection
$link = mysqli_connect($host, $user, $pass, $database);
#to locate database
mysqli_select_db($link, $database);
?>