
<html>
<head>
<title>cancel</title>
</head>
<body background="images/disback.jpg" class="text-center">
  <link href="css/bootstrap.min.css" rel="stylesheet">
<form name="f1" method="get" action="deltrain.php">
  <center>  <h1 class="text-center display-1 " > CANCEL YOUR TICKET</h1><br><br></center>  
<div align="center" > <font size="+3" color="#000033" >  BOOKING ID </font> <input type="number" name="t1" ><br><br>
  <button type="submit" class="btn btn-primary btn-lg">SUBMIT</button><br><br>


</form>





<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bharat";
$bid =$_GET["t1"]; 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to delete a record
$sql = "DELETE FROM book_train WHERE book_id= ".$bid." ";

if ($conn->query($sql) === TRUE) {
    echo "<font size=+3>Ticket cancelled successfully.<br>";
} else {
    echo "Error cancelling your ticket: " . $conn->error;
}

$conn->close();
?>

<a href="cover1.html" class="btn btn-outline-primary">Back to cover </a>
</html>