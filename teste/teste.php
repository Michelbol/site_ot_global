<?php
$servername = "127.0.0.1";
$database = "ot"; //ot //tibia_global
$username = "michel"; //michel //root
$password = '123456!@#$$Michel'; //123456!@#$$Michel // ''
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$dados = mysqli_query($conn, "SELECT * FROM accounts");
$accounts = mysqli_fetch_array($dados);
var_dump($accounts);
mysqli_close($conn);
