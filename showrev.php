<?php
    session_start();

    include 'dblink.php';
    connectDB();
    
    $id = $_GET["id"];
    $_SESSION['id'] = $id;
    
    

    $ema=mysqli_query($accs,"select email from reviewrs");
    $em=mysqli_fetch_array($ema, MYSQLI_ASSOC);
    $emai=$em['email'];
    // echo $emai;
    

    

    $res = mysqli_query($accs,"select avg(rating) from comments where movies_id like '$id';");
    $res = mysqli_fetch_array($res, MYSQLI_ASSOC);
    $rat = $res['avg(rating)'];
    $rati = intval($rat);

    $res = mysqli_query($accs, "select * from movies where ID like '%$id%'");
    $res = mysqli_fetch_array($res, MYSQLI_ASSOC);
    $title = $res['title'];
    
    $tit=mysqli_query($accs, "select trailer from movies where ID like '%$id%'");
    $tit = mysqli_fetch_array($tit, MYSQLI_ASSOC);
    $trail = $tit['trailer'];

?>

<html>
    <head>
        <title> welcome </title>
        <link rel="stylesheet" type="text/css" href="main.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
        <link href="https://fonts.googleapis.com/css?family=Krub|Mali|Lobster" rel="stylesheet">
    
           
        
</head>
    <body>
        
    
        <div id='title'> <?php echo $title ?> </div>
        <div id='rat'> <?php echo $rat ?>/5 </div>
       
        <div id='tr'><?php echo $trail ?> </div>
        <div id="commse">
            <img src="images/<?php echo $id.'.jpg'?>"class="pc">

       
            
        
        <?php
                 $que = mysqli_query($accs,"select description from movies where id like $id;");
                 $num_rows = mysqli_num_rows($que);
                 while($row= mysqli_fetch_array($que)){
                     $de=$row['description'];
                     echo $de."<br>";
                 }
            ?>
          </div> 

        <div class="rating">
                
          <?php

            for($i=1; $i<=5; $i++) {
                if($i<=$rati) {
                    // echo "<a class='chk' href='star.php?st=$i'>⭐</a>";
                    echo "<a class='chk' href='#'>⭐</a>";

                } else {
                echo "<a class='' href='#'>⭐</a>";
                }
            }

        ?>



<!-- <a class="chk" href="star.php?st=1">⭐</a>
<a class="chk" href="star.php?st=2">⭐</a>
<a class="chk" href="star.php?st=3">⭐</a>
<a class="chk" href="star.php?st=4">⭐</a>
<a class="chk" href="star.php?st=5">⭐</a> -->
</div> 
          
        <?php 
              $cz = "";
             $usr = $_SESSION['username'];
             $que = mysqli_query($accs, "select rating from comments where name = '$usr' AND movies_id = '$id';");
             $num_rows = mysqli_num_rows($que);
            
             if($num_rows!=0) {
                 $cz = "hide";
             } 
        ?>
        <div class="<?php echo $cz ?>">
            <h1>Give your review</h1>
            <form action="comments.php" method="post">

            <?php 
            $nm = $_SESSION['username'];
            echo "<div class='nmm'>USER: $nm</div><br>";?>
            <textarea name="comment" placeholder="comment here" cols="50" rows="2"></textarea>
            <br>
            <div class="nmmm">Select rating &nbsp;&nbsp;</div>
            <select name="ratx">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            <input type="submit" name="" value="Post">
            </form>
        </div>
        
    
    <h2>User Reviews</h2>
        </body>
</html>

<?php


$res = mysqli_query($accs,"select * from comments where movies_id like $id;");

//$des = mysqli_query($accs,"select description from movies where movies_id like $id;;");
// $res = mysqli_fetch_array($res, MYSQLI_ASSOC);

while($row=mysqli_fetch_array($res)){
    $name = $row['Name'];
    $comm = $row['comments'];
   
    echo "<div class='ank'><b>$name</b>: $comm</div><br>";
   // echo "$des";

}
?>
