<?php

session_start();
header('location:postphone.html');

include 'dblink.php';


if($_POST['submit'])
{
	$t = $_POST['title'];
	$y = $_POST['year'];
	$g = $_POST['genre'];
	$d = $_POST['description'];
	$l = $_POST['link'];
	if($t!="" && $y!="" && $g!="" && $d!="" && $l!="" )
	{
		$query = "insert into movies(title,released_year,genre,description,trailer) values ('$t','$y','$g','$d','$l')";
		$data = mysqli_query($con, $query);

		if($data)
		{

			echo "<script> alert('data inserted into database')</script>";
		}

	}
	else
	{
		echo "<script> alert('All Fields Are Required')</script>";
	}


}

?>
