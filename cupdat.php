<?php
	session_start();
	$_SESSION['jid'] = $_GET['ji'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Update details</title>
	<style type="text/css">
		body
		{
			margin: 0;
			padding: 0;
			background-image: url(image/home.jpg);
		}
		.dg
		{
			width: 450px;
			height: 550px;
			background:#000;
			color: #fff;
			left:30%;
			position: absolute;
			opacity: .9;
			font-size: 28px;

		}

		h1
		{
		     margin: 0; 
             color: white;
             background-color: rgb(2, 49, 15);
		}
		h2
		{
		     margin: 0;
             color: black;
             background-color: yellow;
             text-align: center;
             opacity: .7;
		}
		.jb input
		{
			
			height: 30px;
			width: 400px;
			font-size: 18PX;
            color: red;
            display: block;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
		}
		textarea
		{
			margin-left: 20px;
			text-align: center;
			font-size: 16PX;
			color: red;
		}
		.jb button
		{
			margin-left: 32%;
			background-color: gray;
			height: 40px;
			width: 140px;
		}
		button a
		{
			background-color: red;
			width: 100px;
			color: #fff;
			font-size: 18px;

		}
		.jb input[type="submit"]
		{
			width: 100px;
			color: #fff;
			background-color: red;
			font-size: 20px;
		}
	</style>
</head>
<body>
	<h1> <marquee> WELCOME TO ONLINE MOBILE RATING. </marquee></h1>
	<h2>UPDATE PHONE DETAILS HERE</h2>
	<div class="dg">
	<form action="cupdate.php" method="POST"autocomplete=off>
	<div class="jb">

		<p><input type="text" name="title" value="<?php echo $_GET['t'] ?>" required ></p>
		<p><input type="year" name="year" value="<?php echo $_GET['r'] ?>" required ></p>
		<p><textarea name="description" id="text" cols="43" rows="10" value="<?php echo $_GET['d'] ?>" required></textarea></p>
		<p><input type="text" name="link" value="<?php echo $_GET['tr'] ?>" required ></p>
		<button><input type="submit" name="update" value="UPDATE"></button>
	</div>
	</form>
	</div>
</body>
</html>