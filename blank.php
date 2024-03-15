<?php if (!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">	

	<title>Lesson - HTML Forms</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="author" content="Brayden Wong">

	<!-- link to font-awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- link to animate.css -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
	
	<!-- link to grid-styles sheet -->
	<link rel="stylesheet" href="section4/grid_styles.css">

	<!-- links to Google Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,100;1,300;1,400&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Delius&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=McLaren&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Bitter:ital@1&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Young+Serif&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Bitter:ital,wght@1,500&display=swap" rel="stylesheet">

	<!-- links to Favicon-->
	<link rel="shortcut icon" href="../images/Defaultfavicon.png"/>

	<!-- link to style sheet -->
	<link rel="stylesheet" href="blank.css">

	<style>
		body {
			background: url("https://intrans.iastate.edu/app/uploads/2019/10/trains_history_cover.jpg");
			background-size: cover;
			background-attachment: fixed;
		}

		td {
			font-family: 'Rubik Bubbles', sans-serif;
			color: ;
			font-size: 34px;
		}

		h1 {
			font-family: 'Nova Square';
			color: 	#c78168;
			font-size: 50px;
			text-decoration: underline;
			background: #e3dfd1;
		}

		h2 {
			font-family: 'Play', sans-serif;
			color: #005F6A;
		}

		p {
			font-family: 'Play', sans-serif;
			color: black;
		}

		table {
			background: lightgrey;
			font-family: 'Nova Square';
			margin-left: 5px;
			margin-right: 5px;
			margin-bottom: 5px;
			width: auto;
			height: auto;
		}

		a:link, a:visited, a:active {
			background: none;
			text-decoration: none;
			color: blue;
		}

		#container {
			background: #bfab97;
		}

		.box {
			background: url("../images/download.jpeg");
			background-size: cover;
			background-attachment: fixed;
		}

		.equation {
			border: 3px solid #FF3131;
			border-radius: 0.5em;
			padding: 9px;
			margin-top: 10px;
			color: #ffa371;
			background-color: lightgrey;
		}

		.form {
			color: #87684c;
			background-color: #e3dfd1;
		}
		}
	</style>
	
</head>
<body>
	<a href= "https://icsprogramming.ca/2023-2024/wongcf404" class="home"><i class="fa-solid fa-house-chimney"></i></a>
	<div id="container">
		<h1>Template Code</h1>

		<div class="grid">
			<div class="col-span-12">
				<div class="box animate__animated animate__bounceInDown"?>
					<h2>Description of Activity</h2>
					<p>Description</p>
					<img src="" title="" alt="">
					<h2>Instructions of Use</h2>
				</div>
			</div>
			<div class="col-span-6">
				<div class="box animate__animated animate__bounceInLeft"?>
					<?php
						if ($_POST['subButton']) {

							$day = $_POST['day'];
							}
					?>

					<form name="form1" action="" method="post" class="form animate__animated animate__jackInTheBox">
						<h2>Test Form</h2>
						<!-- text input //-->
						First Name<br  /><input type="text" name="fname" value="" placeholder="FIRST NAME" class="input"></input>
						<hr size="1" />
						
						<!-- password input //-->
						Password<br  /><input type="password" name="pwd" value="" class="input"></input>
						<hr size="1" />
						
						<!-- radio input //-->
						<input type="radio" name="sex" value="male" class="input" checked> Male</input><br />
						<input type="radio" name="sex" value="female" class="input"> Female</input>
						<hr size="1" />
						
						<!-- checkbox input //-->
						<input type="checkbox" name="fruit1" value="Pear" class="input"> I have a pear</input><br />
						<input type="checkbox" name="fruit2" value="Apple" class="input"> I have an apple</input>
						<hr size="1" />
						
						<!-- simple drop-down list //-->
						<select name="car" class="frmInput">
							<option value="">- Choose a Car -</option>
							<option value="Volvo">Volvo</option>
							<option value="Echo">Echo</option>
							<option value="Ferrari">Ferrari</option>
							<option value="Audi">Audi R8</option>
							<option value="Ford">Ford Truck</option>
						</select>
						<hr size="1" />
						
						<!-- textarea input //-->
						<textarea name="info" rows="5" cols="50" class="Input"></textarea>
						<hr size="1" />
						
						<!-- hidden input -->
						<input type="hidden" name="hideme" value="42" class="input"></input>
						
						<!-- submit button //-->
						<input type="submit" name="subButton" value="SUBMIT" class="normSubBtn"></input>
					</form>
				</div>
			</div>
			<div class="col-span-6">
				<div class="box"?>
					<table border="1" cellspacing="0" cellpadding="0" width="600" height="500" align="center">
						<tr>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/marking-rubric/turn-work-in.inc.php"; ?>
</body>
</html>