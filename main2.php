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
	$arrayPhp = array("xxx");

	$sql = "select RegistrationNum, Name from questions";
	$result = $connect->query($sql);

	if($result->num_rows > 0) {
		while($row = $result-> fetch_assoc()) {
			?>

			<a href="main3.php">
			<div class="cardResult">
				Registration Number: 

				<?php echo $row["RegistrationNum"];
				array_push($arrayPhp, $row["RegistrationNum"]);
				// $_SESSION["regNum2"] = $row["RegistrationNum"];

				?>

				<br>Name: 
				<?php

				echo $row["Name"];
				// $_SESSION["name2"] = $row["Name"];
				?>
			</div>
		</a>
		<?php
		$_SESSION["arrayOfPhp"] = $arrayPhp;
			// Registration Number: ".$row["RegistrationNum"]."<br>Name: ".$row["Name"]."<br>";
		}
	}
	else {
		echo "0 Results";
	}

?>

</body>
</html>