<?php

$host = "localhost";
$dbname = "hellowork";
$user = "root";
$password = "password";

$dbh = new PDO('mysql:host=' . $host . ';dbname=' . $dbname . ';charset=utf8', $user, $password);

define('PASSWORD_KEY', '2mOc_t~a'); // 暗号化キー

error_reporting(E_ALL & ~E_NOTICE);
