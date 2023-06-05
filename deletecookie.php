<?php
include 'test.php';

unset($_COOKIE['name']);
setcookie('name', null, -1, '/');

