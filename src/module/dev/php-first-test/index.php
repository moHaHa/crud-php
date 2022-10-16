<?php
$servername = "localhost";
$database = "u508226309_test";
$username = "u508226309_test";
$password = "PASSword.test.1";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>