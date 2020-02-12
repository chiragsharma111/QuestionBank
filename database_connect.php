<?php


$serverName = "localhost";
$userName   = "root";
$password   = "";
$dbName     = "studentsinfo";

//Create Connection
// $conn = new mysqli($servername, $username, $password, $dbname);
$connect = new mysqli($serverName, $userName, $password, $dbName);

//Check Connection
if($connect->connect_error) {
	die("Connection Failed: ".$connect->connect_error);
}
// session_start();
// echo  "<p style='color=green;'> Connected Successfully<br></p>";

?>