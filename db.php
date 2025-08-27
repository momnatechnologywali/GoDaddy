<?php
$host = "localhost";
$user = "uws1gwyttyg2r";
$pass = "k1tdlhq4qpsf";
$dbname = "dbgcpygzg2pgce";
 
$conn = new mysqli($host, $user, $pass, $dbname);
 
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>
