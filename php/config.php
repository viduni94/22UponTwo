<?php
$host = "localhost";
$username = "root";
$password = "root";
$database = "22UponTwo";

$conn = new mysqli("$host","$username","$password","$database");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>