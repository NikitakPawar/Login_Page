<?php

$host = "localhost";
$user = "root";
$pass = "MYsql_@03";
$db = "registration form";
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    echo "failed to connect DB" . $conn->connect_error;
}
?>