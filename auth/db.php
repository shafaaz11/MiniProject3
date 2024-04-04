<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'todolist';

$link = mysqli_connect($host, $user, $password, $db) or die(mysqli_error($link));
