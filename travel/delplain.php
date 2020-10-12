

<html>
        <head>
        <title>cancel</title>
        </head>
        <form name="f1" method="get" action="delplain.php">
                <body background="images/air.jpg" class="text-center">
                    <link href="css/bootstrap.min.css" rel="stylesheet">
                    <font color="red"><center>  <h1 class="text-center display-1 "> CANCEL YOUR TICKET</h1><br><br></center></font>  
        <div align="center"> <font size="+3" color="yellow"> BOOKING ID </font> <input type="number" name="t1" required><br><BR>
            <button type="submit" class="btn btn-primary btn-lg">SUBMIT</button><br><br>
        </form>
        </head>
        
        
        

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bharat";
$tno =$_GET["t1"]; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to delete a record
$sql = "DELETE FROM book_plane WHERE book_id= ".$tno." ";

if ($conn->query($sql) === TRUE) {
    echo "<font size=+3>Ticket cancelled successfully<br>";
} else {
    echo "font size=+3>Error cancelling ticket:<br>" . $conn->error;
}

$conn->close();
?>
            <a href="cover1.html" class="btn btn-outline-primary">Back To Cover</a>

</html>
