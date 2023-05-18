<?php
$mysql = new mysqli('localhost','root', '', 'Testing');

$email = $_POST['email'];
$pass = $_POST['pass'];
$pass = md5($pass)."asdasdaa23143rf@#!sdasd";

$result = $mysql->query("SELECT * FROM `Auth` WHERE  `email`='$email' AND `pass` = '$pass'");

$user= $result->fetch_assoc();


if ($user==0) {
    header('Location: http://localhost/3-IS1/WebTesting/');
    exit();
}
setcookie('name',$user['username'], time() + 3600, "/");
$mysql->close();




header('Location: http://localhost/3-IS1/WebTesting/test.php');