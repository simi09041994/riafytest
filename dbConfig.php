<?php
// Enter your Host, username, password, database below.
$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "riafy";

//$con = mysqli_connect($dbHost,$dbUsername,$dbPassword,$dbName );

$db = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUsername, $dbPassword);

if (mysqli_connect_errno()){
echo "Failed to connect to MySQL: " . mysqli_connect_error();
die();
}
 ?>