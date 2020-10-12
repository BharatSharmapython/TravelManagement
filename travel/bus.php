
<html>
<head>
<title>book</title>
</head>
<body>
<main role="main" class="inner cover" style="text-align:center">
<div class=container4>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <body background="images/bus1.jpg" class="text-center">

</div>
</body>



<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = new mysqli("localhost", "root", "", "bharat");
$id = $_GET["t1"];
$tid = $_GET["t2"];
$bid = (rand(2000,20000));

// Attempt insert query execution
$sql = "INSERT INTO book_bus ( c_id , b_id, book_id) VALUES
            ( '$id' , '$tid' ,'$bid')";


if($link-> query($sql) == TRUE)
{
    
	echo "<font size=+3>Congratulations!! ticket booked<br> Your booking id=".$bid."<br>" ;
    echo '<a href="http://localhost/travel/buspayment.html" class="btn btn-outline-danger">MAKE PAYMENT</a>';
} 
else
{
    echo "<font size=+3>FAILED!!<br> PLEASE TRY AGAIN <br><br>";
   
    echo '<a href="http://localhost/travel/bus.html" class="btn btn-outline-danger">TRY AGAIN</a>';
    echo '<a href="http://localhost/travel/cover1.html" class="btn btn-outline-danger">BACK TO COVER</a>';
  }
// Close connection
?>


</html>