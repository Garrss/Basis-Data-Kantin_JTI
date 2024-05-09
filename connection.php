<?php
$host = 'localhost';
$user = "root";
$password = "";
$db = "kantin_jti";

$conn = mysqli_connect($host, $user, $password, $db);
if (!$conn) {
    echo ("Connection failed");
}
