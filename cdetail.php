<?php
session_start();
include 'dblink.php';
$query = "select * from movies ";
$data = mysqli_query($con, $query);
$total = mysqli_num_rows($data);
?>

<!DOCTYPE html>
<html>
<head>
	<title>phone details</title>
	<style type="text/css">
        body
		{
			margin: 0;
			padding: 0;
			background-color: #ffebcd;
			background-size: cover;
			font-family: sans-serif;
		}

		h1
		{
		     margin: 0; 
             color: white;
             background-color:cadetblue;
		}
		h2
		{
		     margin: 0;
             color: white;
             background-color: black;
             text-align: center;
             opacity: .7;
		}
		tr
		{
			color: black;
		}
		th
		{
			color: white;
			background-color: darkgray;
		}
		tr td a
		{
			font-size: 18px;
			background-color: red;
			color: white;
		}
		button
		{
			background-color: green;
			height: 35px;
			width: 100%;
		}
		tr td a:hover
		{
			color: red;
			background-color: white;
			display: block;
		}
		
	</style>
</head>
<body>
	<h1> <marquee>	WELCOME TO ONLINE MOBILE RATING</marquee></h1>
	<h2>YOUR PHONE DETAILS HERE</h2>
	
	<table border="1">
		<tr>
			<th> ID</th>
			<th>Company Name</th>
			<th> Released year</th>
			<th> genre</th>
			<th>Description</th>
			<th>Trailer</th>
			<th colspan="2">OPERATIONS</th>
		</tr>
	

</body>
</html>


<?php
if($total !=0)
{
	while($result = mysqli_fetch_assoc($data))
	{
		echo "<tr>
			    <td>".$result['ID']."</td>
				<td>".$result['title']."</td>
				<td>".$result['released_year']."</td>
				<td>".$result['genre']."</td>
				<td>".$result['description']."</td>
				<td>".$result['trailer']."</td>
				<td><button><a href='cupdat.php?ji=$result[ID] & t=$result[title] & g=$result[genre] & r=$result[released_year] & d=$result[description] & tr=$result[trailer]' >Edit</a></button></td>
				<td><button><a href='cdelete.php?ji=$result[ID]' onclick ='return checkdelete()' >Delete</a></button></td>
		</tr>";
	}
}
else
{
	echo "No Record Found";
}


?>
</table>
<script>
	function checkdelete()
	{
		return confirm('Are you sure you want to Delete this data??');
	}
</script>