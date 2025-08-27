<?php
$servername = "localhost";
$username = "uws1gwyttyg2r";   // your MySQL user
$password = "k1tdlhq4qpsf";    // your MySQL password
$dbname = "dbgcpygzg2pgce";    // your database name
 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
