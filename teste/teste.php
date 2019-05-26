<?php
$servername = "127.0.0.1";
$database = "ot";
$username = "michel";
$password = '123456!@#$$Michel';
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

echo mysqli_query($conn, "SELECT * FROM accounts");
mysqli_close($conn);
