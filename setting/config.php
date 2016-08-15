<?php

$host = "localhost";
$dbname = "hellowork";
$user = "root";
$password = "password";

$dbh = new PDO('mysql:host=' . $host . ';dbname=' . $dbname . ';charset=utf8', $user, $password);
