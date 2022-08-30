<?php

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$pass = $_POST["pass"];

$connect = mysqli_connect('localhost', 'root' , '', 'registration');

mysqli_query($connect, "INSERT INTO userdatabase(fname, lname, email, pass) values('$fname', '$lname', '$email', '$pass')");

header('location: login.php');



?>