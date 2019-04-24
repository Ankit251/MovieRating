<!DOCTYPE html>
<?php
    include 'dblink.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $mov = $_POST["mov"];
        connectDB();
        $query = mysqli_query($accs,"select * from movies where title like '%$mov%' or released_year like '%$mov%'");
        $num_rows = mysqli_num_rows($query);
    }

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Krub|Mali|Lobster" rel="stylesheet">

    <title>Search results</title>

    <style>

        h2 {
            margin-top: -9px;
            font-family: 'Lobster';
            font-weight: lighter;
            font-size: 250%;
            margin-bottom: 70px;
        }
        body {
            background: #000;
            color: #fff;
            padding: 10px;

        }

        a {
            text-decoration: none;
            color: #f5f5f5;
            margin-top:85px;
            float: right;
            margin-right: 280px;
            font-size: 210%;
            font-family: 'Mali';
            transition: color 0.5s;
        }

        a:hover {
            color: blue;

        }

        img {
            width: 350px;
            border-radius: 30px;
            margin-bottom: 30px;
            margin-left: 100px;
        }
    
    
    
    </style>
</head>
<body>
    <center><h2>Search results for <?php echo $mov; ?><h2></center>
    


<?php
    $i = 1;
    while($row= mysqli_fetch_array($query)){
        $id=$row['ID'];
        $title=$row['title'];
        $released_year=$row['released_year'];
        $genre=$row['genre'];
        echo "<img src='images/$id.jpg'>";
        echo "<a href='showrev.php?id=$id'>$i) $title [$released_year]</a>"."<br>";
        $i++;
    }
?>


</body>
</html>