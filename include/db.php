<?php
session_start();

$servername = "localhost";
$db_username = "MutaleMulenga";
$password = "Javeria##2019";
$dbname = "p_estates";

try {
    $dsn = "mysql:host=$servername;dbname=$dbname;charset=utf8mb4";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    $connect = new PDO($dsn, $db_username, $password, $options);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

include "functions.php";