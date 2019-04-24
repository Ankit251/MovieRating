<?php
		session_start();
		$id = $_SESSION['jid'];	

		include 'dblink.php';
		
		$t = $_POST['title'];
		$y = $_POST['year'];
		$d = $_POST['description'];
		$l = $_POST['link'];

		if($t!="" && $y!="" && $d!="" && $l!="" )
		{
			$qu = "UPDATE mobile set title='$t', released_year='$y', description='$d', trailer='$l' where id = '$id' ";
			$data = mysqli_query($con, $qu);
			header("Location: cdetail.php");
		 	if($data)
		 	{
		 		echo "<script>alert('Job updated successfully')</script>";
		 	}
		 	else
		 	{
		 		echo "<script>alert('Job not updated')</script>";
		 	}
		}
		else
		{
			echo "<script>alert('All fields are required')</script>";
		}
?>