<?php
$servername = "localhost";
$username = "snapkdlp_task";
$password = "Task1@!";
$dbname = "snapkdlp_tasks";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>