<?php
		// include 'database_connect.php';
		session_start();
		$_SESSION["regNum"] = "16bce0000";
		$_SESSION["studName"] = "abcD";
		?>

<!DOCTYPE html>
<html>
<head>
	<title>Quiz Main Page</title>
	<link rel="stylesheet" type="text/css" href="style_loginPage.css">
	<style type="text/css" >
		body {
			margin: 0;
		}
		.main_content, .main_content2, .main_content3 {
			text-align: center;
			background-color: #ddd;
			padding: 40px 0 60px 0;

		}
		.main_content h1, .main_content2 h1, .main_content3 h1 {
			font-size: 50px;

		}
		.main_content input, .main_content2 input {
			padding: 20px;
			font-size: 45px;
			border: 0px;
			border-radius: 4px;
			margin-right: 10px;
			margin-left: 10px;
		}

		.main_content2 {
			background-color: #aaa;
			font-size: 35px;
		}

		.main_content3 ol {
			list-style-type: none;
		}
		.main_content3 ol li:hover {
			cursor: pointer;
			background-color: pink;
			transition: 0.2s;
		}
		.main_content3 .cardStyle {
			padding: 20px;
			margin: 0px;
			font-size: 30px;
			border-radius: 6px;
			display: inline-block;
		}
		.main_content3 .cardStyle:hover {
			background-color: white;
			transition: 0.25s;
		}
		.main_content3 .cardStyle div {
			display: inline-block;
			float: left;
			width: 100%;
		}
		.faceInfo {
			/*text-align: center;*/
/*			padding: 0px;
			background-color: #e3e3e3;
			font-weight: bold;
			margin: 0;*/

		}
		.faceInfo .subjectInfo {
			/*padding: 0;*/
			float: left;
			margin-left: 15%;
			padding: 10px 30px;
		}
		.faceInfo .StudentInfo {
	/*		padding: 0;*/
			float: right;
			margin-right: 15%;
			padding: 10px 30px;
		}


		.questionSec {
			text-align: center;
		}
		.ques {
			border-radius: 10px;
			text-align: left;
			width: 80%;
			margin-left: 10%;
			transition: 0.2s;
			margin-top: 25px;
			margin-bottom: 20px;
			box-shadow: 5px 5px 18px #888888;
			/*background-color: red;*/
/*			border: 1px transparent;*/
		}

		.ques h4 {
			margin:0;
			padding: 10px 40px;
			font-size: 25px;
			color: #333;
			background-color: #e3e3e3;
		}

		.ques p {
			margin: 0;
			text-align: center;
			padding: 10px 40px;
			font-size: 20px;
			background-color: #f8f8f8;
			border-radius: 0px 0px 7px 7px; 
		}
		.ques textarea {
			width: 80%;
			border-radius: 10px;
		}
		.ques:hover {
			/*transition: 0.2s;*/
			/*border: 1px solid #333;*/
			cursor: pointer;
		}
	</style>
</head>
<body>

	<div class="header">
		<a href="#default" class="logo">Firm's Logo</a>
		<div class="header-right">
			<a class="active" href="quizPage.php">Quiz Page</a>
			<a href="#">Details of Service</a>
			<a href="#About Us">About Us</a>
			<a href="#About">User</a>
		</div>
	</div>
<!-- <br> -->
	<!-- <div class="faceInfo">
		<div class="subjectInfo">
			Name of the subject: Database Management System
			<br>
			Course Code: CSE10XX
		</div>
		<div class="StudentInfo">
			Name of Student: XYZ
			<br>
			Registration Number: 16BCE10XX
		</div>
	</div> -->
<!-- <br> -->
<!-- <br>
<br> -->
	<div class="questionSec">
		<form action="result.php" method="post">

			<div class="ques" style="text-align: center;padding: 25px 0px;font-size: 30px;">
				Name of the subject: Database Management System
					<br>
				Course Code: CSE10XX
			</div>

			<div class="ques" style="text-align: center;padding: 25px 0px">
				Name of the Student: <input style="font-size: 25px;border-radius: 5px;" type="text" name="Namee">
				<br>
				Registration Number: <input style="font-size: 25px;border-radius: 5px;" type="text" name="regNumber">
			</div>

		<div class="ques">
		<h4>
			Question 1: Question content...ABC...ABC...
		</h4>
		<p>
			<textarea rows="10" columns="150" name="ques1"></textarea>
		</p>
		</div>

		<div class="ques">
			<h4>Question 2: Question content...ABC...ABC...</h4>
		<p>
			<textarea rows="10" columns="150" name="ques2"></textarea>
		</p>
		</div>

		<div class="ques">
			<h4>Question 3: Question content...ABC...ABC...</h4>
		<p>
			<textarea rows="10" columns="150" name="ques3"></textarea>
		</p>
		</div>

		<div class="ques">
			<h4>Question 4: Question content...ABC...ABC...</h4>
		<p>
			<textarea rows="10" columns="150" name="ques4"></textarea>
		</p>
		</div>

		<div class="ques">
			<h4>Question 5: Question content...ABC...ABC...</h4>
		<p>
			<textarea rows="10" columns="150" name="ques5"></textarea>
		</p>
		</div>

		<div class="ques">
			<h4>Question 6: Question content...ABC...ABC...</h4>
		<p>
			<textarea rows="10" columns="150" name="ques6"></textarea>
		</p>
		</div>

		<div class="ques">
			<h4>Question 7: Question content...ABC...ABC...</h4>
		<p>
			<textarea rows="10" columns="150" name="ques7"></textarea>
		</p>
		</div>

		<div class="ques">
			<h4>Question 8: Question content...ABC...ABC...</h4>
		<p>
			<textarea rows="10" columns="150" name="ques8"></textarea>
		</p>
		</div>

		<div class="ques">
			<h4>Question 9: Question content...ABC...ABC...</h4>
		<p>
			<textarea rows="10" columns="150" name="ques9"></textarea>
		</p>
		</div>

		<div class="ques">
			<h4>Question 10: Question content...ABC...ABC...</h4>
		<p>
			<textarea rows="10" columns="150" name="ques10"></textarea>
		</p>
		</div>

		<div class="ques">
			<h4>Question 11: Question content...ABC...ABC...</h4>
		<p>
			<textarea rows="10" columns="150" name="ques11"></textarea>
		</p>
		</div>

		<div class="ques">
			<h4>Question 12: Question content...ABC...ABC...</h4>
		<p>
			<textarea rows="10" columns="150" name="ques12"></textarea>
		</p>
		</div>

		<div class="ques">
			<h4>Question 13: Question content...ABC...ABC...</h4>
		<p>
			<textarea rows="10" columns="150" name="ques13"></textarea>
		</p>
		</div>

		<div class="ques">
			<h4>Question 14: Question content...ABC...ABC...</h4>
		<p>
			<textarea rows="10" columns="150" name="ques14"></textarea>
		</p>
		</div>

		<div class="ques">
			<h4>Question 15: Question content...ABC...ABC...</h4>
		<p>
			<textarea rows="10" columns="150" name="ques15"></textarea>
		</p>
		</div>

		<div class="ques">
			<h4>Question 16: Question content...ABC...ABC...</h4>
		<p>
			<textarea rows="10" columns="150" name="ques16"></textarea>
		</p>
		</div>

		<div class="ques">
			<h4>Question 17: Question content...ABC...ABC...</h4>
		<p>
			<textarea rows="10" columns="150" name="ques17"></textarea>
		</p>
		</div>

		<div class="ques">
			<h4>Question 18: Question content...ABC...ABC...</h4>
		<p>
			<textarea rows="10" columns="150" name="ques18"></textarea>
		</p>
		</div>

		<div class="ques">
			<h4>Question 19: Question content...ABC...ABC...</h4>
		<p>
			<textarea rows="10" columns="150" name="ques19"></textarea>
		</p>
		</div>

		<div class="ques">
			<h4>Question 20: Question content...ABC...ABC...</h4>
		<p>
			<textarea rows="10" columns="150" name="ques20"></textarea>
		</p>
		</div>

		

		<input type="submit" value="SUBMIT!!">
	</form>
</div>

<!-- 	<div class="main_content">

	<h1>Location</h1>
	<form>
	<input type="text" placeholder="Enter location details">
	<input type="submit" name="submit" value="Locate">	
	</form>
		
	</div>

	<div class="main_content2">
		<h1>Kind of Healthcare Services required:</h1>
		<form>
			<input type="checkbox" name="service1" value="service1">Service1<br>
			<input type="checkbox" name="service2" value="service2">Service2<br>
			<input type="checkbox" name="service3" value="service3">Service3<br>
			<input type="checkbox" name="service4" value="service4">Service4<br><br>
			<input type="submit" value="Submit">
		</form>
		<h3>Submit & Help us find best <br>healthcare Services for you!!</h3>
	</div>

	<div class="main_content3">
		<h1>List of Healthcare faculty & facilities available at best:</h1>

		<ol>
			<li class="cardStyle">
				
				<img src="cm.jpg" width="100" height="100" style="border-radius: 100%; "> 
				<div style="float: left">Healthcare Service CARD 1</div>
				<div style="float: right;">Rating: 5 Star</div>
				<br>
				<div> Brief Description</div>
			</li>
			<br>
			<li class="cardStyle">
				
				<img src="cm.jpg" width="100" height="100" style="border-radius: 100%; "> 
				<div style="float: left">Healthcare Service CARD 2</div>
				<div style="float: right;">Rating: 5 Star</div>
				<br>
				<div> Brief Description</div>
			</li>
			<br>
			<li class="cardStyle">
				
				<img src="cm.jpg" width="100" height="100" style="border-radius: 100%; "> 
				<div style="float: left">Healthcare Service CARD 1</div>
				<div style="float: right;">Rating: 5 Star</div>
				<br>
				<div> Brief Description</div>
			</li>
			<br>
			<li class="cardStyle">
				
				<img src="cm.jpg" width="100" height="100" style="border-radius: 100%; "> 
				<div style="float: left">Healthcare Service CARD 1</div>
				<div style="float: right;">Rating: 5 Star</div>
				<br>
				<div> Brief Description</div>
			</li>
			<br>
			<li class="cardStyle">
				
				<img src="cm.jpg" width="100" height="100" style="border-radius: 100%; "> 
				<div style="float: left">Healthcare Service CARD 1</div>
				<div style="float: right;">Rating: 5 Star</div>
				<br>
				<div> Brief Description</div>
			</li>
			<br>
		</ol>
	</div> -->

	<!-- Footer  -->
	<div style="height: 200px;color: white;background-color: black;float: left;width: 100%">
		Space for footer
	</div>

</body>
</html>