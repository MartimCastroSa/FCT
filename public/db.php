<?php
$dsn = 'mysql:dbname=phpapp;host=db-container-demo';
$user = 'root';
$password = 'root';

try {
    $dbh = new PDO($dsn, $user, $password);
	echo '<b><p align="center">Connection db: ✅</p></b>';
} catch (PDOException $e) {
    echo 'Connection db: ❌: ' . $e->getMessage();
}