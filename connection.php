
<?php
$host = getenv("DB_HOST");
$user = getenv("DB_USER");
$password = getenv("DB_PASS");
$database = getenv("DB_NAME");

//change mysqli_connect(host_name,username, password); 

    $connection = mysqli_connect($host, $user, $password, $database);
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>
