<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style_loginPage.css">
</head>
<body>

</body>
</html>

<?php

	// include 'database_connect.php';
	// session_start();

	include 'database_connect.php';
	include 'header.php';
	session_start();
	$arrayOfPhp2 = array();
	$arrayOfPhp2 = $_SESSION["arrayOfPhpR"];

	// echo "Hello = ".$_GET["RegistrationNum"];

	// echo $_SESSION["regNum2"]."<br>";
	// echo $_SESSION["name2"]."<br>";
	// print($arrayOfPhp2);
	// implode(" ",$arr);
	// echo implode(" ",$arr);
	// echo implode(" ",$arrayOfPhp2);

	$reg = $_GET["RegistrationNum"];
	$sql1 = "select RegistrationNum, Name, q1, q2, q3, q4, q5, q6, q7, q8, q9, q10, q11, q12, q13, q14, q15, q16, q17, q18, q19, q20 from questions WHERE RegistrationNum='".$reg."'";
	$result = $connect->query($sql1);
	$counter = 0;

	if($result->num_rows > 0) {
		while($row = $result-> fetch_assoc()) {

			// array_push($arrayPhpR, $row["RegistrationNum"]);
			// array_push($arrayPhpN, $row["Name"]);
			// $counter+=1;
			?>
			<div style="padding: 20px;">
				
			

			<?php
			echo 'Registration Number = '.$row["RegistrationNum"];
			echo '<br>';
			echo 'Name = '.$row["Name"].'<br><br>';
			echo 'The Solution of the question number 1: '.$row["q1"].'<br><br>';
			echo 'The Solution of the question number 1: '.$row["q2"].'<br><br>';
			echo 'The Solution of the question number 1: '.$row["q3"].'<br><br>';
			echo 'The Solution of the question number 1: '.$row["q4"].'<br><br>';
			echo 'The Solution of the question number 1: '.$row["q5"].'<br><br>';
			echo 'The Solution of the question number 1: '.$row["q6"].'<br><br>';
			echo 'The Solution of the question number 1: '.$row["q7"].'<br><br>';
			echo 'The Solution of the question number 1: '.$row["q8"].'<br><br>';
			echo 'The Solution of the question number 1: '.$row["q9"].'<br><br>';
			echo 'The Solution of the question number 1: '.$row["q10"].'<br><br>';
			echo 'The Solution of the question number 1: '.$row["q11"].'<br><br>';
			echo 'The Solution of the question number 1: '.$row["q12"].'<br><br>';
			echo 'The Solution of the question number 1: '.$row["q13"].'<br><br>';
			echo 'The Solution of the question number 1: '.$row["q14"].'<br><br>';
			echo 'The Solution of the question number 1: '.$row["q15"].'<br><br>';
			echo 'The Solution of the question number 1: '.$row["q16"].'<br><br>';
			echo 'The Solution of the question number 1: '.$row["q17"].'<br><br>';
			echo 'The Solution of the question number 1: '.$row["q18"].'<br><br>';
			echo 'The Solution of the question number 1: '.$row["q19"].'<br><br>';
			echo 'The Solution of the question number 1: '.$row["q20"].'<br><br>';
			break;
		}
	}
	else {
		echo "Zero Results";
	}




?>

</div>