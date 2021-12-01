<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shoes-project";
// Connecting DB
$conn = new mysqli($servername, $username, $password, $dbname);
// check conn
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}

?>