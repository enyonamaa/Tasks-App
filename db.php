<?php
$host = "localhost";
$db_user = "enyonam.attipoe";
$db_pass = "67952027";
$db_name = "ecommerce_2026A_enyonam.attipoe";

$conn = mysqli_connect($host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
