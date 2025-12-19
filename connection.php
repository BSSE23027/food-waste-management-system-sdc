<?php
$host = getenv("DB_HOST");
$user = getenv("DB_USER");
$pass = getenv("DB_PASS");
$db   = getenv("DB_NAME");

$connection = mysqli_connect($host, $user, $pass, $db);

if (!$connection) {
    die("Database connection failed");
}
