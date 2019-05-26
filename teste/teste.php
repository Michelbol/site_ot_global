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
$include = mysqli_query($conn, "INSERT INTO accounts (name, password, email, creation, create_ip, flag) values ('name', 'password', 'email', 11, 1, 'flag')");
var_dump($include);
mysqli_close($conn);
