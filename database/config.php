<?php
// config.php
$host = "localhost";
$username = "root";
$password = "";
$database = "tech_shop_project";
$port = 3306;
try {
    $connection = mysqli_connect($host, $username, $password, $database, $port);
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }
} catch (Exception $e) {
    echo $e->getMessage();
    die;
}
