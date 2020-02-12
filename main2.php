<!DOCTYPE html>
<html>
<head>
	<title>Student Result Page</title>
	<link rel="stylesheet" type="text/css" href="style_loginPage.css">
</head>
<body>

<?php

	include 'database_connect.php';
	include 'header.php';
	session_start();
	$arrayPhpR = array();
	$arrayPhpN = array();

	$sql = "select RegistrationNum, Name from questions";
	$result = $connect->query($sql);
	$counter = 0;

	if($result->num_rows > 0) {
		while($row = $result-> fetch_assoc()) {

			array_push($arrayPhpR, $row["RegistrationNum"]);
			array_push($arrayPhpN, $row["Name"]);
			$counter+=1;
		}
	}
	else {
		echo "Zero Results";
	}

	$i=0;
	for($i=0;$i<$counter;$i++){
		echo '<a href="main3.php?RegistrationNum='.$arrayPhpR[$i].'">';
		?>
			<div class="cardResult">
				<?php 
				echo "Registration Number: ".$arrayPhpR[$i];
				echo "<br>Name: ".$arrayPhpN[$i];
				?>
			</div>
		</a>
		<?php
	}

	// $_SESSION["arrayOfPhpR"]
	$_SESSION["arrayOfPhpR"] = $arrayPhpR;
?>
<!-- <a href="main3.php">
			<div class="cardResult">
				Registration Number: 
				<?php 
				// echo $row["RegistrationNum"];
				// array_push($arrayPhp, $row["RegistrationNum"]);
				?>
				<br>Name: 
				<?php

				// echo $row["Name"];
				// $_SESSION["name2"] = $row["Name"];
				?>
			</div>
		</a> -->



</body>
</html>