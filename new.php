
<html>
<head>
<style>
    p{
        text-decoration: none;
            color: black;
            margin-top:25px;
            float: right;
            margin-right: -390px;
            font-size: 210%;
            font-family: 'Mali';
            transition: color 0.5s;
    }
  .trend{
            padding-top:2%; 
            text-decoration: none;
            color: blue;
            margin-top:85px;
            float: right;
            margin-right: -240px;
            font-size: 210%;
            font-family: 'Mali';
            transition: color 0.5s;
        }
        trend: hover{
            color:blue;
        }
        h3{
            margin-top:10%; 
            float:left;
            margin-left: 7%;
            font-size:195%;
        }
        .upc{
            margin-top:13%;
            float:left;
            margin-left:-13%;
        }
        h2
        {
            margin: 0;
            background-color: black;
            color: white;
            text-align: center;
            margin-top:3%;
           
        }
       

</style>
<meta charset="utf-8">
<link rel="stylesheet" href="sty.css">
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</head>
<body>
<h1> <marquee> welcome to movie rating website </marquee> </h1>
<h2><a style="margin: 0% 25% 0% 0%" href="profile.php"><img src=""></a><a style="margin: 0% 0% 0% 25%" href="logout.php"><img src=""></a></h2>

<div class="dropdown">
  <button class="dropbtn">T V R</button>
  <div class="dropdown-content">
    <a href="#">home</a>
    <a href="#">movies</a>
    <a href="#">TV shows</a>
    <a href="Admin/login.html">admin login</a>
  </div>
</div>

<div class="slider">
        <div class="ph">
	       <img src="images/19.jpg">
           <img src="images/2.jpg">
           <img src="images/32.jpg">
           <img src="images/7.jpg">	
        </div>
    </div>
<table>

<div class="search-box">

<form action="dbfetch.php" method="POST">
    <input class="search-txt" type="text" name="mov" placeholder="search here">
    <input type="submit" value="search">
</form>
<!-- <a class="search-btn" href="#"> -->
<!-- <i class="fas fa-search"></i> -->
</a>
</div>
</table>
<h3>upcoming movies:</h3><br>
<div class="upc">
<a href="showrev.php?id=109" ><img src="images/109.jpg" width="150" height="150"></img>
<a href="showrev.php?id=4" ><img src="images/4.jpg" width="150" height="150"></img>
<a href="showrev.php?id=4" ><img src="images/4.jpg" width="150" height="150"></img>
<a href="showrev.php?id=4" ><img src="images/4.jpg" width="150" height="150"></img>
    </div>
<div class="vl">
<p>Now Playing(Box Office)</p>
<div class="trend">
<a href="showrev.php?id=106">RAW</a><br>
<a  href="showrev.php?id=107">sui-dhaaga</a><br>
<a  href="showrev.php?id=108">venom</a>

</div>
</div>

</body>
	
</html>
<?php
    session_start();
    include 'dblink.php';
    connectDB();
    
    

   
   
    $res = mysqli_query($accs,"select trailer from movies where released_year<2016 limit 3;");

//$des = mysqli_query($accs,"select description from movies where movies_id like $id;;");
// $res = mysqli_fetch_array($res, MYSQLI_ASSOC);

while($row=mysqli_fetch_array($res)){
   $tral = $row['trailer'];
   $_SESSION['tral'] = $tral;
    // echo "<p><b>$tral</b>: </p><br>";
}


    
    

    // $m = "select trailer from movies limit 3 ";
    // $tra=mysqli_query($accs,$m );
    // $tra1 = mysqli_fetch_array($tra, MYSQLI_ASSOC);
    // echo $tra1['trailer'];
   


?>
 <!-- <div id='fro'> <?php echo $tra1?> </div> -->


<html>
<head>
<style>

</style>
</head>
<body>





</body>
</html>





