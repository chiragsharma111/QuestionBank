<?php

	// include 'database_connect.php';
	// session_start();

	include 'database_connect.php';
	session_start();
	$arrayOfPhp2 = array();
	$arrayOfPhp2 = $_SESSION["arrayOfPhp"];

	// echo $_SESSION["regNum2"]."<br>";
	// echo $_SESSION["name2"]."<br>";
	// print($arrayOfPhp2);
	// implode(" ",$arr);
	// echo implode(" ",$arr);
	echo implode(" ",$arrayOfPhp2);


?>