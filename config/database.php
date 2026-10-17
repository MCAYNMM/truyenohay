<?php
$servername = "localhost"; 
$username = "root"; 
$password = "";
$dbname = "truyen0hay";
$port = (int) (getenv("DB_PORT") ?: 3306);

$conn = new mysqli($servername, $username, $password, $dbname, $port);

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
?>
