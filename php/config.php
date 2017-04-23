<?php
$host = "mysql.secureserver.net";
$username = "viduni";
$password = "adidas1653";
$database = "twentytwoupontwo";

$conn = new mysqli("$host","$username","$password","$database");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo "error";
}

?>