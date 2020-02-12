<!-- 8919927199
sujan emc -->

<!DOCTYPE html>
<html>
<head>
	<title>Results</title>
	<link rel="stylesheet" type="text/css" href="style_loginPage.css">
</head>
<body>

	<?php
	include 'database_connect.php';
	include 'header.php';
	session_start();


		$regNum = $_POST["regNumber"];
		$name = $_POST["Namee"];
		$q1 = $_POST["ques1"];
		$q2 = $_POST["ques2"];
		$q3 = $_POST["ques3"];
		$q4 = $_POST["ques4"];
		$q5 = $_POST["ques5"];
		$q6 = $_POST["ques6"];
		$q7 = $_POST["ques7"];
		$q8 = $_POST["ques8"];
		$q9 = $_POST["ques9"];
		$q10 = $_POST["ques10"];
		$q11 = $_POST["ques11"];
		$q12 = $_POST["ques12"];
		$q13 = $_POST["ques13"];
		$q14 = $_POST["ques14"];
		$q15 = $_POST["ques15"];
		$q16 = $_POST["ques16"];
		$q17 = $_POST["ques17"];
		$q18 = $_POST["ques18"];
		$q19 = $_POST["ques19"];
		$q20 = $_POST["ques20"];

		$sql = "INSERT INTO questions (RegistrationNum, Name, q1, q2, q3, q4, q5, q6, q7, q8, q9, q10, q11, q12, q13, q14, q15, q16, q17, q18, q19, q20) VALUES ('".$_POST["regNumber"]."' , '".$_POST["Namee"]."' , '".$_POST["ques1"]."', '".$_POST["ques2"]."', '".$_POST["ques3"]."', '".$_POST["ques4"]."', '".$_POST["ques5"]."', '".$_POST["ques6"]."', '".$_POST["ques7"]."', '".$_POST["ques8"]."', '".$_POST["ques9"]."', '".$_POST["ques10"]."', '".$_POST["ques11"]."', '".$_POST["ques12"]."', '".$_POST["ques13"]."', '".$_POST["ques14"]."', '".$_POST["ques15"]."', '".$_POST["ques16"]."', '".$_POST["ques17"]."', '".$_POST["ques18"]."', '".$_POST["ques19"]."', '".$_POST["ques20"]."')";
// mysqli_query($conn, $sql)
// $connect->query($sql)

		if(mysqli_query($connect, $sql)) {
			echo "New Record created Successfully<br>";
		}

		else {
			echo "Error: ".$sql."<br>".$connect->error;
		}

		$connect->close();
		// echo "The results of the questions are as follows: <br>$q1<br>$q2<br>$q3<br>$q4<br>$q5."

		echo 'Your Submittion is recorded.<br><button><a href="main1.php">Click here for HOME PAGE</a></button>';
	?>

</body>
</html>