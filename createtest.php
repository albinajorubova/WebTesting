<?php

$mysql = new mysqli('localhost','root', '', 'Testing');


$category = $_POST['category'];
$nametest = $_POST['nametest'];
$question = $_POST['question'];
$ans1 = $_POST['ans1'];
$ans11 = $_POST['ans11'];
$ans2 = $_POST['ans2'];
$ans22 = $_POST['ans22'];
$ans3 = $_POST['ans3'];
$ans33 = $_POST['ans33'];
$ans4 = $_POST['ans4'];
$ans44 = $_POST['ans44'];

$question = $_POST['question'];
$category = $_POST['category'];
$nametest = $_POST['nametest'];

//echo "<pre>";
//var_dump($_POST);

$mysql->query("INSERT INTO ")