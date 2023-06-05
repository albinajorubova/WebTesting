<?php
$mysql = new mysqli('localhost','root', '', 'Testing');

$email = $_POST['email'];
$pass = $_POST['pass'];
$pass = md5($pass)."asdasdaa23143rf@#!sdasd";

$result = $mysql->query("SELECT * FROM `Auth` WHERE  `email`='$email' AND `pass` = '$pass'");

$user= $result->fetch_assoc();



$tester_id = mysqli_fetch_row($mysql->query("SELECT id FROM Auth WHERE username = 'Тестер'"))[0];


if ($user==0) {
    header('Location: http://localhost/3-IS1/WebTesting/');
    exit();
}
setcookie('name',$user['username'], time() + 3600, "/");



if ($_COOKIE['name'] == "Тестер"){
    header('Location: http://localhost/3-IS1/WebTesting/test.php');

}else{

    header('Location: http://localhost/3-IS1/WebTesting/test.html');
}

