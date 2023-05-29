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



$category_id = mysqli_fetch_row($mysql->query("SELECT id FROM categories WHERE name = '$category'"))[0];

$mysql->query("INSERT INTO name_test (`nametest`) values('$nametest')");
//$last_id = mysqli_fetch_row($mysql->query("SELECT id  FROM name_test where nametest = '$nametest'"))[0];
$last_id_category = mysqli_insert_id($mysql);
$mysql->query("INSERT INTO question (`name`, `nameTest_ID`) values('$question','$last_id_category')");
$last_id_question = mysqli_insert_id($mysql);



if ($ans11 == 'on'){
    $mysql->query("INSERT INTO answer (`answer`,`is_true`,`question_id`) VALUES ('$ans1','1','$last_id_question')");
}else {
    $mysql->query("INSERT INTO answer (`answer`,`is_true`,`question_id`) VALUES ('$ans1','0','$last_id_question')");
}if ($ans22 == 'on'){
    $mysql->query("INSERT INTO answer (`answer`,`is_true`,`question_id`) VALUES ('$ans2','1','$last_id_question')");
}else {
    $mysql->query("INSERT INTO answer (`answer`,`is_true`,`question_id`) VALUES ('$ans2','0','$last_id_question')");
}
if ($ans33 == 'on'){
    $mysql->query("INSERT INTO answer (`answer`,`is_true`,`question_id`) VALUES ('$ans3','1','$last_id_question')");
}else {
    $mysql->query("INSERT INTO answer (`answer`,`is_true`,`question_id`) VALUES ('$ans3','0','$last_id_question')");
}
if ($ans44 == 'on'){
    $mysql->query("INSERT INTO answer (`answer`,`is_true`,`question_id`) VALUES ('$ans4','1','$last_id_question')");
}else {
    $mysql->query("INSERT INTO answer (`answer`,`is_true`,`question_id`) VALUES ('$ans4','0','$last_id_question')");
}



$last_id_name_test=mysqli_fetch_row($mysql->query("SELECT * FROM `name_test` ORDER BY id DESC LIMIT 1"))[0];

//var_dump("INSERT INTO result (`category_id`, `nameTest_id`) VALUES ('$category_id','$last_id_name_test')");

$mysql->query("INSERT INTO result (`category_id`, `nameTest_id`) VALUES ('$category_id','$last_id_name_test')");

header('Location: http://localhost/3-IS1/WebTesting/test.php');

//$mysql->query("INSERT INTO ")