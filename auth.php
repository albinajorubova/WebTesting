<?php
$mysql = new mysqli('localhost','root', '', 'Testing');

$username = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['pass'];

if (strlen($pass) < 5){
    echo "Введите";
    exit();
}
elseif(filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "Верно";

}
else
{
    echo "Ошибка";
    exit();
}

$pass = md5($pass)."asdasdaa23143rf@#!sdasd";


$mysql->query("INSERT INTO `Auth` (`username`, `pass`, `email`) values ('$username', '$pass', '$email')");

$tester_id = mysqli_fetch_row($mysql->query("SELECT id FROM Auth WHERE username = 'Тестер'"))[0];

    header('Location: http://localhost/3-IS1/WebTesting');


